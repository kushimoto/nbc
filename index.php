<?php require_once("./header.php")?>
		<div class="jumbotron">
			<div class="content">
				<h5 class="top-message">私たちなら</h5>
				<h5 class="top-message">あなたの土下座に</h5>
				<h5 class="top-message">誠心誠意お応えできます</h5>
			</div>
		</div>
		<div class="container">
			<div class="btn login"><a href="./login.php"><i class="fas fa-sign-in-alt"></i> ログイン</a></div><div class="btn open"><a href="./open.php"><i class="fas fa-user-plus"></i> 口座開設</a></div>
		</div>
		<h4 class="container-title">当行を選ぶべき４つのポイント</h4>
		<div class="container">
			<div class="card">
				<span class="card-title">最短３分！</span>
				<div class="card-icon"><i class="far fa-clock"></i></div>
				<p class="card-content">すぐに口座開設</p>
			</div>
			<div class="card">
				<span class="card-title">手数料タダ！</span>
				<div class="card-icon"><i class="far fa-laugh-beam"></i></div>
				<p class="card-content">時間外手数料もなし</p>
			</div>
			<div class="card">
				<span class="card-title">安心安全</span>
				<div class="card-icon"><i class="fas fa-shield-alt"></i></div>
				<p class="card-content">中共監修システム使用</p>
			</div>
			<div class="card">
				<span class="card-title">高金利</span>
				<div class="card-icon"><i class="fas fa-yen-sign"></i></div>
				<p class="card-content">各種金利は22%～</p>
			</div>
		</div>
		<h4 class="container-title">最近の為替レート</h4>
		<div class="container">
			<div class="card">
				<span class="card-title">米ドル</span>
				<div class="card-icon"><i class="fas fa-dollar-sign"></i></div>
				<p id="usd" class="card-content exchange" onclick="printDisplay('usd')">クリックで表示</p>
			</div>
			<div class="card">
				<span class="card-title">ユーロ</span>
				<div class="card-icon"><i class="fas fa-euro-sign"></i></div>
				<p id="eur" class="card-content exchange" onclick="printDisplay('eur')">クリックで表示</p>
			</div>	
			<div class="card">
				<span class="card-title">豪ドル</span>
				<div class="card-icon"><i class="fas fa-dollar-sign"></i></div>
				<p id="aud" class="card-content exchange" onclick="printDisplay('aud')">クリックで表示</p>
			</div>
			<div class="card">
				<span class="card-title">ポポポポンド</span>
				<div class="card-icon"><i class="fas fa-pound-sign"></i></div>
				<p id="gbp" class="card-content exchange" onclick="printDisplay('gbp')">クリックで表示</p>
			</div>
		</div>
		<script type="text/javascript" src="scripts/exchangerate.js"></script>
<?php require_once("./footer.php")?>
