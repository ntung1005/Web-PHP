<?php 

class DB {

    public function connect($host, $username, $password, $dbname) {
        $conn = new mysqli($host, $username, $password,$dbname);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        };
        var_dump($conn);
        return $conn;
    }

    static function select($column, $table) {
        $query = `SELECT.$column. FROM .$table`;
        return $query;
    }
}