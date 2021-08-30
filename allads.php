<?php
session_start();
    require_once 'include/header.php';   
?>

<div class="container">
    <div class="col-6 m-auto ">
        <div class="card mb-4 mt-3">
            <div class="card-header bg-info text-center">Add ad</div>
                <div class="card-body">
                    <form action="allads_post_db.php" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>

                        <div class="row" style="padding-top: 12px;">
                            <div class="col-sm-2">
                                <img id="showImage" src="image/<?php echo $im_m['image'];?>" style="height:80px; width:85px; border: 1px solid black; inline: flex">
                            </div>
                            <div class="col-sm-2">
                                <img id="showImage2" src="image/<?php echo $im_m['image'];?>" style="height:80px; width:85px; border: 1px solid black; inline: flex">
                            </div>
                            <div class="col-sm-2">
                                <img id="showImage3" src="image/<?php echo $im_m['image'];?>" style="height:80px; width:85px; border: 1px solid black; inline: flex">
                            </div>
                            <div class="col-sm-2">
                                <img id="showImage4" src="image/<?php echo $im_m['image'];?>" style="height:80px; width:85px; border: 1px solid black; inline: flex">
                            </div>
                            <div class="col-sm-2">
                                <img id="showImage5" src="image/<?php echo $im_m['image'];?>" style="height:80px; width:85px; border: 1px solid black; inline: flex">
                            </div>
                        </div>

                        <div class="form-group form-group-inline">		
                            <label for="">Image File :</label>
                            <div class="row">
                                <input type="file" name="image1" id="image1" class="col-sm-2">
                                <input type="file" name="image2" id="image2" class="col-sm-2">
                                <input type="file" name="image3" id="image3" class="col-sm-2">
                                <input type="file" name="image4" id="image4" class="col-sm-2">
                                <input type="file" name="image5" id="image5" class="col-sm-2">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Discription</label>
                            <textarea  type="text" class="form-control" name="discription"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" class="form-control" name="price">
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <input type="text" class="form-control" name="location">
                        </div>
                        <div class="form-group">
                            <label>Catagory</label>
                            <input type="text" class="form-control" name="catagory">
                        </div>
                        
                        <div class="form-group">
                            <label>Contact</label>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label" style="border: 1px solid black;">+880 -</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="phone" value="" name="phone" required>
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Add ad</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    require_once 'include/footer.php';
?>
<script type="text/javascript">
    $(document).ready(function(){
        $('#image1').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
        $('#image2').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage2').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
        $('#image3').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage3').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
        $('#image4').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage4').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
        $('#image5').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage5').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
