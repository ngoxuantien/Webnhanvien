<?php

include_once 'Database.php';
include_once 'User.php';

class UserDB {

    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getList() {

        $sql = "SELECT * FROM users";

        $result = $this->conn->query($sql);
        $arr = [];
        if ($result->num_rows > 0) {
            // output d? li?u trên trang
            while ($row = $result->fetch_assoc()) {

                $user = new User($row['id'], $row['name'], $row['password'], $row['date_of_birth'], $row['salary'], $row['position'], $row['votes'], $row['achievements'], $row['image'], $row['email']);
                array_push($arr, $user);
            }
        } else {
            echo "0 results";
        }
        return $arr;

    }

    //ham them
    public function addUser($user) {
        $id = $user->getId();
        $name = $user->getName();
        $password = $user->getPassword();
        $date_of_birth = $user->getDate_of_birth();
        $salary = $user->getSalary();
        $position = $user->getPosition();
        $votes = $user->getVotes();
        $achievements = $user->getAchievements();
        $gmail = $user->getGmail();
$image=$user->getImage();

        $sql = "INSERT INTO users (id,name,password,date_of_birth,salary,position,votes,achievements,email,image) VALUE ($id,'$name','$password','$date_of_birth',$salary,'$position',$votes,'$achievements','$gmail','$image')";
        $ret = mysqli_query($this->conn, $sql);
        if (!$ret) {
            echo 'khong the them du lieu';
        }
    }

    public function editUser($user) {
         $id = $user->getId();
        $name = $user->getName();
        $password = $user->getPassword();
        $date_of_birth = $user->getDate_of_birth();
        $salary = $user->getSalary();
        $position = $user->getPosition();
        $votes = $user->getVotes();
        $achievements = $user->getAchievements();
        $gmail = $user->getGmail();
        $image=$user->getImage();
        $sql = "UPDATE users SET name='$name',password='$password',date_of_birth='$date_of_birth',salary=$salary,position='$position',votes=$votes,achievements='$achievements',email='$gmail',image='$image' WHERE id= $id";
        $ret = mysqli_query($this->conn, $sql);
        if (!$ret) {
            echo 'khong the them du lieu';
        }

    }

    public function getUserById($userId) {

        $sql = "SELECT * FROM users";
       // $mid = new User();
        $result = $this->conn->query($sql);
        $arr = [];
        if ($result->num_rows > 0) {
            // output d? li?u trên trang
            while ($row = $result->fetch_assoc()) {
                if ($userId == $row['id']) {
                    $user = new User($row['id'], $row['name'], $row['password'], $row['date_of_birth'], $row['salary'], $row['position'], $row['votes'], $row['achievements'], $row['image'], $row['email']);
                    $mid = $user;
                }
            }
        } else {
            echo "0 results";
        }
        return $mid;
    }
     public function getUserByName($userName) {

        $sql = "SELECT * FROM users";
       // $mid = new User();
        $result = $this->conn->query($sql);
        $arr = [];
        if ($result->num_rows > 0) {
            // output d? li?u trên trang
            while ($row = $result->fetch_assoc()) {
                if ($userName == $row['name']) {
                    $user = new User($row['id'], $row['name'], $row['password'], $row['date_of_birth'], $row['salary'], $row['position'], $row['votes'], $row['achievements'],$row['image'], $row['email']);
                    array_push($arr, $user);
                }
            }
        } else {
            echo "0 results";
        }
        return $arr;
    }

    public function deleteUser($userId) {
        $sql = "DELETE FROM users WHERE id =$userId";
        $ret = mysqli_query($this->conn, $sql);
        if (!$ret) {
            echo 'khong the them du lieu';
        }
    }

}

?>