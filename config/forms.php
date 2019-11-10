<!DOCTYPE html>
<html>
<head>

	<title>forms</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<fieldset >
	<form id="myForm" action="processes_form.php" method="post">

	<h2>Sign up for classes</h2>
		<p >Gender: 
	
				<input type="radio"  name="gender" value="female" validate="required:true"/> Female 
				<input type="radio" id="genderChoice2" name="gender" value="male" > Male
				<input type="radio" id="genderChoice3" name="gender" value="other"> Other
	
		</p>	

		<P> Trannings: 
				Beginners<input type="radio" value="beginner" name="train" required>
				Intermediate<input type="radio" value="intermidate" name="train">
				Advance<input  type="radio" value ="advance" name="train" >
				Self Defence<input  type="radio" value ="selfdefence" name="train">
			</P>
	
			<!-- <p>Date: <input type="Date"></p> -->
		
			<p class="morning">Morning: 
					<select name="morning" size="1">
						<option >Select </option>
						<option value="8am-10am" name="one">8am-10am </option>	
						<option value="10am-12pm" name="two">10am-12pm</option>
									
					</select></p>


			<p class="evening">Evening: 
					<select name="evening" size="1">
						<option>Select </option>
						<option value="1pm-3pm" name="three">1pm-3pm </option>	
						<option value="4pm-6pm" name ="four">4pm-6pm</option>
									
			</select></p>

			<input type="submit" name="Submit" value="Submit" > 
			
	<!-- <a href="../classes.html"> <input type="button" name="Submit" value="Submit"> </a> -->
		
			
	</form>
</fieldset>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>