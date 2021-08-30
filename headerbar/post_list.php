<?php
    require_once '../headerbar/headbar.php';
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
                <tr>
                    <td>
                        <img src="" alt="" height="150px" width="150px">
                    </td>
                    <td>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td colspan="2">Title</td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        Details
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <span>
                                            Location
                                        </span>
                                    </td>
                                    <td>
                                        <span class="float-end">
                                            Time and Date
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td>$100</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>

<script>
    $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>