<?php 
 class Calendar{
     private $id;
     private $name;
     private $image;
     private $day;
     private $time;
     private $place;
     private $date;
             function __construct($id, $name, $image, $day, $time, $place,$date) {
         $this->id = $id;
         $this->name = $name;
         $this->image = $image;
         $this->day = $day;
         $this->time = $time;
         $this->place = $place;
         $this->date=$date;
     }
     function getDate() {
         return $this->date;
     }

     function setDate($date) {
         $this->date = $date;
     }

          function getId() {
         return $this->id;
     }

     function getName() {
         return $this->name;
     }

     function getImage() {
         return $this->image;
     }

     function getDay() {
         return $this->day;
     }

     function getTime() {
         return $this->time;
     }

     function getPlace() {
         return $this->place;
     }

     function setId($id) {
         $this->id = $id;
     }

     function setName($name) {
         $this->name = $name;
     }

     function setImage($image) {
         $this->image = $image;
     }

     function setDay($day) {
         $this->day = $day;
     }

     function setTime($time) {
         $this->time = $time;
     }

     function setPlace($place) {
         $this->place = $place;
     }


 }


?>