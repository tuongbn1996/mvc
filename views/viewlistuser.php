<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
  //if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
  //  header('Location: dangnhap1.php');
  
// }
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="../lib/jquery.js"></script>
    <script src="../dist/jquery.validate.js"></script>

  <title>Trang chủ</title>
  <meta charset="utf-8">
</head>
<body>
<table align="center" border="1" width="1200">
    <tr align="center"> 
        <td style=" color: blue;font-size: 24px;">UserName</td>
        <td style="color: blue;font-size: 24px;">Password</td>
        <td style=" color: blue;font-size: 24px;">Name</td>
        <td style="color: blue;font-size: 24px;">Email</td>
         <td colspan="2"><a href="ADD.php">ADD</a></td>
         <td><a href="UPDATE.php">UPDATE</a></td>
         <td><a href="DELETE.php">DELETE</a></td>
         
    </tr> 
    <?php if (!empty($users)): ?>
                            <?php while ($user= $users->fetch_assoc()): ?>
      <tr>
          <td><?= $user["id"] ?></td>
          <td><?= $user["username"] ?></td>
          <td><?= $user["password"] ?></td>
          <td><?= $user["name"] ?></td>
          <td><?= $user["email"] ?></td>
        </tr>

</table>
  <form action="logout.php">
    <div class="form-group ">
      <!-- <input type="submit" class="btn btn-primary btn-lg btn-block login-button" name = "btn_logout" value="Logout"/> -->

    </div>
  </form>
</body>
</html>