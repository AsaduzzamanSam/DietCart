<!DOCTYPE html>
<html>
<head>
	<title></title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
           <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}" >
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
        <li class="active"><a href="#">Home</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
       
          <li><a  href="/showcart">cart</a></li>
          <li><a  href="/logout">LogOut</a></li>
    
      </ul>
    </div>
  </div>
</nav>
	




	 <div class="container" style="width:1000px;">  
                <h3 align="center" style=" font-family: 'Comic Sans MS', cursive, sans-serif;">Food for under weight</h3><br />  
                 @foreach($over as $o)
                <div class="col-md-3">  
                     <form method="post" action="/add-to-cart" >  
                     {{csrf_field()}}
                          <div style="border:1px solid #333; height: 380px; background-color:#727276; border-radius:5px; padding:16px; margin-top:30px;" align="center">  
                               <img src="pic/{{$o->productImage}}" style="height: 150px; width: 150px;border-radius:25%;" /><br />  
                               <h4 style="color: white;" class="text-info">{{$o->productName}}</h4>
                               <h6 style="color: white;" class="text-info">{{$o->productUnit}}</h6>   
                               <h4 style="color: white;" class="text-info">৳{{$o->productPrice}}</h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="{{$o->productName}}" />  
                               <input type="hidden" name="hidden_id" value="{{$o->productId}}" />  
                               <input type="hidden" name="hidden_price" value="{{$o->productPrice}}" />   
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn " value="Add to Cart" />  
                          </div>  
                     </form>  
                </div> 

                @endforeach


                <div style="clear:both"></div>  
               
                </div>
</body>
</html>