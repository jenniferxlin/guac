$('.featured-edit').click(function() {
    if($(this).hasClass('featured-selected')) {
        $(this).removeClass('featured-selected');
        var id = $(this).attr('data-id');
        console.log(id);
        $('#'+id).attr('checked', false);
    }
    else {
        $(this).addClass("featured-selected");
        var id = $(this).attr("data-id");
        $("#"+id).attr("checked", true);
    }
});