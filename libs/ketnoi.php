<?php

    global $conn;

    function connect_db()
    {
        global $conn;
        
        if(!conn){
            $conn = mysqli_connect('localhost', 'root', '', 'qlsv_db') or die ('Can not connect to database');
            mysqli_set_charset($conn, 'utf8');
        }
    }
    
    function disconnect_db()
    {
        global $conn;
        if($conn){
            mysqli_close($conn);
        }
    }
    
    function get_all_users()
    {
        global $conn;
        connect_db();
        $sql = "select * from users";
        $query = mysqli_query($conn, $sql);
        $result = arry();
        if($query){
            while($row = mysqli_fetch_assoc($result)){
                $result[] = $row;
            }
        }
        return $result;
    }
    
    function get_user($user_id){
        
    }
    