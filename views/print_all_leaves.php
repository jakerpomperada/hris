<?php include '../template/header.php';?>
<style type="text/css">
.dataTables_filter {
    display: none;
}
</style>
 <title>Employees Leave Credit Records</title>
<main class="leaves">
    <div class="container py-5">
        <h4 class="text-white my-3">Employees Leave Credit Records</h4>
        <table name="employeeTable" id="employeeTable" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>LASTNAME<br></th>
                    <th>FIRSTNAME<br></th>
                    <th>LEAVE CREDITS (NO. OF DAYS)<br></th>
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
            "paging": false,
            "processing": true,
            "serverSide": true,
            "ajax": "server_leaves.php",
            "order": [
                [2, "desc"]
            ]
        });

    });
    </script>
</main>