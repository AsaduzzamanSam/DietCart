<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
 <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}" >
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <style>
  body
  {
   margin:0;
   padding:0;
   background-color:#f1f1f1;
  }
  .box
  {
   width:1270px;
   padding:20px;
   background-color:#fff;
   border:1px solid #ccc;
   border-radius:5px;
   margin-top:25px;
  }

 </style>
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
      <a class="navbar-brand" href="#">Dietcart</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/admin/home">Home</a></li>
        <li><a href="/product/create">Create New Product</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">

      <li><form class="form-inline set" method="post" action="/search">
      {{csrf_field()}}
        
        <div class="form-group">
          
          <input type="text" name="ptype" class="form-control" id="ptype" placeholder="Product Type">
        </div>
        
        <button type="submit" value="Login" class="btn btn-default">search by type</button>
    </form></li>
    <li><a href="/product">reset search</a></li>
       
      <li><a  href="/logout">LogOut</a></li>
    
      </ul>
    </div>
  </div>
</nav>

	<h2 style="margin-left: 45%; font-family: 'Comic Sans MS', cursive, sans-serif;" >List of Product</h2>

	<div class="container">
	
	<br/>
	<br/>
	
	<table id="user_data" class="table table-bordered table-striped">
		<tr >
			<th width="5%">Product Image</th>
		    <th width="1%">Product ID</th>
		    <th width="15%">Product Name</th>
		    <th width="3%">Product Unit</th>
		    <th width="2%">Product Price</th>
		    
		    <th width="8%">Product Catagory</th>
		    <th width="8%">Product Type</th>
		    <th width="2%">Options</th>
			
		</tr>
		@foreach($prolist as $pro)
		<tr >
		    <td align="center" width="5%" ><img src="pic/{{$pro->productImage}}" style="height: 30px; width: 30px;border-radius:25%;" /></td>
			<td align="center" width="1%" >{{$pro->productId}}</td>
			<td align="center" width="15%" >{{$pro->productName}}</td>
			<td align="center" width="3%" >{{$pro->productUnit}}</td>
			<td align="center" width="2%" >{{$pro->productPrice}}</td>
			
			
			<td align="center" width="8%" >{{$pro->productCatagory}}</td>
			<td align="center" width="8%" >{{$pro->productType}}</td>
			<td align="center" width="2%" >
				 
				<a style="color: green;" href="/product/{{$pro->productId}}/edit"><i class="fas fa-edit"></i></a> | 
				<a style="color: red;" href="/product/{{$pro->productId}}/delete"><i class="fas fa-trash-alt"></i></a>
				</td>
		</tr>
		@endforeach
	</table>

	</div>
</body>
</html>