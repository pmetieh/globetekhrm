<html>
  <head>
    <!-- Load jQuery from Google's CDN -->
    <!-- Load jQuery UI CSS  --> 
    <script src="../jQueryUI/script.js"></script>
    <!---->
    <link rel="stylesheet" href="../jQueryUI/jquery-ui.css" />
    <link rel="stylesheet" href="../css/runnable.css" media="all" type="text/css"/>
    <!-- Load jQuery JS -->
    <script src="../jQuery/jquery-1.11.0.js" type="text/javascript"></script>
    <script src="../jQueryUI/jquery-ui.js"></script>
    <!-- Load jQuery UI Main JS  
    
    <script src="../jQueryUI/jquery-ui.js" type="text/javascript"></script>
    <script src="../jQueryUI/jquery.ui.datepicker.js" type="text/javascript"></script>-->
    <!-- Load SCRIPT.JS which will create datepicker for input field  -->
   <script type="text/javascript" >
   $(document).ready(
  
  /* This is the function that will get executed after the DOM is fully loaded */
  function () {
    $( "#datepicker" ).datepicker({
      changeMonth: true,//this option for allowing user to select month
      changeYear: true //this option for allowing user to select from year range
    });
  }

);
   
   </script>
    
    
  </head>
  <body>
    <p>Pick a Date: <input type="text" id="datepicker" /></p>
  </body>
</html>