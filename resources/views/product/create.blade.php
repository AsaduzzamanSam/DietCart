<!DOCTYPE html>
<html>
<head>

   <title></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <style type="text/css">
   form input{
   	margin-top: 5px;
   	margin-left: 5px;
   }
   </style>
	
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Dietcart</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/admin/home">Home</a></li>
        <li><a href="/product">Back</a></li>
      
      </ul>
      <ul class="nav navbar-nav navbar-right">
       
      <li><a  href="/logout">LogOut</a></li>
    
      </ul>
    </div>
  </div>
</nav>
	<h2 style="margin-left: 45%; font-family: 'Comic Sans MS', cursive, sans-serif;" >Create Product</h2>

	<div class="container" >
	
	<br/>
	<br/>
	<form method="post" action="/product" style="margin-left: 40%; margin-top: 10px;  line-height: 20px; ">
	{{csrf_field()}}
		<table >
			<tr>
				<td>Product Name</td>
				<td><input type="text" name="pname"></td>
			</tr>
			<tr>
				<td>Product Unit</td>
				<td><input type="text" name="punit"></td>
			</tr>
			<tr>
				<td>Product Price</td>
				<td><input type="text" name="pprice"></td>
			</tr>
			<tr>
				<td>Product Description</td>
				<td><input type="text" name="pdescription"></td>
			</tr>
			<tr>
				<td>Product Quantity</td>
				<td><input type="text" name="pquantity"></td>
			</tr>
			<tr>
				<td>Product Image</td>
				<td><input type="file" name="pimage"></td>
			</tr>
			<tr>
				<td>Product Catagory</td>
			    <td>
			        <select name="pcatagory">
						<option>Fruits & Vegetables</option>	
						<option>Meat & Fish</option>
						<option>Snacks</option>
						<option>Dairy</option>
						<option>Frozen & Canned</option>
						<option>Beverages</option>
						<option>Bread & Bakery</option>
						<option>Cooking</option>
					</select>

				</td>
			</tr>
			<tr>
			 	<td>Product Type</td>
			    <td>
			        <select name="ptype">
						<option>underWeight</option>
						<option>overWeight</option>
						<option>normalWeight</option>
					</select>

				</td>
				
			</tr>
			<tr>
				<td></td>
				<td><input style="background-color: black; color: white;" class="btn"  type="submit" value="Save"></td>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>