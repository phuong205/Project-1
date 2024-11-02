<?php
include "connect.php";
class data_account{
   
    public function insert_account($ten,$pass,$anh,$diachi,$email,$gioitinh,$noisinh){
        global $conn;
        $sql = "INSERT INTO dangky(ten,pass,anh,diachi,email,gioitinh,noisinh)
                values('$ten','$pass','$anh','$diachi','$email','$gioitinh','$noisinh')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    
}
?>