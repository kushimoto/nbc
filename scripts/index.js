navListToggleFlag = 0;

function navListToggle () {

	if (navListToggleFlag == 1)
		return ;

	navListToggleFlag = 1;

	if ($(".m1").css("top") === "5px") {
		$(".m2").css("opacity", "0");
		$(".m1").css("top", "13px");
		$(".m1").css("transform", "rotate(45deg)");	
		$(".m3").css("top", "13px");
		$(".m3").css("transform", "rotate(-45deg)");	
		$("nav .nav-list").css("opacity", "1");
		$("nav .nav-list ul").css("height", "204px");
		$("nav .nav-list ul").css("transition", "height 0.3s");
		setTimeout(function() {
			$("nav .nav-list ul li").css("display", "list-item")
		}, 300);
		setTimeout(function() {
			$("nav .nav-list ul li").css("opacity", "1")
			navListToggleFlag = 0;
		}, 350);
	} else {
		$(".m2").css("opacity", "");
		$(".m1").css("top", "");
		$(".m1").css("transform", "");	
		$(".m3").css("top", "");
		$(".m3").css("transform", "");	
		$("nav .nav-list").css("opacity", "");
		$("nav .nav-list ul").css("height", "");
		setTimeout(function() {
			$("nav .nav-list ul").css("transition", "");
			navListToggleFlag = 0;
		}, 300);
		$("nav .nav-list ul li").css("display", "")
		$("nav .nav-list ul li").css("opacity", "")
	}
}

$(window).resize(function() {
	if ($(".m1").css("top") === "13px") {
		navListToggle();
	}
});

function securityWindowOpen(url, host) {
	win = window.open(url, host,"scrollbars=1,resizable=no,width=480,height=720");
}


