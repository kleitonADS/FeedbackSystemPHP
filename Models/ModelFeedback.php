<?php

require_once'Conection/dbconnect.php';

/**
 * Enter description here ...
 * @author Kleiton Souza
 * @package Model
 * @subpackage
 */
class ModelFeedback extends dbconnect  {

    private $intIdfeedback;       // Inteiro
    private $strName;             // String
    private $strEmail;            // String
    private $strDate;             // DateTime
    private $strfeedback;         // String
    private $strStatus;           // bolean
    private $strCheck;            // bolean

    #gets e sets da classe feedback

    // ID FEEDBACK
    public function setIdfeedback($intIdfeedback) {
        $this->$intIdfeedback = trim($intIdfeedback);
    }

    public function getIdfeedback() {
        return $this->$intIdfeedback;
    }

    // NAME
    public function setName($strName) {
        $this->$strName = trim($strName);
    }

    public function getName() {
        return $this->$strName;
    }

    // EMAIL
    public function setEmail($strEmail) {
        $this->$strEmail = trim($strEmail);
    }

    public function getEmail() {
        return $this->$$strEmail;
    }

    // FEEDBACK
    public function setFeedback($strFeedback) {
        $this->$strFeedback = trim($strFeedback);
    }

    public function getFeedback() {
        return $this->$strFeedback;
    }

    // DATE
    public function setDate($strDate) {
        $this->$strDate = trim($strDate);
    }

    public function getDate() {
        return $this->$strDate;
    }

    // STATUS
    public function setStatus($strStatus) {
        $this->$strStatus = trim($strStatus);
    }

    public function getStatus() {
        return $this->$strStatus;
    }

    // CHECK
    public function setCheck($strCheck) {
        $this->$strCheck = trim($strCheck);
    }

    public function getCheck() {
        return $this->$strCheck;
    }


}
