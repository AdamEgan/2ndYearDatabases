<?php
$conn_id = mysql_connect("cs1.ucc.ie","ame2","doasooyu")
          OR EXIT();
mysql_select_db("Dreamhome_ame2",$conn_id);

$staff_num=$_POST['staff_num'];
$QUERY="SELECT Fname,Lname "
        ."FROM staff "
        ."WHERE Sno='$staff_num'";
 
// attempt insert query execution
$RESULT_ID=mysql_query($QUERY)
        OR die("Cannot execute Query");
        
      WHILE($ROW=mysql_fetch_assoc($RESULT_ID)){
               print("<h3>Staff Name</h3>");
               printF("<p>%s %s</p>",$ROW['Fname'],$ROW['Lname']);
      
      }

// close connection
mysql_free_result ($RESULT_ID);
//mysql_close($conn_id);
?>