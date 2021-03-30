<?php

include_once 'Database.php';
include_once 'CtUser.php';

class CtUserDB {

    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getList() {

        $sql = "SELECT * FROM ctusers";

        $result = $this->conn->query($sql);
        $arr = [];
        if ($result->num_rows > 0) {
            // output d? li?u trên trang
            while ($row = $result->fetch_assoc()) {

                $ctuser = new CtUser($row['id'], $row['name'], $row['language'], $row['livein'], $row['story'], $row['experience'],$row['nationality'],$row['image']);
                array_push($arr, $ctuser);
            }
        } else {
            echo "0 results";
        }
        return $arr;

    }

    //ham them
    public function addCtUser($ctuser) {
       $id=$ctuser->getId();
       $name=$ctuser->getName();
       $language=$ctuser->getLanguage();
       $livein=$ctuser->getLivein();
       $story=$ctuser->getStory();
       $experience=$ctuser->getExperience();
       $nationality=$ctuser->getNationality();
       $image=$ctuser->getImagebig();
       

        $sql = "INSERT INTO ctusers (id,name,language,livein,story,experience,nationality,image) VALUE ($id,'$name','$language','$livein','$story','$experience','$nationality','$image')";
        $ret = mysqli_query($this->conn, $sql);
        if (!$ret) {
            echo 'khong the them du lieu';
        }
    }

    public function editUser($ctuser) {
        $id=$ctuser->getId();
       $name=$ctuser->getName();
       $language=$ctuser->getLanguage();
       $livein=$ctuser->getLivein();
       $story=$ctuser->getStory();
       $experience=$ctuser->getExperience();
       $nationality=$ctuser->getNationality();
       $image=$ctuser->getImagebig();
       
        $sql = "UPDATE ctusers SET name='$name',language='$language',livein='$livein',story='$story',experience='$experience',nationality='$nationality',image='$image' WHERE id= $id";
        $ret = mysqli_query($this->conn, $sql);
        if (!$ret) {
            echo 'khong the them du lieu';
        }

    }

    public function getUserById($userId) {

        $sql = "SELECT * FROM ctusers";
       // $mid = new User();
        $result = $this->conn->query($sql);
        $arr = [];
        if ($result->num_rows > 0) {
            // output d? li?u trên trang
            while ($row = $result->fetch_assoc()) {
                if ($userId == $row['id']) {
                    $ctuser = new CtUser($row['id'], $row['name'], $row['language'], $row['livein'], $row['story'], $row['experience'],$row['nationality'],$row['image']);
                   
                }
            }
        } else {
            echo "0 results";
        }
        return $ctuser;
    
    }
     public function getUserByName($userName) {

        $sql = "SELECT * FROM ctusers";
       // $mid = new User();
        $result = $this->conn->query($sql);
        $arr = [];
        if ($result->num_rows > 0) {
            // output d? li?u trên trang
            while ($row = $result->fetch_assoc()) {
                if ($userName == $row['name']) {
                    $ctuser = new CtUser($row['id'], $row['name'], $row['language'], $row['livein'], $row['story'], $row['experience'],$row['nationality'],$row['image']);
                     array_push($arr,$ctuser);
                }
            }
        } else {
            echo "0 results";
        }
        return $arr;
    }

    public function deleteUser($userId) {
        $sql = "DELETE FROM ctusers WHERE id =$userId";
        $ret = mysqli_query($this->conn, $sql);
        if (!$ret) {
            echo 'khong the them du lieu';
        }
    }

}

?>