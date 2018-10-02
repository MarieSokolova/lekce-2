
<?php
$a = "2";
$b = "5";
$obdelnikobsah = $a * $b;

$strana = "6";
$uhel = "60";
$vyska = sin(deg2rad($uhel))*$strana;
$trojuhelnikobsah = round(($vyska * $strana) / 2);
;?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Pythagoras</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Výpočty<span class="sr-only">(current)</span></a>
          </li>
          
         
         
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Hledej" aria-label="Search">
          <button class="btn btn-info" type="submit">Hledej</button>
        </form>
      </div>
    </nav>

   
         <div class="container">
         <div class="col-md-6">
         <h1> Obdélník
        </h1>
        
        <table class="table">
    <tbody>
    <tr>
      <td>Strana A:</td>
      <td><?php echo "$a cm";?></td>
          </tr>
    <tr>
     
      <td>Strana B:</td>
      <td><?php echo "$b cm";?></td>
     
    </tr>
    <tr>
      <td>Obsah obdélníku:</td>
      <td><?php echo "$obdelnikobsah cm2";?></td>
          </tr>
           </tbody>
</table>
         </div>
          
          <div class="col-md-6">
          <h1> Trojúhelník
        </h1>
                
        <table class="table">
    <tbody>
    <tr>
      <td>Strana:</td>
      <td><?php echo "$strana cm";?></td>
          </tr>
    <tr>
     
      <td>Úhel:</td>
      <td><?php echo "$uhel stupňů";?></td>
     
    </tr>
    <tr>
      <td>Obsah trojúhelníku:</td>
      <td><?php echo "$trojuhelnikobsah cm2";?></td>
          </tr>
                  
  </tbody>
</table>
</div>
</div>
      <div class="jumbotron">
        <div class="container">
          <blockquote class="blockquote text-center">
          <h1 class="display-3">Ať žije matematika!</h1>
       
          <img src="http://www.marcelhajek.cz/uws_images/novinky_2016/matematika.jpg" class="img-fluid" alt="Responsive image">
        </blockquote>
        </div>
      </div>


    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>