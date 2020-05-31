<?php include '../template/header.php';
?>

<main class="turn-over">
    <div class="container">

        <div class="col-lg-12">

            <div class="d-flex align-items-center mt-3">
                <h4 class="text-white my-3">List of Employees</h4>
                <div class="pull-right ml-auto">
                    <a href="<?php echo BASE_URL; ?>./views/form.php" class="btn btn-xs btn-primary" data-row-id="0">
                        <span class="fa fa-plus"></span>
                        Add Employee
                    </a>
                </div>
            </div>
            <table id="employee_grid" class="table table-condensed table-hover table-striped bg-white" width="60%"
                cellspacing="0" data-toggle="bootgrid">
                <thead>
                    <tr>
                        <th data-column-id="employee_id" data-type="numeric" data-identifier="true">ID No.</th>
                        <th data-column-id="surname">Last Name</th>
                        <th data-column-id="first_name">First Name</th>
                        <th data-column-id="middle_name">Middle Name</th>
                        <th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <?php include '../template/footer.php';?>

</main>

<script type="text/javascript">
$(document).ready(function() {
    var grid = $("#employee_grid").bootgrid({
        ajax: true,
        rowSelect: true,
        post: function() {
            /* To accumulate custom parameter with the request object */
            return {
                id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
            };
        },

        url: "response.php",
        formatters: {
            "commands": function(column, row) {
                return "<a href='form_edit.php?edit=" + row.employee_id +
                    "' type=\"button\" class=\"btn btn-xs btn-success command-edit\" data-row-id=\"" +
                    row.employee_id + "\"><span class=\"fa fa-edit \"></span></a> " +

                    "<a href='javascript:void(0)' type=\"button\" class=\"btn btn-xs btn-warning command-delete2\" onclick=\"del('" + row.employee_id + "')\" data-row-id=\"" +
                    row.employee_id + "\"><span class=\"fa fa-remove text-danger \"></span></a> " +

                "<a href='pds_view.php?id=" + row.employee_id +
                    "' type=\"button\" target=\"_blank\" class=\"btn btn-xs btn-info command-edit\" data-row-id=\"" +
                    row.employee_id + "\"><span class=\"fa fa-print \"></span></a> ";








                    // "+<button type=\"button\" class=\"btn btn-xs btn-default command-delete\" data-row-id=\"" +
                    // row.employee_id +
                    // "\"><span class=\"fa fa-trash\"></span></button>";
            }
        }
    }).on("loaded.rs.jquery.bootgrid", function() {
        /* Executes after data is loaded and rendered */
        grid.find(".command-edit").on("click", function(e) {
            //alert("You pressed edit on row: " + $(this).data("row-id"));
            var ele = $(this).parent();
            var g_id = $(this).parent().siblings(':first').html();
            var g_name = $(this).parent().siblings(':nth-of-type(2)').html();
            console.log(g_id);
            console.log(g_name);

            //console.log(grid.data());//
            $('#edit_model').modal('show');
            if ($(this).data("row-id") > 0) {

                // collect the data
                $('#edit_id').val(ele.siblings(':first')
                    .html()); // in case we're changing the key
                $('#edit_name').val(ele.siblings(':nth-of-type(2)').html());
                $('#edit_salary').val(ele.siblings(':nth-of-type(3)').html());
                $('#edit_age').val(ele.siblings(':nth-of-type(4)').html());
            } else {
                //alert('Now row selected! First select row, then click edit button');
            }
        }).end().find(".command-print").on("click", function(e) {

            var conf = $(this).data("row-id");
            // alert(conf);
            var getUrl = window.location;
            var baseurl = getUrl.origin; //or
            var baseurl = getUrl.origin + '/' + getUrl.pathname.split('/')[1];
            window.location.href = baseurl + '/views/pds_print.php';

            $.post('response.php', {
                    id: $(this).data("row-id"),
                    action: 'print'
                },
                function() {
                    // when ajax returns (callback), 
                    $("#employee_grid").bootgrid('reload');
                });

        }).end().find(".command-delete").on("click", function(e) {

          var conf = confirm('Delete This Employee No ' + $(this).data("row-id") + '?');
            // alert(conf);
            if (conf) {
              
                $.post('response.php', {
                        id: $(this).data("row-id"),
                        action: 'delete'
                    },
                    function() {
                        // when ajax returns (callback), 
                        $("#employee_grid").bootgrid('reload');
                    });
                $(this).parent('tr').remove();
                $("#employee_grid").bootgrid('remove', $(this).data("row-id"))
            }
        });
    });


});

    function del(x){
        if(confirm("Are you sure you want to remove the record of this employee? \n("+ x + ")")){
            $.ajax({
                type: "POST",
                url: "remove_employee.php",
                data: "id=" + x,
                success: function (data) {
                    console.log(data);
                    if (data == "true"){
                        alert("Employee has been removed!");
                        document.location.replace("record.php");
                    } else {
                        alert("Failed to remove employee.");
                    }
                }
            });
        }
    }
</script>