// $(document).ready(function(){
// 	$('#nav-icon3').click(function(){
// 		$(this).toggleClass('open');
//     function myFunction() {
//       var x = document.getElementById("myTopnav");
//       if (x.className === "nav") {
//           x.className += " responsive";
//       } else {
//           x.className = "nav";
//       }
//   }
// 	});
// });
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
        x.className=="icon";
    }
}
