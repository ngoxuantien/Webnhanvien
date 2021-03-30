<?php

class User {

    private $id;
    private $name;
    private $password;
    private $date_of_birth;
    private $salary;
    private $position;
    private $votes;
    private $achievements;
    private $image;
    private $gmail;

    function __construct($id, $name, $password, $date_of_birth, $salary, $position, $votes, $achievements, $image,$gmail) {
        $this->id = $id;
        $this->name = $name;
        $this->password = $password;
        $this->date_of_birth = $date_of_birth;
        $this->salary = $salary;
        $this->position = $position;
        $this->votes = $votes;
        $this->achievements = $achievements;
        $this->image = $image;
        $this->gmail=$gmail;
    }
    function getGmail() {
        return $this->gmail;
    }

    function setGmail($gmail) {
        $this->gmail = $gmail;
    }

        function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getImage() {
        return $this->image;
    }

    function setImage($image) {
        $this->image = $image;
    }

    function getName() {
        return $this->name;
    }

    function getPassword() {
        return $this->password;
    }

    function getDate_of_birth() {
        return $this->date_of_birth;
    }

    function getSalary() {
        return $this->salary;
    }

    function getPosition() {
        return $this->position;
    }

    function getVotes() {
        return $this->votes;
    }

    function getAchievements() {
        return $this->achievements;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setDate_of_birth($date_of_birth) {
        $this->date_of_birth = $date_of_birth;
    }

    function setSalary($salary) {
        $this->salary = $salary;
    }

    function setPosition($position) {
        $this->position = $position;
    }

    function setVotes($votes) {
        $this->votes = $votes;
    }

    function setAchievements($achievements) {
        $this->achievements = $achievements;
    }

}
