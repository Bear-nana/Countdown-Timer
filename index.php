<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Count-down Timer</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

   
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="js/jquery-3.2.1.min.js" rel="stylesheet">
    
  </head>

  <body onload="startTime()">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">COUNT-DOWN <span style="color:#35BBC7">TIMER</span></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <section class="timer">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-3">
            
          </div>
          <div class="col-md-6 col-sm-6">
            <center><h2>COUNT DOWN TO CHRISTMAS</h2></center><br>
            <p id="demo"></p>
            <p id="demo1" style="color:red"></p>
          </div>
          <div class="col-md-3 col-sm-3">
            
          </div>
        </div>

      </div>
    </section>

    <script>
      // Set the date we're counting down to
      var countDownDate = new Date("Dec 25, 2017 00:00:00").getTime();

      // Update the count down every 1 second
      var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();
        
        // Find the distance between now an the count down date
        var distance = countDownDate - now;
        
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = "<button>" + days + "d " + "</button>" + ":" + "<button>" + hours + "h "
        + "</button>" + ":" + "<button>" + minutes + "m " + "</button>" + ":"+ "<button>" + seconds + "s " + "</button>"; 
        
        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo1").innerHTML = "TIME UP!";
        
    }

      }, 1000);
      
    </script>

    <div class="container">
          <div class="row icons">
            <div class="col-md-4 col-sm-4">
              <p><span class="glyphicon glyphicon-globe">Address: ESBS, Enugu</span></p> 
            </div> 
            <div class="col-md-4 col-sm-4">
              <p><span class="glyphicon glyphicon-earphone"> Telephone: 07031202515</span></p> 
            </div> 
          <div class="col-md-4 col-sm-4">
              <p><span class="glyphicon glyphicon-envelope"> Email: chinwendu.aniobodo@gmail.com</span></p> 
            </div>
          </div> 
        </div>
        
        

    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
  </body>
</html>
