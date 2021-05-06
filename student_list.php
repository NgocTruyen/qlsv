<?php
require 'libs/student.php';
$students = get_all_students();
disconnect_db();
?>
<html>
    <head>
        <title>Danh sách sinh viên</title>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <form action="" method="post" enctype="multipart/form-data">
			<table class="table">
			<tbody>
				<tr class="success">
					<th colspan="5"><h3>Danh sách sinh viên: </h3> </th>
				</tr>
				<tr class="info">
					<th >Mã sinh viên</th>
					<th >Tên sinh viên</th>
					<th >Giới tính</th>
					<th >Năm sinh</th>
					<th >Chỉnh sửa</th>
				</tr>
				<?php foreach ($students as $item){ ?>
				<tr class="danger">
                <td><?php echo $item['sv_id']; ?></td>
                <td><?php echo $item['sv_name']; ?></td>
                <td><?php echo $item['sv_sex']; ?></td>
                <td><?php echo $item['sv_birthday']; ?></td>
                <td>
                    <form method="post" action="student_delete.php">
						<input onclick="window.location = 'student_add.php'" type="button" value="Thêm" class="btn btn-danger"/>
                        <input onclick="window.location = 'student_edit.php?id=<?php echo $item['sv_id']; ?>'" type="button" value="Sửa" class="btn btn-danger"/>
                        <input type="hidden" name="id" value="<?php echo $item['sv_id']; ?>"/>
                        <input onclick="return confirm('Bạn có chắc muốn xóa sinh viên <?php echo $item['sv_name'];?> không?');" type="submit" name="delete" value="Xóa" class="btn btn-danger"/>
                    </form>
                </td>
            </tr>
            <?php } ?>
			</tbody>
			</table>
        </form>
        
    </body>
</html>