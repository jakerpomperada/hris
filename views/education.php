<?php include '../template/header.php';?>
<title> Employees Educational Attainment Records </title>
<main class="educational">
    <div class="container py-5">
        <button type="button" class="btn btn-primary"
            onClick="Javascript:window.location.href = 'print_all_education.php';">Go To Print All Records Menu</button>
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

        $('#employeeTable thead th').each(function() {
            var title = $(this).text();
            $(this).html(title + ' <input type="text" class="col-search-input" placeholder="Search ' +
                '" />');
        });

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
            "ajax": "server_education.php",
            "order": [
                [2, "asc"]
            ]
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