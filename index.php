<?php
    require_once "include/header.php";
    require_once "include/nav.php";
?>
 
<div class="mt-3">
    <div class="container">
        <table id="table_id" class="display">
            <col style="width: 5%" />
            <col style="width: 85%" />
            <col style="width: 10%" />
            <thead>
                <tr>
                    <th>Column 1</th>
                    <th>Column 2</th>
                    <th>Column 2</th>
                </tr>
            </thead>
            <tbody>
            <?php 
             require_once "include/db.php";
             $select = "SELECT * FROM allads  order by 1 DESC" ;
             $result = mysqli_query($connection,$select); 
             foreach($result as $value):
            ?>
                <tr>
                    <td>
                  <a href="single_page.php?id=<?=  $value['id']?>"><img src="image/<?=  $value['image'];?>" width="120px" height="120px"></a>
                        <!-- <img src="" alt="" height="150px" width="150px"> -->
                    </td>
                    <td>
                        <table class="table">
                            <tbody>
                                <tr>
                                <td colspan="2"><?= $value['title']?></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                    <?= $value['description']?>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <span>
                                        <?= $value['location']?>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="float-end">
                                        <?= $value['reg_date']?>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td><?= $value['price']?></td>  
                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>
<?php
    require_once "include/footer.php";
?>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>

<script>
    $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>