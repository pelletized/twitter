<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Search Twitter - pelletized</title>

<link rel="stylesheet" href="tweets.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</head>
<body>

<header>
	<div class="wrap">
		<a href="/" class="logo">pelletized</a>		
	</div>
</header>
<div role="main" class="wrap">
	<section class="content shadow">
		<h1 class="uppercase">Twitter Search</h1>
		<form name="searchform" id="searchform">
			<label for="search">Search</label>
			<input type="text" name="search" id="search" placeholder="Search" value="" />
			<button>Go</button>	
		</form>		
		<ul class="tweets"></ul>
	</section>

	<footer class="uppercase">
		<p>&copy; <?=date('Y'); ?> Ed Wheeler</p>
	</footer>
</div>
<script src="search.js"></script>
</body>
</html>