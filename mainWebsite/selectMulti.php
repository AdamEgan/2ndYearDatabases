
<?php
print("<link rel='stylesheet' type='text/css' href='mystyle.css'>");
$conn_id = mysql_connect("cs1.ucc.ie","ame2","doasooyu")
          OR EXIT();
mysql_select_db("Dreamhome_ame2",$conn_id);

$city=$_POST['city'];

$QUERY="SELECT Fname,Lname,BR.Tel_No "
        ."FROM staff ST,property_for_rent PR,branch BR "
        ."WHERE ST.Bno=BR.Bno "
        ."AND ST.Bno=PR.Bno "
        ."AND BR.city='$city'";
// attempt insert query execution
$RESULT_ID=mysql_query($QUERY)
        OR die("Cannot execute Query");
     print("<a href='main.html'>Home</a>");
      WHILE($ROW=mysql_fetch_assoc($RESULT_ID)){
        
               print("<h3>Staff Name</h3>");
               printF("<p>%s %s</p>",$ROW['Fname'],$ROW['Lname']);
               print("<h3>Branch Tel_No</h3>");
               printF("<p>%s</p>",$ROW['Tel_No']);
      }

// close connection
mysql_free_result ($RESULT_ID);
//mysql_close($conn_id);
?>