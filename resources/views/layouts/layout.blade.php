<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8" >
	<meta name="language" content="ru" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Города и страны</title>
    <link rel="stylesheet" type="text/css" href="/css/my.css" />
	<link rel="stylesheet" type="text/css" href="/css/main.css" />
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script><title>Weather Test Task</title>
</head>

<body>

	<div class="main_conteiner">
		<div class="header" style="min-height:50px;">
			

			
		</div>
		<div class="main">

            @yield('content')

	</div>
		<div class="footer">
		<br>
		<p>Тестовое задание для Математика © Шаталов Виталий</p>
	</div>
	</div>
</body>
</html>