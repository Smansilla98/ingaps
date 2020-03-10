
<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    
    <style>
      .map-container {
        height: 200px;

        position: relative;
      }

      .map-container iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
      }
      .box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);

    </style>
</head>
<body>
    <div class="container-fluid">
        <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
          <div id="map-container-google-1" class="z-depth-1 map-container mb-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.484269819567!2d-58.29827378468383!3d-34.74339197240891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a32dcf160d09e5%3A0x7e770c8ee45b00a!2sCrisys%20Ingenieria!5e0!3m2!1ses-419!2sar!4v1583780500417!5m2!1ses-419!2sar" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </section>
    </div>
    <div class="container align-center col-8">
      
<section class="mb-2">
  <div class="row">

      <div class="col-md-8 mb-md-0 mb-5">
        <h3 class="font-weight-bold">Contacto</h3>
        <h6 class="col-md-8 mb-md-0 mb-5">Para más información comuniquese con nuestros especialistas vía email a <mail to:info@ingaps.com.ar>info@ingaps.com.ar</mail> o llenando el formulario a continuación</h6>
      
          <form id="contact-form" name="contact-form" action="mail.php" method="POST">

              <!--Grid row-->
              <div class="row">

                  <!--Grid column-->
                  <div class="col-md-12">
                      <div class="md-form mb-0">
                        <label for="name" class="">Nombre</label>  
                        <input type="text" id="name" name="name" class="form-control">
                      </div>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-md-12">
                      <div class="md-form mb-0">
                        <label for="email" class="">Correo</label>
                        <input type="text" id="email" name="email" class="form-control">
                      </div>
                  </div>
                  <!--Grid column-->

              </div>
              <!--Grid row-->
              <div class="row">

                  <!--Grid column-->
                  <div class="col-md-12">

                      <div class="md-form">
                        <label for="message">Mensaje</label>
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                      </div>

                  </div>
              </div>
              <!--Grid row-->

          </form>

          <div class="text-center text-md-left">
              <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
          </div>
          <div class="status"></div>
      </div>
      <!--Grid column-->

      <div class="col-4 text-center card">
          <ul class="list-unstyled mb-0">
            
              <li><i class="fa fa-map-marker fa-2x orange-text"></i>

                  <p>San Francisco, CA 94126, USA</p>
              </li>

              <li><i class="fa fa-phone mt-4 fa-2x"></i>
                  <p>+ 01 234 567 89</p>
              </li>

              <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                  <p>contact@mdbootstrap.com</p>
              </li>
          </ul>
      </div>
    </div>

    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>