<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
	<style type="text/css">
		fieldset {
		  background-color: #eeeeee;
		  width: 50%;
		}

		legend {
		  background-color: gray;
		  color: white;
		  padding: 5px 10px;
		}
	</style>
</head>
<body>
	<center>
		<br><br><h1><u>ADD PRODUCT</u></h1><br><br>
		<form action="controller/createProduct.php" method="POST" enctype="multipart/form-data">
			<fieldset>
				<legend>Add product</legend><br>
				<label for="name"> Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
				<input type="text" id="name" name="name"><br><br>
				<label for="buyingprice"> Buying Price </label>
				<input type="text" id="buyingprice" name="buyingprice"><br><br>
				<label for="sellingprice"> Selling Price </label>
				<input type="text" id="sellingprice" name="sellingprice"><br><br>
				<input type="radio" name="Display" herf=showALLProducts.php> Display <br><br>
				<input type="submit" name = "createProduct" value="Save" style="font-size: 110%;"><br><br> 
			</fieldset>
			
		</form>
	</center>
 <!-- <H1>ADD PRODUCT</H1>
 <form action="controller/createProduct.php" method="POST" enctype="multipart/form-data">
  
</form> 
 -->
</body>
</html>

