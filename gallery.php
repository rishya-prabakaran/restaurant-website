<!Doctype html>

<html lang="en">

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<meta name="description" content="" />

<meta name="keywords" content="" />

<head>
	
<title>FooDelicious</title>

<link rel="stylesheet" href="css/main.css" />

<link rel="stylesheet" href="css/lightbox.min.css" />

<script src="js/jquery.min.js" ></script>

<script src="js/myscript.js"></script>
	
</head>

<body>
	
<?php require "includes/header.php"; ?>

<div class="parallax" onclick="remove_class()">
	
	<div class="parallax_head">
		
		<h2 style="color:#DA3170;">Explore</h2>
		<h3 style="color:#6ADA31; font-size:30px">Gallery</h3>
		
	</div>
	
</div>

<div class="content" onclick="remove_class()">
	
	<div class="inner_content on_parallax">
		
		<h2><span class="fresh"><b>Food Varieties</b></span></h2>
		
		<div class="parallax_content">
			
			<div class="multicol">
				
				<div class="image_display">
				
					<a href="image/dish1.jpg" data-lightbox="image-1"><img src="image/dish1.jpg" alt="image/dish1.jpg" width="100%" /></a>
					
				</div>
				
				<div class="image_display">
					
					<a href="image/dish2.jpg" data-lightbox="image-2"><img src="image/dish2.jpg" alt="image/dish2.jpg" width="100%" /></a>
					
				</div>
				
				<div class="image_display">
					
					<a href="image/dish3.jpg" data-lightbox="image-3"><img src="image/dish3.jpg" alt="image/dish3.jpg" width="100%" />
					
				</div>
				
				<div class="image_display">
					
					<a href="image/dish4.jpg" data-lightbox="image-4"><img src="image/dish4.jpg" alt="image/dish4.jpg" width="100%" /></a>
					
				</div>
				
				<div class="image_display">
					
					<a href="image/dish5.jpg" data-lightbox="image-5"><img src="image/dish5.jpg" alt="image/dish5.jpg" width="100%" /></a>
					
				</div>
                    
                <div class="image_display">
					
					<a href="image/dish6.jpg" data-lightbox="image-6"><img src="image/dish6.jpg" alt="image/dish6.jpg" width="100%" /></a>
					
				</div>
                    
                <div class="image_display">
					
					<a href="image/dish7.jpg" data-lightbox="image-7"><img src="image/dish7.jpg" alt="image/dish7.jpg" width="100%" /></a>
					
				</div>
				<div class="image_display">
					
					<a href="image/dish8.jpg" data-lightbox="image-8"><img src="image/dish8.jpg" alt="image/dish8.jpg" width="100%" /></a>
					
				</div>
				<div class="image_display">
					
					<a href="image/dish9.jpg" data-lightbox="image-9"><img src="image/dish9.jpg" alt="image/dish9.jpg" width="100%" /></a>
					
				</div>
				
				<div class="image_display">
					
					<a href="image/dish10.jpg" data-lightbox="image-10"><img src="image/dish10.jpg" alt="image/dish10.jpg" width="100%" /></a>
					
				</div>
				
			</div>
			
			<p class="clear"></p>
			
		</div>
		
	</div>
	
</div>

<div class="footer_parallax" onclick="remove_class()">
	
	<div class="on_footer_parallax">
		
		<p>&copy; <?php echo strftime("%Y", time()); ?> <span style="color:#334FFF;"><b>FooDelicious</b></span>. All Rights Reserved</p>
		
	</div>
	
</div>
	
</body>

</html>

<script src="js/lightbox.min.js" ></script>