    
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
        <form action="action_page.php" method="post">
            <div class="imgcontainer">
                <label><h2> Đăng nhập </h2></label>
            </div>
                
            <div class="container" style="background-color:#f1f1f1">
                <table >
                    <tr>
                    <p><label for="uname"><b>Tài khoản: </b></label>
                        <input type="text" placeholder="Nhập tài khoản" name="uname" required>
                        </tr>   
                    <tr>
                    <p><label for="psw"><b>Mật khẩu: </b></label>
                        <input type="password" placeholder="Nhập mật khẩu" name="psw" required>
                        </tr>
                    <tr>
                    <label><p><input type="checkbox" checked="checked" name="remember"> Nhớ mật khẩu</label>
                    </tr>
                    <tr>
                    <p><button type="submit" class="btn btn-danger">Đăng nhập</button>
                        </tr>
                            
                    <tr>
                    <p><button type="button" class="btn btn-danger">Cancel</button>
                        </tr>
                    <tr>
                    <span class="psw1"> <a href="#">Đăng ký</a></span>
                    <span class="psw2"> <a href="#">Quên mật khẩu?</a></span>
                    </tr>
            </div>
        </table>
    </form>
        
        
</body>
</html>