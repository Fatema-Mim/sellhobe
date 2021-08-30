<?php
session_start();
    require_once "include/header.php";
    $phone = $_SESSION['phone_from_db'] ;


?>
 <!-- $phone=  <?= $_SESSION['phone_from_db'] ?> -->

<div class="container">
    <div>
        <h2 class="text-center">All Ads List</h2>
    </div>
    <div><a href="allads.php" class="btn btn-info">Add New</a></div>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th scope="col">Serial No</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Discription</th>
                <th scope="col">Price</th>
                <th scope="col">location</th>
                <th scope="col">Catagory</th>
                <th scope="col">Contact</th>
                <th scope="col">register_number</th>
                <th>Date Of Registration</th>
                <th>Delete</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
          require_once "include/db.php";
          $select = "SELECT * FROM allads  WHERE register_number = '$phone' order by 1 DESC" ;
          $result = mysqli_query($connection,$select); 
          foreach($result as $value):
        
        ?>

            <tr>
                <td><?= $value['id']?></td>
                <td><?= $value['title']?></td>
                <td><img src="image/<?=  $value['image'];?>" width="120px" height="120px"></td>
                <td><?= $value['description']?></td>
                <td><?= $value['price']?></td>
                <td><?= $value['location']?></td>
                <td><?= $value['catagory']?></td>
                <td><?= $value['contact']?></td>
                <td><?= $value['register_number']?></td> 
                <td><?= $value['reg_date']?></td>
                
                <td><a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo  $value['id'];?>">Delete</a></td>


            </tr>
            <?php
                endforeach;
            ?>

        </tbody>
    </table>
</div>


<?php
    require_once 'include/footer.php';   
?>