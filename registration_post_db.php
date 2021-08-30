<?php
    require_once 'include/header.php';

    session_start();


    if(isset($_POST['sign_up'])){

            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $c_password = $_POST['confirm_password'];  
            
            $_SESSION["alert"] = "";
        
        require_once 'include/db.php';
        $dup = mysqli_query($connection,"SELECT * FROM registration WHERE phone = ' $phone '");
        if( mysqli_num_rows($dup) != 0 ){
                $_SESSION["alert"] = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Error!</strong>This mobile Number was Already Exists.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            // header("Location: registration.php");
            
            $_SESSION["error"] = "";
            if( $password === $c_password ){
                echo "success";
            }
            else{
                $_SESSION["error"] = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Error!</strong>Password and Confirm Password are not same.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                header("Location: registration.php");
            }
        }        
        else{
            $query = "INSERT INTO registration( name, phone, password, c_password) VALUES ( '$name', '$phone', '$password', '$c_password' )";
            $result = mysqli_query($connection, $query);
            echo 'Registration Successful';
            header("Location: ads_list.php");
        }
        
    }
    else{
        echo 'database is not connected';
    }

    

    

    require_once 'include/footer.php';
?>



