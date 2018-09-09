<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Guide extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'title' => $this->title,
            'image' => $this->image,
            'issue' => $this->issue,
            'country' => new Country($this->country),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
