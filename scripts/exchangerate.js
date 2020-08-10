function getExchangerate() {

	const countries = ['USD', 'EUR', 'AUD', 'GBP'];
	let values = {};

		for (let i = 0; i < countries.length; i++) {
			$.getJSON("https://api.exchangeratesapi.io/latest?base=" + countries[i], function(data) {
				values[countries[i]] = data.rates.JPY.toFixed(3);
				console.log(`${countries[i]} = \\${values[countries[i]]}`);
				}
			);
		}

	return values;
}

function printDisplay(str) {

	let values = getExchangerate();

	setTimeout(function() {

		switch (str) {

			case 'usd':
				$("#usd").html("&yen;" + values['USD']);
				$("#usd").css('cursor', 'text');
				break;
			case 'eur':
				$("#eur").html("&yen;" + values['EUR']);
				$("#eur").css('cursor', 'text');
				break;
			case 'aud':
				$("#aud").html("&yen;" + values['AUD']);
				$("#aud").css('cursor', 'text');
				break;
			case 'gbp':
				$("#gbp").html("&yen;" + values['GBP']);
				$("#gbp").css('cursor', 'text');
				break;
		}

	}, 500);

	return 0;
}
