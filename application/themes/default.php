<?php doctype('html5'); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" > 
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php foreach ($css as $url ) echo link_tag($url); ?>
	</head>
	
	<body>
		<nav class="navbar navbar-inverse header"> 
			<div class="container-fluid">
				<div class="navbar-header"> 
					<a class="navbar-brand" href="#"> <span class="logo">J</span><span id="corps">OBPLAC</span><span class="logo">E</span> </a>
				</div>
			</div>
		</nav>
		<div class="jumbotron"> </div>
		
		<div id="container">
			<?php echo $output; ?>
		</div>
		<div id="footer"> </div>
		<?php foreach ($js as $url) echo script_btsrp($url); ?>
	</body>
</html>