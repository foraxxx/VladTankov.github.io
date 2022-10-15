<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-11 container-fluid d-flex flex-column py-3">
				<span>© <?php echo date('Y')?> г. «Автошкола Алгоритм». Все права защищены.</span>
				<span>Великий Новгород ул. Зелинского 30</span>
				<span>тел: 8 (8162) 55-99-20</span>
				<span>тел: 8 (8162) 55-99-24</span>
			</div>
			<a class="col-12 col-md-1 p-3 vk" href="https://vk.com/algoritmavto"><img class="rounded-circle" src="assets/img/vk.svg" alt="vk"></a>
		</div>
	</div>
</footer>

<style>
	.footer {
    background-color: #E1E1E1;
	}

	span {
		font-size: 18px;
		font-weight: 500;
	}

	.vk {
		display: flex;
		align-items: center;
	}

	.vk img:hover {
		-webkit-box-shadow: 0px 0px 10px rgba(0,0,0,.5);
		-moz-box-shadow: 0px 0px 10px rgba(0,0,0,.5);
		-ms-box-shadow: 0px 0px 10px rgba(0,0,0,.5);
		-o-box-shadow: 0px 0px 10px rgba(0,0,0,.5);
		box-shadow: 0px 0px 10px rgba(0,0,0,.4);
		transition: 0.3s;
	}
</style>
</body>
</html>