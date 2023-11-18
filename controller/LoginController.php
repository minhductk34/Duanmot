<?php
class User {
    private $id_user;
    private $username;
    private $password;
    private $email;
    private $number_phone;
    private $address;

    public function __construct($id_user, $username, $password, $email, $number_phone, $address) {
        $this->id_user = $id_user;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->number_phone = $number_phone;
        $this->address = $address;
    }

    public static function register($id_user, $username, $password, $email, $number_phone, $address) {
        return new User($id_user, $username, $password, $email, $number_phone, $address);
    }

    // Xác thực người dùng (thực hiện kiểm tra trong cơ sở dữ liệu)
    public function authenticate($enteredPassword) {
        return $enteredPassword === $this->password;
    }

    public function getIdUser() {
        return $this->id_user;
    }

    public function setIdUser($id_user) {
        $this->id_user = $id_user;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getNumberPhone() {
        return $this->number_phone;
    }

    public function setNumberPhone($number_phone) {
        $this->number_phone = $number_phone;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }
}
?>
