<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<div>
			<h2>Name : {{ $name }}</h2>
			<h3>Email : {{ $email }}</h3>
			<h3>Description :</h3><p> {{ nl2br($description) }}</p>
		</div>
	</body>
</html>