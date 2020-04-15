<?php include '../template/header.php';?>
<style type="text/css">
.dataTables_filter {
    display: none;
}
</style>

<title> Employees Educational Attainment Records </title>
<main class="educational-attainment">
    <div class="container py-5">
        <h4 class="text-white my-3">Employees Educational Attainment Records</h4>
        <table name="employeeTable" id="employeeTable" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>LASTNAME<br></th>
                    <th>FIRSTNAME<br></th>
                    <th>EDUCATIONAL ATTAINMENT<br></th>
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
            "ajax": "server_education.php",
            "order": [
                [2, "asc"]
            ]
        });

    });
    </script>
</main>