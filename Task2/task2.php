<?php



<!DOCTYPE html>
<html>
<head>
<title>User Registration | PHP</title>
</head>
<body>
<form>




<div>
<?php
if(isset($_POST[''])){
	echo 'User submitted.';
}
	?>
</div>

<div>
<form action="registration.php" method="post">
<div class="container">
<h1>Registration</h1>

<label for="name"><b> Name</b></label></br>
<input type="text"  name="name" required></br>

<input type="submit" name="create" value="Submit">
</br>
</br>

</div>



<div>
<label for="name"><b> Email</b></label></br>
<input type="text"  name="email" required></br>
<input type="submit" name="create" value="Submit">
</br>
</br>

</div>

<div>
				<div align=""><b>Gender</b></br></div>
				
					  <input type="radio" id="gender01" name="gender" value="" required>
					  <label for="gender01">Male</label>
					  <input type="radio" id="gender02" name="gender" value="50">
					  <label for="gender02">Female</label> 
					 
					  <input type="radio" id="gender03" name="gender" value="other">
					  <label for="gender03">Other</label></br>
					  
				
			</div>





<input type="submit" name="create" value="Submit">
</br>
</br>



<div>
				<div>
				Blood Group</br>
				</div>
				<div>
					<select id="" style="" required>
					  <option value="" selected=""></option>
					  <option value="ab+">AB+</option>
					  <option value="ab-">AB-</option>
					  <option value="o+">O+</option>
					  <option value="o-">O-</option>
					  <option value="a+">A+</option>
					  <option value="a-">A-</option>
					  <option value="b+">B+</option>
					  <option value="b-">B-</option>
					</select>
				</div>
			</div>
			
	<input type="submit" name="create" value="Submit">
</br>
</br>


	
			
		<td>
<tr>
<b>Date of Birth</b>
</td>
</tr>
</br>

<td>
<tr>
dd<input type="number" style="width:40px;">/
mm<input type="number" style="width:40px;">/
yyyy<input type="number" style="width:50px;">

</td>
</tr>
</br>

<input type="submit" name="create" value="Submit">	
			
</form>
</div>
</body>
</html>
?>
