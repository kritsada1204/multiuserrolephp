<?php

    require_once 'connection.php';

    session_start();

    if (isset($_POST['btn_login'])) {

        $email = $_POST['txt_email'];
        $password = $_POST['txt_password'];
        $role = $_POST['txt_role'];

        if (empty($email)) {
            $errorMsg[] = "please enter email";
        } else if (empty($password)) {
            $errorMsg[] = "please enter password";

        } else if (empty($role)) {
            $errorMsg[] = "Please select role"
        } else if ($email AND $password AND $role) {
            try {
                $select_stmt = $db->prepare("SELECT email, password, role FROM masterlogin WHERE email = :uemail AND password = :upassword AND role = :urole");
                $select_stmt-> bindParam(":uemail", $email);
                $select_stmt-> bindParam(":upassword", $password);
                $select_stmt-> bindParam(":urole", $role);
                $select_stmt->execute();

                //29:37 while 

            }

        }



    }

?>