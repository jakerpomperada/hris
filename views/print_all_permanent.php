<?php include '../template/header.php';?>
<style type="text/css">
.dataTables_filter {
    display: none;
}
</style>
<title>Permanent Employees Turn-Over Records</title>

<main class="turn-over">
    <div class="container py-5">
        <h4 class="text-white my-3">Permanent Employees Turn-Over Records</h4>
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
    var table = $('#employeeTable').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            attr: {
                id: 'allan'
            }
        }, 'csv', 'excel', 'pdf', 'print'],
        "paging": false,
        "processing": true,
        "serverSide": true,
        "ajax": "server_permanent.php",
        "order": [
            [0, "desc"]
        ]
    });
    </script>
</main>