<?php
$conn_id = mysql_connect("cs1.ucc.ie","ame2","doasooyu")
          OR EXIT();
mysql_select_db("Dreamhome_ame2",$conn_id);

$staff_num=$_POST['staff_num'];
$salary=$_POST['salary'];
$QUERY="UPDATE staff "
        ."SET Salary='$salary' "
        ."WHERE Sno='$staff_num'";
 
// attempt insert query execution
if($RESULT_ID=mysql_query($QUERY)){
     print("Successfully Updated");
 }
 else{print("Not updated");}

        
// close connection
//mysql_free_result ($RESULT_ID);
//mysql_close($conn_id);
?>