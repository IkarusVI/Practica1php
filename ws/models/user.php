<?php 

require __DIR__ . '/../interfaces/IToJson.php';
class user implements IToJson{
    private $name;
    private $lastName;
    private $pass;
    private $number;
    private $email;
    private $gender;

    public function __construct($name, $lastName, $pass, $number, $email, $gender){
        $this->name = $name;
        $this->lastName = $lastName;
        $this->pass = $pass;
        $this->number = $number;
        $this->email = $email;
        $this->gender = $gender;
    }

    //GETTERS
    public function getName(){
        return $this->name;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function getPass(){
        return $this->pass;
    }
    public function getNumber(){
        return $this->number;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getGender(){
        return $this->gender;
    }

    //SETTERS

    public function setName($name){
        $this->name = $name;
    }
    public function setLastName($lastName){
        $this->lastName = $lastName;
    }
    public function setPass($pass){
        $this->pass = $pass;
    }
    public function setNumber($number){
        $this->number = $number;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setGender($gender){
        $this->gender = $gender;
    }

    public function toJson(){

        $userData = [
            "name" => $this->getName(),
            "lastName" => $this->getLastName(),
            "pass" => $this->getPass(),
            "number" => $this->getNumber(),
            "email"=>$this->getEmail(),
            "gender"=> $this->getGender(),
        ];

        $json = json_encode($userData, JSON_UNESCAPED_UNICODE);

        return $json;
        
    }

}