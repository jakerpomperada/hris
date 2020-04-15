<?php 
include '../template/header.php';
 include_once("../controllers/user_data.php");
 include_once("../controllers/user.php");
?>


<main class="form-user">
    <div class="container py-5">
        <div class="row">
            <div class="d-flex align-items-center btn-add block w-100 text-center mb-5 card-header form-head-theme">
                <div class="search">
                    <div class="input-group">
                        <input type="text" id="search-user" class="form-control" placeholder="Search for..."
                            style="font-size: 16px; background-color:#eee;">
                        <span class="input-group-btn">
                            <button class="btn btn-primary rounded-0" type="button" id="search-user-icon"><span
                                    class="fa fa-search" style="color:white"></span> </button>
                        </span>
                    </div>
                </div>
                <div class="mx-auto">
                    <a href="" data-toggle="modal" data-target="#user-modal"><i class="fa fa-plus-circle"></i></a>
                </div>
            </div>
            <?php echo allUsers(); ?>
        </div>
        <div class="search-message-user w-100 ml-4 count-data mb-5 font-weight-regular badge  text-white p-3"
            style="display: none">
            <span>--------------------- NO RECORDS AVAILABLE ---------------------</span>
        </div>
    </div>

    <?php include '../template/footer.php';?>
</main>

<script>
$(document).ready(function() {
    $('#search-user').keyup(function() {
        $("#search-user-icon").html("<span class='fa fa-spinner fa-spin' style='color: white'></span>");
        var rex = new RegExp($(this).val(), 'i');

        $('.user-wrapper').hide();
        $('.user-wrapper').filter(function() {
            return rex.test($(this).text());
        }).show();

        var total_user = $('.user-wrapper').length;
        var rows = $('.user-wrapper:hidden').length;

        if (rows == total_user) {
            $(".search-message-user").show();
        } else {
            $(".search-message-user").hide();
        }

        setTimeout(function() {
            $("#search-user-icon").html(
                "<span class='fa fa-search' style='color:white'></span>");
        }, 2000);
    });
});
</script>