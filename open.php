<?php if (empty($_GET['opening_account'])): ?>
<?php require "./header.php"?>

		<h3 class="page-title">口座開設</h3>
		<div class="container">
			<div class="section-title">事前確認</div>
			<div class="section">
				<ul>
					<li>口座開設には本人確認書類が必要です。</li>
					<li>16歳未満は保護者の同意が必要です。</li>
					<li>神戸市および三田市以外にお住いの方は開設できません。</li>
					<li>上記の市外に転居される場合、当行における口座は凍結されます。</li>
				</ul>
			</div>
			<div class="section-title">本人確認書類</div>
			<div class="section">
				<ul>
					<li>自動車運転免許証</li>
					<li>個人番号カード</li>
					<li>住民票の写し</li>
					<li>日本国旅券</li>
					<li>健康保険組合証</li>
					<li>ルミナリエでの記念写真(要本人)</li>
				</ul>
				<p class="section-content">上記のうち、いずれか2点必要です。</p>
			</div>
			<div class="btn next" onclick="securityWindowOpen('./open.php?opening_account=true', '口座開設')">つぎへ</div>
		</div>
		</div>

<?php elseif ($_GET['opening_account'] == "true"): ?>
<?php require "./form_header.php" ?>

		<h3 class="form-title">口座開設フォーム</h3>
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
					<p class="input-title">生年月日<span class="warning">*</span></p>
					<input class="form-input-text" type="date" name="birthday" placeholder="yyyy/mm/dd">
				</div>
				<div class="form-row">
					<p class="input-title">住所１<span class="warning">*</span></p>
					<p class="radiobtn-text"><input class="radiobtn" type="radio" name="city" value="神戸市" checked="checked">神戸市<input class="radiobtn" type="radio" name="city" value="三田市">三田市</p>
				</div>
				<div class="form-row">
					<p class="input-title">住所２<span class="warning">*</span></p>
					<input class="form-input-text" type="text" name="address" placeholder="例) 中央区加納町6丁目5-1">
				</div>
				<div class="form-row">
					<p class="input-title">ログインパスワード<span class="warning">*</span></p>
					<input class="form-input-text" type="password" name="loginpw" placeholder="10文字以上20文字以下" minlength="10" maxlength="20">
				</div>
				<div class="form-row">
					<p class="input-title">パスワード再入力<span class="warning">*</span></p>
					<input class="form-input-text" type="password" name="loginpwr" placeholder="横着せずに手入力！">
				</div>
				<div class="form-row">
					<p class="input-title">4桁暗証番号<span class="warning">*</span></p>
					<input class="form-input-text" type="password" name="pin" placeholder="例) 1234" maxlength="4">
				</div>
				<div class="form-row">
					<p class="input-title">暗証番号再入力<span class="warning">*</span></p>
					<input class="form-input-text" type="password" name="pinr" placeholder="横着せずに手入力！" maxlength="4">
				</div>
				<div class="form-row">
					<p class="input-title">標高日本一の地下鉄駅の名前は？</p>
					<input class="form-input-text" type="text" name="staition_name" placeholder="ヒント) 神戸市内">
				</div>
				<div class="form-row">
					<input type="submit" class="form-btn next" value="確認">
				</div>
			</form>
		</div>

<?php endif ?>

<?php require "./footer.php"?>
