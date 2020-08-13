<?php  
if (empty($_COOKIE['nbc_contact'])){
	setcookie('nbc_contact', (string)rand(1000, 10000));
}
require "header.php";
?>

		<?php if (!empty($_POST['family_name']) && !empty($_POST['family_name_kana']) && !empty($_POST['first_name']) && !empty($_POST['first_name_kana']) && !empty($_POST['email']) && !empty($_POST['InqDet'])): ?>

		<h3 class="form-title">お問い合わせフォーム</h3>
		<div class="form">
			<form id="open" method="POST" action="./contact.php">
			<div class="form-row">
				<p class="input-title">姓</p>
				<hr/>
				<p class="form-input-check"><?= $_POST['family_name'] ?></p>
			</div>
			<div class="form-row">
				<p class="input-title">名<span class="warning">*</span></p>
				<hr/>
				<p class="form-input-check"><?= $_POST['first_name'] ?></p>
			</div>
			<div class="form-row">
				<p class="input-title">姓(ふりがな)<span class="warning">*</span></p>
				<hr/>
				<p class="form-input-check"><?= $_POST['family_name_kana'] ?></p>
			</div>
			<div class="form-row">
				<p class="input-title">名(ふりがな)<span class="warning">*</span></p>
				<hr/>
				<p class="form-input-check"><?= $_POST['first_name_kana'] ?></p>
			</div>
			<div class="form-row">
				<p class="input-title">メールアドレス<span class="warning">*</span></p>
				<hr/>
				<p class="form-input-check"><?= $_POST['email'] ?></p>
			</div>
			<div class="form-row">
				<p class="input-title">内容<span class="warning">*</span></p>
				<hr/>
				<p class="form-textarea-check"><?= $_POST['InqDet'] ?></p>
			</div>
			<div class="form-row">
				<input type="submit" class="form-btn next" value="送信">
			</div>
			</form>
		</div>

		<?php elseif (empty($_COOKIE['nbc_contact'])): ?>

		<h3 class="form-title">お問い合わせフォーム</h3>
		<div class="form">
			<form id="open" method="POST" action="./contact.php">
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

		<?php else: ?>

		<h3 class="form-title">お問い合わせフォーム</h3>
		<div class="form">
			<div class="form-row">
				<div class="form-success-title">問い合わせ完了</div>
			</div>
			<div class="form-row">
				<span class="form-success-left">受付番号：</span><span class="form-success-right"><?= $_COOKIE['nbc_contact'] ?></span>
			</div>
			<div class="form-row">
				<p class="form-success-msg">お客様のお問い合わせは受理されたかもしれません。受付番号は今後必要になりますので必ずお控えください。新型コロナウイルス対策のため、お問い合わせはお一人様につき一回に制限させて頂いておりますが予めご了承ください。</p>
			</div>
		</div>

		<?php endif; ?>

<?php require "footer.php" ?>
