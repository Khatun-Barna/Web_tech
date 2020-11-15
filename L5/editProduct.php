<?php 

require_once 'controller/productInfo.php';
$product_db = fetchProduct($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Product</title>
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
    <br><br><h1><u>EDIT PRODUCT</u></h1><br><br>
    <form action="controller/updateProduct.php" method="POST" enctype="multipart/form-data">
      <fieldset>
        <legend>Edit product</legend><br>
        <label for="name"> Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
        <input type="text" id="name" name="name" value="<?php echo $product_db['name'] ?>" ><br><br>
        <label for="buyingprice"> Buying Price </label>
        <input type="text" id="buyingprice" name="buyingprice" value="<?php echo $product_db['buyingprice'] ?>"><br><br>
        <label for="sellingprice"> Selling Price </label>
        <input type="text" id="sellingprice" name="sellingprice" value="<?php echo $product_db['sellingprice'] ?>"><br><br>
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
        <input type="submit" name = "updateProduct" value="Update" style="font-size: 110%;">
        &nbsp;&nbsp;&nbsp;<input type="reset" style="font-size: 110%;"><br><br> 
      </fieldset>
      
    </form>
  </center>

</body>
</html>

