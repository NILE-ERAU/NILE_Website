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

      String role = "<?php echo $_SESSION["role"]?>";
      var timer, delay = 10000;
      if (role.equals("admin")) {
        delay = 1000;
      }

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
          width: 100%;
        }
        .rightdiv {
         float: right;
         width: 50%;
        }
        .leftdiv {
         float: left;
         width: 50%;
        }
        .no_outline {
          border: 3px solid white;
          border-collapse: collapse;
          background-color: #f2f2f2;
          width:100%;
        }
        table.greyGridTable {
          border: 1px solid #FFFFFF;
          background-color: #EEEEEE;
          width: 100%;
          text-align: center;
          border-collapse: collapse;
        }
        table.greyGridTable td, table.greyGridTable th {
          border: 3px solid #FFFFFF;
          padding: 3px 4px;
        }
        table.greyGridTable tbody td {
          font-size: 13px;
        }
        table.greyGridTable thead {
          background: #E1FFFF;
        }
        table.greyGridTable thead th {
          font-size: 14px;
          color: #000000;
          text-align: center;
        }
        table.greyGridTable tfoot {
          font-size: 14px;
          font-weight: bold;
          color: #333333;
          border-top: 4px solid #333333;
        }
        table.greyGridTable tfoot td {
          font-size: 14px;
        }
    </style>
</head>
<body>
<div class="content">
  <div class="leftdiv">
    <img src="/images/NILE_corner.png" alt="NILE Triangle Logo" style="width:400px">
  </div>
  <div class="rightdiv">
    <p style ="text-align: right;">Logged in as <?php echo $_SESSION["role"]; ?>   <a href="http://nilerobot.info/logout.php" title="Logout">Logout</a></p>
  </div>
</div>

<div class="content">
  <div class="leftdiv">

  </div>
  <div class="rightdiv">

  </div>
  <div id="responsecontainer" align="center"></div>
</div>

</body>
</html>
