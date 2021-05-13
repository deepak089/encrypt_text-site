<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Hello, world!</title>
  </head>
  <body>
    
  <div class="container">
  <?php include "php/header.php";?>
    <div class="wrapper text-center">
  <div class="form-group name">
    <label for="">name</label>
  <textarea  id="name" name="name" placeholder="Enter the string"></textarea>
</div>
  <div class="from-group key ">
  <label for="">key</label>
  <input type="text" name="key" id="key">
  <br>
 
   <button class="btn btn-primary-dark" type="submit" id="gen_dbase64btn">Generate</button>
 
 <button class="btn btn-primary-dark" type="submit" id="dbase64btn">Encrypt</button>
   
</div>
   
   
<h1>
  <p id="error"></p>
   <p id="data">

   </p>
</h1>
</div>
</div>

   <script>
   $(document).ready(function(){
     
    var generated_key = Math.floor(Math.random()*100);
   $("#gen_dbase64btn").on("click",function(){
  alert("your key is:"+" "+  +generated_key);
});
         $("#dbase64btn").click(function(e){
             e.preventDefault();
             var name=$("#name").val();
             var key=$('#key').val();
             $.ajax({
                 url:"php/64decode.php",
                 type:"post",
                 data:{name:name,key:key,gen_key:generated_key},
                 success:function(data){
                   if(generated_key == ""){
                    $(("#error").html(data)) 
                   }
                   else
                   {
                     $("#data").html(data);
                 }
                }
             });
         });
  
     });
   </script>
  </body>
</html>