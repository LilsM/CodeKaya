
<?php
//database connection
//constant variables
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DBNAME", "code_kaya");

function openConn(){
    //database connection
    $conn = new mysqli(HOSTNAME, USERNAME, PASSWORD, DBNAME) or die("Connection Failed");
    //successful connection
	return $conn;
}
function closeConn($conn){
    $conn->close();
}

?>