// get positions elements

// var body = document.body,
//     html = document.documentElement,
//     footer = document.getElementById("footer-div").offsetHeight,
//     author = document.getElementById("author-div").offsetHeight;

// var height = Math.max(body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight);

// var endPos = height-footer-author;

$(window).scroll(function() {                  
    
    var currentScroll = $(window).scrollTop(); // get current position
    var next = $('.next');
    var prev = $('.prev');

    if (currentScroll >= $('.title-box').offset().top && currentScroll <= $('#author-div').offset().top) {  
        prev.css("visibility","visible");  
        next.css("visibility","visible"); 
        prev.fadeIn();
        prev.fadeIn("slow");
        prev.fadeIn(3000);  
        next.fadeIn();
        next.fadeIn("slow");
        next.fadeIn(3000); 
    } else {      
        prev.fadeOut();
        prev.fadeOut("slow");
        prev.fadeOut(3000);  
        next.fadeOut();
        next.fadeOut("slow");
        next.fadeOut(3000);                           
    }

});