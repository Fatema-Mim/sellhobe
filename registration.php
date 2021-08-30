<?php
    require_once 'include/header.php';
    session_start();   
?>
<div class="container">
    <div class="col-6 m-auto ">
        <div class="card mb-4 mt-3">
            <div class="card-header bg-info text-center">Registration</div>
            <div class="card-body">
                <form action="" method="POST">

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" value="" name="name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Phone</label>
                        <label for="staticEmail" class="col-sm-2 col-form-label">+880</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="phone" value="" name="phone" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="Password" name="password">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Confirm Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                        </div>
                    </div>
                    
                    <br>
                    <button type="submit" class="btn btn-primary" name="sign_up">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    require_once 'include/footer.php'; 
    
    
    if(isset($_POST['sign_up'])){

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $c_password = $_POST['confirm_password']; 


        require_once 'include/db.php';
        $dup = mysqli_query($connection,"SELECT * FROM registration WHERE phone = ' $phone '");
        if( mysqli_num_rows($dup) != 0 ){
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Error!</strong>This mobile Number was Already Exists.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';

            if( $password === $c_password ){
                echo "success";
            }
            else{
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Error!</strong>Password and Confirm Password are not same.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
        }
        else{
            $query = "INSERT INTO registration( name, phone, password, c_password) VALUES ( '$name', '$phone', '$password', '$c_password' )";
            $result = mysqli_query($connection, $query);
            echo 'Registration Successful';
            header("Location: login.php");
        }

    }
?>