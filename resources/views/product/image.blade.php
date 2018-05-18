<!DOCTYPE html>
<html>
<head>
	<title></title>
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
        <li class="active"><a href="/">Home</a></li>
        <li><a href="/product/{{$pro->productId}}/edit">Back</a></li>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
       

    
      </ul>
    </div>
  </div>
</nav>

	<h2 style="margin-left: 45%; font-family: 'Comic Sans MS', cursive, sans-serif;">Edit Product Image</h2>
	<div class="container">
	<br/>
	<br/>
	<form method="post" action="/product/{{$pro->productId}}/img" style="margin-left: 35%;">
	{{csrf_field()}}
		<input type="hidden" name="pid" value="{{$pro->productId}}">
		<input type="hidden" name="_method" value="put">
		<table>
			
			
			
			<tr>
				<td>Product Name: </td>
				<td><label >{{$pro->productName}}</label></td>
			</tr>
			
			<tr>
				<td>Product Image</td>
				<td><img src="../../pic/{{$pro->productImage}}" style="height: 150px; width: 150px;border-radius:25%;" /></br><input type="file" name="pimage" value="" required=""></td>
			</tr>
			
			
			<tr>
				<td></td>
				<td><input style="background-color: black; color: white;" class="btn" type="submit" value="Update"></td>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>