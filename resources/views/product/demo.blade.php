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
<div class="container" style="width:1000px;"> <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered" style="border:1px solid #333;background-color:#727276; color: white;">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                                
                          </tr>  
                          <?php $total = 0; ?>
                       @foreach($cart as $c)

                       <form method="post" action="remove/{{ $c['hidden_id'] }}">
                       {{csrf_field()}}
                           <tr>  
                               <td>{{ $c['hidden_name'] }}</td>  
                               <!-- <td>{{ $c['quantity'] }}</td>   -->

                               <td><input style="color: black" type="text" value="{{ $c['quantity'] }}" placeholder="{{ $c['quantity'] }}"></input></td>  
                               <td>{{ $c['hidden_price'] }}</td>  
                               <td>{{ $c['quantity'] * $c['hidden_price'] }}</td>  
                               <input type="hidden" name="catchid" value="{{ $c['hidden_id'] }}"></input>
                               <!--  -->
                               <td><input class="btn" type="submit" name="submit" value="remove"></input></td>  
                               
                          </tr>  
                          <?php  $total= $total + $c['quantity'] * $c['hidden_price']; ?>

                           </form>  
                          @endforeach
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">{{ $total }}</td>  
                               <td></td>  
                          </tr>  
                         
                     </table> 


                    
                       

                       <a href="/addOrder"><button>CheckOut</button></a>  
                 
                     
                </div> </div>



</body>
</html>