<?php
class CtUser{
    private $id;
    private $name;
    private $language;
    private $livein;
    private $story;
    private $experience;
    private $nationality;
    private $imagebig;
    function __construct($id, $name, $language, $livein, $story, $experience,$nationality,$imagebig) {
        $this->id = $id;
        $this->name = $name;
        $this->language = $language;
        $this->livein = $livein;
        $this->story = $story;
        $this->experience = $experience;
        $this->nationality=$nationality;
        $this->imagebig=$imagebig;
    }
    function getNationality() {
        return $this->nationality;
    }

    function getImagebig() {
        return $this->imagebig;
    }

    function setNationality($nationality) {
        $this->nationality = $nationality;
    }

    function setImagebig($imagebig) {
        $this->imagebig = $imagebig;
    }

        function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getLanguage() {
        return $this->language;
    }

    function getLivein() {
        return $this->livein;
    }

    function getStory() {
        return $this->story;
    }

    function getExperience() {
        return $this->experience;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setLanguage($language) {
        $this->language = $language;
    }

    function setLivein($livein) {
        $this->livein = $livein;
    }

    function setStory($story) {
        $this->story = $story;
    }

    function setExperience($experience) {
        $this->experience = $experience;
    }


}



?>