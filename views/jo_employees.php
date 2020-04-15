<?php include '../template/header.php';?>
<title>Job Order Employees Turn-Over Records</title>
<main class="years_service">
    <div class="container py-5">
        <button type="button" class="btn btn-primary"
            onClick="Javascript:window.location.href = 'print_all_jo.php';">Go To Print All Records
            Menu</button>

        <h4 class="text-white my-3">Job Order Employees Turn-Over Records</h4>
        <table name="employeeTable" id="employeeTable" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>YEARS<br></th>
                    <th>NO. OF EMPLOYEES<br></th>
                    <th>YEARS OF SERVICE<br></th>
                    <th>NO. OF TURN-OVER<br></th>
                    <th>REMARKS<br></th>
                </tr>

            </thead>
        </table>
    </div>

    <?php include '../template/footer.php';?>

    <script>
    $(document).ready(function() {
   
        var table = $('#employeeTable').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                extend: 'copy',
                attr: {
                    id: 'allan'
                }
            }, 'csv', 'excel', 'pdf', 'print'],
            "scrollX": true,
            "pagingType": "numbers",
            "processing": true,
            "serverSide": true,
            "ajax": "server_jo.php",
            "order": [[0, "desc"]]
        });

        table.columns().every(function() {
            var table = this;
            $('input', this.header()).on('keyup change', function() {
                if (table.search() !== this.value) {
                    table.search(this.value).draw();
                }
            });
        });
    });
    </script>
</main>