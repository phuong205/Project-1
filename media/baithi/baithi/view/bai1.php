<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký Tài Khoản</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 400px;
            margin-bottom: 20px;
        }
        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        label {
            width: 150px; /* Chiều rộng nhãn */
            margin-right: 10px; /* Khoảng cách giữa nhãn và ô nhập */
            color: red;
        }
        input[type="text"],
        input[type="password"],
        input[type="file"],
        input[type="date"],
        select {
            flex: 1; /* Ô nhập sẽ chiếm toàn bộ không gian còn lại */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #454945;
        }
    </style>
</head>
<body>

<h2 style="background-color: #d1e23a;">Thông tin đăng nhập</h2>
<form action="../controller/admin_register.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="username">Tên Đăng Nhập:</label>
        <input type="text" id="username" name="username" required>
    </div>

    <div class="form-group">
        <label for="password">Mật Khẩu:</label>
        <input type="password" id="password" name="password" required>
    </div>

    <div class="form-group">
        <label for="confirm_password">Nhập Lại Mật Khẩu:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
    </div>

    <div class="form-group">
        <label for="avatar">Ảnh Avatar (nếu có):</label>
        <input type="file" id="avatar" name="txtavatar">
    </div>


<h2 style="background-color: #d1e23a;">Thông tin cá nhân</h2>

    <div class="form-group">
        <label for="full_name">Họ và tên:</label>
        <input type="text" id="full_name" name="full_name" required>
    </div>

    <div class="form-group">
        <label for="email">Địa chỉ Email:</label>
        <input type="text" id="email" name="email" required>
    </div>

    <div class="form-group">
        <label>Giới Tính:</label>
        <div>
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">Nam</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Nữ</label>
        </div>
    </div>

    <div class="form-group">
        <label for="dob">Ngày Sinh:</label>
        <input type="date" id="dob" name="txtngaysinh" required>
    </div>

    <div class="form-group">
        <label for="location">Nơi Ở:</label>
        <select id="location" name="location" required>
            <option value="">Chọn tỉnh</option>
            <option value="ha_noi">Hà Nội</option>
            <option value="ho_chi_minh">Hồ Chí Minh</option>
            <option value="da_nang">Đà Nẵng</option>
            <option value="hai_phong">Hải Phòng</option>
            <option value="can_tho">Cần Thơ</option>
        </select>
    </div>

    <input type="submit" value="Đăng Ký" name="txtsub">
</form>

</body>
</html>
