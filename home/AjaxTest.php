<html>
<head><title>
Ajax Load Function
</title>
<script type="text/javascript" src="../jQuery/jquery-1.11.0.js">
</script>


</head>
<body>
<div id="loadAjax" style="border: red solid thin; width: 50px; height: 50px;">


</div>
<script type="text/javascript">
alert('Load Ajax');
$.ajaxSetup ({
        cache: false
    });
    
// alert('Load Ajax');
 
$(function(){
    
    
     var loadUrl = "viewFile.php";
     
    /***/
  $("#loadAjax").click(function(){
     
       $.ajax({
        type: "POST",
        url: "viewFile.php"
       
              });
              alert(loadUrl);
  });
  });
 
 function viewFile(data, status){};
</script>

</body>
</html>