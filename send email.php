<?php ?>
<!doctype html>
<html>
	<head>
		<title>
			possible iindex file 4
		</title>
		<link rel="stylesheet" type="text/css" href="../css/links3.css" />
		<link rel="stylesheet" type="text/css" href="../css/home.css" />
		<style type="text/css">
			#email_form{
				grid-column: 1/4;
			}
			#to{
				width: 100%;
				font-size: 20px;
				grid-column: 1/4;
				grid-row: 2/3;
			}
			#subject{
				width: 100%;
				font-size: 20px;
				grid-column: 1/4;
				grid-row: 3/4;
			}
			#headers{
				width: 100%;
				font-size: 20px;
				grid-column: 1/4;
				grid-row: 4/5;
			}
			#message{
				width: 100%;
				font-size: 15px;
				grid-column: 1/4;
				grid-row: 5/8;
			}
			#not_sent{
				grid-column: 1/4;
				grid-row: 1/2;
			}
		</style>
		<meta charset="utf-8">
		
	</head>
	<body>
		<div class="fixed">
			<div id="fixed_grid">
				
				<div id="search"><img src="../images/search-black.png" id="search_button" /></div>
				<div id="form">
					<form class="search_form" action="#" method="GET" style="display:none; background-color: white">
						<input name="search" id="search_bar">
						<button type="submit">
							<img src="../images/search-black.png" alt="search"/>
						</button>
					</form>
				</div>
				<div id="logo"><a href="../index.html"><img src="../images/Logo_TV_2015.png" style="max-height: 200%"></a></div>
				<div id="likes" class="likes">
					<img src="../images/thumbs-up-white.png" height="40px" id="white">
					<img src="../images/thumbs-up-blue.png" height="45px" id="blue" style="display:none">
					<span id="no_of_likes" style="font-size:40px;"></span>
				</div>
			</div>
		</div>
		<div id="empty"></div>
		<div id="main">
		<?php
			error_reporting(0);
			if(isset($_POST['to']) && !empty($_POST['to']) && isset($_POST['subject']) && !empty($_POST['subject']) && isset($_POST['headers']) && !empty($_POST['headers']) && isset($_POST['message']) && !empty($_POST['message'])){
				$to = $_POST['to']; 
				$subject = $_POST['subject'];
				$message = $_POST['message'];
				$headers = "From: ".$_POST['headers'];
			
				if(mail($to, $subject, $body, $headers)){
					echo "email has been sent";
				}else{ 
					?><div id="not_sent"><?php echo "email can NOT be sent due to some errors try after some time";?></div><?php
				}
			}else{
				?><div id="not_sent"><?php echo "please fill the form completly";?></div><?php
			}	
		?>

		<div id="email_form">
			<form method="POST" action="send email.php" >
				<div>TO:<input type="email" id="to" name="to" value="<?php if(isset($_POST['to']) && !empty($_POST['to'])){echo $to; } ?>"></input></br></br></div>
				<div>SUBJECT:<input type="text" id="subject" name="subject" value="<?php if(isset($_POST['subject']) && !empty($_POST['subject'])){ echo $subject;} ?>"></input></br></br></div>
				<div>FROM:<input type="text" id="headers" name="headers" ></input>This could be anyone's email</br>(THIS EMAIL DOES NOT EVEN HAVE TO EXIST).</br></br></div>
				<div>MESSAGE:<textarea name="message" id="message" rows="10" cols="60" ><?php if(isset($_POST['message']) && !empty($_POST['message'])){echo $message; } ?></textarea></br></br></div>
				<input type="submit" value="SEND" style="font-size:40px"></input>
			</form>
		</div>

			
		</div>
		<footer id="footer" style=" opacity: .5; color: black; font-size: 30px;">Copyright none BLA BLA BLA Inc. No Rights Reserved.</br>
			<span id="PP">Privacy Policy</span></br>
			</br>
			I.E.T Campus, Aliganj</br>
			Lucknow Uttar Pradesh</br>
			Tel: 705-261-3187 | E-MAIL: keshav786tiwari@gmail.com</br>
			</br>
			<span style="font-size: 20px">This website is made by KESHAV TIWARI completed on 26-01-2018.</br> For any query contact details are given above.<br></span>
		</footer>
		
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/home.js"></script>
		<script type="text/javascript" src="../js/likes2.js"></script>
	</body>
</html>
<?php ?>