<?php
    
    global $conn;
        
    function connect_db() //kết nối qlsv_db.
    {
        global $conn;
            
        if(!conn){
            $conn = mysqli_connect('localhost', 'root', '', 'qlsv_db') or die ('Can not connect to database');
            mysqli_set_charset($conn, 'utf8');
        }
    }
        
    function disconnect_db() //ngắt kết nối.
    {
        global $conn;
        if($conn){
            mysqli_close($conn);
        }
    }
        
    function get_all_students() //
    {
        global $conn;
        connect_db();
        $sql = "select * from tb_sinhvien";
        $query = mysqli_query($conn, $sql);
        $result = arry();
        if($query){
            while($row = mysqli_fetch_assoc($result)){
                $result[] = $row;
            }
        }
        return $result;
    }
        
    function get_user($user_id){ //lấy user từ user_id.
        global $conn;
        connect_db();
        $sql = "select * from tb_users where id='$user_id'";
        $query = mysqli_query($conn, $sql);
        $result = arry();
        if($query){
            while($row = mysqli_fetch_assoc($result)){
                $result[] = $row;
            }
        }
        return $result;
    }
        
    function dang_nhap($user, $pass){
        global $conn;
        $conn = mysqli_connect('localhost','root','','qlsv_db');
	$sql = "select * from tb_users where username = '$user'";
	$ketqua = mysqli_query($conn,$sql);
        $login = 0;
	if(!$ketqua){
            $login = 0;
	}
	else{
            $dem = mysqli_num_rows($ketqua);
            if($dem <= 0){
		$login = 0;
            }
            else{
		$row = mysqli_fetch_assoc($ketqua);
		if($pass == $row['password']){
                    $login = 1;
                    $_SESSION['user'] = $user;
                    header('Location:http://localhost/qlsv/student_list.php');
                }
		else{
                    $login = 0;
                }
            }
	}
        return $login;
    }
    
    function alert($value)//Cảnh báo.
    {
        echo '<script type="text/javascript">alert("' . $value . '")</script>';
    }
        