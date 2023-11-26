<?php
require_once('DAO/CartDAO.php');
require_once('DAO/ProductDAO.php');
require_once('DAO/BillDAO.php');
class BillController
{

    private $CartDAO;
    private $ProductDAO;
    private $BillDAO;

    public function __construct()
    {
        $this->CartDAO = new CartDAO();
        $this->ProductDAO = new ProductDAO();
        $this->BillDAO = new BillDAO();
    }
    public function show()
    {
        $user = $_SESSION['username'];
        $id_user = $user['id_user'];
        // echo $id_user;

        $this->BillDAO->showBill($id_user);
        require_once('view/bill/user/billConfirm.php');
    }
    public function add()
    {

        // var_dump($_REQUEST);
        if (isset($_SESSION["username"])) {
            $userData = $_SESSION["username"];

            // Gán giá trị cho các biến tương ứng
            $id_user =  $userData['id_user'];
            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $full_name = $first_name . ' ' . $last_name;
            $street_address = $_POST["street_address"];
            $apartment = $_POST["apartment"];
            $city = $_POST["city"];
            $country = $_POST["country"];
            $address = $street_address . " " . $apartment . " " . $city . " " . $country;

            $phone = $_POST["phone"];
            $email = $_POST["email"];

            $type_payment = null;
            // $quantity = null;
            // $total = null;
            // $id_product = null;
            $this->BillDAO->createBill($id_user, $phone, $address, $email, $full_name,  $type_payment);
            header('Location:index.php?controller=billConfirm');

        } else {
            header('Location:index.php?controller=login');
        }
        // require_once('view/bill/user/checkout.php');
    }

    public function edit()
    {
        //echo 'editBill';
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
        //echo 'statusBill';
        if (isset($_SESSION["permissions"])) {
            if ($_SESSION['permissions'] == 1) {
                //code 

                require_once('view/bill/admin/delete.php');
            }
        } else {
            require_once('404.php');
        }
    }

    public function checkout()
    {
        //code hereư
        // var_dump($_SESSION['username']);

        if (isset($_SESSION["username"])) {


            if (isset($_POST['checkOut'])) {

                header('Location:index.php?controller=checkout');
            }
        } else {
            header('Location:index.php?controller=login');
        }
        require_once('view/bill/user/checkout.php');
    }
}
