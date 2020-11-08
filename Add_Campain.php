<?php  
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With"); 
?>
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="Campain/Campain.css" />
<style>

</style>
</head>

<body>
	<header>
		<h1><span class="i">C</span><span class="b">a</span><span class="u">m</span><span class="y">p</span><span
				class="i">a</span><span class="i">i</span><span class="u">g</span><span class="u">n</span></h1>

<style type="text/css">

</style>
	</header>
	<img src="image\3.jpg" alt="Banner" />
	

	<main>

		<!-- success message -->
		<?php
			if(isset($_SESSION["myMessage"])){
			echo "<div class='success-msg'>
			<i class='fa fa-check'></i>
			".$_SESSION["myMessage"]."
			</div>";
			unset($_SESSION['myMessage']);
		}

		?>

		<h1>Create Campaign</h1>
		<p>You are logged in as <?php echo $_SESSION["username"]?>
			<a href='logout.php'>Click here to log out!</a>
		</p>
		<br>
		<div class="container" id = 'inputfields'>
	<form method="post" action="Campain_action.php">
	
			<label for="type">Choose campaign type:</label>
			<select id='type' name='type' >
            <option value="Social">Campaign for a social cause</option>
				<option value='Business'>Business Campaign</option>
				<option value='Business'>Business Campaign</option>
				<option value='Business'>Business campaign</option>
			  </select>


		<label for="qtext">Enter Campaign:</label>
			<input type="text" id="Campain" placeholder="Enter Your campaign" name="Campain" required>
			
		<p class="qmult" id="qmult" style="display: none;">
			<input type="text" id="option_title" placeholder="Enter Option" name="option_title[]"><br>
		</p>
		<div class="submit_answer" style="postion: relative;">
									<button type="Submit" class="button">Submit</button>
		</div>

	</form>


		</div>

		<footer>
			&copy; Campaign 2020
		</footer>
	</main>

<script type="text/javascript">

// Ref: https://www.viralpatel.net/dynamic-add-textbox-input-button-radio-element-html-javascript/



</script>

</body>

</html>