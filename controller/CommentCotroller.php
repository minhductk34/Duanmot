<?php
// require_once('DAO/CartDAO.php');
// require_once('DAO/ProductDAO.php');
require_once('DAO/CommentDAO.php');
class CommentController
{
    private $CommentDAO;

    public function __construct()
    {
        $this->CommentDAO = new CommentDAO();
        // $this->ProductDAO = new ProductDAO();
        // $this->BillDAO = new BillDAO();
    }
   
    public function add()
{
    // Check if the user is logged in
    if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
        $id_user = $_SESSION['user']['id_user'];
        $id_product = isset($_GET['id_product']) ? intval($_GET['id_product']) : 0;
        $content = isset($_POST['content']) ? htmlspecialchars($_POST['content']) : '';
        $create_at = date("Y-m-d H:i:s", strtotime("now"));
        $rate = '';  // You might want to handle rating input appropriately

        // Validate if the required inputs are provided
        if ($id_user && $id_product && $content !== '') {
            // Add the comment
            $result = $this->CommentDAO->add($id_user, $id_product, $content, $create_at, $rate);

            if ($result) {
                // Comment added successfully, redirect or display a success message
                header('Location: index.php?controller=product_details&id=' . $id_product);
                exit();
            } else {
                // Handle the case when adding the comment fails (e.g., database error)
                echo "Failed to add the comment. Please try again.";
            }
        } else {
            // Handle the case when required inputs are missing or invalid
            echo "Invalid input. Please provide the necessary information.";
        }
    } else {
        // User not logged in, handle accordingly (e.g., redirect to login)
        header('Location: index.php?controller=login');
        exit();
    }
}


public function show()
{
    // Validate and sanitize input
    $id_pro = isset($_POST['id_pro']) ? intval($_POST['id_pro']) : 0;

    // Validate if the required input is provided
    if ($id_pro) {
        // Fetch comments for the specified product
        $comments = $this->CommentDAO->show($id_pro);

        // Pass the comments to a view for rendering
        // Example: require_once('view/comment/show.php');
        // You would need to create a suitable view file to display the comments
        // The view file could loop through $comments and display each comment
    } else {
        // Handle the case when required input is missing or invalid
        echo "Invalid input. Please provide the necessary information.";
        // You might want to redirect or display an error message
    }
}

    
    
}
