/* Preloader */
$(window).on('load', function () {
    $('.preloader').fadeIn();
    $('.preloader').delay(300).fadeOut('slow');
})
$(document).ready(function () {
    /* vp_h will hold the height of the browser window */
    var vp_h = $(window).height();
    /* b_g will hold the height of the html body */
    var b_g = $('body').height();
    /* If the body height is lower than window */
    if (b_g < vp_h) {
        /* Set the footer css -> position: absolute; */
        $('.footer').css("position", "absolute");
    }
});



/* Count User Data*/
$(document).ready(function () {



    /* Count User data*/
    // if ($('.user-wrapper').length) {
    //     $('.form-user .user-wrapper').each(function () {
    //         var indexCount = $(this).index() + 0;
    //         $('.count-data').find('span b').text(indexCount);
    //     });
    // } else {
    //     $('.count-data').find('span b').text('Please Add User, No record found');
    // }

    /* Search user*/
    // $('#search').keyup(function () {
    //     var text = $(this).val();
    //     $('.user-wrapper').hide();
    //     $('.user-wrapper span>b:contains("' + text + '")').closest('.user-wrapper').show();
    //     $('.form-user .user-wrapper').each(function () {
    //         var indexCount = $(this).index() + 0;
    //         var countHidden = $('.form-user .user-wrapper:hidden').length;

    //         if (countHidden === indexCount) {
    //             $('.count-data').find('span b').text('Search Not Found');
    //         } else {
    //             var countSearch = indexCount - countHidden
    //             $('.count-data').find('span b').text(countSearch);
    //         }

    //     });

    // });

});

/* CHILDREN */
function addMore() {
    $('#tbl-children').append('<div class="cont-child d-flex align-items-center col-md-12"><div class="col-md-1 d-flex align-items-center"><input type="checkbox"name="item_index[]" /></div><div class="col-md-8"><div class="form-group"><input id="" class="form-control" type="hidden" name="child_id[]" value="0"><input id="" class="form-control" type="text" name="cname_of_children[]"></div></div><div class="col-md-3"><div class="form-group"><input id="" class="form-control" type="date" name="cdate_of_birth[]"></div></div></div>');
}

function deleteRow() {
    $('.cont-child').each(function (index, item) {
        $(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
                $(item).remove();
            }
        });
    });
}

/* CIVIL SERVICE */
function addCS() {
    $('.tbl-civilservice tbody').append('<tr><td>   <input id="" class="form-control" type="hidden" name="civil_service_id[]" value="0"><input id="" class="form-control" type="text"name="csdescription[]"></td><td><input id="" class="form-control" type="text" name="csrating[]"></td><td><input id="" class="form-control" type="date"name="csdate_exam[]"></td><td><input id="" class="form-control" type="text"name="csplace_examination[]"></td><td><input id="" class="form-control" type="text" name="cscert_no[]"></td><td><input id="" class="form-control"type="date"name="csdate_of_validity[]"></td><td> <input type="checkbox" name="cs_index[]"/></td></tr>');
}

function deleteCS() {
    $('.tbl-civilservice tbody tr').each(function (index, cs) {
        $(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
                $(cs).remove();
            }
        });
    });
}

/* WORK EXPERIENCE */
function addWE() {
    var indexCount = $('.tbl-workexperiences1 tbody tr').length;

    $('.tbl-workexperiences1 tbody').append('<tr class="' + indexCount++ + '"><td><input id="" class="form-control" type="hidden" name="work_id[]" value="0"><input id="" class="form-control" type="date" name="wwork_from[]"></td><td><input id="" class="form-control" type="date" name="wwork_to[]"></td><td><input id="" class="form-control" type="text" name= "wposition_title[]" ></td><td><input id="" class="form-control" type="text" name="wdepartment_agency[]"></td></tr>');

    $('.tbl-workexperiences2 tbody').append('<tr class="' + indexCount++ + '"><td> <input id="" class="form-control" type="text"name="wmonthly_salary[]"></td><td><input id="" class="form-control" type="text"name="wsalary_job_step[]"></td><td><input id="" class="form-control" type="text" name="wstatus_appointment[]"></td><td><input id="" class="form-control"type="text"name="wgovernment_service_y_n[]"></td><td><input type="checkbox" name="cs_index[]"/></td>/tr>');
}

function deleteWE() {
    $('.tbl-workexperiences2 tbody tr').each(function (index, we) {

        $(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
                $(we).remove();
            }
        });
    });

    $('.tbl-workexperiences1 tbody tr').each(function (index, we) {
        $(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
                $(we).remove();
            }
        });
    });
}

/* VOLUNTARY WORK */
function addVW() {
    $('.tbl-volutarywork tbody').append('<tr><td><input id="" class="form-control" type="hidden"  name="voluntary_work_id[]" value="0"> <input id="" class="form-control" type="text" name="vname_address[]"></td> <td><input id="" class="form-control" type="date" name="vvoluntary_from[]"></td><td><input id="" class="form-control" type="date" name="vvoluntary_to[]"></td><td><input id="" class="form-control" type="text" name="vno_of_hours[]"></td><td><input id="" class="form-control" type="text" name="vposition_nature_of_work[]"></td><td><input type="checkbox" name="training_index[]"/></td></tr>');
}

function deleteVW() {
    $('.tbl-volutarywork tbody tr').each(function (index, vw) {
        $(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
                $(vw).remove();
            }
        });
    });
}

/* TRAINING */
function addTraining() {
    $('.tbl-training tbody').append('<tr><td>  <input id="" class="form-control" type="hidden" name="training_id[]" value="0"><input id="" class="form-control" type="text" name="ttitle[]"></td><td><input id="" class="form-control" type="date" name="tatt_from[]"></td><td><input id="" class="form-control" type="date" name="tatt_to[]"></td><td><input id="" class="form-control" type="number" name="tno_hours[]"></td><td><input id="" class="form-control" type="text" name="ttype_of_ld[]"></td><td><input id="" class="form-control" type="text" name="tconducted_by[]"></td><td><input type="checkbox" name="vw_index[]"/></td></tr>');
}

function deleteTraining() {
    $('.tbl-training tbody tr').each(function (index, training) {
        $(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
                $(training).remove();
            }
        });
    });
}

/* OTHER INFO */
function addSkills() {
    $('.tbl-skills tbody').append('<tr><td><input id="" class="form-control" type="hidden" name="skills_hobbies_id[]" value="0"><input id="" class="form-control" type="text"name = "special_skills_hobbies[]" ></td><td><input type="checkbox" name="skills_index[]"/></td></tr>');
}

function deleteSkills() {
    $('.tbl-skills tbody tr').each(function (index, skills) {
        $(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
                $(skills).remove();
            }
        });
    });
}



/* non_academic_distinctions*/
function addAcademic() {
    $('.tbl-academic tbody').append('<tr><td><input id="" class="form-control" type="hidden" name="distinction_recog_id[]" value="0"><input id="" class="form-control" type="text"name = "non_academic_distinctions[]" ></td><td><input type="checkbox" name="academic_index[]"/></td></tr>');
}

function deleteAcademic() {
    $('.tbl-academic tbody tr').each(function (index, academic) {
        $(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
                $(academic).remove();
            }
        });
    });
}


/* membership*/
function addMembership() {
    $('.tbl-membership tbody').append('<tr><td><input id="" class="form-control" type="hidden" name="assoc_org_id[]" value="0"><input id="" class="form-control" type="text"name = "membership_asso_organization[]" ></td><td><input type="checkbox" name="membership_index[]"/></td></tr>');
}

function deleteMembership() {
    $('.tbl-membership tbody tr').each(function (index, membership) {
        $(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
                $(membership).remove();
            }
        });
    });
}

/* references */
function addReference() {
    $('.tbl-reference tbody').append('<tr><td> <input id="" class="form-control" type="text" name="ref_name[]"></td><td><input id="" class="form-control" type="text"name="ref_address[]"></td><td><input id="" class="form-control" type="text"name="ref_tel_no[]"></td ><td></td><td><input type="checkbox" name="reference_index[]"/></td></tr>');
}

function deleteReference() {
    $('.tbl-reference tbody tr').each(function (index, reference) {
        $(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
                $(reference).remove();
            }
        });
    });
}


