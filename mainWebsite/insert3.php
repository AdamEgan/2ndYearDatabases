<?php
$conn_id = mysql_connect("cs1.ucc.ie","ame2","doasooyu")
          OR EXIT();
mysql_select_db("Dreamhome_ame2",$conn_id);

$staff_id=$_POST['staff_Id'];
$First_name=$_POST['staff_name'];
$last_name=$_POST['last_name'];
$address=$_POST['address_1'];
$tel_no=$_POST['tel_no'];
$position=$_POST['position_1'];
$sex=$_POST['sex_1'];
$salary=$_POST['salary_1'];
$dob=$_POST['D_O_B'];
$nin=$_POST['nin_1'];
$bno=$_POST['branch_num'];


$QUERY="INSERT  INTO staff "."(Sno,Fname,Lname,Address,Tel_No,Position,Sex,DOB,Salary,NIN,Bno) "
        ."VALUES('$staff_id','$First_name','$last_name','$address','$tel_no','$position','$sex','$dob','$salary','$nin','$bno')";
// attempt insert query execution
$RESULT_ID=mysql_query($QUERY);

if($RESULT_ID){
    print("Records inserted successfully");
   
}
else{print("Records not inserted successfully");}
        
// close connection
//mysql_free_result ($RESULT_ID);
mysql_close($conn_id);
?>