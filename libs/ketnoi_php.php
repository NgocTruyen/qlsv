<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
        <?php
        // put your code here
            if(!empty($_POST['edit_student'])){
                echo "123";
            }
            if(isset($_POST['edit_student'])){
                echo '321';
            }
            
        ?>
        <input type="submit" name="btn" value="Submit"/>
        <input type="submit" name="edit_student" value="Lưu"/>
        </form>
    </body>
</html>
