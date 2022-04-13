<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript">

      $(document).ready(function() {
        $.ajax({    //create an ajax request to mainsql.php
          type: "GET",
          url: "mainsql.php",
          dataType: "html",   //expect html to be returned
          success: function(response){
              $("#responsecontainer").html(response);
              //alert(response);
          }
        });
      });

      var timer, delay = 5000;

      timer = setInterval(function(){
       $.ajax({    //create an ajax request to mainsql.php
         type: "GET",
         url: "mainsql.php",
         dataType: "html",   //expect html to be returned
         success: function(response){
             $("#responsecontainer").html(response);
             //alert(response);
         }
      });
      }, delay);

      </script>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <title>NILE Dashboard</title>
    <style>
        body{ font-family:Verdana; text-align: left; }
        .content {
          overflow: auto;
        }
        .rightdiv {
         float: right;
        }
        .leftdiv {
         float: left;
        }
        .no_outline {
          border: 3px solid white;
          border-collapse: collapse;
          background-color: #f2f2f2;
          width:100%;
        }
        th, td {
          padding: 15px;
        }
    </style>
</head>
<body>
<div class="content">
  <div class="leftdiv">
    <img src="/images/NILE_corner.png" alt="NILE Triangle Logo" style="width:400px">
  </div>
  <div class="rightdiv">
    <p>Logged in as <?php echo $_SESSION["role"]; ?>   <a href="http://nilerobot.info/logout.php" title="Logout">Logout</a></p>
  </div>
</div>

<div class="content">
  <div class="leftdiv">
    <div id="responsecontainer" align="center">
    <div>
  </div>
  <div class="rightdiv">

  </div>
</div>

</body>
</html>
