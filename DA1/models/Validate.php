<?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      function isValidPassword($password) {
        // Kiểm tra độ dài mật khẩu
        if (strlen($password) < 8) {
            return false;
        }
    
        // Kiểm tra chứa ít nhất một chữ cái viết hoa
        if (!preg_match('/[A-Z]/', $password)) {
            return false;
        }
    
        // Kiểm tra chứa ít nhất một chữ cái viết thường
        if (!preg_match('/[a-z]/', $password)) {
            return false;
        }
    
        // Kiểm tra chứa ít nhất một số
        if (!preg_match('/[0-9]/', $password)) {
            return false;
        }
    
        // Kiểm tra chứa ít nhất một ký tự đặc biệt
        if (!preg_match('/[\W_]/', $password)) {
            return false;
        }
    
        return true;
    }