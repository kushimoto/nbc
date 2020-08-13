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
