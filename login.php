<?php
session_start();
    require_once 'include/header.php';   
?>
<div class="container">
    <div class="col-6 m-auto ">
        <div class="card mb-4 mt-3">
            <div class="card-header bg-info text-center">Log In</div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Phone</label>
                        <label for="staticEmail" class="col-sm-2 col-form-label">+880</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="phone" value="" name="phone">
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="Password" name="password">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="login">Log In</button>
                    
                    <a href="registration.php">SignUp</a>
                </form>

                <?php
                    if(isset($_POST['login'])){
                        $phone = $_POST['phone'];
                        $password = $_POST['password'];

                        require_once 'include/db.php';
                        $hello = mysqli_query($connection,"SELECT * FROM registration WHERE phone = ' $phone '");

                        while( $row = mysqli_fetch_assoc($hello))
                        if( $phone === $row['phone'] ){
                            if( $password === $row['password']){
                                $_SESSION['phone_from_db']=$phone;
                                // echo "successfully Login";

                                header('location: mypage.php?register_number'.$phone);
                            }
                            else{
                                echo "incorrect Password" ;
                            }
                        }
                        else{
                            echo "Incorrect Phone Number";
                        }

                    }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
    require_once 'include/footer.php';   
?>
