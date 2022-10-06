<html>
<head>
	<style>
		h1{
			text-align: center;
		}
		h3{
			text-align: center;
		}
		img{
			display: block;
			margin-left:auto;
			margin-right:auto;
			margin-top:0px;
		}
	</style>
</head>
</body>
	<a href=index.php>Go Back</a><br><br><br>
	<?php
		if(isset($_COOKIE['page1'])){
			echo 'Product 1 :  '. $_COOKIE['page1'].'<br>';
		}
		else{
			echo 'Product 1 is not set<br>';
		}
		if(isset($_COOKIE['page2'])){
			echo 'Product 2 : '. $_COOKIE['page2'].'<br>';
		}
		else{
			echo 'Product 2 is not set<br>';
		}
		if(isset($_COOKIE['page3'])){
			echo 'Product 3 : '. $_COOKIE['page3'].'<br>';
		}
		else{
			echo 'Product 3 is not set<br>';
		}
		if(isset($_COOKIE['page4'])){
			echo 'Product 4 :  '. $_COOKIE['page4'].'<br>';
		}
		else{
			echo 'Product 4 is not set<br>';
		}
		if(isset($_COOKIE['page5'])){
			echo 'Product 5 :  '. $_COOKIE['page5'].'<br>';
		}
		else{
			echo 'Product 5 is not set<br>';
		}
	?>
</body>
</html>