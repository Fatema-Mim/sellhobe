<?php
    require_once "include/header.php";
    require_once "include/nav.php";
    $id = $_GET['id'];
    require_once "include/db.php";
    $select = "SELECT * FROM allads WHERE id = $id " ;
    $result = mysqli_query($connection,$select); 
    foreach($result as $value):     
?>
<div class="container">
    <div class="row">
        
        <div class="col-md-4">
        <img src="image/<?=  $value['image'];?>" width="300px" height="400px">
            <!-- <img id="featured" src="image/pexels-kaique-rocha-243757.jpg" alt=""> -->
            <div id="slide-wrapper">
                <img id="slideLeft" class="arrow" src="image/ChevronLeft-512-removebg-preview.png" alt="Left Arrow">
                <div id="slider">
                    <img class="thumbnail active" src="image/pexels-kaique-rocha-243757.jpg" alt="">
                    <img class="thumbnail" src="image/pexels-kaique-rocha-243757.jpg" alt="">
                    <img class="thumbnail"  src="image/pexels-atc-comm-photo-3736855.jpg" alt="">
                    <img class="thumbnail" src="image/pexels-musa-ortaç-3292366.jpg" alt="">
                    <img class="thumbnail" src="image/pexels-alexandro-david-3082256.jpg" alt="">
                </div>
                <img id="slideRight" class="arrow" src="image/arrow_right_icon-removebg-preview.png" alt="Right Arrow">
            </div>
        </div>
        <div class="col-md-7">
            <div class="my_container">
                <h2><?= $value['title']?></h2>
                <hr>
                <h3><b>Price : </b> <?= $value['price']?></h3>
                <p><?= $value['description']?></p>
                <p><?= $value['contact']?></p>
                <p><?= $value['location']?></p>
            
            </div>
        </div>
    </div>
</div>

<?php endforeach; ?>

<!-- Optional JavaScript; choose one of the two! -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

<script type="text/javascript">
    let thumbnails = document.getElementsByClassName('thumbnail')

    let activeImages = document.getElementsByClassName('active')
    for(var i = 0; i < thumbnails.length; i++){
        thumbnails[i].addEventListener('click', function(){
            console.log(activeImages)
    
            if(activeImages.length > 0){
                activeImages[0].classList.remove('active')
            }
            

            this.classList.add('active')
            document.getElementById('featured').src = this.src
        })
    }

    let buttonRight = document.getElementById('slideRight');
    let buttonLeft = document.getElementById('slideLeft');

    buttonLeft.addEventListener('click', function(){
        document.getElementById('slider').scrollLeft -= 180
    })

    buttonRight.addEventListener('click', function(){
        document.getElementById('slider').scrollLeft += 180
    })
</script>
   

<?php
    require_once "include/footer.php";
?>