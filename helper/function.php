<?php
    function render($text) {
        echo $text;
    }

    function connectMysql() {
        $servername = "localhost";
        $database = "attt";
        $username = "root";
        $password = "";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $conn;
    }

    function insert($value, $conn) {
        $sql = "INSERT INTO posts (name_post, value_post)
        VALUES ('Admin', '".$value."')";
        return mysqli_query($conn, $sql);
    }

    function get($conn, $search = '') {
        $sql = "Select * from posts";
        if(strlen($search) > 0) {
            $sql .= " where name_post = '".$search."'";
        }
        
        return mysqli_query($conn, $sql);
    }

    function search($conn, $search = '') {
        $sql = "Select * from posts";
        if(strlen($search) > 0) {
            $sql .= " where name_post = '".$search."'";
            return mysqli_query($conn, $sql);
        }

        return false;
        
    }
?>