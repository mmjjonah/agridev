function csl($str){
	console.log($str);
}

$(".dropdown-toggle").click(function(){
	$(".dropdown-menu").hide();
	$(this).siblings('.dropdown-menu').slideToggle();
});

$("header").mouseleave(function() {
	$(".dropdown-menu").slideUp();
});

$("#map_mada path").hover(function(){
	$("#inp_search").val($(this).attr("region"));
	$("#inp_search").addClass("apercu");
});

$("#map_mada path").click(function(){
	$("#inp_search").attr("recherche", $(this).attr("region"));
	$("#map_mada path.active").removeClass("active");
	$(this).addClass("active");
});

$("#map_mada").mouseout(function(){
	$("#inp_search").val(($("#inp_search").attr("recherche")) );
	$("#inp_search").removeClass("apercu");
});

$("#btnPlus").click(function(){
	$(this).siblings('form').toggleClass("active");
	$(this).toggleClass("active");
});

$("#btnSelectImg").click(function(){
	$(this).siblings('input:hidden')[0].click();
});
