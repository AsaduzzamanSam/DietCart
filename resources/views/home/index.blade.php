@extends('layout.sidebar')

@section('matha')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/styles.css" >
  <script type="text/javascript" src="js/cal.js"></script>
  
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
        <li class="active"><a href="/home">Home</a></li>
        <li><a  href="/user">Show account</a></li>
        <li><a  href="/user/edit">Edit account</a></li>
        <li><a  href="/user/delete">delete account</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
   
    <li></li>
  
    <li><a  href="/logout">LogOut</a></li>
      </ul>
    </div>
  </div>
</nav>
  @endsection
  
@section('pa')

    <div class="col-sm-8 text-left"> 
      <h1 style="margin-left: 45%; font-family: 'Comic Sans MS', cursive, sans-serif;">Calculate your BMI</h1>

      
     <div class="bmiblock">

      <div class="pe1">
            <h2>Results: </h2>
            <div id="under"></div>
            <div id="over"></div>
            <div id="normal"></div>
            </div>
       <form class="form-group bmi" name="cal" action="" >
            <h4 >Calculate your BMI</h4>
            
            <input class="form-control" type="text" name="weight"  placeholder="Weight(kg)">
            
             
            <input class="form-control" type="text" name="height"   placeholder="Height(cm)">
             
            </br>
           

            <button  class="btn btn-default" type="button" name="submit" onClick='bmi()'>Calculate</button> 
            
            </br>

          
            <span><input class="form-control" type="text" name="result" value="0"><a style="color: black; font-size: 16px;" href="/home">reset</a> </span>
            </br>
            
            
            </form> 


            <p class="pe" > 
                <b>BMI Categories:</b><br>
                #Underweight = < 18.5<br>
                #Normal weight = 18.5–24.9 <br>
                #Overweight = 25–29.9 <br>
                #Obesity = BMI of 30 or greater
            </p>

            
     </div>
          

 
      
      
    </div>
    <div class="col-sm-2 sidenav">




    

       
      
</div>



</body>
</html>

@endsection
