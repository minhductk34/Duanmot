<?php
class CartController
{
    public function show()
    {
        //echo 'listCart';
        if (isset($_SESSION["permissions"])) {
            //code

            require_once('view/cart/user/list.php');
        } else {
            require_once('404.php');
        }
    }
    public function add()
    {
        //echo 'addCart';
        //code

        if (isset($_SESSION["permissions"])) {
            //code

            require_once('view/cart/user/add.php');
        } else {
            require_once('404.php');
        }
    }
    public function edit()
    {
        //echo 'edittCart';
        if (isset($_SESSION["permissions"])) {
            //code

            require_once('view/cart/user/update.php');
        } else {
            require_once('404.php');
        }
    }
    public function delete()
    {
        //echo 'deleteCart';
        if (isset($_SESSION["permissions"])) {
            //code

            require_once('view/cart/user/delete.php');
        } else {
            require_once('404.php');
        }
    }
    public function history()
    {
        //echo 'historyCart';
        if (isset($_SESSION["permissions"])) {
            //code

            require_once('view/cart/user/history.php');
        } else {
            require_once('404.php');
        }
    }
}
