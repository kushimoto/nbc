<?php require "header.php" ?>
		<h3 class="form-title">お問い合わせフォーム</h3>
		<div class="form">
			<form id="open" method="POST" action="./open.php?opening_account=false&try=true">
				<div class="form-row">
					<p class="input-title">姓<span class="warning">*</span></p>
					<input class="form-input-text" type="text" name="family_name">
				</div>
				<div class="form-row">
					<p class="input-title">名<span class="warning">*</span></p>
					<input class="form-input-text" type="text" name="first_name">
				</div>
				<div class="form-row">
					<p class="input-title">姓(ふりがな)<span class="warning">*</span></p>
					<input class="form-input-text" type="text" name="family_name_kana">
				</div>
				<div class="form-row">
					<p class="input-title">名(ふりがな)<span class="warning">*</span></p>
					<input class="form-input-text" type="text" name="first_name_kana">
				</div>
				<div class="form-row">
					<p class="input-title">メールアドレス<span class="warning">*</span></p>
					<input class="form-input-text" type="email" name="email">
				</div>
				<div class="form-row">
					<p class="input-title">内容<span class="warning">*</span></p>
					<textarea class="form-textarea" name="InqDet" minlength="10"></textarea>
				</div>
				<div class="form-row">
					<input type="submit" class="form-btn next" value="確認">
				</div>
			</form>
		</div>

<?php require "footer.php" ?>
