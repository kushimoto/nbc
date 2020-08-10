<?php require "./header.php" ?>
		<h3 class="form-title">ログイン</h3>
		<div class="form">
			<form id="open" method="POST" action="./open.php?opening_account=false&try=true">
				<div class="form-row">
					<p class="input-title">口座番号</p>
					<input class="form-input-text" type="text" name="account-num" placeholder="例) 1234567890">
				</div>
				<div class="form-row">
					<p class="input-title">ログインパスワード</p>
					<input class="form-input-text" type="password" name="loginpw" placeholder="10文字以上20文字以下" minlength="10" maxlength="20">
				</div>

				<div class="form-row">
					<input type="submit" class="form-btn next" value="試す">
				</div>
			</form>
		</div>

<?php require "./footer.php" ?>
