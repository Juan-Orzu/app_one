<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'App')</title>
</head>
<body>
	<nav>
		<ul>
			<li><a href="/">1.- Home</a></li>
			<li><a href="/about">2.- About</a></li>
			<li><a href="/contact">3.- Contact</a></li>
			<li><a href="/portfolio">4.- Portfolio</a></li>

		</ul>
	</nav>
	@yield('content')
</body>
</html>