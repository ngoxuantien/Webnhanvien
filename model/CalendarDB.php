<?php

include_once 'Database.php';
include_once 'Calendar.php';

class CalendarDB {

    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getList() {

        $sql = "SELECT * FROM lichlam";

        $result = $this->conn->query($sql);
        $arr = [];
        if ($result->num_rows > 0) {
            // output d? li?u trên trang
            while ($row = $result->fetch_assoc()) {

                $calendar = new Calendar($row['id'], $row['name'], $row['image'], $row['day'], $row['time'], $row['place'],$row['Date']);
                array_push($arr, $calendar);
            }
        } else {
            echo "0 results";
        }
        return $arr;

    }

    //ham them
    public function addCalendar($calendar) {
       $id=$calendar->getId();
       $name=$calendar->getName();
       $image=$calendar->getImage();
       $day=$calendar->getDay();
       $time=$calendar->getTime();
       $place=$calendar->getPlace();
       $date=$calendar->getDate();

        $sql = "INSERT INTO lichlam (id,name,image,day,time,place,Date) VALUE ($id,'$name','$image',$day,'$time','$place','$date')";
        $ret = mysqli_query($this->conn, $sql);
        if (!$ret) {
            echo 'khong the them du lieu';
        }
    }

    public function editCalendar($calendar) {
         $id=$calendar->getId();
       $name=$calendar->getName();
       $image=$calendar->getImage();
       $day=$calendar->getDay();
       $time=$calendar->getTime();
       $place=$calendar->getPlace();
       $date=$calendar->getDate();
        $sql = "UPDATE lichlam SET name='$name',image='$image',day=$day,time='$time',place='$place',date='$date' WHERE id= $id";
        $ret = mysqli_query($this->conn, $sql);
        if (!$ret) {
            echo 'khong the them du lieu';
        }

    }

    public function getCalendarById($calendarid) {

        $sql = "SELECT * FROM lichlam";
       // $mid = new User();
        $result = $this->conn->query($sql);
     
        if ($result->num_rows > 0) {
            // output d? li?u trên trang
            while ($row = $result->fetch_assoc()) {
                if ($calendarid == $row['id']) {
                    $calendar = new Calendar($row['id'], $row['name'], $row['image'], $row['day'], $row['time'], $row['place'],$row['Date']);
                    $mid = $calendar;
                }
            }
        } else {
            echo "0 results";
        }
        return $mid;
    }
     public function getCalendarByName($calendarname) {

        $sql = "SELECT * FROM lichlam";
       // $mid = new User();
        $result = $this->conn->query($sql);
        $arr = [];
        if ($result->num_rows > 0) {
            // output d? li?u trên trang
           while ($row = $result->fetch_assoc()) {
                if ($calendarname == $row['name']) {
                    $calendar = new Calendar($row['id'], $row['name'], $row['image'], $row['day'], $row['time'], $row['place'],$row['Date']);
                    array_push($arr, $calendar);
                }
            }
             
        } else {
            echo "0 results";
        }
        return $arr;
    }

    public function deleteCalendar($calendarid) {
        $sql = "DELETE FROM lichlam WHERE id =$calendarid";
        $ret = mysqli_query($this->conn, $sql);
        if (!$ret) {
            echo 'khong the them du lieu';
        }
    }

}

?>