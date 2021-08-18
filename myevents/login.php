  
<?php 

  session_start();
  
  if(isset($_SESSION['userlogin'])){
    header("Location: index.php");
  }


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Log-In</title>
    <style>
        *{
          padding: 0;
          margin: 0;
          box-sizing: border-box;
        }

        body{
          background: rgb(219, 226, 226);
        }

        .row {
          background: whitesmoke;
          border-radius: 30px;
          box-shadow: 12px 12px 22px grey;
        }
        img{
          border-top-left-radius: 30px;
          border-bottom-left-radius: 30px;
        }
        .btn1{
          border: none;
          outline: none;
          height: 50px;
          width: 100%;
          background-color: black;
          color: white;
          border-radius: 4px;
          font-weight: bold;

        }
        .btn1:hover{
          background: white;
          border:1px solid;
          color: black;

        }
        .error{
          background: yellow;
          color: darkred;
          padding: 10px;
          width: 50%;
          border-radius: 5px;
          font-weight: bold;
          text-align: center;
          box-sizing: content-box;
          margin-top: 30px;

        }


    </style>

  </head>
  <body>
  


      <section class="Form my-4 mx-5">
        <div class="container">
          <div class="row no-gutters">
            <div class="col-lg-5">
                <img src="imagelogin.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-7 px-5 pt-3">
              <h1 class="font-weight-bold py-3">Event Manager</h1>
              <h4>Sign into your account</h4>




              <form method="post" action=" ">

                

               

                <div class="form-row">
                  <div class="col-lg-7">
                      <input type="text" id="username" name="username" value="" placeholder="Email Address" class="form-control my-3 p-3" required>
                  </div>
                </div>


                <div class="form-row">
                  <div class="col-lg-7">
                      <input type="password" name="password" value="" id="password" placeholder="***********" class="form-control my-3 p-3" required>
                  </div>
                </div>


                <div class="form-row">
                  <div class="col-lg-7 ">
                      <button type="button" name="button" id="login" value=Login class="btn1 mt-3 mb-5">Log-in</button> 
                  </div>
                </div>


                
                <a href="#">Forgot Password</a>
                <p> Don't Have Account <a href="#">Register here</a> </p>

              </form>
              
            </div>

            
          </div>
        </div>



      </section>






    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script>
  $(function(){
    $('#login').click(function(e){

      var valid = this.form.checkValidity();

      if(valid){
        var username = $('#username').val();
        var password = $('#password').val();
      }

      e.preventDefault();

      $.ajax({
        type: 'POST',
        url: 'jslogin.php',
        data:  {username: username, password: password},
        success: function(data){
          alert(data);
          if($.trim(data) === "1"){
            setTimeout(' window.location.href =  "myeventtrial.php"', 1000);
          }
        },
        error: function(data){
          alert('there were erros while doing the operation.');
        }
      });

    });
  });
</script>


  </body>
</html>