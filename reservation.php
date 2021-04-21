<?php 
	
	session_start();
	require "admin/includes/functions.php";
	require "admin/includes/db.php";
	
	$msg = "";
	
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		if(isset($_POST['submit'])) {
			
			$guest = preg_replace("#[^0-9]#", "", $_POST['guest']);
			$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
			$phone = preg_replace("#[^0-9]#", "", $_POST['phone']);
			$date_res = htmlentities($_POST['date_res'], ENT_QUOTES, 'UTF-8');
			$time = htmlentities($_POST['time'], ENT_QUOTES, 'UTF-8');
			$suggestions = htmlentities($_POST['suggestions'], ENT_QUOTES, 'UTF-8');
			
			if($guest != "" && $email && $phone != "" && $date_res != "" && $time != "" && $suggestions != "") {
				
				$check = $db->query("SELECT * FROM reservation WHERE no_of_guest='".$guest."' AND email='".$email."' AND phone='".$phone."' AND date_res='".$date_res."' AND time='".$time."' LIMIT 1");
				
				if($check->num_rows) {
					
					$msg = "<p style='padding: 15px; color: red; background: #ffeeee; font-weight: bold; font-size: 13px; border-radius: 4px; text-align: center;'>You have already placed a reservation with the same information</p>";
					
				}else{
					
					$insert = $db->query("INSERT INTO reservation(no_of_guest, email, phone, date_res, time, suggestions) VALUES('".$guest."', '".$email."', '".$phone."', '".$date_res."', '".$time."', '".$suggestions."')");
					
					if($insert) {
						
						$ins_id = $db->insert_id;
						
						$reserve_code = "UNIQUE_$ins_id".substr($phone, 3, 8);
						
						$msg = "<p style='padding: 15px; color: green; background: #eeffee; font-weight: bold; font-size: 13px; border-radius: 4px; text-align: center;'>Reservation placed successfully. Your reservation code is $reserve_code.</p>";
						
					}else{
						
						$msg = "<p style='padding: 15px; color: red; background: #ffeeee; font-weight: bold; font-size: 13px; border-radius: 4px; text-align: center;'>Could not place reservation. Please try again</p>";
						
					}
					
				}
				
			}else{
				
				$msg = "<p style='padding: 15px; color: red; background: #ffeeee; font-weight: bold; font-size: 13px; border-radius: 4px; text-align: center;'>Incomplete form data or Invalid data type</p>";
				
				print_r($_POST);
				
			}
			
		}
		
	}
	
?>

<!Doctype html>

<html lang="en">

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<meta name="description" content="" />

<meta name="keywords" content="" />

<head>
	
<title>FooDelecious</title>

<link rel="stylesheet" href="css/main.css" />

<script src="js/jquery.min.js" ></script>

<script src="js/myscript.js"></script>
	
</head>

<body>
	
<?php require "includes/header.php"; ?>

<div class="parallax" onclick="remove_class()">
	
	<div class="parallax_head">
		
		<h2 style="color:#DA3170;">Reserve</h2>
		<h3 style="color:#6ADA31; font-size:30px">Table </h3>
		
	</div>
	
</div>

<div class="content" onclick="remove_class()">
	
	<div class="inner_content">
		
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="hr_book_form">
			
			<h2 class="form_head"><span class="book_icon">BOOK A TABLE</span></h2>
			<p class="form_slg">We offer you the best reservation services</p>
			
			<?php echo "<br/>".$msg; ?>
			
			<div class="left">
				
				<div class="form_group">
					 
					 <label>No of Guests</label>
					<input type="number" placeholder="How many guests" min="1" name="guest" id="guest" required>
					
				</div>
				
				<div class="form_group">
					
					<label>Email</label>
					<input type="email" name="email" placeholder="Enter your email" required>
					
				</div>
				
				<div class="form_group">
					
					<label>Phone Number</label>
					<input type="text" name="phone" placeholder="Enter your phone number" required>
					
				</div>
				
				<div class="form_group">
					
					<label>Date</label>
					<input type="date" name="date_res" placeholder="Select date for booking" required>
					
				</div>
				
				<div class="form_group">
					
					<label>Time</label>
					<input type="time" name="time" placeholder="Select time for booking" required>
					
				</div>
				
				
			</div>
			
			<div class="left">
				
				<div class="form_group">
					
                    <label>Suggestions <small><b>(E.g No of Plates, How you want the setup to be)</b></small></label>
					<textarea name="suggestions" placeholder="your suggestions" required></textarea>
					
				</div>
				
				<div class="form_group">
					
					<input type="submit" class="submit" name="submit" value="MAKE YOUR BOOKING" />
					
				</div>
				
			</div>
			
			<p class="clear"></p>
			
		</form>
		
	</div>
	
</div>

<div class="content" onclick="remove_class()">
	
	<div class="inner_content">
	
		<div class="contact">
			
			<div class="left">
				
				<h3 style="color:#513484;"><b>LOCATION</b></h3>
				<p>Nehru Nagar, Mount Road,</p>
				<p>Chennai, Tamil Nadu</p>
				
			</div>
			
			<div class="left">
				
				<h3 style="color:#513484;"><b>CONTACT</b></h3>
				<p>044-283908, 044-293573</p>
				<p>foodelicious@gmail.com</p>
			</div>
			
			<p class="left"></p>
			
			<div class="icon_holder">
				
				<a href="#"><img src="image/icons/Facebook.png" alt="image/icons/Facebook.png" /></a>
				<a href="#"><img src="image/icons/Google+.png" alt="image/icons/Google+.png"  /></a>
				<a href="#"><img src="image/icons/Twitter.png" alt="image/icons/Twitter.png"  /></a>
				
			</div>
			
		</div>
		
	</div>
	
</div>

<div class="footer_parallax" onclick="remove_class()">
	
	<div class="on_footer_parallax">
		
		<p>&copy; <?php echo strftime("%Y", time()); ?> <span style="color:#334FFF;"><b>FooDelicious</b></span>. All Rights Reserved</p>
		
	</div>
	
</div>
	
	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/607fc17c62662a09efc09257/1f3pgnlb6';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
	
</body>

</html>
