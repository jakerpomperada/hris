<?php include '../template/header.php';?>

 <!-- <title>Employees Loyalty Awards Records </title> -->
 <img src="tup_header.png" alt="Smiley face" height="42" width="42">
<main class="loyalty-awards">
    <div class="container py-5">
        <button type="button" class="btn btn-primary"
            onClick="Javascript:window.location.href = 'print_all_loyalty_awards.php';">Go To Print All Records
            Menu
        </button>

        <h4 class="text-white my-3">Employees Loyalty Awards Records</h4>
        <table name="employeeTable" id="employeeTable" class="display" cellspacing="0" width="100%">

            <thead>
             

                  <th>LASTNAME</td>
                    <th>FIRSTNAME<br></th>
                    <th>LOYALTY AWARDS (YEARS)<br></th>
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
            message:'this is a message',
            "scrollX": true,
            "pagingType": "numbers",
            "processing": true,
            "serverSide": true,
            "ajax": "server_loyalty_awards.php",
            "order": [
                [2, "desc"]
                ],

                  //For repeating heading.
                repeatingHead: {
                    logo: 'https://www.google.co.in/logos/doodles/2018/world-cup-2018-day-22-5384495837478912-s.png',
                    logoPosition: 'right',
                    logoStyle: '',
                    title: '<h3>Sample Heading</h3>'
                }
            
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