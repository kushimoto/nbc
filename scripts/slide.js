window.addEventListener('load', function() {

	const pannel = document.getElementById("slideshow");

	setInterval(function() {

		switch (pannel.getAttribute('src')) {

			case "./images/niro26.png":
				pannel.setAttribute('src', "./images/hawaii.png");
				break;

			case "./images/hawaii.png":
				pannel.setAttribute('src', "./images/sky.png");
				break;

			case "./images/sky.png":
				pannel.setAttribute('src', "./images/niro26.png");
				break;

		}

	}, 5000);
});

function jumpToPlan() {

	const pannel = document.getElementById("slideshow");

	switch (pannel.getAttribute('src')) {

		case "./images/niro26.png":
			location.href = "item.php#item1";
			break;

		case "./images/hawaii.png":
			location.href = "item.php#item2";
			break;

		case "./images/sky.png":
			location.href = "item.php#item3";
			break;

	}

}
