<?php
$conn_id = mysql_connect("cs1.ucc.ie","ame2","doasooyu")
          OR EXIT();
mysql_select_db("Dreamhome_ame2",$conn_id);

$First_name=$_POST['first_name'];
$QUERY="SELECT Address,Tel_No "
        ."FROM staff "
        ."WHERE Fname='$First_name'";
 
// attempt insert query execution
$RESULT_ID=mysql_query($QUERY)
        OR die("Cannot execute Query");
        
      WHILE($ROW=mysql_fetch_assoc($RESULT_ID)){
               print("<h3>Address</h3>");
               printF("<p>%s</p>",$ROW['Address']);
               print("<h3>Phone</h3>");
               printF("<p>%s</p>",$ROW['Tel_No']);
      }

// close connection
mysql_free_result ($RESULT_ID);
//mysql_close($conn_id);
?>