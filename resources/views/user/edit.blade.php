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
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/home">Home</a></li>
         <li><a  href="/user">Show account</a></li>
        
        <li><a  href="/user/edit">Edit account</a></li>
        <li><a  href="/user/delete">delete account</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       
    <li><a  href="/logout">LogOut</a></li>
    
      </ul>
    </div>
  </div>
</nav>

	<h2 style="margin-left: 45%; font-family: 'Comic Sans MS', cursive, sans-serif;">Edit User Information</h2>
	<div class="container">
	<a href="/userInfo" style="background-color: black; color: white;" class="btn">Back</a>
	<br/>
	<br/>
	<form method="post" action="/user">
	{{csrf_field()}}
		<input type="hidden" name="uid" value="{{$user->id}}">
		<input type="hidden" name="_method" value="put">
		<table>
			
			
			<tr>
				<td>User First Name: </td>
				<td><input type="text" name="ufname" value="{{$user->firstName}}"></td>
			</tr>
			<tr>
				<td>User Last Name: </td>
				<td><input type="text" name="ulname" value="{{$user->lastName}}"></td>
			</tr>
			<tr>
				<td>User Email: </td>
				<td><input type="text" name="uemail" value="{{$user->email}}"></td>
			</tr>
			<tr>
				<td>User_Name: </td>
				<td><input type="text" name="uusername" value="{{$user->userName}}"></td>
			</tr>
			<tr>
				<td>User password: </td>
				<td><input type="text" name="upassword" value="{{$user->password}}"></td>
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