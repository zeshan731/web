<?php

class Connection{
    public $server,$username,$password;

    public function__construct($server,$username,$password)
    {
        $this->server = $server;
        $this->username = $username;
        $this->password = $password;

    }

public function connectDatabase()
{
    $connection = new mysqli($this->server,
    $this->username,
    $this->password
);

if($connection->connect_error){
    die('connection failed : ' . $connection->connect_error)
}
echo 'connection successful';

}

public function closeConnection($connection)
{
$connection = close
}
$servername = 'localhost';
$username = 'root';
$password = '';





}

$conn = new Connection(
    'localhost','root',''
);



$conn->connectDatabae()

public function__construct() 

$connection