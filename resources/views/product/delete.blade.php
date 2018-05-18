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
	.img{
		float: left;
		margin-right: 40px;
		margin-top: 50px;
	}

	#low{
		width: 700px;
	}
	#high{

		color: black;
		font-size: 18px;
		font-style: bold;
		width: 340px;
		font-weight: bold;
		padding-top: 0px;
	}

	h2{
		font-weight: bold;
	}
</style>
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
      <a class="navbar-brand" href="#">DietCart</a>
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

  <div class="container">
	<h2 style="margin-left: 45%; font-family: 'Comic Sans MS', cursive, sans-serif;">Delete product</h2>
	
	<br/>
	<br/>

	 
        

          <div class="img">
			
			<td><img src="../../pic/{{$pro->productImage}}" style="height: 220px; width: 200px;border-radius:25%;" />
			</div> 

			
			<h2>{{$pro->productName}}</h2>
		</tr>    

		<div class="container">
        <div class="container">   
	   <table>
	
		</tr>
		<tr>
			<td id="high">Product ID: </td>
			<td id="low">{{$pro->productId}}</td>
		</tr>
		
		<tr>
			<td id="high">Product Unit: </td>
			<td id="low">{{$pro->productUnit}}</td>
		</tr>
		<tr>
			<td id="high">Product Price: </td>
			<td id="low">{{$pro->productPrice}}</td>
		</tr>
		<tr>
			<td id="high">Product Description: </td>
			<td id="low"><p>{{$pro->productDescription}}</p></td>
		</tr>
		
		<tr>
			<td id="high">Product Catagory: </td>
			<td id="low">{{$pro->productCatagory}}</td>
		</tr>
		<tr>
			<td id="high">Product Type: </td>
			<td id="low">{{$pro->productType}}</td>
		</tr>
	</table>

	 </div>
	 </div>
	<br/>
	
	<form method="post" action="/product/{{$pro->productId}}">
	  {{csrf_field()}}
		<input type="hidden" name="_method" value="delete">

		<input style="background-color: red; color: white;" class="btn" type="submit" value="Delete">
	</form>

	</div>
	
</body>
</html>