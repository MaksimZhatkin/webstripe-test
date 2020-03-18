<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" href="./src/assets/styles/style.css">
	<title>Webstripe</title>
</head>
<body>

	<!-- MAIN HEADER -->
	<header class="container mb-4">
		<nav class="nav justify-content-end">
			<span class="nav-link">Имя <span class="text-underline">Максим</span></span>
			<span class="nav-link">Фамилия <span class="text-underline">Жаткин</span></span>
		</nav>
	</header>

	<main class="container">
		<h1 class="main-title text-center text-uppercase mb-5">Тестовое задание Webstripe</h1>

		<!-- CAROUSEL -->
		<div class="slider-wrap mb-5">
			<h2 class="sub-title text-center">Карусель instagram</h2>
			<div class="slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 1}'>
				<img src="./src/assets/images/image_1.jpg" class="d-block" alt="photo">
				<img src="./src/assets/images/image_2.jpg" class="d-block" alt="photo">
				<img src="./src/assets/images/image_3.jpg" class="d-block" alt="photo">
				<img src="./src/assets/images/image_4.jpg" class="d-block" alt="photo">
				<img src="./src/assets/images/image_5.jpg" class="d-block" alt="photo">
				<img src="./src/assets/images/image_6.jpg" class="d-block" alt="photo">
			</div>
		</div>

		<div class="container">
			<div class="row">

				<!-- FORM -->
				<div class="col-md mb-4">
					<h2 class="sub-title text-center">Форма</h2>
					<form enctype="multipart/form-data" action="webstripe/src/php/action.php" method="post" class="form needs-validation was-validated">
							<div class="form-group">
								<input type="text" id="inputName" name="name" class="form-control is-invalid" placeholder="Имя" required>
							</div>

							<div class="form-group">
								<input type="email" id="inputEmail" name="email" class="form-control is-invalid" placeholder="E-mail" required>
							</div>

							<div class="form-group">
								<input type="text" id="inputString" name="string" class="form-control is-invalid" placeholder="Текстовая строка" required>
							</div>

							<div class="form-group">
								<input type="number" id="inputNumber1" name="number_1" class="form-control is-invalid" placeholder="Число 1" required>
							</div>

							<div class="form-group">
								<input type="number" id="inputNumber2" name="number_2" class="form-control is-invalid" placeholder="Число 2" required>
							</div>

							<div class="custom-file form-group mb-3">
								<input type="file" id="customFile" name="file" class="custom-file-input">
								<label class="custom-file-label" for="customFile">Выбрать файл</label>
							</div>

						<button type="submit" id="sendButton" class="btn btn-dark d-block mx-auto">Отправить</button>
					</form>
				</div>

				<!-- RESULT -->

				<div class="col-md mb-4">
					<h2 class="sub-title text-center">Результат</h2>
					<form action="webstripe/src/php/display.php" method="post" id="displayForm" class="form">
						<button type="submit" class="btn btn-dark mb-3 d-block">Вывести</button>
					</form>
					<p class="result"></p>
				</div>

			</div>
		</div>

	<!-- POP-UP -->
	<div class="modal fade" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Данные отправлены!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
	</div>

	<!-- MAIN FOOTER -->
	<footer class="main-footer">
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5a0b4d9e00a67c7f744c77e4bbb64282a4d89a1cde96ced75a13de6e4ffeb298&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
	</footer>

	<!-- JQuery.js -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

	<!-- Popper.js -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

	<!-- Bootstrap.js -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<!--Slick.js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

	<script src="./src/scripts/script.js"></script>

</body>
</html>