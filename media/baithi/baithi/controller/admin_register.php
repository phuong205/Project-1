<?php 
include "../model/control_user.php";
if(isset($_POST['txtsub'])){
    if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['confirm_password']) ||empty($_POST['confirm_password']) ||empty($_POST['confirm_password']) ){
        echo"<script>alert('Vui lòng nhập đủ thông tin!');
        window.location.href = '../advance-admin/register.php';
        </script>";
    }
    else{
        $model = new data_account();
        $tmp = $model->sl_username($_POST['username']);
        if($tmp->num_rows == 0){
            if($_POST['txtpass'] == $_POST['txtconfirm']){
                move_uploaded_file($_FILES['txtavatar']['tmp_name'],'../upload/'.$_FILES['txtavatar']['name']);
                $model->insert_account($_POST['username'], $_POST['passwordl'], $_POST['confirm_password'],$_FILES['txtavatar']['name'],$_POST['full_name'],$_POST['gender'],$_POST['txtngaysinh'],$_POST['location'],);
                echo"<script>alert('Đăng ký thành công!');
                window.location.href = '../advance-admin/login.php';
                </script>";
            }
            else{
                echo"<script>alert('Vui lòng xác nhận lại Mật Khẩu!');
                window.location.href = '../advance-admin/register.php';
                </script>";
            }
        }
        else{
            echo"<script>alert('UserName đã tồn tại!');
                window.location.href = '../advance-admin/register.php';
                </script>";
        }
    }
}


?>