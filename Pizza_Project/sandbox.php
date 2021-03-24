<?php 

class User{

    private $email;
    private $name;

    public function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;
    }

    public function login(){
        echo $this->name.' logged in';
    }

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        if(is_string($name) && strlen($name) > 1){
            $this->name = $name;
            return "name has been updated to $name";
        }
        else{
            return 'not a valid name';
        }
    }

}    

    $userOne = new User('Hans',"user@test.com");


    echo $userOne->setName("Neu");
    echo $userOne->getName();

?>