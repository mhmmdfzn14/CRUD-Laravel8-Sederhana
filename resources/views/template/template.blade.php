<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Laravel 8</title>
</head>
<body>
	<header>
		<h2>Pendataan Buku</h2>
		<nav>
			<a href="{{ route('book.index') }}">Home</a>
			|
			<a href="{{ route('book.create') }}">Tambah</a>
		</nav>
	</header>
	<hr/>
	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>

	<!-- bagian konten blog -->
	@yield('konten')


    <br>
	<hr/>
	<footer>
		<p>&copy;copyright 2022</p>
	</footer>
</body>
</html>
