<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Guide;
use App\GuideItem;
use App\Region;
use App\Country;
use App\Category;

class GuideController extends Controller
{
    
    /**
     * Displays the list of city guides.
     *
     */
     public function guides() {
        $guides = Guide::all();
        return view('guides', ['guides' => $guides]);
     }

     /**
     * Displays a single city guide.
     *
     */
     public function guide($id) {
        $guide = Guide::find($id);
        $next = Guide::next($guide->created_at)->first();
        $prev = Guide::prev($guide->created_at)->first();
        $countries = Country::all();
        $regions = Region::all();
        $categories = Category::all();
        return view('guide', [
            'guide' => $guide,
            'countries' => $countries,
            'regions' => $regions,
            'categories' => $categories,
            'next' => $next ? $next->id : '',
            'prev' => $prev ? $prev->id : ''
        ]);
     }

     /**
     * Displays the page for editing a city guide.
     *
     */
     public function showEdit($id) {
        $guide = Guide::find($id);
        $regions = Region::all();
        $countries = Country::all();
        $categories = Category::all();
        return view('guide_edit', [
            'guide' => $guide,
            'regions' => $regions,
            'countries' => $countries,
            'categories' => $categories
        ]);
     }

     /**
     * Edits the city guide.
     *
     */
     public function edit(Request $request, $id) {
        $guide = Guide::find($id);
        $guide->summary = $request->summary;
        $guide->title = $request->title;
        $guide->issue = $request->issue;
        $guide->region_id = $request->region ?: 1;
        $guide->country_id = $request->country;
        $guide->image = asset($request->image);
        $guide->save();
        session()->flash('success', "Guide $guide->title edited successfully!");
        return redirect()->route('guide', ['id' => $guide->id]);
     }

     /**
     * Displays the page for uploading a city guide.
     *
     */
     public function showUpload() {
        $guide = new Guide();
        $regions = Region::all();
        $countries = Country::all();
        $categories = Category::all();
        session()->flash('upload');
        return view('guide_edit', [
            'guide' => $guide,
            'regions' => $regions,
            'countries' => $countries,
            'categories' => $categories
        ]);
     }

     /**
     * Uploads a city guide.
     *
     */
     public function upload(Request $request) {
        $guide = new Guide();
        $guide->summary = $request->summary;
        $guide->title = $request->title;
        $guide->issue = $request->issue;
        $guide->region_id = $request->region;
        $guide->country_id = $request->country;
        $guide->image = asset($request->image);
        $guide->save();
        session()->flash('success', "Guide $guide->title successfully uploaded!");
        return redirect()->route('guide', ['id' => $guide->id]);
     }

     /**
     * Displays the page for editing a city guide item.
     *
     */
     public function showEditItem($id, $idd) {
        $guide = Guide::find($id);
        $guide_item = GuideItem::find($idd);
        $categories = Category::all();
        return view('guide_item_edit', [
            'guide' => $guide,
            'guide_item' => $guide_item,
            'categories' => $categories
        ]);
     }

     /**
     * Edits a city guide item.
     *
     */
     public function editItem(Request $request, $id, $idd) {
        $guide = Guide::find($id);
        $guide_item = GuideItem::find($idd);
        $guide_item->summary = $request->summary;
        $guide_item->name = $request->name;
        $guide_item->hours = $request->hours;
        $guide_item->location = $request->location;
        $guide_item->category_id = $request->category;
        $guide_item->image = asset($request->image);
        $guide->guide_items()->save($guide_item);
        $guide_item->save();
        return redirect()->route('guide', ['id' => $guide->id]);
     }

     /**
     * Removes a city guide item.
     *
     */
     public function removeItem(Request $request, $id, $idd) {
        $guide = Guide::find($id);
        $guide_item = GuideItem::find($idd);
        $guide_item->forceDelete();
        return "Hello";
        // return redirect()->route('guide', ['id' => $guide->id]);
     }

     /**
     * Upload a guide item to the guide given by $id.
     *
     */
     public function showUploadItem($id) {
        $guide = Guide::find($id);
        $guide_item = new GuideItem();
        $categories = Category::all();
        session()->flash('upload');
        return view('guide_item_edit', [
            'guide' => $guide,
            'guide_item' => $guide_item,
            'categories' => $categories
        ]);
     }

     /**
     * Upload a guide item to the guide given by $id.
     *
     */
     public function uploadItem(Request $request, $id) {
        $guide = Guide::find($id);
        $guide_item = new GuideItem();
        $guide_item->summary = $request->summary;
        $guide_item->name = $request->name;
        $guide_item->hours = $request->hours;
        $guide_item->location = $request->location;
        $guide_item->category_id = $request->category;
        $guide_item->image = asset($request->image);
        $guide->guide_items()->save($guide_item);
        $guide_item->save();
        return redirect()->route('guide', ['id' => $guide->id]);
     }

     /**
     * Gets the image URL and uploads it.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function getImage($request) {
        if($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('images');
            return $path;
        }
        else {
            return $request->original;
        }
    }

}
