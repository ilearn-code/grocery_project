
	<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
	<link rel="stylesheet" href="css\style.css">
	<title>Grocery product</title>
	
	</head>

	<body>

		
			
			<form method="POST" name="upfrm" action="uploadcode.php" enctype="multipart/form-data">
				<div>
					<label for="product_name">product name</label>
					<input type="text" placeholder="Enter product name" name="product_name"  />
					<label for="product_price">product price</label>
					<input type="text" name="price" class="product_price"  placeholder="price">
					<input type="file" name="fileImg" class="file_input" />
					<input type="submit" value="Upload" name="btn_upload" class="btn" />
				</div>
			</form>
        <div class="filters" >

 
  <select id="sort-by" name="sort" onchange="sortProducts()">
  <option value="default">Default</option>
  <option value="asc" >Price( Low to High)</option>
  <option value="desc" >Price(High to Low)</option>
  </select>

  <select id="sort-price" name="sortprice" onchange="sortProducts()">
  
  <option value="0-10">0-10</option>
  <option value="10-20">10-20</option>
  <option value="20-30">20-30</option>
  <option value="30-40">30-40</option>
  <option value="40-50">40-50</option>
  <option value=">50">>50</option>
</select>



 </div>

			<div class="productss" id="product-table">

		<?php include "sort.php" ?>

			</div>
		
	
	</body>
<script>

function sortProducts() {

  var sortBy = document.getElementById("sort-by").value;
  var sortbyprice=document.getElementById("sort-price").value;

  var xhr = new XMLHttpRequest();

 
  xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("product-table").innerHTML = this.responseText;
    }
  };

  xhr.open("GET", "sort.php?sort="+ sortby + "&sortprice="+ sortbyprice, true);

  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.send();
}

</script>
	
	</html>
	