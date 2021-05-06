
<?php

require 'libs/student.php';
 
// Thực hiện xóa
$id = isset($_POST['id']) ? (int)$_POST['id'] : '';
if ($id){
    delete_student($id);
}
 
// Trở về trang danh sách
header("location: student_list.php");

?>