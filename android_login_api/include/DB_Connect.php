<?php
class DB_Connect {
 
    // constructor
    function __construct() {
         
    }
 
    // destructor
    function __destruct() {
        // $this->close();
    }
 
    // Connecting to database
    public function connect() {
        require_once 'include/Config.php';
        // connecting to mysql
        $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysqli_connect_error());
       
        // selecting database
        mysqli_select_db($con,DB_DATABASE) or die(mysqli_connect_error());
 
        // return database handler
        return $con;
    }
 
    // Closing database connection
    public function close() {
        mysqli_close();
    }
 
}
 
?>