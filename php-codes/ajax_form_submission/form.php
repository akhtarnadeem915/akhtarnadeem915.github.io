<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Scribbl</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="blogging website" />
  <meta name="keywords" content="" />
  <meta name="Scribble" content="free" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
<link rel="stylesheet" href="blog.css">
<style type="text/css">
.wrapper{
  text-align: center;
  padding-top: 35px;
  padding-bottom: 45px;
}
</style>
<link href="https://fonts.googleapis.com/css?family=Leckerli+One&display=swap" rel="stylesheet">
</head>
  <body style="background-color: #141c25ff;" >
<p style="padding-bottom: 20px;">
</p>
 <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
          
          <h1 class="post-title" style="text-align: center; font-family: 'Pacifico', cursive; color: #fff; padding-top: 20px;" >
              Subscribe to our newsletter!
            </h1>
           
        </div>
      </div>
    </div>
  </div>
  	<!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">       
        <div class="container">  
                <form id="submit_form">  
                     <label style="color: #fff;font-family: 'Pacifico', cursive;">Name</label>  
                     <input type="text" name="name" id="name" class="form-control" />  
                     <br />  
                     <label style="color: #fff; font-family: 'Pacifico', cursive;">Email</label>  
                     <input type="email" name="email" id="email" class="form-control" />  
                     <br />  
                <!--     <input type="button" name="submit" id="submit" class="button btn btn-primary" value="Submit"/> -->
                      <button class="button btn btn-primary" name="submit" id="submit" value="Submit" style="font-family: 'Pacifico', cursive;"><i class="fa fa-envelope" aria-hidden="true" style="color: #fff;"></i> Subscribe!</button>
                     <span id="error_message" class="text-danger"></span>  
                     <span id="success_message" class="text-success"></span>  
                </form>  
           </div>  
       <br>
      </div>
    </div>
  </div>
  <footer>
<div class="overlay"></div>
    <div class="container">
      <div class="row copyright">
        <div class="col-md-12 text-center">
        <br>
        <p class="header-nav__social">
                    
<a href="https://www.instagram.com/onlinelernen.me/"><i class="fa fa-instagram" style="color: #fff; font-size: 25px; padding-right: 25px;"></i>&nbsp;</a> 
<a href="https://github.com/akhtarnadeem915"><i class="fa fa-github" style="color: #fff; font-size: 25px;"></i></a>
        </p>
        
          <br>
           <p class="copyright text-muted" style="font-family: 'Pacifico', cursive;">Copyright &copy; scribbl.ml</p>
           <br>
        </div>
      </div>
    </div>
    </div>
  </footer>
   <br>
</body>
</html> 
</body>
</html>
<script>  
 $(document).ready(function(){  
      $('#submit').click(function(){  
           var name = $('#name').val();  
           var email = $('#email').val();  
           if(name == '' || email == '')  
           {  
                $('#error_message').html("All Fields are required");  
           }  
           else  
           {  
                $('#error_message').html('');  
                $.ajax({  
                     url:"submit.php",  
                     method:"POST",  
                     data:{name:name, email:email},  
                     success:function(data){  
                          $("form").trigger("reset");  
                          $('#success_message').fadeIn().html(data);  
                          setTimeout(function(){  
                               $('#success_message').fadeOut("Slow");  
                          }, 7000);  
                     }  
                });  
           }  
      });  
 });  
 </script> 
