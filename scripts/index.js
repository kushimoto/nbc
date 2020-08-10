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

$(function() {
	$('#open').validate({
		rules: {
			family_name: {
				required: true,
			},
			first_name: {
				required: true,
			},
			family_name_kana: {
				required: true,
				kana: true,
			},
			first_name_kana: {
				required: true,
				kana: true,
			},
			birthday: {
				required: true,
			},
			address: {
				required: true,
			},
			loginpw: {
				required: true,
			},
			loginpwr: {
				required: true,
				equalTo: 'input[name=loginpw]',
			},
			pin: {
				required: true,
				number: true,
				minlength: 4,
			},
			pinr: {
				required: true,
				equalTo: 'input[name=pin]',
			},
			email: {
				required: true,
			},
			IncDet: {
				required: true,
			},
		},
		messages: {
			family_name: {
				required: '<span class="warning">姓を入力して下さい</span>',
			},
			first_name: {
				required: '<span class="warning">名を入力して下さい</span>',
			},
			family_name_kana: {
				required: '<span class="warning">姓のふりがなを入力して下さい</span>',
			},
			first_name_kana: {
				required: '<span class="warning">名のふりがなを入力して下さい</span>',
			},
			birthday: {
				required: '<span class="warning">生年月日を入力して下さい</span>',
			},
			address: {
				required: '<span class="warning">住所２を入力して下さい</span>',
			},
			loginpw: {
				required: '<span class="warning">ログインパスワードを入力して下さい</span>',
				minlength: '<span class="warning">１０文字以上入力して下さい</span>',
			},
			loginpwr: {
				required: '<span class="warning">確認のため上記と同じ値を入力して下さい</span>',
				equalTo: '<span class="warning">入力に誤りがあります</span>',
			},
			pin: {
				required: '<span class="warning">４桁暗証番号を入力して下さい</span>',
				number: '<span class="warning">数字を入力して下さい</span>',
				minlength: '<span class="warning">暗証番号は４桁必要です</span>',
			},
			pinr: {
				required: '<span class="warning">確認のため上記と同じ値を入力して下さい</span>',
				equalTo: '<span class="warning">入力に誤りがあります</span>',
			},
			email: {
				required: '<span class="warning">メールアドレスを入力して下さい</span>',
				email: '<span class="warning">正しいメールアドレスを入力してください</span>',
			},
			InqDet: {
				required: '<span class="warning">問い合わせ内容を入力して下さい</span>',
				minlength: '<span class="warning">１０文字以上入力してください</span>',
			},
		},

	})
});

jQuery.validator.addMethod("kana", function(value, element) {
	    return this.optional(element) || /^([あ-ん]+)$/.test(value);
	    }, '<span class="warning">全角ひらがなを入力してください</span>'
);
