<?php
class Database {
    const dbHost = 'localhost';
    const dbName = 'duanmot';
    const dbUser = 'root';
    const dbPass = '';
  

    public function connect() {
        $connect = mysqli_connect(self::dbHost, self::dbUser, self::dbPass, self::dbName);
        mysqli_set_charset($connect, 'utf8');
        if (mysqli_connect_errno() ===0) {
            return$connect;
        }
        return false;
    }
}

?>