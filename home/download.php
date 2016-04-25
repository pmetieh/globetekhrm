<?php
    session_start();
    include_once('headerpage.php');
	include_once('utils.php');
?>

<form name="download" method="post" action="download.php" enctype="multipart/form-data">
<h3>Select a deed to view or download</h3>
<table>
<tr>
<td><input type="text" name="custId" id="custId" value="Customer ID Here"/></td>
<td><input type="button" id="deedList" value="Get Deeds" style="font-weight: bold;"/></td>
</tr>
</table>

<div id="selectionAction" style="width: 400px; height: 27px; border: green solid thin; background-color: olive;">
    <div id="downloadDiv" style="float: left; width: 50%">
            <input type="button" id="downloadBtn" value="Download Deed" style="font-weight: bold;"/>      
    </div>
    <div id="viewDiv" style="float: left; width: 45%; margin-left: 10px;  border-left-style: solid;;">
            <input type="button" id="viewBtn" value="View Deed" style="float: right; font-weight: bold;"/>
    </div>
</div>
</form>

<table border="1">
<tr>
<th><b>Name On Deed</b></th>
<th><b>Location</b></th>
</tr>
<?php 
for($i = 0; $i < 10; $i++)
{
    echo '<tr><td>'.$i.'</td><td>'."<input type=\"radio\" name=\"deed\"/>".'</td></tr>';
}

?>
</table>


<script type='text/javascript'>

 alert('jQuery');

    $('document').ready(function(){
    $('#downloadBtn').bind('click', DownloadDeed);
    //$('viewDeed').bind('click', viewDeed);
    
});

   // function downloadDeed(){alert('Download Deed');}
//    function viewDeed(){alert('V Deed');} 

  $(function(){
    
    $('#viewBtn').click(ViewDeed);      
      
  });
  
 // function(){
//   // alert('Openning new window to View Deed ...');
//     
//     
//    });
  function ViewDeed() {
     alert('Openning new window to View Deed ...');
     var windowObjectReference;
     var strWindowFeatures = "menubar=yes,location=yes,resizable=yes,scrollbars=yes,status=yes";

     windowObjectReference = window.open("viewFile.php", "ViewDeed", strWindowFeatures);
    }
    
    function DownloadDeed() {
     alert('Openning new window to download Deed ...');
     var windowObjectReference;
     var strWindowFeatures = "menubar=yes,location=yes,resizable=yes,scrollbars=yes,status=yes";

     windowObjectReference = window.open("downloadFile.php", "DownloadDeed", strWindowFeatures);
    }
    
    $(function(){
        
        $('#deedList').bind('click', GetDeeds);
        $('#custId').bind('click', ClearText);
        
    });
    
    function GetDeeds(){
        alert("Retreiving deeds");
    }
    
   function ClearText(){
    $(this).val("");
    //alert("click");
   }
    
    
    
 </script>


<?php
	include_once('footerpage.php');
?>