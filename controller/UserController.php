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
                include('view/user/useradmin.php');
            } elseif ($permissions == 2) {
                $LoginDAO = new LoginDAO();
                $users = $LoginDAO->show();
                include('view/user/userstaff.php');
            } else {
                include('view/user/user.php');
            }
        }
    }
}