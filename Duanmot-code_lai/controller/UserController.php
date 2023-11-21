<?php
class UserController
{
    public function index()
    {
        if (isset($_COOKIE["permissions"])) {
            $permissions = $_COOKIE['permissions'];

            if ($permissions == 1) {
                $LoginDAO = new LoginDAO();
                $users = $LoginDAO->show();
                require_once('view/user/useradmin.php');
            } elseif ($permissions == 2) {
                $LoginDAO = new LoginDAO();
                $users = $LoginDAO->show();
                require_once('view/user/userstaff.php');
            } else {
                require_once('view/user/user.php');
            }
        }
    }
}