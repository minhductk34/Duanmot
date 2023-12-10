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
        if (isset($_SESSION["user"])) {
            $userData = $_SESSION["user"];
            $id_user = $userData['id_user'];

            // Sanitize and validate input data
            $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $street_address = filter_input(INPUT_POST, 'street_address', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $apartment = filter_input(INPUT_POST, 'apartment', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $phone = preg_replace("/[^0-9+() -]/", "", $_POST['phone']);
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

            // Validate and combine address components
            $full_name = $first_name . ' ' . $last_name;
            $address = $street_address . " " . $apartment . " " . $city;

            $create_at = date("Y-m-d H:i:s", strtotime("now"));
            $type_payment = null;

            // Create the bill
            $this->BillDAO->createBill($id_user, $phone, $address, $email, $full_name, $type_payment, $create_at);

            // Redirect to the confirmation page
            header('Location: index.php?controller=billConfirm');
            exit();
        } else {
            // Redirect to the login page if the user is not logged in
            header('Location: index.php?controller=login');
            exit();
        }
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
        // Check if the user is logged in and has the 'permissions' session variable
        if (isset($_SESSION['permissions'])) {
            // Check if the user has admin permission
            if ($_SESSION['permissions'] == 1) {
                // Admin-specific code
                require_once('view/bill/admin/delete.php');
                return;
            }
        }

        // If user is not logged in or doesn't have admin permission, show a 404 page
        require_once('404.php');
    }


    public function process()
    {
        // Check if the user is logged in
        if (isset($_SESSION["user"])) {
            // Check if the request is a POST request
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Check for specific POST data (e.g., button click)
                if (isset($_POST['checkOut'])) {
                    // Handle the checkout process (if needed)
                    // Redirect to another controller or perform necessary actions
                    header('Location: index.php?controller=checkout');
                    exit();
                }
            }

            // User is logged in but not performing checkout, render the process view
            require_once('view/bill/user/process.php');
        } else {
            // User is not logged in, redirect to the login page
            header('Location: index.php?controller=login');
            exit();
        }
    }


    public function checkOut()
    {
        try {
            $user = $_SESSION['user'];
            $id_user = $user['id_user'];
            $id_bill = $this->BillDAO->selectId($id_user);
            $cartItems = $this->CartDAO->showCart($id_user);

            foreach ($cartItems as $cartItem) {
                $productId = $cartItem->getProductId();
                $quantityInCart = $cartItem->getQuantity();

                // Check if there is enough quantity in the inventory
                $availableQuantity = $this->ProductDAO->getAvailableQuantity($productId);

                if ($availableQuantity >= $quantityInCart) {
                    // If there is enough quantity, proceed with adding to the bill and updating the inventory
                    $this->BillDAO->addBill_details(
                        $id_bill,
                        $productId,
                        $cartItem->getNameProduct(),
                        $quantityInCart,
                        $cartItem->getPrice(),
                        $cartItem->getId()
                    );

                    $this->ProductDAO->Check_quantity_pro($productId, $quantityInCart);
                } else {
                    $this->CartDAO->deleteFromCart($productId);
                    header('Location: index.php?message=emptyProduct');
                    return;
                }
            }

            // If all checks pass, delete items from the cart and redirect to the bill details page
            $this->CartDAO->delete($id_user);
            header('Location: index.php?controller=showBill_details');
        } catch (Exception $e) {
            // Handle exceptions, log errors, or display a generic error message
            echo "An error occurred during the checkout process.";
        }
    }

    public function showBill_detail()
    {
        // Check if the user is logged in
        if (!isset($_SESSION["user"])) {
            // Redirect to the login page or show an error message
            header('Location: index.php?controller=login');
            exit();
        }

        $user = $_SESSION['user'];
        $id_user = $user['id_user'];

        // Get the bill ID for the user
        $id_bill =  $this->BillDAO->selectId($id_user);

        // Check if $id_bill is valid before proceeding
        if (!$id_bill) {
            // Redirect to an error page or show an error message
            header('Location: index.php?controller=error');
            exit();
        }

        // User is logged in and $id_bill is valid, proceed with showing bill details
        $this->BillDAO->showBill_details($id_bill);

        // Include the checkout view
        require_once('view/bill/user/checkout.php');
    }


    public function history()
    {
        // Check if the user is logged in
        if (!isset($_SESSION["user"])) {
            // Redirect to the login page or show an error message
            header('Location: index.php?controller=login');
            exit();
        }
        // User is logged in, proceed with retrieving and displaying history
        $userData = $_SESSION["user"];
        $id_user =  $userData['id_user'];
        $billDetails = $this->BillDAO->showBillDetails($id_user);

        // Pass the retrieved data to the view
        require_once('view/bill/user/history.php');
    }


    public function details_history()
    {
        // Check if the user is logged in
        if (!isset($_SESSION["user"])) {
            // Redirect to the login page or show an error message
            header('Location: index.php?controller=login');
            exit();
        }

        $id_bill = isset($_GET['id_bill']) ? $_GET['id_bill'] : null;

        // Validate $id_bill to ensure it is a valid integer
        if (!is_numeric($id_bill) || $id_bill <= 0) {
            // Redirect to an error page or show an error message
            header('Location: index.php?controller=error');
            exit();
        }

        // User is logged in and $id_bill is valid, proceed with retrieving and displaying details
        $this->BillDAO->showBill_details($id_bill);
        require_once('view/bill/user/historyBill.php');
    }




    public function processReturn()
    {
        if (isset($_GET['id_bill'])) {
            $id_bill = $_GET['id_bill'];
            // Kiểm tra xem đơn hàng có tồn tại không
            if ($this->BillDAO->isOrderValid($id_bill)) {
                // Lấy thông tin chi tiết đơn hàng
                $orderDetails = $this->BillDAO->getOrderDetails($id_bill);

                foreach ($orderDetails as $orderDetail) {
                    // Kiểm tra xem chi tiết hóa đơn có trả hàng không
                    if (!$orderDetail['returned']) {
                        // Cập nhật số lượng hàng trong kho hoặc bảng sản phẩm
                        $this->BillDAO->updateProductQuantity($orderDetail['id_product'], $orderDetail['quantity'], $id_bill);
                    }
                }

                $success = true; // Hoặc false tùy thuộc vào kết quả xử lý

                // Nhúng mã JavaScript trực tiếp vào mã PHP để hiển thị thông báo

            }

            // Chuyển hướng về trang processReturn
            header('Location: index.php?controller=historyBill');
            exit(); // Ensure that no further code is executed after the redirection
        }
    }
}
