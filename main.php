<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

$role = $_SESSION['role'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
      <script src="draw_gz.js" type = "application/javascript"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script type="text/javascript">


      $(document).ready(function() {
        $.ajax({    //create an ajax request to mainsql.php
          type: "GET",
          url: "getcoords.php",
          dataType: "text",   //expect html to be returned
          success: function(response){
              updateField(response);
          }
       });

        $.ajax({    //create an ajax request to mainsql.php
          type: "GET",
          url: "sidebar.php",
          dataType: "html",   //expect html to be returned
          success: function(response){
              $("#sidebarcontainer").html(response);
              //alert(response);
          }
       });
        if (role.includes("admin")) {
         $.ajax({    //create an ajax request to mainsql.php
           type: "GET",
           url: "mainsql_admin.php",
           dataType: "html",   //expect html to be returned
           success: function(response){
               $("#responsecontainer").html(response);
               //alert(response);
           }
        });
      }
      else {
        $.ajax({    //create an ajax request to mainsql.php
          type: "GET",
          url: "mainsql.php",
          dataType: "html",   //expect html to be returned
          success: function(response){
              $("#responsecontainer").html(response);
              //alert(response);
          }
       });
      }

      });

      var timer, delay = 10000;
      var role = "<?php echo $role; ?>";
      if (role.includes("admin")) {
        delay = 1000;
        $.ajax({    //create an ajax request to mainsql.php
          type: "GET",
          url: "command_publish.php",
          dataType: "html",   //expect html to be returned
          success: function(response){
              $("#command_publish").html(response);
              //alert(response);
          }
       });
      }

      //var timer, delay = 10000;





      timer = setInterval(function(){
        $.ajax({    //create an ajax request to mainsql.php
          type: "GET",
          url: "getcoords.php",
          dataType: "text",   //expect html to be returned
          success: function(response){
              updateField(response);
          }
       });
        if (role.includes("admin")) {
         $.ajax({    //create an ajax request to mainsql.php
           type: "GET",
           url: "mainsql_admin.php",
           dataType: "html",   //expect html to be returned
           success: function(response){
               $("#responsecontainer").html(response);
               //alert(response);
           }
        });
      }
      else {
        $.ajax({    //create an ajax request to mainsql.php
          type: "GET",
          url: "mainsql.php",
          dataType: "html",   //expect html to be returned
          success: function(response){
              $("#responsecontainer").html(response);
              //alert(response);
          }
       });
      }
      $.ajax({    //create an ajax request to mainsql.php
        type: "GET",
        url: "sidebar.php",
        dataType: "html",   //expect html to be returned
        success: function(response){
            $("#sidebarcontainer").html(response);
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
          width: 100%;
        }
        .rightdiv {
         float: right;
         width: 50%;
         height: 100px;
        }
        .leftdiv {
         float: left;
         width: 50%;
         height: 100px;
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
          table-layout: fixed;
          width: 100%;
          height: 100%;
          text-align: center;
          border-collapse: collapse;
        }
        table.greyGridTable td, table.greyGridTable th {
          border: 3px solid #FFFFFF;
          padding: 3px 4px;
        }
        table.greyGridTable tbody td {
          font-size: 13px;
          overflow: hidden;
          width: auto
        }
        table.greyGridTable thead {
          background: #E1FFFF;
        }
        table.greyGridTable thead th {
          font-size: 14px;
          color: #000000;
          text-align: center;
          width: auto
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
        .numinput {
          width: 50px;
        }
        .leftcanv {
            width: 60%;
            margin: 0px auto;
            text-align: center;
            float: left;
         }
         .rightcanv {
             width: 40%;
             margin: 0px auto;
             text-align: center;
             float: right;
          }
          section::after {
            content: "";
            display: table;
            clear: both;
          }
    </style>
</head>
<body>
  <div>
  <section>
  <div class="leftdiv">
    <img src="/images/NILE_corner.png" alt="NILE Triangle Logo" style="width:400px">
  </div>
  <div class="rightdiv">
    <p style ="text-align: right;">Logged in as <?php echo $_SESSION["role"]; ?>   <a href="http://nilerobot.info/logout.php" title="Logout">Logout</a></p>
  </div>
</section>
<section>
  <div class="leftcanv">
    <canvas id="canvas" width="600" height="600" align="center"></canvas>
  </div>
  <div class="rightcanv">
    <div id="sidebarcontainer" align="center"></div>
  </div>
</section>
<section>
  <div id="command_publish" align="center"></div>
  <div id="responsecontainer" align="center"></div>
</section>

</div>
</body>
</html>
