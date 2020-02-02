
<!DOCTYPE html>
<html>

<head>

<body>

<section>

    <div id="dtBasicExample_wrapper" class="dataTables_wrapper dt-bootstrap4">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="dataTables_length bs-select" id="dtBasicExample_length">
                    <label>Show 
                        <select name="dtBasicExample_length" aria-controls="dtBasicExample" class="custom-select custom-select-sm form-control form-control-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select> entries
                    </label>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div id="dtBasicExample_filter" class="dataTables_filter">
                    <label>Search:
                        <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dtBasicExample">
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table id="dtBasicExample" class="table table-striped table-bordered table-sm dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="dtBasicExample_info" style="width: 100%;">
                    <thead>
                        <tr role="row"><th class="th-sm sorting_asc" tabindex="0" aria-controls="dtBasicExample" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name
                        : activate to sort column descending" style="width: 91.2px;">Name
                        </th><th class="th-sm sorting" tabindex="0" aria-controls="dtBasicExample" rowspan="1" colspan="1" aria-label="Position
                        : activate to sort column ascending" style="width: 149.2px;">Position
                        </th></tr>
                    </thead>
        <tbody>
            
        <tr role="row" class="odd">
            <td class="sorting_1">Airi Satou</td>
            <td>Accountant</td>
            </tr><tr role="row" class="even">
            <td class="sorting_1">Angelica Ramos</td>
            <td>Chief Executive Officer (CEO)</td>

    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dtBasicExample_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dtBasicExample_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dtBasicExample_previous"><a href="#" aria-controls="dtBasicExample" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="dtBasicExample" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dtBasicExample" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dtBasicExample" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dtBasicExample" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dtBasicExample" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dtBasicExample" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="dtBasicExample_next"><a href="#" aria-controls="dtBasicExample" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>

  </section>

<table  id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%"> 
    <?php
        require 'conn.php';

        $sql = "SELECT * FROM thesis";

        $result = mysqli_query($conn, $sql);

        $d = mysqli_fetch_assoc($result);

        echo '<thead>
                <th class="th-sm" font face="Arial">S/N</th>
                <th class="th-sm" font face="Arial">THESIS TOPIC</th>
        </thead>';
        
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $sn = $row["s/n"];
                $topic = $row["topic"];

                echo '<tbody>
                    <tr> 
                        <td>'.$sn.'</td> 
                        <td>'.$topic.'</td> 
                    </tr>
                </tbody>';
            
            }
        }
    ?>
</table>
    <style>
        table.dataTable thead .sorting:after,
        table.dataTable thead .sorting:before,
        table.dataTable thead .sorting_asc:after,
        table.dataTable thead .sorting_asc:before,
        table.dataTable thead .sorting_asc_disabled:after,
        table.dataTable thead .sorting_asc_disabled:before,
        table.dataTable thead .sorting_desc:after,
        table.dataTable thead .sorting_desc:before,
        table.dataTable thead .sorting_desc_disabled:after,
        table.dataTable thead .sorting_desc_disabled:before {
        bottom: .5em;
        }

    </style>

    <script type="text/javascript">
		  // Or with jQuery
        $(document).ready(function () {
        $('#dtBasicExample').DataTable({
            "aaSorting": [],
            columnDefs: [{
            orderable: false,
            targets: 0}]
        });
        $('.dataTables_length').addClass('bs-select');
        });
    </script>
</body>
</head>
</html>

