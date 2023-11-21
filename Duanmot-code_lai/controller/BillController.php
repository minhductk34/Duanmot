<?php

class BillController
{
    public function show()
    {
        echo 'showBill';
        if (isset($_SESSION["permissions"])) {
            if ($_SESSION['permissions'] == 1) {
                //code 
                require_once('view/bill/admin/list.php');
            } elseif ($_SESSION['permissions'] == 2) {
                //code
                require_once('view/bill/staff/list.php');
            } else {
                //code
                require_once('view/bill/user/list.php');
            }
        } else {
            require_once('404.php');
        }
    }
    public function add()
    {
        return __METHOD__;
    }
    public function edit()
    {
        echo 'editBill';
        if (isset($_SESSION["permissions"])) {
            if ($_SESSION['permissions'] == 1) {
                //code 

                require_once('view/bill/admin/update.php');
            } else {
                require_once('404.php');
            }
        } else {
            require_once('404.php');
        }
    }
    public function status()
    {
        echo 'statusBill';
        if (isset($_SESSION["permissions"])) {
            if ($_SESSION['permissions'] == 1) {
                //code 

                require_once('view/bill/admin/delete.php');
            }
        } else {
            require_once('404.php');
        }
    }
}
