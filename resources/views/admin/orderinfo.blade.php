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
        
      </ul>
      <ul class="nav navbar-nav navbar-right">

      <li><form class="form-inline set" method="post" action="/ordersearch">
      {{csrf_field()}}
        
        <div class="form-group">
          
          <input type="text" name="username" class="form-control" id="username" placeholder="User Name">
        </div>
        
        <button type="submit" value="Login" class="btn btn-default" style="color: green;">search by UserName</button>
    </form></li>
    <li><a href="/orderInfo">reset search</a></li>
       
      <li><a  href="/logout">LogOut</a></li>
    
      </ul>
    </div>
  </div>
</nav>

	<h2 style="margin-left: 45%; font-family: 'Comic Sans MS', cursive, sans-serif;" >List of Order</h2>

	<div class="container">
	
	<br/>
	<br/>
	
	<table id="user_data" class="table table-bordered table-striped">
		<tr >
			
		    <th width="1%">Order ID</th>
		    <th width="25%">Order Product Name</th>
		    <th width="10%">Order Product Quantity</th>
		    <th width="10%">Order Product Price</th>
		    <th width="10%">Order Product Totall Price</th>
		    <th width="25%">Order Product User Name</th>
		    
		  
		    
			
		</tr>
		@foreach($order as $ord)
		<tr >
		    
			<td align="center" width="1%" >{{$ord->opId}}</td>
			<td align="center" width="25%" >{{$ord->opName}}</td>
			<td align="center" width="10%" >{{$ord->opQuantity}}</td>
			<td align="center" width="10%" >{{$ord->opPrice}}</td>
			<td align="center" width="10%" >{{$ord->opTotalPrice}}</td>
			<td align="center" width="25%" >{{$ord->opUser}}</td>
			
			
		</tr>
		@endforeach
	</table>

	</div>
</body>
</html>