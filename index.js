$(function(){

	$(".menu-toggle").click(function(){

        $(".menu-nav-items").toggle({
            slider:500,
		});
		
		$(".menu-nav-items li a").click(function(){
			$($this).hide();
		});
    
	});

	
	$("#orginisational-img").hover(function () {
		$("#organisationalevel").toggle({
			fade: 500
		});
	});

	$("#team-img").hover(function () {
		$("#teamlevel").toggle({
			fade: 500
		});
	});

	$("#individual-img").hover(function () {
		$("#individual-level").toggle({
			fade: 500
		});
	});

	$("#uploadcvbtn").click(function () {
		$("#form-upload").fadeToggle('speed');
	});

});$(function(){
	$('#nav p')
	.css({cursor: "pointer"})
	.on('click', function(){
  var txt =  $(this).text() == "MENU"?"CLOSE":"MENU";
  $(this).text(txt);
  $(this).next('ul').toggle();
});

});

$(document).ready(function(){

	        // Add active class to the current button (highlight it)
			var header = document.getElementById("navbarResponsive");
			var btns = header.getElementsByClassName("nav-link");
			for (var i = 0; i < btns.length; i++) {
				btns[i].addEventListener("click", function () {
					var current = document.getElementsByClassName("active");
					current[0].className = current[0].className.replace(" active", "");
					this.className += " active";
				});
			}

});




