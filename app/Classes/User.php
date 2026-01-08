<?php 

namespace App\Classes;

class User
{
    protected $name;
    protected $email;
    private $password;

    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->setPassword($password);
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setPassword($password)
    {
        // Simulasi hash sederhana
        $this->password = md5($password);
    }

    public function verifyPassword($input)
    {
        return $this->password === md5($input);
    }
}
