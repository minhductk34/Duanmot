<?php
class Login
{
    public $id_userser;
    public $username;
    public $password;
    public $email;
    public $number_phone;
    public $address;
    public $status;
    public $permissions;
    public $full_name;

    public function __construct($id_userser, $username, $password, $email, $number_phone, $address, $status, $permissions, $full_name)
    {
        $this->id_userser = $id_userser;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->number_phone = $number_phone;
        $this->address = $address;
        $this->status = $status;
        $this->permissions = $permissions;
        $this->full_name = $full_name;
    }
}

class Permissions
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return $this->name;
    }
}