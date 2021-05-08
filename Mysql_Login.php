 <?php 
    session_start();
    require 'libs/ketnoi.php';
 ?>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
            
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="container">
                <p> <h2>Đăng Nhập </h2>
                <p> Tài khoản: <input type="text" name="user" value="<?php if(isset($_POST['user'])) echo $_POST['user'] ?>"/>
                <p> Mật khẩu:  <input type="password" name="pass" value="<?php if(isset($_POST['pass'])) echo $_POST['pass'] ?>"/>
                <p> <input type="submit" name="btn" value="Đăng nhập" class="btn btn-danger"/> 
                <p> <span class="psw1"> <a href="#">Đăng ký</a></span>
                    <span class="psw2"> <a href="#">Quên mật khẩu?</a></span>
            </div>               
                            
			<?php 
				if(isset($_POST['btn'])){	
				$user = $_POST['user'];
				$pass = $_POST['pass'];
					if($user == ""){
						echo '<p>'."Vui lòng nhập tài khoản";
					}
					else{
						$Connect = mysqli_connect('localhost','root','','qlsv_db');
						$sql = "select * from tb_users where username = '$user'";
						$ketqua = mysqli_query($Connect,$sql);
							if(!$ketqua){
								echo '<p>'."Sai câu truy vấn Mysql";
							}
							else{
								$dem = mysqli_num_rows($ketqua);
                                                                    
								if($dem <= 0){
									echo '<p>'."Tài khoảng không tồn tại!";
								}
								else{
									$row = mysqli_fetch_assoc($ketqua);
									if($pass == $row['password']){
										$_SESSION['user'] = $user; 
										
                                                                                header('Location:http://localhost/qlsv/student_list.php');
                                                                                
									}
									else{
										echo '<p>'."Sai mật khẩu";
									}
								}
							}
					}
                                            
				}
                                    
			?>
                            
                            
                            
        </form>
                    
    </body>
            
            
</html>