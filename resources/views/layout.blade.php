<!DOCTYPE html>
<html lang="en">
<head>
	<title>Papirus</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Nunito:200,400,600" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<meta name="theme-color" content="#563d7c">

	<link rel="stylesheet" href="css/papirus.css">

</head>
<body>

	<div class="cover-container">
		@include('layout.head')

		@yield('content')
	</div>

</body>
</html>