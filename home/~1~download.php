<?php
    session_start();
    include_once('headerpage.php');
	include_once('utils.php');
?>
<?php
    alert('Connected!');
	/***  connect to mysql dtatbase ***/
        $mysqli = new mysqli("localhost", "root", "", "cms");
       // print_r($mysqli);
        echo '<br/>';
        if ($mysqli === false) 
        {   
            die("ERROR: Could not connect. " . mysqli_connect_error()); 
        } 
        else
        { 
           alert('Connected!');
           $custId = 'coleman01';
           //proceed to insert the data
          /* */
           $fileId = 1;
           
           
          /**
 *  $stmt = $mysqli->prepare('select scandoc from scandocs where fileId =?');
 *            $stmt->
 * bind_param('i', $fileId);
 */
            //get the size of the Blob column
            $query = $mysqli->query("Select OCTET_LENGTH(scanDoc) filelength from documents where fileId = 3");
            $query_result = $query->fetch_assoc();
            $filesize = $query_result["filelength"];
            echo '<br />';
            //print_r($size);
            alert('File size : '.($filesize / 1024).'KB');
            //get the document
          // $query_doc = $mysqli->query("Select scanDoc from documents where fileId = 3");
          // print_r($query);
           //$stmt->execute();
           //$stmt->bind_result($file);
        //alert('Number of rows fetched = '.$query->num_rows);
        /**
 * if($query->num_rows > 0)
 *  		{
 *  		    alert('Number of rows selected '.$query_doc->num_rows);
 *  			$row = $query_doc->fetch_assoc();
 *             //print_r($row);
 *            
 *            
 *               $file = $row["scanDoc"];
 *            // print_r($file);
 *             ob_end_clean();
 *             header("Content-type: application/pdf");
 *            // header('Content-disposition: attachment; filename="thing.pdf"');
 *             header('Content-disposition: inline; filename="thing.pdf"');
 *             header('Content-Transfer-Encoding: binary');
 *             header('Content-Length: '.$filesize);
 *           //  header("Accept-Ranges: bytes");
 *   		    //
 *               
 *               echo $file;
 *              //@read($file);
 *            // print $file;
 *  
 *   			//file_put_contents('fromdb.pdf',$row->scandoc);
 *   		}
 */
           
           /**
 * print_r($file);
 *            
 *            base64_encode($file); 
 *           // printf("%d Row inserted.\n", $stmt->affected_rows);
 *            echo '<br />';
 *            $stmt->close();
 *            
 *            file_put_contents('fromdb.pdf', $file);
 */
        }
?>