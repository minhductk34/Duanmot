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
        $user = $_SESSION['user'];
        $id_user = $user['id_user'];
        // echo $id_user;
        // $this->add();
        $this->BillDAO->showBill($id_user);
        require_once('view/bill/user/billConfirm.php');
    }
    public function add()
    {

        // var_dump($_REQUEST);
        if (isset($_SESSION["user"])) {
            $userData = $_SESSION["user"];

            // Gán giá trị cho các biến tương ứng
            $id_user =  $userData['id_user'];
            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $full_name = $first_name . ' ' . $last_name;
            $street_address = $_POST["street_address"];
            $apartment = $_POST["apartment"];
            $city = $_POST["city"];

            $address = $street_address . " " . $apartment . " " . $city . " ";

            $phone = $_POST["phone"];
            $email = $_POST["email"];
            $create_at = date("Y-m-d H:i:s", strtotime("now"));

            $type_payment = null;

            $this->BillDAO->createBill($id_user, $phone, $address, $email, $full_name,  $type_payment, $create_at);
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

    public function process()
    {

        if (isset($_SESSION["user"])) {

            if (isset($_POST['checkOut'])) {

                header('Location:index.php?controller=process');
            }
        } else {
            header('Location:index.php?controller=login');
        }
        require_once('view/bill/user/process.php');
    }

    public function checkOut()
    {
        $user = $_SESSION['user'];
        $id_user = $user['id_user'];
        // id gân nhất 
        $id_bill = $this->BillDAO->selectId($id_user);
        // var_dump( $user);

        
        $cart = new CartDAO();
        $cart_ =  $cart->showCart($id_user);
        
        foreach ($cart_ as $cart) {
            var_dump($cart->getQuantity());
            // Lặp qua từng giá trị của $cart->getQuantity(
                $this->BillDAO->addBill_details($id_bill, $cart->getProductId(), $cart->getNameProduct(), $cart->getQuantity(), $cart->getPrice());
                $this->ProductDAO->Check_quantity_pro($cart->getProductId(), $cart->getQuantity());
            
        }

        // Sau khi lặp qua tất cả giá trị của $cart->getQuantity(), xóa sản phẩm từ giỏ hàng
        $this->CartDAO->deleteFromCart($id_user);


        header('Location:index.php?controller=showBill_details');
        // require_once('view/bill/user/checkout.php');
    }

    public function showBill_detail()
    {

        $user = $_SESSION['user'];
        $id_user = $user['id_user'];
        $id_bill =  $this->BillDAO->selectId($id_user);
        $this->BillDAO->showBill_details($id_bill);


        require_once('view/bill/user/checkout.php');
    }

    public function history()
    {
        $userData = $_SESSION["user"];
        // Gán giá trị cho các biến tương ứng
        $id_user =  $userData['id_user'];
        $this->BillDAO->history($id_user);
        require_once('view/bill/user/historyBill.php');
    }
}
