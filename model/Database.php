<?php
class Database{

public function __construct(
        ) {
    
}

public function connect(){
 $conn=mysqli_connect("localhost","thweb3","tien99bnhl","baithuchanh3");
mysqli_query($conn,"SET NAMES 'utf8'");
if (mysqli_connect_error())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{    }
 return $conn;
    }
   
}


?>