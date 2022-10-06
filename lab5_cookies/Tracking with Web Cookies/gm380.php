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
	<a href=index.php>Go Back</a><br>
	<?php
		$thispage='Gaming RGB M380';
		if(isset($_COOKIE['page1'])){
				if(isset($_COOKIE['page2'])){
						if(isset($_COOKIE['page3'])){
								if(isset($_COOKIE['page4'])){
										if($_COOKIE['page4']==$thispage){
											setcookie('page4',$_COOKIE['page3'],time()+3600);
											setcookie('page3',$_COOKIE['page2'],time()+3600);
											setcookie('page2',$_COOKIE['page1'],time()+3600);
											setcookie('page1',$thispage,time()+3600);
										}
										else if($_COOKIE['page3']==$thispage){
											setcookie('page3',$_COOKIE['page2'],time()+3600);
											setcookie('page2',$_COOKIE['page1'],time()+3600);
											setcookie('page1',$thispage,time()+3600);
										}
										else if($_COOKIE['page2']==$thispage){
											setcookie('page2',$_COOKIE['page1'],time()+3600);
											setcookie('page1',$thispage,time()+3600);
										}
										else if($_COOKIE['page1']!=$thispage){
											setcookie('page5',$_COOKIE['page4'],time()+3600);
											setcookie('page4',$_COOKIE['page3'],time()+3600);
											setcookie('page3',$_COOKIE['page2'],time()+3600);
											setcookie('page2',$_COOKIE['page1'],time()+3600);
											setcookie('page1',$thispage,time()+3600);
										}
								}
								else{
									setcookie('page4',$_COOKIE['page3'],time()+3600);
									setcookie('page3',$_COOKIE['page2'],time()+3600);
									setcookie('page2',$_COOKIE['page1'],time()+3600);
									setcookie('page1',$thispage,time()+3600);
								}
						}
						else{
							setcookie('page3',$_COOKIE['page2'],time()+3600);
							setcookie('page2',$_COOKIE['page1'],time()+3600);
							setcookie('page1',$thispage,time()+3600);
						}
				}
				else{
					setcookie('page2',$_COOKIE['page1'],time()+3600);
					setcookie('page1',$thispage,time()+3600);
				}
		}
		else{
			setcookie('page1',$thispage,time()+3600);
		}
		echo "<br><h1> Gaming RGB M380 </h1><br><br>";
		$filename="Gaming M380.png";
		echo "<img src='$filename' alt= '$filename' />";
		echo "<br><br><h3> Price:  99.99 $ </h3><br><br>";
	?>
</body>
</html>