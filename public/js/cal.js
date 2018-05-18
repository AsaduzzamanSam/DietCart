function bmi() 
                 {

                  var h,w,res;
                  w = Number(document.cal.weight.value); 
                  h = Number(document.cal.height.value);
                  res = (w/h/h)*10000;
                  document.cal.result.value=Math.round(res);

                  
              if (res<18.5) {
                  document.getElementById("under").innerHTML = "Sir you are in <b style='color: yellow;'>Under</b> Weight.<br> According to your BMI stage we will suggest some food for you.<br>plz <a href='/under' class='btn btn-default' style='color: black;'>clickHere</a> ";
                     
                     }else if(res>18.5 && res<24.9 ){

                      document.getElementById("normal").innerHTML = "Sir you are in <b style='color: green;'>Normal</b> Weight.<br> According to your BMI stage we will suggest some food for you.<br>plz <a href='/normal' class='btn btn-default' style='color: black;' >clickHere</a>";
                     }else if( res>24.9){
                      document.getElementById("over").innerHTML = "Sir you are in <b style='color: red;'>Over</b> Weight.<br> According to your BMI stage we will suggest some food for you.<br>plz <a href='/over' class='btn btn-default style='color: black;'' >clickHere</a>";
                     }
                  
                }