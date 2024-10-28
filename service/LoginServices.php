<?php
    
    class LoginServices {
        
        public static function loginSubmit($userEmail, $password) {
            $db = new DbConnect();
            $conn = $db->getConnection();

            $userEmailParam = mysqli_real_escape_string($conn, $userEmail);
            $passwordParam = mysqli_real_escape_string($conn, $password);

            $selecLoginSql = "SELECT * FROM users WHERE email = '$userEmailParam' AND password = '$passwordParam'";
            $result = mysqli_query($conn, $selecLoginSql);
            $row = mysqli_fetch_assoc($result);
            $count = mysqli_num_rows($result);
            if ($count == 1) {
                $_SESSION['login'] = true;
                $_SESSION['email'] = $row['email'];
                return true;
            } else {
                return false;
            }
        }
        
        

    }
?>