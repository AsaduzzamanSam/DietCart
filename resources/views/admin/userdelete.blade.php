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
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">DietCart</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/admin/home">Home</a></li>
        <li><a href="/userInfo">Back</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       
       <li><a  href="/logout">LogOut</a></li>

    
      </ul>
    </div>
  </div>
</nav>

  <div class="container">
	<h2 style="margin-left: 45%; font-family: 'Comic Sans MS', cursive, sans-serif;">Delete User</h2>
	
	<br/>
	<br/>

	 
        

          

			
			<h2>{{$user->userName}}</h2>
		</tr>    

		<div class="container">
        <div class="container">   
	   <table>
	
		</tr>
		<tr>
			<td id="high">User ID: </td>
			<td id="low">{{$user->id}}</td>
		</tr>
		
		<tr>
			<td id="high">User First Name:  </td>
			<td id="low">{{$user->firstName}}</td>
		</tr>
		<tr>
			<td id="high">User Last Name: </td>
			<td id="low">{{$user->lastName}}</td>
		</tr>
		<tr>
			<td id="high">User Email: </td>
			<td id="low"><p>{{$user->email}}</p></td>
		</tr>
		
		<tr>
			<td id="high">User User_Name: </td>
			<td id="low">{{$user->userName}}</td>
		</tr>
		<tr>
			<td id="high">User password: </td>
			<td id="low">{{$user->password}}</td>
		</tr>
	</table>

	 </div>
	 </div>
	<br/>
	
	<form method="post" action="/userInfo/{{$user->id}}">
	  {{csrf_field()}}
		<input type="hidden" name="_method" value="delete">

		<input style="background-color: red; color: white;" class="btn" type="submit" value="Delete">
	</form>

	</div>
	
</body>
</html>