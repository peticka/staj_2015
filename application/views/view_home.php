<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home Page</title>

	<style>
		body, html {margin: 0; padding: 0;}

		body{
			background-color: blueviolet;
		}

		h1, h2, h3, h4, p, a, li, ul{
			font-family: Arial, sans-serif;
			color: #FBE6F2;
			text-decoration: dashed;
		}

		#nav{
			margin: 50px auto 0 auto;
			width: 1000px;
			background-color: #E68F8F;
			height: 15px;
			padding: 20px;
		}

		#nav ul{
			list-style: none;
			float: left;
			margin: 0 50px;
		}

		#nav a:hover{
			color: #99BC99;
		}


		#nav ul li{
			display: inline;
		}

		#content{
			width: 1000px;
			min-height: 100%;
			margin: 0 auto;
			padding: 20px;
		}
		#footer{
			width: 400px;
			height: 15px;
			margin: 0 auto;
			padding: 20px;
		}

		#footer P{
			color: #E68F8F;
		}


	</style>

</head>
<body>

<div id="container">
	<div id="nav">
	<ul>
		<li><a href="<?php echo base_url(); ?>site/home">Home</a></li>
		<li><a href="<?php echo base_url(); ?>site/about">About</a></li>
		<li><a href="<?php echo base_url(); ?>site/contact">Contact</a></li>
		<li><a href="<?php echo base_url(); ?>insert_ctrl/">Blog</a></li>
	</ul>
		</div>

<div id="content">
	<h1>Home Page</h1>
	<p>Welcome to my site :)</p>
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
		standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
		a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
		remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
		Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions
		of Lorem Ipsum.</p>
</div>

<div id="footer">
	<p>Copyright (C) Petq. All rights reserved!</p>
</div>

</body>
</html>