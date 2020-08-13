<?php require "./header.php" ?>
		<h3 class="form-title">ログイン</h3>
		<div class="form">
			<form id="open" method="POST" action="./open.php?opening_account=false&try=true">
				<div class="form-row">
					<p class="input-title">口座番号</p>
					<input class="form-input-text" type="text" name="account-num">
				</div>
				<div class="form-row">
					<p class="input-title">ログインパスワード</p>
					<input class="form-input-text" type="password" name="loginpw" minlength="10" maxlength="20">
				</div>

				<div class="form-row">
					<input type="submit" class="form-btn next" value="試す" onclick="swal('お詫び', '金融庁から預金封鎖実施の通達を受けた為、現在ログイン頂くことはできない状態となっております。ご迷惑お掛けしますことお詫び申し上げます。', 'error')">
				</div>
			</form>
		</div>

<?php require "./footer.php" ?>
