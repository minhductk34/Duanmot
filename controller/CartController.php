<?php
require_once('DAO/CartDAO.php');
require_once('DAO/ProductDAO.php');
require_once('DAO/BillDAO.php');
class CartController
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
        if (isset($_SESSION['user']) && $_SESSION['user']) {
            $user = $_SESSION['user'];
            $id_user = $user['id_user'];

            // Retrieve cart items
            $cartItems = $this->CartDAO->showCart($id_user);

            // Check if the cart is empty
            if (empty($cartItems)) {
                // Redirect to the homepage with a message if the cart is empty
                header('Location: index.php?message=emptyCart');
                exit(); // Ensure script stops after redirect
            }

            // Display cart items
            require_once('view/cart/user/list.php');
        } else {
            // Redirect to the login page if the user is not logged in
            header('Location: index.php?controller=login');
            exit();
        }
    }




    public function add()
    {
        if (isset($_SESSION['user']) && $_SESSION['user']) {
            if (!empty($_GET['id'])) {
                $user = $_SESSION['user'];
                $id_user = $user['id_user'];

                $userId = $id_user;
                $typePayment = '';

                // Sanitize and validate input
                $productId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

                // Add to cart
                $this->CartDAO->addToCart($userId, $productId);

                // Redirect to the appropriate page
                header('Location: index.php?controller=addCart');
                exit();
            } else {
                // Show a JavaScript alert if 'id' is not set
                echo '<script>alert("Product ID is missing.");</script>';
                header('Location: index.php?controller=listCart');

            }
        } else {
            // Show a JavaScript alert if the user is not logged in
            echo '<script>alert("Please log in to add products to your cart.");</script>';
            header('Location: index.php?controller=login');
        }
    }


    public function delete()
    {
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id'];
            $user = $_SESSION['user'];
            $id_user = $user['id_user'];

            // Delete from cart
            $this->CartDAO->deleteFromCart($id);

            // Redirect to the cart page
            header('Location: index.php?controller=listCart');
            exit();
        } else {
            // Handle the case when 'id' is not set or empty
            // You may want to redirect or show an error message
            // For example, header('Location: index.php?controller=listCart&error=1');
        }
    }
}
