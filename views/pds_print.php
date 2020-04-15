<?php include '../template/header.php';?>

<?php 
   error_reporting(0);

	$servername = "localhost";
	$username = "root";
	$password = "";
    $dbname = "hris";
    
    $db = new mysqli($servername, $username, $password, $dbname);
    
	if (isset($_GET['print'])) {
		$id = $_GET['print'];
        $update = true;
        // personal info
		$record = mysqli_query($db, "SELECT * FROM tbl_p_info  WHERE employee_id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$surname = $n['surname'];
            $first_name = $n['first_name'];
            $middle_name = $n['middle_name'];
            $name_extension = $n['name_extension'];
            $date_birth = $n['date_birth'];
            $place_of_birth = $n['place_of_birth'];
            $sex = $n['sex'];
            $civil_status = $n['civil_status'];
            $height_m = $n['height_m'];
            $weight_m = $n['weight_m'];
            $blood_type = $n['blood_type'];
            $gsis_id_no = $n['gsis_id_no'];
            $pagibig_id_no = $n['pagibig_id_no'];
            $philhealth_no = $n['philhealth_no'];
            $sss_no = $n['sss_no'];
            $tin_no = $n['tin_no'];
            $agency_employee_no = $n['agency_employee_no'];
            $citizenship = $n['citizenship'];
            $country = $n['country'];
            $dual_citizenship = $n['dual_citizenship'];
            $residential_house_block_lot_no = $n['residential_house_block_lot_no'];
            $residential_street = $n['residential_street'];
            $residential_subdivision_village = $n['residential_subdivision_village'];
            $residential_barangay = $n['residential_barangay'];
            $residential_city_municipality = $n['residential_city_municipality'];
            $residential_province = $n['residential_province'];
            $residential_zipcode = $n['residential_zipcode'];
            $permanent_house_block_lot_no = $n['permanent_house_block_lot_no'];
            $permanent_street = $n['permanent_street'];
            $permanent_subdivision_village = $n['permanent_subdivision_village'];
            $permanent_barangay = $n['permanent_barangay'];
            $permanent_city_municipality = $n['permanent_city_municipality'];
            $permanent_province = $n['permanent_province'];
            $permanent_zipcode = $n['permanent_zipcode'];
            $telephone_no = $n['telephone_no'];
            $mobile_no = $n['mobile_no'];
            $email_address = $n['email_address'];
        }

        if ($sex ==='Male'){
            $sexy = 'checked';
            $sexn = 'no';
        } else {
            $sexy = 'no';
            $sexn = 'checked';
        }

        if ($civil_status ==='Single'){
            $civil_statuss = 'checked';
            $civil_statusm = 'no';
            $civil_statusw = 'no';
            $civil_statusse = 'no';
            $civil_statuso = 'no';
          
        } elseif ($civil_status ==='Married'){
            $civil_statuss = 'no';
            $civil_statusm = 'checked';
            $civil_statusw = 'no';
            $civil_statusse = 'no';
            $civil_statuso = 'no';
        } elseif ($civil_status ==='Widowed'){
            $civil_statuss = 'no';
            $civil_statusm = 'no';
            $civil_statusw = 'checked';
            $civil_statusse = 'no';
            $civil_statuso = 'no';
        } elseif ($civil_status ==='Separated'){
            $civil_statuss = 'no';
            $civil_statusm = 'no';
            $civil_statusw = 'no';
            $civil_statusse = 'checked';
            $civil_statuso = 'no';
        } else{
            $civil_statuss = 'no';
            $civil_statusm = 'no';
            $civil_statusw = 'no';
            $civil_statusse = 'no';
            $civil_statuso = 'checked';
        }

        if ($citizenship ==='Filipino'){
            $citizenshipy = 'checked';
            $citizenshipn = 'no';
        } else {
            $citizenshipy = 'no';
            $citizenshipn = 'checked';
        }

        if ($dual_citizenship ==='By Birth'){
            $dual_citizenshipy = 'checked';
            $dual_citizenshipn = 'no';
        } else {
            $dual_citizenshipy = 'no';
            $dual_citizenshipn = 'checked';
        }
        
        // spouse
        $record1 = mysqli_query($db, "SELECT * FROM tbl_spouse  WHERE employee_id=$id");

		if (count($record1) == 1 ) {
			$s = mysqli_fetch_array($record1);
			$spouses_surname = $s['spouses_surname'];
            $sfirst_name = $s['first_name'];
            $smiddle_name = $s['middle_name'];
            $sname_extension = $s['name_extension'];
            $soccupation = $s['occupation'];
            $semployer_business_name = $s['employer_business_name'];
            $sbusiness_address = $s['business_address'];
            $stelephone_no = $s['telephone_no'];
        }
        
        // family fathers
        $record2 = mysqli_query($db, "SELECT * FROM tbl_family WHERE employee_id=$id and relationship = 'Father' LIMIT 0,1");

		if (count($record2) == 1 ) {
			$f = mysqli_fetch_array($record2);
			$frelationship = $f['relationship'];
            $fsurname = $f['surname'];
            $ffirst_name = $f['first_name'];
            $fmiddle_name = $f['middle_name'];
            $fname_extension = $f['name_extension'];
            $fmaidenname = $f['maidenname'];    
        }
        
        // family fathers
        $record3 = mysqli_query($db, "SELECT * FROM tbl_family WHERE employee_id=$id and relationship = 'Mother'");

		if (count($record3) == 1 ) {
			$fm = mysqli_fetch_array($record3);
			$fmrelationship = $fm['relationship'];
            $fmsurname = $fm['surname'];
            $fmfirst_name = $fm['first_name'];
            $fmmiddle_name = $fm['middle_name'];
            $fmname_extension = $fm['name_extension'];
            $fmmaidenname = $fm['maidenname'];    
        }
        
        // family children 0
        $record4 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id=$id LIMIT 0,1");

		if (count($record4) == 1 ) {
			$fc = mysqli_fetch_array($record4);
			$fcname_of_children = $fc['name_of_children'];
            $fcdate_of_birth = $fc['date_of_birth'];
        }

         // family children 1
        $record5 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id=$id LIMIT 1,1");

		if (count($record5) == 1 ) {
			$fc = mysqli_fetch_array($record5);
			$fc1name_of_children = $fc['name_of_children'];
            $fc1date_of_birth = $fc['date_of_birth'];
        }

        // family children 2
        $record6 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id=$id LIMIT 2,1");

		if (count($record6) == 1 ) {
			$fc = mysqli_fetch_array($record6);
			$fc2name_of_children = $fc['name_of_children'];
            $fc2date_of_birth = $fc['date_of_birth'];
        }

        // family children 3
        $record7 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id=$id LIMIT 3,1");

		if (count($record7) == 1 ) {
			$fc = mysqli_fetch_array($record7);
			$fc3name_of_children = $fc['name_of_children'];
            $fc3date_of_birth = $fc['date_of_birth'];
        }

        // family children 4
        $record8 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id=$id LIMIT 4,1");

		if (count($record8) == 1 ) {
			$fc = mysqli_fetch_array($record8);
			$fc4name_of_children = $fc['name_of_children'];
            $fc4date_of_birth = $fc['date_of_birth'];
        }

        // family children 5
        $record9 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id=$id LIMIT 5,1");

		if (count($record9) == 1 ) {
			$fc = mysqli_fetch_array($record9);
			$fc5name_of_children = $fc['name_of_children'];
            $fc5date_of_birth = $fc['date_of_birth'];
        }

         // family children 6
        $record10 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id=$id LIMIT 6,1");

		if (count($record10) == 1 ) {
			$fc = mysqli_fetch_array($record10);
			$fc6name_of_children = $fc['name_of_children'];
            $fc6date_of_birth = $fc['date_of_birth'];
        }

         // family children 7
        $record11 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id=$id LIMIT 7,1");

		if (count($record11) == 1 ) {
			$fc = mysqli_fetch_array($record11);
			$fc7name_of_children = $fc['name_of_children'];
            $fc7date_of_birth = $fc['date_of_birth'];
        }

         // family children 8
        $record12 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id=$id LIMIT 8,1");

		if (count($record12) == 1 ) {
			$fc = mysqli_fetch_array($record12);
			$fc8name_of_children = $fc['name_of_children'];
            $fc8date_of_birth = $fc['date_of_birth'];
        }

         // family children 9
        $record13 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id=$id LIMIT 9,1");

		if (count($record13) == 1 ) {
			$fc = mysqli_fetch_array($record13);
			$fc9name_of_children = $fc['name_of_children'];
            $fc9date_of_birth = $fc['date_of_birth'];
        }

         // family children 10
        $record14 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id=$id LIMIT 10,1");

		if (count($record14) == 1 ) {
			$fc = mysqli_fetch_array($record14);
			$fc10name_of_children = $fc['name_of_children'];
            $fc10date_of_birth = $fc['date_of_birth'];
        }

         // family children 11
        $record15 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id=$id LIMIT 11,1");

		if (count($record15) == 1 ) {
			$fc = mysqli_fetch_array($record15);
			$fc11name_of_children = $fc['name_of_children'];
            $fc11date_of_birth = $fc['date_of_birth'];
        }

        // Special Skills 1
        $record16 = mysqli_query($db, "SELECT * FROM tbl_skills_hobbies WHERE employee_id=$id LIMIT 0,1");

		if (count($record16) == 1 ) {
			$sp = mysqli_fetch_array($record16);
			$sp1special_skills_hobbies = $sp['special_skills_hobbies'];
        }

        // Special Skills 2
        $record17 = mysqli_query($db, "SELECT * FROM tbl_skills_hobbies WHERE employee_id=$id LIMIT 1,1");

		if (count($record17) == 1 ) {
			$sp = mysqli_fetch_array($record17);
			$sp2special_skills_hobbies = $sp['special_skills_hobbies'];
        }

        // Special Skills 3
        $record18 = mysqli_query($db, "SELECT * FROM tbl_skills_hobbies WHERE employee_id=$id LIMIT 2,1");

		if (count($record18) == 1 ) {
			$sp = mysqli_fetch_array($record18);
			$sp3special_skills_hobbies = $sp['special_skills_hobbies'];
        }

        // Special Skills 4
        $record19 = mysqli_query($db, "SELECT * FROM tbl_skills_hobbies WHERE employee_id=$id LIMIT 3,1");

		if (count($record19) == 1 ) {
			$sp = mysqli_fetch_array($record19);
			$sp4special_skills_hobbies = $sp['special_skills_hobbies'];
        }

        // NON-ACADEMIC DISTINCTIONS / RECOGNITION  1
        $record20 = mysqli_query($db, "SELECT * FROM tbl_recog WHERE employee_id=$id LIMIT 0,1");

		if (count($record20) == 1 ) {
			$na = mysqli_fetch_array($record20);
			$na1non_academic_distinctions = $na['non_academic_distinctions'];
        }

         // NON-ACADEMIC DISTINCTIONS / RECOGNITION  2
        $record21 = mysqli_query($db, "SELECT * FROM tbl_recog WHERE employee_id=$id LIMIT 1,1");

		if (count($record21) == 1 ) {
			$na = mysqli_fetch_array($record21);
			$na2non_academic_distinctions = $na['non_academic_distinctions'];
        }

         // NON-ACADEMIC DISTINCTIONS / RECOGNITION  3
        $record22 = mysqli_query($db, "SELECT * FROM tbl_recog WHERE employee_id=$id LIMIT 2,1");

		if (count($record22) == 1 ) {
			$na = mysqli_fetch_array($record22);
			$na3non_academic_distinctions = $na['non_academic_distinctions'];
        }

         // NON-ACADEMIC DISTINCTIONS / RECOGNITION  4
        $record23 = mysqli_query($db, "SELECT * FROM tbl_recog WHERE employee_id=$id LIMIT 3,1");

		if (count($record23) == 1 ) {
			$na = mysqli_fetch_array($record23);
			$na4non_academic_distinctions = $na['non_academic_distinctions'];
        }

        // MEMBERSHIP IN ASSOCIATION/ORGANIZATION  1
        $record24 = mysqli_query($db, "SELECT * FROM tbl_membership WHERE employee_id=$id LIMIT 0,1");

		if (count($record24) == 1 ) {
			$ma = mysqli_fetch_array($record24);
			$ma1membership_asso_organization = $ma['membership_asso_organization'];
        }

        // MEMBERSHIP IN ASSOCIATION/ORGANIZATION  2
        $record25 = mysqli_query($db, "SELECT * FROM tbl_membership WHERE employee_id=$id LIMIT 1,1");

		if (count($record25) == 1 ) {
			$ma = mysqli_fetch_array($record25);
			$ma2membership_asso_organization = $ma['membership_asso_organization'];
        }

         // MEMBERSHIP IN ASSOCIATION/ORGANIZATION  3
        $record26 = mysqli_query($db, "SELECT * FROM tbl_membership WHERE employee_id=$id LIMIT 2,1");

		if (count($record26) == 1 ) {
			$ma = mysqli_fetch_array($record26);
			$ma3membership_asso_organization = $ma['membership_asso_organization'];
        }

         // MEMBERSHIP IN ASSOCIATION/ORGANIZATION  4
        $record27 = mysqli_query($db, "SELECT * FROM tbl_membership WHERE employee_id=$id LIMIT 3,1");

		if (count($record27) == 1 ) {
			$ma = mysqli_fetch_array($record27);
			$ma4membership_asso_organization = $ma['membership_asso_organization'];
        }

         // tbl_additional_info
        $record28 = mysqli_query($db, "SELECT * FROM tbl_additional_info WHERE employee_id=$id");

		if (count($record28) == 1 ) {
			$qa = mysqli_fetch_array($record28);
            $question_34_a = $qa['question_34_a'];
            $question_34_b = $qa['question_34_b'];
            $yes_details_34_b = $qa['yes_details_34_b'];
            $question_35_a = $qa['question_35_a'];
            $yes_details_35_a = $qa['yes_details_35_a'];
            $question_35_b = $qa['question_35_b'];
            $question_35_b_datefiled = $qa['question_35_b_datefiled'];
            $status_cases_35_b = $qa['status_cases_35_b'];
            $question_36 = $qa['question_36'];
            $yes_details_36 = $qa['yes_details_36'];
            $question_37 = $qa['question_37'];
            $yes_details_37 = $qa['yes_details_37'];
            $question_38_a = $qa['question_38_a'];
            $yes_details_38_a = $qa['yes_details_38_a'];
            $question_38_b = $qa['question_38_b'];
            $yes_details_38_b = $qa['yes_details_38_b'];
            $question_39 = $qa['question_39'];
            $yes_details_39 = $qa['yes_details_39'];
            $question_40_a = $qa['question_40_a'];
            $a_yes_details_40 = $qa['a_yes_details_40'];
            $question_40_b = $qa['question_40_b'];
            $b_yes_details_b = $qa['b_yes_details_b'];
            $question_40_c = $qa['question_40_c'];
            $c_yes_details_c = $qa['c_yes_details_c'];
        }

        if ($question_34_a === 'YES'){
            $question_34_ay = 'checked';
            $question_34_an = 'no';
        } else {
            $question_34_ay = 'no';
            $question_34_an = 'checked';
        }
        if ( $question_34_b ==='YES'){
            $question_34_by = 'checked';
            $question_34_bn = 'no';
        }else{
            $question_34_by = 'no';
            $question_34_bn = 'checked';
        }
        if ( $question_35_a ==='YES' ){
            $question_35_ay = 'checked';
            $question_35_an = 'no';
        }else{
            $question_35_ay = 'no';
            $question_35_an = 'checked';
        }
        if ($question_35_b ==='YES' ){
            $question_35_by = 'checked';
            $question_35_bn = 'no';
        }else{
            $question_35_by = 'no';
            $question_35_bn = 'checked';
        }
        if ( $question_36 ==='YES'){
            $question_36y = 'checked';
            $question_36n = 'no';
        }else{
            $question_36y = 'no';
            $question_36n = 'checked';
        }
        if ( $question_37 ==='YES'){
            $question_37y = 'checked';
            $question_37n = 'no';
        }else{
            $question_37y = 'no';
            $question_37n = 'checked';
        }
        if ($question_38_a ==='YES'){
            $question_38_ay = 'checked';
            $question_38_an = 'no';
        }else{
            $question_38_ay = 'no';
            $question_38_an = 'checked';
        }
        if ($question_38_b ==='YES'){
            $question_38_by = 'checked';
            $question_38_bn = 'no';
        }else{
            $question_38_by = 'no';
            $question_38_bn = 'checked';
        }
        if ($question_39 ==='YES'){
            $question_39y = 'checked';
            $question_39n = 'no';
        }else{
            $question_39y = 'no';
            $question_39n = 'checked';
        }
        if ( $question_40_a ==='YES'){
            $question_40_ay = 'checked';
            $question_40_an = 'no';
        }else{
            $question_40_ay = 'no';
            $question_40_an = 'checked';
        }
        if ($question_40_b ==='YES'){
            $question_40_by = 'checked';
            $question_40_bn = 'no';
        }else{
            $question_40_by = 'no';
            $question_40_bn = 'checked';
        }
        if ($question_40_c ==='YES'){
            $question_40_cy = 'checked';
            $question_40_cn = 'no';
        } else {
            $question_40_cy = 'no';
            $question_40_cn = 'checked';
        }

         // tbl_gov_id
        $record29 = mysqli_query($db, "SELECT * FROM tbl_gov_id WHERE employee_id=$id");

		if (count($record29) == 1 ) {
			$g = mysqli_fetch_array($record29);
            $ggov_id = $g['gov_id'];
            $gid_no = $g['id_no'];
            $gdate_place_issuance = $g['date_place_issuance'];
        }

	}
?>

<div class="mt-4 d-flex align-items-center justify-content-center">
    <button class="mx-2 text-center d-block btn btn-primary btn-sm" onclick="PrintElement1('.turn-over');">PRINT Page 1
        </button>
    <button class="mx-2 text-center d-block btn btn-primary btn-sm" onclick="PrintElement2('.turn-over');">PRINT Page 2
        </button>
    <button class="mx-2 text-center d-block btn btn-primary btn-sm" onclick="PrintElement3('.turn-over');">PRINT Page 3
        </button>
    <button class="mx-2 text-center d-block btn btn-primary btn-sm" onclick="PrintElement4('.turn-over');">PRINT Page 4
        </button>
		
		<form>
    <input type="button" value="Click Me" onclick="codespeedy()">
  </form>
</div>

<main id="main-tbl" class="turn-over">
<div id="pds_print">
    <div id="tblprint" class=" table-responsive p-3">
        <form action="">
            <table id="pds-table" class="employeeTable">

                <tbody class="table-header">
                    <tr>
                        <td colspan="12" class="h5"><i><b>CS Form No. 212</b></i></td>
                    </tr>
                    <tr>
                        <td colspan="12" class="align-top" style="max-height: 12px;">
                            <i><b>Revised 2017</b></i>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="12" class="text-center">
                            <h1><b><center>PERSONAL DATA SHEET </center></b></h1>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="12"><i><b>WARNING: Any misrepresentation main in the Personal Data Sheet and the
                                    Work Experience Sheet shall cause the filing of administative/criminal case/s
                                    against the person concerned.</b></i></td>
                    </tr>
                    <tr>
                        <td colspan="12"><i><b>READ THE ATTACHED GUIDE TO FILLING OUT THE PERSONAL DATA SHEET (PDS)
                                    BEFORE ACCOMPLISHING THE PDS FORM</b></i></td>
                    </tr>
                    <tr>
                        <td colspan="9">Print legibly. Tick appropriate boxes ( <input type="checkbox" checked> ) ad use
                            seperate sheet if necessary. Indicate N/A if not applicable. <b>DO NOT ABBREVIATE.</b></td>
                        <td colspan="1" style="border:1px solid#000b;background:#757575;width:8%;"><small>1. CS ID
                                No.</small></td>
                        <td colspan="2" class="text-right" style="border:1px solid #000;width:20%;"><small>(Do not fill
                                up. For CSC use only)</small></td>
                    </tr>
                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator">I. PERSONAL INFORMATION</td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-bottom-0">
                            <span class="count">2.</span> SURNAME
                        </td>
                        <td colspan="11"> <b><?php echo $surname; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-0"><span class="count"></span> FIRST NAME</td>
                        <td colspan="9"><b><?php echo $first_name; ?></b></td>
                        <td colspan="2" class="align-top"><small>NAME EXTENSION (JR.,SR)
                            </small><b><?php echo $name_extension; ?></b>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-0"><span class="count"></span> MIDDLE NAME</td>
                        <td colspan="11"><b><?php echo $middle_name; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-bottom-0">
                            <span class="count">3.</span> DATE OF BIRTH<br>
                            <span class="count"></span> (mm/dd/yyyy)
                        </td>
                        <td colspan="5" style="border: none;"><b><?php echo $date_birth; ?></b></td>
                        <td colspan="3" class="s-label align-top border-bottom-0">
                            <span class="count">16.</span> CITIZENSHIP
                        </td>

                        <td colspan="3" style="border-bottom: 0;">
                            <div class="d-flex justify-content-between align-items-center ml-2 mt-2 mb-0 mr-2">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $citizenshipy; ?> disabled>
                                    <label for="my-input">Filipino</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $citizenshipn; ?> disabled>
                                    <label for="my-input">Dual Citizenship</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-0"></td>
                        <td colspan="5" style="border-top: none !important;"></td>
                        <td colspan="3" class="s-label align-top border-0 text-center small">
                            If holder of dual citizenship,
                        </td>
                        <td colspan="3" style="border-top: none;">
                            <div class="d-flex justify-content-between align-items-center ml-2 mt-2 mb-0 mr-2">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $dual_citizenshipy; ?> disabled>
                                    <label for="my-input">by birth</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $dual_citizenshipn; ?> disabled>
                                    <label for="my-input">by naturalization</label>
                                </div>
                            </div>
                            <label for="my-input">Pls. indicate country:</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label"><span class="count">4.</span> PLACE OR BIRTH</td>
                        <td colspan="5"><b><?php echo $place_of_birth; ?></b></td>
                        <td colspan="3" class="s-label align-top border-0 text-center small"> please indicate the
                            details.</td>
                        <td colspan="3" style="border-bottom: none;"><b><?php echo $country; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label"><span class="count">5.</span> SEX</td>
                        <td colspan="5">
                            <div class="d-flex justify-content-between align-items-center ml-2 mt-2 mb-0 mr-2">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $sexy; ?> disabled>
                                    <label for="my-input">Male</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $sexn; ?> disabled>
                                    <label for="my-input">Female</label>
                                </div>
                            </div>
                        </td>
                        <td colspan="3" class="s-label align-top border-0"></td>
                        <td colspan="3" style="border-top: none;"></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-bottom-0"><span class="count">6.</span> CIVIL STATUS</td>
                        <td colspan="5" style="border: none;">
                            <div class="d-flex justify-content-between align-items-center ml-2 mt-2 mb-0 mr-2">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $civil_statuss; ?> disabled>
                                    <label for="my-input">Single</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $civil_statusm; ?> disabled>
                                    <label for="my-input">Married</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $civil_statusw; ?> disabled>
                                    <label for="my-input">Widowed</label>
                                </div>
                            </div>
                        </td>
                        <td colspan="2" class="s-label align-top border-bottom-0 small">
                            <span class="count">17.</span> RESIDENTIAL ADDRESS
                        </td>
                        <td colspan="2"><b><?php echo $residential_house_block_lot_no; ?></b></td>
                        <td colspan="2"><b><?php echo $residential_street; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-top-0"><span class="count"></span></td>
                        <td colspan="5" style="border-top: none !important;">
                            <div class="d-flex justify-content-between align-items-center ml-2 mt-2 mb-0 mr-2">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $civil_statusse; ?> disabled>
                                    <label for="my-input">Separated</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $civil_statuso; ?> disabled>
                                    <label for="my-input">Other/s</label>
                                </div>
                            </div>
                        </td>
                        <td colspan="2" class="s-label align-top border-0"></td>
                        <td colspan="2"><b><?php echo $residential_subdivision_village; ?></b></td>
                        <td colspan="2"><b><?php echo $residential_barangay; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label"><span class="count">7.</span> HEIGHT (m)</td>
                        <td colspan="5"><b><?php echo $height_m; ?></b></td>
                        <td colspan="2" class="s-label align-top border-0"></td>
                        <td colspan="2"><b><?php echo $residential_city_municipality; ?></b></td>
                        <td colspan="2"><b><?php echo $residential_province; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label"><span class="count">8.</span> WEIGHT (kg)</td>
                        <td colspan="5"><b><?php echo $weight_m; ?></b></td>
                        <td colspan="2" class="s-label border-0 text-center">
                            ZIP CODE
                        </td>
                        <td colspan="4"><b><?php echo $residential_zipcode; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label"><span class="count">9.</span> BLOOD TYPE</td>
                        <td colspan="5"><b><?php echo $blood_type; ?></b></td>
                        <td colspan="2" class="s-label border-bottom-0"><span class="count">18.</span> PERMANENT ADDRESS
                        </td>
                        <td colspan="2"><b><?php echo $permanent_house_block_lot_no; ?></b></td>
                        <td colspan="2"><b><?php echo $permanent_street; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label"><span class="count">10.</span> GSIS ID NO.</td>
                        <td colspan="5"><b><?php echo $gsis_id_no ; ?></b></td>
                        <td colspan="2" class="s-label border-0"></td>
                        <td colspan="2"><b><?php echo $permanent_subdivision_village; ?></b></td>
                        <td colspan="2"><b><?php echo $permanent_barangay; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label"><span class="count">11.</span> PAG-IBIG NO.</td>
                        <td colspan="5"><b><?php echo $pagibig_id_no ; ?></b></td>
                        <td colspan="2" class="s-label border-0"></td>
                        <td colspan="2"><b><?php echo $permanent_city_municipality; ?></b></td>
                        <td colspan="2"><b><?php echo $permanent_province; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label"><span class="count">12.</span> PHILHEALTH NO.</td>
                        <td colspan="5"><b><?php echo $philhealth_no ; ?></b></td>
                        <td colspan="2" class="s-label text-center border-0">ZIP CODE</td>
                        <td colspan="4"><b><?php echo $permanent_zipcode; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label"><span class="count">13.</span> SSS NO.</td>
                        <td colspan="5"><b><?php echo $sss_no ; ?></b></td>
                        <td colspan="2" class="s-label"><span class="count">19.</span> TELEPHONE NO.</td>
                        <td colspan="4"><b><?php echo $telephone_no; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label"><span class="count">14.</span> TIN NO.</td>
                        <td colspan="5"><b><?php echo $tin_no ; ?></b></td>
                        <td colspan="2" class="s-label"><span class="count">20.</span> MOBILE NO.</td>
                        <td colspan="4"><b><?php echo $mobile_no; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label"><span class="count">15.</span> AGENCY EMPLOYEE NO.</td>
                        <td colspan="5"><b><?php echo $agency_employee_no ; ?></b></td>
                        <td colspan="2" class="s-label"><span class="count">21.</span> EMAIL ADDRESS (if any)</td>
                        <td colspan="4"><b><?php echo $email_address; ?></b>
                        </td>
                    </tr>
                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator">II. FAMILY BACKGROUND</td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-bottom-0">
                            <span class="count">22.</span> SPOUSE SURNAME
                        </td>
                        <td colspan="5"><b><?php echo $spouses_surname; ?></b></td>
                        <td colspan="3" class="s-label">
                            <span class="count">23.</span> NAME of CHILDREN (Write full name and list all)
                        </td>
                        <td colspan="3" class="s-label text-center" style="width: 18%;">DATE OF BIRTH (mm/dd/yyyy)</td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-0">
                            <span class="count"></span> FIRST NAME
                        </td>
                        <td colspan="4"><b><?php echo $sfirst_name; ?></b></td>
                        <td colspan="1" class="align-top s-label">
                            <small>
                                NAME EXTENSION (JR.,SR)
                            </small>
                            <b><?php echo $sname_extension; ?></b>
                        </td>
                        <td colspan="3"><b><?php echo $fcname_of_children; ?></b></td>
                        <td colspan="3"><b><?php echo $fcdate_of_birth; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-0">
                            <span class="count"></span> MIDDLE NAME
                        </td>
                        <td colspan="5"><b><?php echo $smiddle_name; ?></b></td>
                        <td colspan="3"><b><?php echo $fc1name_of_children; ?></b></td>
                        <td colspan="3"><b><?php echo $fc1date_of_birth; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label">
                            <span class="count"></span> OCCUPATION
                        </td>
                        <td colspan="5"><b><?php echo $soccupation; ?></b></td>
                        <td colspan="3"><b><?php echo $fc2name_of_children; ?></b></td>
                        <td colspan="3"><b><?php echo $fc2date_of_birth; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label">
                            <span class="count"></span> EMPLOYER/BUSINESS NAME
                        </td>
                        <td colspan="5"><b><?php echo $semployer_business_name; ?></b></td>
                        <td colspan="3"><b><?php echo $fc3name_of_children; ?></b></td>
                        <td colspan="3"><b><?php echo $fc3date_of_birth; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label">
                            <span class="count"></span> BUSINESS ADDRESS
                        </td>
                        <td colspan="5"><b><?php echo $sbusiness_address; ?></b></td>
                        <td colspan="3"><b><?php echo $fc4name_of_children; ?></b></td>
                        <td colspan="3"><b><?php echo $fc4date_of_birth; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label">
                            <span class="count"></span> TELEPHONE NO.
                        </td>
                        <td colspan="5"><b><?php echo $stelephone_no; ?></b></td>
                        <td colspan="3"><b><?php echo $fc5name_of_children; ?></b></td>
                        <td colspan="3"><b><?php echo $fc5date_of_birth; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-bottom-0">
                            <span class="count">24.</span> FATHER'S SURNAME
                        </td>
                        <td colspan="5"><b><?php echo $fsurname; ?></b></td>
                        <td colspan="3"><b><?php echo $fc6name_of_children; ?></b></td>
                        <td colspan="3"><b><?php echo $fc6date_of_birth; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-0">
                            <span class="count"></span> FIRST NAME
                        </td>
                        <td colspan="4"><b><?php echo $ffirst_name; ?></b></td>
                        <td colspan="1" class="align-top s-label">
                            <small>
                                NAME EXTENSION (JR.,SR)
                            </small>
                            <b><?php echo $fname_extension; ?></b>
                        </td>
                        <td colspan="3"><b><?php echo $fc7name_of_children; ?></b></td>
                        <td colspan="3"><b><?php echo $fc7date_of_birth; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-0">
                            <span class="count"></span> MIDDLE NAME
                        </td>
                        <td colspan="5"><b><?php echo $fmiddle_name; ?></b></td>
                        <td colspan="3"><b><?php echo $fc8name_of_children; ?></b></td>
                        <td colspan="3"><b><?php echo $fc8date_of_birth; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-bottom-0">
                            <span class="count">25.</span> MOTHERS MAIDEN NAME
                        </td>
                        <td colspan="5"><b><?php echo $fmmaidenname; ?></b></td>
                        <td colspan="3"><b><?php echo $fc9name_of_children; ?></b></td>
                        <td colspan="3"><b><?php echo $fc9date_of_birth; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-0">
                            <span class="count"></span> SURNAME
                        </td>
                        <td colspan="5"><b><?php echo $fmsurname; ?></b></td>
                        <td colspan="3"><b><?php echo $fc10name_of_children; ?></b></td>
                        <td colspan="3"><b><?php echo $fc10date_of_birth; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-0">
                            <span class="count"></span> FIRST NAME
                        </td>
                        <td colspan="5"><b><?php echo $fmfirst_name; ?></b></td>
                        <td colspan="3"><b><?php echo $fc11name_of_children; ?></b></td>
                        <td colspan="3"><b><?php echo $fc11date_of_birth; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-0">
                            <span class="count"></span> MIDDLE NAME
                        </td>
                        <td colspan="5"><b><?php echo $fmmiddle_name; ?></b></td>
                        <td colspan="6" class="s-label text-danger text-center"><i><b>(Continue on seperate sheet if
                                    necessary)</b></i></td>
                    </tr>
                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator">III. EDUCATIONAL BACKGROUND</td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="1" class="s-label border-bottom-0">
                            <span class="count">26.</span>
                            <span class="d-block text-center">LEVEL</span>
                        </td>
                        <td colspan="4" class="s-label border-bottom-0">
                            NAME OF SCHOOL<br>(Write in full)
                        </td>
                        <td colspan="2" class="s-label border-bottom-0">
                            BASIC EDUCATION/DEGREE/COURSE<br>
                            (Write in full)
                        </td>
                        <td colspan="2" class="s-label border-bottom-0">
                            PERIOD OF ATTENDANCE
                        </td>
                        <td colspan="1" class="s-label border-bottom-0">HIGHEST LEVEL/UNITS EARNED<br>(If not graduated)
                        </td>
                        <td colspan="1" class="s-label border-bottom-0">YEAR GRADUATED</td>
                        <td colspan="1" class="s-label border-bottom-0">SCHOLARSHIP/<br>ACADEMIC<br>HONORS<br>RECEIVED
                        </td>
                    </tr>
                    <tr class="text-center" style="margin-top: -20px;">
                        <td colspan="1" class="s-label border-top-0"></td>
                        <td colspan="4" class="s-label border-top-0"></td>
                        <td colspan="2" class="s-label border-top-0"></td>
                        <td colspan="1" class="s-label">From</td>
                        <td colspan="1" class="s-label">To</td>
                        <td colspan="1" class="s-label border-top-0"></td>
                        <td colspan="1" class="s-label border-top-0"></td>
                        <td colspan="1" class="s-label border-top-0"></td>
                    </tr>

                    <?php
            require('db_config.php');
            $id = $_GET['print'];
            
            $sql = "SELECT * FROM tbl_educ WHERE employee_id=$id  ORDER BY educational_id";
            $educs = $mysqli->query($sql);
            while($educ = $educs->fetch_assoc()){
            ?>
                    <tr>
                        <td colspan="1" class="s-label" style="text-transform: uppercase;">
                            <span class="count"></span> <?php echo $educ['ed_level'] ?>
                        </td>
                        <td colspan="4"><b><?php echo $educ['name_of_school'] ?></b></td>
                        <td colspan="2"><b><?php echo $educ['educ_degree'] ?></b></td>
                        <td colspan="1"><b><?php echo $educ['att_from'] ?></b></td>
                        <td colspan="1"><b><?php echo $educ['att_to'] ?></b></td>
                        <td colspan="1"><b><?php echo $educ['level_earned'] ?></b></td>
                        <td colspan="1"><b><?php echo $educ['year_grad'] ?></b></td>
                        <td colspan="1"><b><?php echo $educ['scholarship_honors'] ?></b></td>
                    </tr>
                    <?php } ?>

                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator bg-transparent text-danger text-center">
                            <i>(Continue on seperate sheet if necessary)</i>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="text-center"><i><b>SIGNATURE</b></i></td>
                        <td colspan="6"></td>
                        <td colspan="2" class="text-center"><i><b>DATE</b></i></td>
                        <td colspan="3"></td>
                    </tr>
                </tbody>

                <!-- End of Page 1 -->

                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator">IV. CIVIL SERVICE ELIGIBILITY</td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="5" class="s-label border-bottom-0" style="width:30%">
                            <span class="count float-left">27.</span>
                            CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER SPECIAL LAWS/ CES/ CSEE
                            BARANGAY ELIGIBILITY / DRIVER'S LICENSE
                        </td>
                        <td colspan="1" class="s-label border-bottom-0">RATING<br>(If Applicable)</td>
                        <td colspan="2" class="s-label border-bottom-0">DATE OF EXAMINATION / CONFERMENT</td>
                        <td colspan="2" class="s-label border-bottom-0">PLACE OF EXAMINATION / CONFERMENT</td>
                        <td colspan="2" class="s-label border-bottom-0">LICENSE<br>(if applicable)</td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="5" class="s-label border-top-0"></td>
                        <td colspan="1" class="s-label border-top-0"></td>
                        <td colspan="2" class="s-label border-top-0"></td>
                        <td colspan="2" class="s-label border-top-0"></td>
                        <td colspan="1" class="s-label">NUMBER</td>
                        <td colspan="1" class="s-label">Date of Validity</td>
                    </tr>

                    <?php
            require('db_config.php');
            $id = $_GET['print'];
            
            $sql = "SELECT * FROM tbl_eligibility WHERE employee_id=$id  ORDER BY civil_service_id";
            $eligs = $mysqli->query($sql);
            while($elig = $eligs->fetch_assoc()){
            ?>
                    <tr>
                        <td colspan="5"><b><?php echo $elig['descriptionx'] ?></b></td>
                        <td colspan="1"><b><?php echo $elig['rating'] ?></b></td>
                        <td colspan="2"><b><?php echo $elig['date_exam'] ?></b></td>
                        <td colspan="2"><b><?php echo $elig['place_examination'] ?></b></td>
                        <td colspan="1"><b><?php echo $elig['cert_no'] ?></b></td>
                        <td colspan="1"><b><?php echo $elig['date_of_validity'] ?></b></td>
                    </tr>
                    <?php } ?>

                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator bg-transparent text-danger text-center">
                            <i>(Continue on seperate sheet if necessary)</i>
                        </td>
                    </tr>
                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator">
                            V. WORK EXPERIENCE fgfgh<br>
                            <small><i>(Include private employment. Start from your recent work) Description of duties
                                    should be indicated in the attached Work Experience sheet.</i></small>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="1" class="s-label border-bottom-0" style="width: 20%;">
                            <span class="count float-left">28.</span>
                            INCLUSIVE DATES<br>(mm/dd/yyyy)

                        </td>
                        <td colspan="5" class="s-label border-bottom-0">
                            POSITION TITLE<br>
                            Write in full/Do not abbreviate)
                        </td>
                        <td colspan="2" class="s-label border-bottom-0">
                            DEPARTMENT/AGENCY/OFFICE/COMPANY<br>
                            (Write in full/Do not abbreviate)
                        </td>
                        <td colspan="1" class="s-label border-bottom-0">MONTHLY<br>SALARY</td>
                        <td colspan="1" class="s-label border-bottom-0"><small>SALARY/ JOB/ PAY<br>GRADE (if
                                applicable)& STEP (Format "00-0")/ INCREMENT</small></td>
                        <td colspan="1" class="s-label border-bottom-0">STATUS OF<br>APPOINTMENT</td>
                        <td colspan="1" class="s-label border-bottom-0">GOV'T SERVICE<br>
                            <small>(Y/ N)</small></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="p-0">
                            <table class="w-100 border-0">
                                <tbody class="border-0">
                                    <tr class="text-center">
                                        <td class="s-label border-0 border-bottom-0" style="width: 50%;">From</td>
                                        <td class="s-label border-top-0 border-right-0 border-bottom-0"
                                            style="width: 50%;">To</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td colspan="5" class="s-label border-top-0"></td>
                        <td colspan="2" class="s-label border-top-0"></td>
                        <td colspan="1" class="s-label border-top-0"></td>
                        <td colspan="1" class="s-label border-top-0"></td>
                        <td colspan="1" class="s-label border-top-0"></td>
                        <td colspan="1" class="s-label border-top-0"></td>
                    </tr>

                    <?php
            require('db_config.php');
            $id = $_GET['print'];
            
            $sql = "SELECT * FROM tbl_work_experience WHERE employee_id=$id  ORDER BY work_experience_id";
            $works = $mysqli->query($sql);
            while($work = $works->fetch_assoc()){
            ?>

                    <tr>
                        <td colspan="1" class="p-0">
                            <table class="w-100 border-0">
                                <tbody class="border-0">
                                    <tr>
                                        <td class="border-0 border-bottom-0" style="width: 50%;">
                                            <b><?php echo $work['work_from'] ?></b></td>
                                        <td class="border-top-0 border-right-0 border-bottom-0" style="width: 50%;">
                                            <b><?php echo $work['work_to'] ?></b>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td colspan="5"><b><?php echo $work['position_title'] ?></b></td>
                        <td colspan="2"><b><?php echo $work['department_agency'] ?></b></td>
                        <td colspan="1"><b><?php echo $work['monthly_salary'] ?></b></td>
                        <td colspan="1"><b><?php echo $work['salary_job_step'] ?></b></td>
                        <td colspan="1"><b><?php echo $work['status_appointment'] ?></b></td>
                        <td colspan="1"><b><?php echo $work['government_service_y_n'] ?></b></td>
                    </tr>
                    <?php } ?>

                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator bg-transparent text-danger text-center">
                            <i>(Continue on seperate sheet if necessary)</i>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="text-center"><i><b>SIGNATURE</b></i></td>
                        <td colspan="6"></td>
                        <td colspan="2" class="text-center"><i><b>DATE</b></i></td>
                        <td colspan="3"></td>
                    </tr>
                </tbody>

                <!-- End of Page 2 -->

                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator">VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC /
                            NON-GOVERNMENT / PEOPLE / VOLUNTARY ORGANIZATION/S</td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="6" class="s-label border-bottom-0">
                            <span class="count float-left">29.</span> NAME & ADDRESS OF ORGANIZATION<br>
                            (Write in full)
                        </td>
                        <td colspan="2" class="s-label border-bottom-0">INCLUSIVE DATES</td>
                        <td colspan="1" class="s-label border-bottom-0">NUMBER OF HOURS</td>
                        <td colspan="3" class="s-label border-bottom-0">POSITION / NATURE OF WORK</td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="6" class="s-label border-top-0"></td>
                        <td colspan="1" class="s-label">From</td>
                        <td colspan="1" class="s-label">To</td>
                        <td colspan="1" class="s-label border-top-0"></td>
                        <td colspan="3" class="s-label border-top-0"></td>
                    </tr>

                    <?php
            require('db_config.php');
            $id = $_GET['print'];
            
            $sql = "SELECT * FROM tbl_voluntary_work WHERE employee_id=$id  ORDER BY voluntary_work_id";
            $vols = $mysqli->query($sql);
            while($vol = $vols->fetch_assoc()){
            ?>

                    <tr>
                        <td colspan="6"><b><?php echo $vol['name_address'] ?></b></td>
                        <td colspan="1"><b><?php echo $vol['voluntary_from'] ?></b></td>
                        <td colspan="1"><b><?php echo $vol['voluntary_to'] ?></b></td>
                        <td colspan="1"><b><?php echo $vol['no_of_hours'] ?></b></td>
                        <td colspan="3"><b><?php echo $vol['position_nature_of_work'] ?></b></td>
                    </tr>
                    <?php } ?>

                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator bg-transparent text-danger text-center">
                            <i>(Continue on seperate sheet if necessary)</i>
                        </td>
                    </tr>
                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator">VII. LEARNING AND DEVELOPMENT (L&D)
                            INTERVENTIONS/TRAINING PROGRAMS ATTENDED<br>
                            <small><i>(Start from the most recent L&D/training program and include only the relevant
                                    L&D/training taken for the last five (5) years for Division
                                    Chief/Executive/Managerial positions)</i></small>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="6" class="s-label border-bottom-0">
                            <span class="count float-left">30.</span> TITLE OF LEARNING AND DEVELOPMENT
                            INTERVENTIONS/TRAINING PROGRAMS<br>
                            (Write in full)
                        </td>
                        <td colspan="2" class="s-label border-bottom-0">INCLUSIVE DATES</td>
                        <td colspan="1" class="s-label border-bottom-0">NUMBER OF HOURS</td>
                        <td colspan="1" class="s-label border-bottom-0">Type of LD ( Managerial/
                            Supervisory/Technical/etc)</td>
                        <td colspan="2" class="s-label border-bottom-0">CONDUCTED/ SPONSORED BY<br>(Write in full)</td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="6" class="s-label border-top-0"></td>
                        <td colspan="1" class="s-label">From</td>
                        <td colspan="1" class="s-label">To</td>
                        <td colspan="1" class="s-label border-top-0"></td>
                        <td colspan="1" class="s-label border-top-0"></td>
                        <td colspan="2" class="s-label border-top-0"></td>
                    </tr>

                    <?php
            require('db_config.php');
            $id = $_GET['print'];
            
            $sql = "SELECT * FROM tbl_training WHERE employee_id=$id  ORDER BY training_id";
            $trains = $mysqli->query($sql);
            while($train = $trains->fetch_assoc()){
            ?>

                    <tr>
                        <td colspan="6"><b><?php echo $train['title'] ?></b></td>
                        <td colspan="1"><b><?php echo $train['att_from'] ?></b></td>
                        <td colspan="1"><b><?php echo $train['att_to'] ?></b></td>
                        <td colspan="1"><b><?php echo $train['no_hours'] ?></b></td>
                        <td colspan="1"><b><?php echo $train['type_of_ld'] ?></b></td>
                        <td colspan="2"><b><?php echo $train['conducted_by'] ?></b></td>
                    </tr>
                    <?php } ?>

                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator bg-transparent text-danger text-center">
                            <i>(Continue on seperate sheet if necessary)</i>
                        </td>
                    </tr>
                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator">VIII. OTHER INFORMATION</td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="4" class="s-label">
                            <span class="count float-left">31.</span> SPECIAL SKILLS and HOBBIES
                        </td>
                        <td colspan="4" class="s-label">
                            <span class="count float-left">32.</span> NON-ACADEMIC DISTINCTIONS / RECOGNITION<br>(Write
                            in full)
                        </td>
                        <td colspan="4" class="s-label">
                            <span class="count float-left">33.</span> MEMBERSHIP IN ASSOCIATION/ORGANIZATION<br>(Write
                            in full)
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4"><b><?php echo $sp1special_skills_hobbies; ?></b></td>
                        <td colspan="4"><b><?php echo $na1non_academic_distinctions; ?></b></td>
                        <td colspan="4"><b><?php echo $ma1membership_asso_organization; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="4"><b><?php echo $sp2special_skills_hobbies; ?></b></td>
                        <td colspan="4"><b><?php echo $na2non_academic_distinctions; ?></b></td>
                        <td colspan="4"><b><?php echo $ma2membership_asso_organization; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="4"><b><?php echo $sp3special_skills_hobbies; ?></b></td>
                        <td colspan="4"><b><?php echo $na3non_academic_distinctions; ?></b></td>
                        <td colspan="4"><b><?php echo $ma3membership_asso_organization; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="4"><b><?php echo $sp4special_skills_hobbies; ?></b></td>
                        <td colspan="4"><b><?php echo $na4non_academic_distinctions; ?></b></td>
                        <td colspan="4"><b><?php echo $ma4membership_asso_organization; ?></b></td>
                    </tr>
                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator bg-transparent text-danger text-center">
                            <i>(Continue on seperate sheet if necessary)</i>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-center"><i><b>SIGNATURE</b></i></td>
                        <td colspan="3"></td>
                        <td colspan="1" class="text-center"><i><b>DATE</b></i></td>
                        <td colspan="4"></td>
                    </tr>
                </tbody>

                <!-- End of Page 3 -->

                <!-- Q1 -->
                <tbody class="table-body question-block">
                    <tr>
                        <td colspan="12" class="separator"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label border-bottom-0">
                            <span class="count">34.</span> Are you related by consanguinity or affinity to the
                            appointing or recommending authority, or to the<br>
                            <span class="count"></span>chief of bureau or office or to the person who has immediate
                            supervision over you in the Office,<br>
                            <span class="count"></span>Bureau or Department where you will beapppointed,<br>
                        </td>
                        <td colspan="2">

                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                            <span class="count"></span>a. within the third degree?<br>
                        </td>
                        <td colspan="2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_34_ay; ?> disabled>
                                    <label for="my-input">YES</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_34_an; ?> disabled>
                                    <label for="my-input">NO</label>
                                </div>

                            </div>
                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                            <span class="count"></span>b. within the fourth degree (for Local Government Unit - Career
                            Employees)?
                        </td>
                        <td colspan="2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_34_by; ?> disabled>
                                    <label for="my-input">YES</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_34_bn; ?> disabled>
                                    <label for="my-input">NO</label>
                                </div>

                            </div>
                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                        </td>
                        <td colspan="2">If YES, give details:</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label"></td>
                        <td colspan="5"><b><?php echo $yes_details_34_b; ?></b></td>
                    </tr>
                </tbody>

                <!-- Q2 -->
                <tbody class="table-body question-block">
                    <tr>
                        <td colspan="7" class="s-label border-bottom-0">
                            <span class="count">35.</span> a. Have you ever been found guilty of any administrative
                            offense?
                        </td>
                        <td colspan="2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_35_ay; ?> disabled>
                                    <label for="my-input">YES</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_35_an; ?> disabled>
                                    <label for="my-input">NO</label>
                                </div>

                            </div>
                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label"></td>
                        <td colspan="5">If YES, give details:</td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label"></td>
                        <td colspan="5"><b><?php echo $yes_details_35_a; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                            <span class="count"></span> b. within the fourth degree (for Local Government Unit - Career
                            Employees)?
                        </td>
                        <td colspan="2" style="border-top-width: 1px !important;">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_35_by; ?> disabled>
                                    <label for="my-input">YES</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_35_bn; ?> disabled>
                                    <label for="my-input">NO</label>
                                </div>
                            </div>
                        </td>
                        <td colspan="3" style="border-top-width: 1px !important;"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label"></td>
                        <td colspan="5">If YES, give details:</td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label"></td>
                        <td colspan="2">Date Filed:</td>
                        <td colspan="3"><b><?php echo $question_35_b_datefiled; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label"></td>
                        <td colspan="2">Status of Case/s:</td>
                        <td colspan="3"><b><?php echo $status_cases_35_b; ?></b></td>
                    </tr>
                </tbody>

                <!-- Q3 -->
                <tbody class="table-body question-block">
                    <tr>
                        <td colspan="7" class="s-label border-bottom-0">
                            <span class="count">36.</span> Have you ever been convicted of any crime or violation of any
                            law, decree, ordinance or regulation by any court or tribunal?
                        </td>
                        <td colspan="2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_36y; ?> disabled>
                                    <label for="my-input">YES</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_36n; ?> disabled>
                                    <label for="my-input">NO</label>
                                </div>
                            </div>
                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label"></td>
                        <td colspan="5">If YES, give details:</td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label"></td>
                        <td colspan="5"> <b><?php echo $yes_details_36; ?></b></td>
                    </tr>
                </tbody>

                <!-- Q4 -->
                <tbody class="table-body question-block">
                    <tr>
                        <td colspan="7" class="s-label border-bottom-0">
                            <span class="count">37.</span> Have you ever been separated from the service in any of the
                            following modes: resignation,<br>


                        </td>
                        <td colspan="2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_37y; ?> disabled>
                                    <label for="my-input">YES</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_37n; ?> disabled>
                                    <label for="my-input">NO</label>
                                </div>
                            </div>
                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                            <span class="count"></span> retirement, dropped from the rolls, dismissal, termination, end
                            of term, finished contract or phased<br>
                        </td>
                        <td colspan="5">If YES, give details:</td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                            <span class="count"></span> out (abolition) in the public or private sector?
                        </td>
                        <td colspan="2"><b><?php echo $yes_details_37; ?></b></td>
                        <td colspan="3"></td>
                    </tr>
                </tbody>

                <!-- Q5 -->
                <tbody class="table-body question-block">
                    <tr>
                        <td colspan="7" class="s-label border-bottom-0">
                            <span class="count">38.</span> a. Have you ever been a candidate in a national or local
                            election held within the last year (except Barangay election)?
                        </td>
                        <td colspan="2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_38_ay; ?> disabled>
                                    <label for="my-input">YES</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_38_an; ?> disabled>
                                    <label for="my-input">NO</label>
                                </div>
                            </div>
                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                            <span class="count"></span><br>
                        </td>
                        <td colspan="2">If YES, give details:</td>
                        <td colspan="3"><b><?php echo $yes_details_38_a; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                            <span class="count"></span> b. Have you resigned from the government service during the
                            three (3)-month period before the last
                        </td>
                        <td colspan="2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_38_by; ?> disabled>
                                    <label for="my-input">YES</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_38_bn; ?> disabled>
                                    <label for="my-input">NO</label>
                                </div>
                            </div>
                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                            <span class="count"></span> election to promote/actively campaign for a national or local
                            candidate?
                        </td>
                        <td colspan="2">If YES, give details:</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label"></td>
                        <td colspan="2"><b><?php echo $yes_details_38_b; ?></b></td>
                        <td colspan="3"></td>
                    </tr>
                </tbody>

                <!-- Q6 -->
                <tbody class="table-body question-block">
                    <tr>
                        <td colspan="7" class="s-label border-bottom-0">
                            <span class="count">39.</span> Have you acquired the status of an immigrant or permanent
                            resident of another country?
                        </td>
                        <td colspan="2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_39y; ?> disabled>
                                    <label for="my-input">YES</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_39n; ?> disabled>
                                    <label for="my-input">NO</label>
                                </div>
                            </div>
                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                        </td>
                        <td colspan="2">if YES, give details (country):</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                        </td>
                        <td colspan="2"><b><?php echo $yes_details_39; ?></b></td>
                        <td colspan="3"></td>
                    </tr>
                </tbody>

                <!-- Q7 -->
                <tbody class="table-body question-block">
                    <tr>
                        <td colspan="7" class="s-label border-bottom-0">
                            <span class="count">40.</span> Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna
                            Carta for Disabled Persons (RA<br>
                            <span class="count"></span> 7277); and (c) Solo Parents Welfare Act of 2000 (RA 8972),
                            please answer the following items:
                        </td>
                        <td colspan="2">

                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                            <span class="count"></span>a. Are you a member of any indigenous group?<br>
                        </td>
                        <td colspan="2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_40_ay; ?> disabled>
                                    <label for="my-input">YES</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_40_an; ?> disabled>
                                    <label for="my-input">NO</label>
                                </div>
                            </div>
                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                            <span class="count"></span><br>
                        </td>
                        <td colspan="2">If YES, please specify:</td>
                        <td colspan="3"><b><?php echo $a_yes_details_40; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                            <span class="count"></span>b. Are you a person with disability?
                        </td>
                        <td colspan="2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_40_by; ?> disabled>
                                    <label for="my-input">YES</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_40_bn; ?> disabled>
                                    <label for="my-input">NO</label>
                                </div>
                            </div>
                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                        </td>
                        <td colspan="2">If YES, please specify:</td>
                        <td colspan="3"><b><?php echo $b_yes_details_b; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                            <span class="count"></span>c. Are you a solo parent?
                        </td>
                        <td colspan="2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_40_cy; ?> disabled>
                                    <label for="my-input">YES</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_40_cn; ?> disabled>
                                    <label for="my-input">NO</label>
                                </div>
                            </div>
                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label"></td>
                        <td colspan="2">If YES, please specify:</td>
                        <td colspan="3"><b><?php echo $c_yes_details_c; ?></b></td>
                    </tr>
                </tbody>

                <!-- End of Page 4 -->

                <tbody class="table-body">
                    <tr>
                        <td colspan="8" class="s-label">
                            <span class="count">41.</span> REFERENCES <span class="text-danger">(Person not related by
                                consanguinity or affinity to applicant /appointee)</span>
                        </td>
                        <td colspan="4" rowspan="5" class="p-5">
                            <table class="w-75 mx-auto border-0">
                                <tbody class="border-0">
                                    <tr>
                                        <td class="text-center p-3">ID picture taken within the last 6 months3.5 cm. X
                                            4.5 cm(passport size)With full and handwrittenname tag and signature
                                            overprinted nameComputer generated or photocopied picture is not acceptable
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-0 text-muted lead text-center">PHOTO</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="4" class="s-label">NAME</td>
                        <td colspan="2" class="s-label">ADDRESS</td>
                        <td colspan="2" class="s-label">TEL. NO.</td>
                    </tr>

                    <?php
            require('db_config.php');
            $id = $_GET['print'];
            
            $sql = "SELECT * FROM tbl_references WHERE employee_id=$id  ORDER BY references_id";
            $refs = $mysqli->query($sql);
            while($ref = $refs->fetch_assoc()){
            ?>

                    <tr>
                        <td colspan="4"><b><?php echo $ref['ref_name'] ?></b></td>
                        <td colspan="2"><b><?php echo $ref['ref_address'] ?></b></td>
                        <td colspan="2"><b><?php echo $ref['ref_tel_no'] ?></b></td>
                    </tr>
                    <?php } ?>

                    <tr>
                        <td colspan="8">
                            <span class="count">42.</span> I declare under oath that I have personally accomplished this
                            Personal Data Sheet which is a true correct and<br><span class="count"></span> complete
                            statement pursuant to the provisions of pertinent laws, rules and regulations of the
                            Republic of the<br><span class="count"></span> Philippines. I authorize the agency head /
                            authorized representative t verify validate the contents stated herein.<br><span
                                class="count"></span> I agree that any misrepresentation made in this document and its
                            attachments shall cause the filing of<br><span class="count"></span> administrative/criminal
                            case/s against me.
                        </td>
                    </tr>
                    <tr>
                        <td colspan="12" class="border-0 p-0">
                            <table class="border-0 w-100">
                                <tbody class="border-0">
                                    <tr>
                                        <td colspan="4" class="border-0 p-3" style="width: 38.5%;">
                                            <table class="border-0 w-100">
                                                <tbody>
                                                    <tr>
                                                        <td class="s-label py-2">Government Issued ID(i.e.Passport,
                                                            GSIS, SSS, PRC, Driver's License, etc.)<br> PLEASE INDICATE
                                                            ID Number and Date of Issuance</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 30%;">Government Issued ID: <b>
                                                                <?php echo $ggov_id; ?></b></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 30%;">ID/License/Passport No.: <b>
                                                                <?php echo $gid_no; ?></b></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 30%;">Date/Place of Issuance: <b>
                                                                <?php echo $gdate_place_issuance; ?></b></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td colspan="4" class="border-0 p-3" style="width: 38.5%;">
                                            <table class="border-0 w-100">
                                                <tbody class="border-0 text-center">
                                                    <tr>
                                                        <td class="py-4"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="s-label"><small>Signature (Sign inside the
                                                                box)</small></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="s-label"><small>Date Accomplished</small></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td colspan="4" class="border-0 p-3">
                                            <table class="border-0 w-100">
                                                <tbody class="border-0">
                                                    <tr>
                                                        <td class="py-5"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="s-label text-center">Right Thumbmark</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>

                                <tbody class="table-body">
                                    <tr>
                                        <td colspan="12" class="text-center py-2">
                                            SUBSCRIBED AND SWORN to before me this <input type="text"
                                                class="border-top-0 border-left-0 border-right-0" style="width: 25%;"> ,
                                            affiant exhibiting his/her validly issued government ID as indicated above.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="12" class="py-5">
                                            <table class="w-25 mx-auto">
                                                <tbody>
                                                    <tr>
                                                        <td class="py-5"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="s-label text-center">Person Administering Oath</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </td>
                    </tr>
                </tbody>

                <!-- End of References -->



            </table>
        </form>
    </div>



</main>
<main id="c1" class="turn-over" style="display:none">
    <div id="tblprint" class=" table-responsive p-3">
        <form action="">
            <table id="pds-table" class="employeeTable">

                <tbody class="table-header">
                    <tr>
                        <td colspan="12" class="h5"><i><b>CS Form No. 212</b></i></td>
                    </tr>
                    <tr>
                        <td colspan="12" class="align-top" style="max-height: 12px;">
                            <i><b>Revised 2017</b></i>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="12" class="text-center">
                            <h1><b>PERSONAL DATA SHEET</b></h1>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="12"><i><b>WARNING: Any misrepresentation main in the Personal Data Sheet and the
                                    Work Experience Sheet shall cause the filing of administative/criminal case/s
                                    against the person concerned.</b></i></td>
                    </tr>
                    <tr>
                        <td colspan="12"><i><b>READ THE ATTACHED GUIDE TO FILLING OUT THE PERSONAL DATA SHEET (PDS)
                                    BEFORE ACCOMPLISHING THE PDS FORM</b></i></td>
                    </tr>
                    <tr>
                        <td colspan="9">Print legibly. Tick appropriate boxes ( <input type="checkbox" checked> ) ad use
                            seperate sheet if necessary. Indicate N/A if not applicable. <b>DO NOT ABBREVIATE.</b></td>
                        <td colspan="1" style="border:1px solid#000b;background:#757575;width:8%;"><small>1. CS ID
                                No.</small></td>
                        <td colspan="2" class="text-right" style="border:1px solid #000;width:20%;"><small>(Do not fill
                                up. For CSC use only)</small></td>
                    </tr>
                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator">I. PERSONAL INFORMATION</td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-bottom-0">
                            <span class="count">2.</span> SURNAME
                        </td>
                        <td colspan="11"> <b><?php echo $surname; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-0"><span class="count"></span> FIRST NAME</td>
                        <td colspan="9"><b><?php echo $first_name; ?></b></td>
                        <td colspan="2" class="align-top"><small>NAME EXTENSION (JR.,SR)
                            </small><b><?php echo $name_extension; ?></b>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-0"><span class="count"></span> MIDDLE NAME</td>
                        <td colspan="11"><b><?php echo $middle_name; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-bottom-0">
                            <span class="count">3.</span> DATE OF BIRTH<br>
                            <span class="count"></span> (mm/dd/yyyy)
                        </td>
                        <td colspan="5" style="border: none;"><b><?php echo $date_birth; ?></b></td>
                        <td colspan="3" class="s-label align-top border-bottom-0">
                            <span class="count">16.</span> CITIZENSHIP
                        </td>

                        <td colspan="3" style="border-bottom: 0;">
                            <div class="d-flex justify-content-between align-items-center ml-2 mt-2 mb-0 mr-2">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $citizenshipy; ?> disabled>
                                    <label for="my-input">Filipino</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $citizenshipn; ?> disabled>
                                    <label for="my-input">Dual Citizenship</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-0"></td>
                        <td colspan="5" style="border-top: none !important;"></td>
                        <td colspan="3" class="s-label align-top border-0 text-center small">
                            If holder of dual citizenship,
                        </td>
                        <td colspan="3" style="border-top: none;">
                            <div class="d-flex justify-content-between align-items-center ml-2 mt-2 mb-0 mr-2">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $dual_citizenshipy; ?> disabled>
                                    <label for="my-input">by birth</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $dual_citizenshipn; ?> disabled>
                                    <label for="my-input">by naturalization</label>
                                </div>
                            </div>
                            <label for="my-input">Pls. indicate country:</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label"><span class="count">4.</span> PLACE OR BIRTH</td>
                        <td colspan="5"><b><?php echo $place_of_birth; ?></b></td>
                        <td colspan="3" class="s-label align-top border-0 text-center small"> please indicate the
                            details.</td>
                        <td colspan="3" style="border-bottom: none;"><b><?php echo $country; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label"><span class="count">5.</span> SEX</td>
                        <td colspan="5">
                            <div class="d-flex justify-content-between align-items-center ml-2 mt-2 mb-0 mr-2">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $sexy; ?> disabled>
                                    <label for="my-input">Male</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $sexn; ?> disabled>
                                    <label for="my-input">Female</label>
                                </div>
                            </div>
                        </td>
                        <td colspan="3" class="s-label align-top border-0"></td>
                        <td colspan="3" style="border-top: none;"></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-bottom-0"><span class="count">6.</span> CIVIL STATUS</td>
                        <td colspan="5" style="border: none;">
                            <div class="d-flex justify-content-between align-items-center ml-2 mt-2 mb-0 mr-2">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $civil_statuss; ?> disabled>
                                    <label for="my-input">Single</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $civil_statusm; ?> disabled>
                                    <label for="my-input">Married</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $civil_statusw; ?> disabled>
                                    <label for="my-input">Widowed</label>
                                </div>
                            </div>
                        </td>
                        <td colspan="2" class="s-label align-top border-bottom-0 small">
                            <span class="count">17.</span> RESIDENTIAL ADDRESS
                        </td>
                        <td colspan="2"><b><?php echo $residential_house_block_lot_no; ?></b></td>
                        <td colspan="2"><b><?php echo $residential_street; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-top-0"><span class="count"></span></td>
                        <td colspan="5" style="border-top: none !important;">
                            <div class="d-flex justify-content-between align-items-center ml-2 mt-2 mb-0 mr-2">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $civil_statusse; ?> disabled>
                                    <label for="my-input">Separated</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $civil_statuso; ?> disabled>
                                    <label for="my-input">Other/s</label>
                                </div>
                            </div>
                        </td>
                        <td colspan="2" class="s-label align-top border-0"></td>
                        <td colspan="2"><b><?php echo $residential_subdivision_village; ?></b></td>
                        <td colspan="2"><b><?php echo $residential_barangay; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label"><span class="count">7.</span> HEIGHT (m)</td>
                        <td colspan="5"><b><?php echo $height_m; ?></b></td>
                        <td colspan="2" class="s-label align-top border-0"></td>
                        <td colspan="2"><b><?php echo $residential_city_municipality; ?></b></td>
                        <td colspan="2"><b><?php echo $residential_province; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label"><span class="count">8.</span> WEIGHT (kg)</td>
                        <td colspan="5"><b><?php echo $weight_m; ?></b></td>
                        <td colspan="2" class="s-label border-0 text-center">
                            ZIP CODE
                        </td>
                        <td colspan="4"><b><?php echo $residential_zipcode; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label"><span class="count">9.</span> BLOOD TYPE</td>
                        <td colspan="5"><b><?php echo $blood_type; ?></b></td>
                        <td colspan="2" class="s-label border-bottom-0"><span class="count">18.</span> PERMANENT ADDRESS
                        </td>
                        <td colspan="2"><b><?php echo $permanent_house_block_lot_no; ?></b></td>
                        <td colspan="2"><b><?php echo $permanent_street; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label"><span class="count">10.</span> GSIS ID NO.</td>
                        <td colspan="5"><b><?php echo $gsis_id_no ; ?></b></td>
                        <td colspan="2" class="s-label border-0"></td>
                        <td colspan="2"><b><?php echo $permanent_subdivision_village; ?></b></td>
                        <td colspan="2"><b><?php echo $permanent_barangay; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label"><span class="count">11.</span> PAG-IBIG NO.</td>
                        <td colspan="5"><b><?php echo $pagibig_id_no ; ?></b></td>
                        <td colspan="2" class="s-label border-0"></td>
                        <td colspan="2"><b><?php echo $permanent_city_municipality; ?></b></td>
                        <td colspan="2"><b><?php echo $permanent_province; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label"><span class="count">12.</span> PHILHEALTH NO.</td>
                        <td colspan="5"><b><?php echo $philhealth_no ; ?></b></td>
                        <td colspan="2" class="s-label text-center border-0">ZIP CODE</td>
                        <td colspan="4"><b><?php echo $permanent_zipcode; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label"><span class="count">13.</span> SSS NO.</td>
                        <td colspan="5"><b><?php echo $sss_no ; ?></b></td>
                        <td colspan="2" class="s-label"><span class="count">19.</span> TELEPHONE NO.</td>
                        <td colspan="4"><b><?php echo $telephone_no; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label"><span class="count">14.</span> TIN NO.</td>
                        <td colspan="5"><b><?php echo $tin_no ; ?></b></td>
                        <td colspan="2" class="s-label"><span class="count">20.</span> MOBILE NO.</td>
                        <td colspan="4"><b><?php echo $mobile_no; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label"><span class="count">15.</span> AGENCY EMPLOYEE NO.</td>
                        <td colspan="5"><b><?php echo $agency_employee_no ; ?></b></td>
                        <td colspan="2" class="s-label"><span class="count">21.</span> EMAIL ADDRESS (if any)</td>
                        <td colspan="4"><b><?php echo $email_address; ?></b>
                        </td>
                    </tr>
                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator">II. FAMILY BACKGROUND</td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-bottom-0">
                            <span class="count">22.</span> SPOUSE SURNAME
                        </td>
                        <td colspan="5"><b><?php echo $spouses_surname; ?></b></td>
                        <td colspan="3" class="s-label">
                            <span class="count">23.</span> NAME of CHILDREN (Write full name and list all)
                        </td>
                        <td colspan="3" class="s-label text-center" style="width: 18%;">DATE OF BIRTH (mm/dd/yyyy)</td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-0">
                            <span class="count"></span> FIRST NAME
                        </td>
                        <td colspan="4"><b><?php echo $sfirst_name; ?></b></td>
                        <td colspan="1" class="align-top s-label">
                            <small>
                                NAME EXTENSION (JR.,SR)
                            </small>
                            <b><?php echo $sname_extension; ?></b>
                        </td>
                        <td colspan="3"><b><?php echo $fcname_of_children; ?></b></td>
                        <td colspan="3"><b><?php echo $fcdate_of_birth; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-0">
                            <span class="count"></span> MIDDLE NAME
                        </td>
                        <td colspan="5"><b><?php echo $smiddle_name; ?></b></td>
                        <td colspan="3"><b><?php echo $fc1name_of_children; ?></b></td>
                        <td colspan="3"><b><?php echo $fc1date_of_birth; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label">
                            <span class="count"></span> OCCUPATION
                        </td>
                        <td colspan="5"><b><?php echo $soccupation; ?></b></td>
                        <td colspan="3"><b><?php echo $fc2name_of_children; ?></b></td>
                        <td colspan="3"><b><?php echo $fc2date_of_birth; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label">
                            <span class="count"></span> EMPLOYER/BUSINESS NAME
                        </td>
                        <td colspan="5"><b><?php echo $semployer_business_name; ?></b></td>
                        <td colspan="3"><b><?php echo $fc3name_of_children; ?></b></td>
                        <td colspan="3"><b><?php echo $fc3date_of_birth; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label">
                            <span class="count"></span> BUSINESS ADDRESS
                        </td>
                        <td colspan="5"><b><?php echo $sbusiness_address; ?></b></td>
                        <td colspan="3"><b><?php echo $fc4name_of_children; ?></b></td>
                        <td colspan="3"><b><?php echo $fc4date_of_birth; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label">
                            <span class="count"></span> TELEPHONE NO.
                        </td>
                        <td colspan="5"><b><?php echo $stelephone_no; ?></b></td>
                        <td colspan="3"><b><?php echo $fc5name_of_children; ?></b></td>
                        <td colspan="3"><b><?php echo $fc5date_of_birth; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-bottom-0">
                            <span class="count">24.</span> FATHER'S SURNAME
                        </td>
                        <td colspan="5"><b><?php echo $fsurname; ?></b></td>
                        <td colspan="3"><b><?php echo $fc6name_of_children; ?></b></td>
                        <td colspan="3"><b><?php echo $fc6date_of_birth; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-0">
                            <span class="count"></span> FIRST NAME
                        </td>
                        <td colspan="4"><b><?php echo $ffirst_name; ?></b></td>
                        <td colspan="1" class="align-top s-label">
                            <small>
                                NAME EXTENSION (JR.,SR)
                            </small>
                            <b><?php echo $fname_extension; ?></b>
                        </td>
                        <td colspan="3"><b><?php echo $fc7name_of_children; ?></b></td>
                        <td colspan="3"><b><?php echo $fc7date_of_birth; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-0">
                            <span class="count"></span> MIDDLE NAME
                        </td>
                        <td colspan="5"><b><?php echo $fmiddle_name; ?></b></td>
                        <td colspan="3"><b><?php echo $fc8name_of_children; ?></b></td>
                        <td colspan="3"><b><?php echo $fc8date_of_birth; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-bottom-0">
                            <span class="count">25.</span> MOTHERS MAIDEN NAME
                        </td>
                        <td colspan="5"><b><?php echo $fmmaidenname; ?></b></td>
                        <td colspan="3"><b><?php echo $fc9name_of_children; ?></b></td>
                        <td colspan="3"><b><?php echo $fc9date_of_birth; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-0">
                            <span class="count"></span> SURNAME
                        </td>
                        <td colspan="5"><b><?php echo $fmsurname; ?></b></td>
                        <td colspan="3"><b><?php echo $fc10name_of_children; ?></b></td>
                        <td colspan="3"><b><?php echo $fc10date_of_birth; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-0">
                            <span class="count"></span> FIRST NAME
                        </td>
                        <td colspan="5"><b><?php echo $fmfirst_name; ?></b></td>
                        <td colspan="3"><b><?php echo $fc11name_of_children; ?></b></td>
                        <td colspan="3"><b><?php echo $fc11date_of_birth; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-0">
                            <span class="count"></span> MIDDLE NAME
                        </td>
                        <td colspan="5"><b><?php echo $fmmiddle_name; ?></b></td>
                        <td colspan="6" class="s-label text-danger text-center"><i><b>(Continue on seperate sheet if
                                    necessary)</b></i></td>
                    </tr>
                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator">III. EDUCATIONAL BACKGROUND</td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="1" class="s-label border-bottom-0">
                            <span class="count">26.</span>
                            <span class="d-block text-center">LEVEL</span>
                        </td>
                        <td colspan="4" class="s-label border-bottom-0">
                            NAME OF SCHOOL<br>(Write in full)
                        </td>
                        <td colspan="2" class="s-label border-bottom-0">
                            BASIC EDUCATION/DEGREE/COURSE<br>
                            (Write in full)
                        </td>
                        <td colspan="2" class="s-label border-bottom-0">
                            PERIOD OF ATTENDANCE
                        </td>
                        <td colspan="1" class="s-label border-bottom-0">HIGHEST LEVEL/UNITS EARNED<br>(If not graduated)
                        </td>
                        <td colspan="1" class="s-label border-bottom-0">YEAR GRADUATED</td>
                        <td colspan="1" class="s-label border-bottom-0">SCHOLARSHIP/<br>ACADEMIC<br>HONORS<br>RECEIVED
                        </td>
                    </tr>
                    <tr class="text-center" style="margin-top: -20px;">
                        <td colspan="1" class="s-label border-top-0"></td>
                        <td colspan="4" class="s-label border-top-0"></td>
                        <td colspan="2" class="s-label border-top-0"></td>
                        <td colspan="1" class="s-label">From</td>
                        <td colspan="1" class="s-label">To</td>
                        <td colspan="1" class="s-label border-top-0"></td>
                        <td colspan="1" class="s-label border-top-0"></td>
                        <td colspan="1" class="s-label border-top-0"></td>
                    </tr>

                    <?php
            require('db_config.php');
            $id = $_GET['print'];
            
            $sql = "SELECT * FROM tbl_educ WHERE employee_id=$id  ORDER BY educational_id";
            $educs = $mysqli->query($sql);
            while($educ = $educs->fetch_assoc()){
            ?>
                    <tr>
                        <td colspan="1" class="s-label" style="text-transform: uppercase;">
                            <span class="count"></span> <?php echo $educ['ed_level'] ?>
                        </td>
                        <td colspan="4"><b><?php echo $educ['name_of_school'] ?></b></td>
                        <td colspan="2"><b><?php echo $educ['educ_degree'] ?></b></td>
                        <td colspan="1"><b><?php echo $educ['att_from'] ?></b></td>
                        <td colspan="1"><b><?php echo $educ['att_to'] ?></b></td>
                        <td colspan="1"><b><?php echo $educ['level_earned'] ?></b></td>
                        <td colspan="1"><b><?php echo $educ['year_grad'] ?></b></td>
                        <td colspan="1"><b><?php echo $educ['scholarship_honors'] ?></b></td>
                    </tr>
                    <?php } ?>

                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator bg-transparent text-danger text-center">
                            <i>(Continue on seperate sheet if necessary)</i>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="text-center"><i><b>SIGNATURE</b></i></td>
                        <td colspan="6"></td>
                        <td colspan="2" class="text-center"><i><b>DATE</b></i></td>
                        <td colspan="3"></td>
                    </tr>
                </tbody>

                <!-- End of Page 1 -->

            </table>
        </form>
    </div>



</main>
<main id="c2" class="turn-over" style="display:none">
    <div id="tblprint" class=" table-responsive p-3">
        <form action="">
            <table id="pds-table" class="employeeTable">

                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator">IV. CIVIL SERVICE ELIGIBILITY</td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="5" class="s-label border-bottom-0" style="width:30%">
                            <span class="count float-left">27.</span>
                            CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER SPECIAL LAWS/ CES/ CSEE
                            BARANGAY ELIGIBILITY / DRIVER'S LICENSE
                        </td>
                        <td colspan="1" class="s-label border-bottom-0">RATING<br>(If Applicable)</td>
                        <td colspan="2" class="s-label border-bottom-0">DATE OF EXAMINATION / CONFERMENT</td>
                        <td colspan="2" class="s-label border-bottom-0">PLACE OF EXAMINATION / CONFERMENT</td>
                        <td colspan="2" class="s-label border-bottom-0">LICENSE<br>(if applicable)</td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="5" class="s-label border-top-0"></td>
                        <td colspan="1" class="s-label border-top-0"></td>
                        <td colspan="2" class="s-label border-top-0"></td>
                        <td colspan="2" class="s-label border-top-0"></td>
                        <td colspan="1" class="s-label">NUMBER</td>
                        <td colspan="1" class="s-label">Date of Validity</td>
                    </tr>

                    <?php
            require('db_config.php');
            $id = $_GET['print'];
            
            $sql = "SELECT * FROM tbl_eligibility WHERE employee_id=$id  ORDER BY civil_service_id";
            $eligs = $mysqli->query($sql);
            while($elig = $eligs->fetch_assoc()){
            ?>
                    <tr>
                        <td colspan="5"><b><?php echo $elig['descriptionx'] ?></b></td>
                        <td colspan="1"><b><?php echo $elig['rating'] ?></b></td>
                        <td colspan="2"><b><?php echo $elig['date_exam'] ?></b></td>
                        <td colspan="2"><b><?php echo $elig['place_examination'] ?></b></td>
                        <td colspan="1"><b><?php echo $elig['cert_no'] ?></b></td>
                        <td colspan="1"><b><?php echo $elig['date_of_validity'] ?></b></td>
                    </tr>
                    <?php } ?>

                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator bg-transparent text-danger text-center">
                            <i>(Continue on seperate sheet if necessary)</i>
                        </td>
                    </tr>
                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator">
                            V. WORK EXPERIENCE<br>
                            <small><i>(Include private employment. Start from your recent work) Description of duties
                                    should be indicated in the attached Work Experience sheet.</i></small>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="1" class="s-label border-bottom-0" style="width: 20%;">
                            <span class="count float-left">28.</span>
                            INCLUSIVE DATES<br>(mm/dd/yyyy)

                        </td>
                        <td colspan="5" class="s-label border-bottom-0">
                            POSITION TITLE<br>
                            Write in full/Do not abbreviate)
                        </td>
                        <td colspan="2" class="s-label border-bottom-0">
                            DEPARTMENT/AGENCY/OFFICE/COMPANY<br>
                            (Write in full/Do not abbreviate)
                        </td>
                        <td colspan="1" class="s-label border-bottom-0">MONTHLY<br>SALARY</td>
                        <td colspan="1" class="s-label border-bottom-0"><small>SALARY/ JOB/ PAY<br>GRADE (if
                                applicable)& STEP (Format "00-0")/ INCREMENT</small></td>
                        <td colspan="1" class="s-label border-bottom-0">STATUS OF<br>APPOINTMENT</td>
                        <td colspan="1" class="s-label border-bottom-0">GOV'T SERVICE<br>
                            <small>(Y/ N)</small></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="p-0">
                            <table class="w-100 border-0">
                                <tbody class="border-0">
                                    <tr class="text-center">
                                        <td class="s-label border-0 border-bottom-0" style="width: 50%;">From</td>
                                        <td class="s-label border-top-0 border-right-0 border-bottom-0"
                                            style="width: 50%;">To</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td colspan="5" class="s-label border-top-0"></td>
                        <td colspan="2" class="s-label border-top-0"></td>
                        <td colspan="1" class="s-label border-top-0"></td>
                        <td colspan="1" class="s-label border-top-0"></td>
                        <td colspan="1" class="s-label border-top-0"></td>
                        <td colspan="1" class="s-label border-top-0"></td>
                    </tr>

                    <?php
            require('db_config.php');
            $id = $_GET['print'];
            
            $sql = "SELECT * FROM tbl_work_experience WHERE employee_id=$id  ORDER BY work_experience_id";
            $works = $mysqli->query($sql);
            while($work = $works->fetch_assoc()){
            ?>

                    <tr>
                        <td colspan="1" class="p-0">
                            <table class="w-100 border-0">
                                <tbody class="border-0">
                                    <tr>
                                        <td class="border-0 border-bottom-0" style="width: 50%;">
                                            <b><?php echo $work['work_from'] ?></b></td>
                                        <td class="border-top-0 border-right-0 border-bottom-0" style="width: 50%;">
                                            <b><?php echo $work['work_to'] ?></b>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td colspan="5"><b><?php echo $work['position_title'] ?></b></td>
                        <td colspan="2"><b><?php echo $work['department_agency'] ?></b></td>
                        <td colspan="1"><b><?php echo $work['monthly_salary'] ?></b></td>
                        <td colspan="1"><b><?php echo $work['salary_job_step'] ?></b></td>
                        <td colspan="1"><b><?php echo $work['status_appointment'] ?></b></td>
                        <td colspan="1"><b><?php echo $work['government_service_y_n'] ?></b></td>
                    </tr>
                    <?php } ?>

                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator bg-transparent text-danger text-center">
                            <i>(Continue on seperate sheet if necessary)</i>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="text-center"><i><b>SIGNATURE</b></i></td>
                        <td colspan="6"></td>
                        <td colspan="2" class="text-center"><i><b>DATE</b></i></td>
                        <td colspan="3"></td>
                    </tr>
                </tbody>

                <!-- End of Page 2 -->
            </table>
        </form>
    </div>



</main>
<main id="c3" class="turn-over" style="display:none">
    <div id="tblprint" class=" table-responsive p-3">
        <form action="">
            <table id="pds-table" class="employeeTable">
                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator">VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC /
                            NON-GOVERNMENT / PEOPLE / VOLUNTARY ORGANIZATION/S</td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="6" class="s-label border-bottom-0">
                            <span class="count float-left">29.</span> NAME & ADDRESS OF ORGANIZATION<br>
                            (Write in full)
                        </td>
                        <td colspan="2" class="s-label border-bottom-0">INCLUSIVE DATES</td>
                        <td colspan="1" class="s-label border-bottom-0">NUMBER OF HOURS</td>
                        <td colspan="3" class="s-label border-bottom-0">POSITION / NATURE OF WORK</td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="6" class="s-label border-top-0"></td>
                        <td colspan="1" class="s-label">From</td>
                        <td colspan="1" class="s-label">To</td>
                        <td colspan="1" class="s-label border-top-0"></td>
                        <td colspan="3" class="s-label border-top-0"></td>
                    </tr>

                    <?php
            require('db_config.php');
            $id = $_GET['print'];
            
            $sql = "SELECT * FROM tbl_voluntary_work WHERE employee_id=$id  ORDER BY voluntary_work_id";
            $vols = $mysqli->query($sql);
            while($vol = $vols->fetch_assoc()){
            ?>

                    <tr>
                        <td colspan="6"><b><?php echo $vol['name_address'] ?></b></td>
                        <td colspan="1"><b><?php echo $vol['voluntary_from'] ?></b></td>
                        <td colspan="1"><b><?php echo $vol['voluntary_to'] ?></b></td>
                        <td colspan="1"><b><?php echo $vol['no_of_hours'] ?></b></td>
                        <td colspan="3"><b><?php echo $vol['position_nature_of_work'] ?></b></td>
                    </tr>
                    <?php } ?>

                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator bg-transparent text-danger text-center">
                            <i>(Continue on seperate sheet if necessary)</i>
                        </td>
                    </tr>
                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator">VII. LEARNING AND DEVELOPMENT (L&D)
                            INTERVENTIONS/TRAINING PROGRAMS ATTENDED<br>
                            <small><i>(Start from the most recent L&D/training program and include only the relevant
                                    L&D/training taken for the last five (5) years for Division
                                    Chief/Executive/Managerial positions)</i></small>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="6" class="s-label border-bottom-0">
                            <span class="count float-left">30.</span> TITLE OF LEARNING AND DEVELOPMENT
                            INTERVENTIONS/TRAINING PROGRAMS<br>
                            (Write in full)
                        </td>
                        <td colspan="2" class="s-label border-bottom-0">INCLUSIVE DATES</td>
                        <td colspan="1" class="s-label border-bottom-0">NUMBER OF HOURS</td>
                        <td colspan="1" class="s-label border-bottom-0">Type of LD ( Managerial/
                            Supervisory/Technical/etc)</td>
                        <td colspan="2" class="s-label border-bottom-0">CONDUCTED/ SPONSORED BY<br>(Write in full)</td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="6" class="s-label border-top-0"></td>
                        <td colspan="1" class="s-label">From</td>
                        <td colspan="1" class="s-label">To</td>
                        <td colspan="1" class="s-label border-top-0"></td>
                        <td colspan="1" class="s-label border-top-0"></td>
                        <td colspan="2" class="s-label border-top-0"></td>
                    </tr>

                    <?php
            require('db_config.php');
            $id = $_GET['print'];
            
            $sql = "SELECT * FROM tbl_training WHERE employee_id=$id  ORDER BY training_id";
            $trains = $mysqli->query($sql);
            while($train = $trains->fetch_assoc()){
            ?>

                    <tr>
                        <td colspan="6"><b><?php echo $train['title'] ?></b></td>
                        <td colspan="1"><b><?php echo $train['att_from'] ?></b></td>
                        <td colspan="1"><b><?php echo $train['att_to'] ?></b></td>
                        <td colspan="1"><b><?php echo $train['no_hours'] ?></b></td>
                        <td colspan="1"><b><?php echo $train['type_of_ld'] ?></b></td>
                        <td colspan="2"><b><?php echo $train['conducted_by'] ?></b></td>
                    </tr>
                    <?php } ?>

                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator bg-transparent text-danger text-center">
                            <i>(Continue on seperate sheet if necessary)</i>
                        </td>
                    </tr>
                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator">VIII. OTHER INFORMATION</td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="4" class="s-label">
                            <span class="count float-left">31.</span> SPECIAL SKILLS and HOBBIES
                        </td>
                        <td colspan="4" class="s-label">
                            <span class="count float-left">32.</span> NON-ACADEMIC DISTINCTIONS / RECOGNITION<br>(Write
                            in full)
                        </td>
                        <td colspan="4" class="s-label">
                            <span class="count float-left">33.</span> MEMBERSHIP IN ASSOCIATION/ORGANIZATION<br>(Write
                            in full)
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4"><b><?php echo $sp1special_skills_hobbies; ?></b></td>
                        <td colspan="4"><b><?php echo $na1non_academic_distinctions; ?></b></td>
                        <td colspan="4"><b><?php echo $ma1membership_asso_organization; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="4"><b><?php echo $sp2special_skills_hobbies; ?></b></td>
                        <td colspan="4"><b><?php echo $na2non_academic_distinctions; ?></b></td>
                        <td colspan="4"><b><?php echo $ma2membership_asso_organization; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="4"><b><?php echo $sp3special_skills_hobbies; ?></b></td>
                        <td colspan="4"><b><?php echo $na3non_academic_distinctions; ?></b></td>
                        <td colspan="4"><b><?php echo $ma3membership_asso_organization; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="4"><b><?php echo $sp4special_skills_hobbies; ?></b></td>
                        <td colspan="4"><b><?php echo $na4non_academic_distinctions; ?></b></td>
                        <td colspan="4"><b><?php echo $ma4membership_asso_organization; ?></b></td>
                    </tr>
                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td colspan="12" class="text-white separator bg-transparent text-danger text-center">
                            <i>(Continue on seperate sheet if necessary)</i>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-center"><i><b>SIGNATURE</b></i></td>
                        <td colspan="3"></td>
                        <td colspan="1" class="text-center"><i><b>DATE</b></i></td>
                        <td colspan="4"></td>
                    </tr>
                </tbody>

                <!-- End of Page 3 -->
            </table>
        </form>
    </div>



</main>
<main id="c4" class="turn-over" style="display:none">
    <div id="tblprint" class=" table-responsive p-3">
        <form action="">
            <table id="pds-table" class="employeeTable">

                <!-- Q1 -->
                <tbody class="table-body question-block">
                    <tr>
                        <td colspan="12" class="separator"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label border-bottom-0">
                            <span class="count">34.</span> Are you related by consanguinity or affinity to the
                            appointing or recommending authority, or to the<br>
                            <span class="count"></span>chief of bureau or office or to the person who has immediate
                            supervision over you in the Office,<br>
                            <span class="count"></span>Bureau or Department where you will beapppointed,<br>
                        </td>
                        <td colspan="2">

                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                            <span class="count"></span>a. within the third degree?<br>
                        </td>
                        <td colspan="2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_34_ay; ?> disabled>
                                    <label for="my-input">YES</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_34_an; ?> disabled>
                                    <label for="my-input">NO</label>
                                </div>

                            </div>
                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                            <span class="count"></span>b. within the fourth degree (for Local Government Unit - Career
                            Employees)?
                        </td>
                        <td colspan="2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_34_by; ?> disabled>
                                    <label for="my-input">YES</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_34_bn; ?> disabled>
                                    <label for="my-input">NO</label>
                                </div>

                            </div>
                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                        </td>
                        <td colspan="2">If YES, give details:</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label"></td>
                        <td colspan="5"><b><?php echo $yes_details_34_b; ?></b></td>
                    </tr>
                </tbody>

                <!-- Q2 -->
                <tbody class="table-body question-block">
                    <tr>
                        <td colspan="7" class="s-label border-bottom-0">
                            <span class="count">35.</span> a. Have you ever been found guilty of any administrative
                            offense?
                        </td>
                        <td colspan="2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_35_ay; ?> disabled>
                                    <label for="my-input">YES</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_35_an; ?> disabled>
                                    <label for="my-input">NO</label>
                                </div>

                            </div>
                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label"></td>
                        <td colspan="5">If YES, give details:</td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label"></td>
                        <td colspan="5"><b><?php echo $yes_details_35_a; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                            <span class="count"></span> b. within the fourth degree (for Local Government Unit - Career
                            Employees)?
                        </td>
                        <td colspan="2" style="border-top-width: 1px !important;">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_35_by; ?> disabled>
                                    <label for="my-input">YES</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_35_bn; ?> disabled>
                                    <label for="my-input">NO</label>
                                </div>
                            </div>
                        </td>
                        <td colspan="3" style="border-top-width: 1px !important;"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label"></td>
                        <td colspan="5">If YES, give details:</td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label"></td>
                        <td colspan="2">Date Filed:</td>
                        <td colspan="3"><b><?php echo $question_35_b_datefiled; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label"></td>
                        <td colspan="2">Status of Case/s:</td>
                        <td colspan="3"><b><?php echo $status_cases_35_b; ?></b></td>
                    </tr>
                </tbody>

                <!-- Q3 -->
                <tbody class="table-body question-block">
                    <tr>
                        <td colspan="7" class="s-label border-bottom-0">
                            <span class="count">36.</span> Have you ever been convicted of any crime or violation of any
                            law, decree, ordinance or regulation by any court or tribunal?
                        </td>
                        <td colspan="2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_36y; ?> disabled>
                                    <label for="my-input">YES</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_36n; ?> disabled>
                                    <label for="my-input">NO</label>
                                </div>
                            </div>
                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label"></td>
                        <td colspan="5">If YES, give details:</td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label"></td>
                        <td colspan="5"> <b><?php echo $yes_details_36; ?></b></td>
                    </tr>
                </tbody>

                <!-- Q4 -->
                <tbody class="table-body question-block">
                    <tr>
                        <td colspan="7" class="s-label border-bottom-0">
                            <span class="count">37.</span> Have you ever been separated from the service in any of the
                            following modes: resignation,<br>


                        </td>
                        <td colspan="2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_37y; ?> disabled>
                                    <label for="my-input">YES</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_37n; ?> disabled>
                                    <label for="my-input">NO</label>
                                </div>
                            </div>
                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                            <span class="count"></span> retirement, dropped from the rolls, dismissal, termination, end
                            of term, finished contract or phased<br>
                        </td>
                        <td colspan="5">If YES, give details:</td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                            <span class="count"></span> out (abolition) in the public or private sector?
                        </td>
                        <td colspan="2"><b><?php echo $yes_details_37; ?></b></td>
                        <td colspan="3"></td>
                    </tr>
                </tbody>

                <!-- Q5 -->
                <tbody class="table-body question-block">
                    <tr>
                        <td colspan="7" class="s-label border-bottom-0">
                            <span class="count">38.</span> a. Have you ever been a candidate in a national or local
                            election held within the last year (except Barangay election)?
                        </td>
                        <td colspan="2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_38_ay; ?> disabled>
                                    <label for="my-input">YES</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_38_an; ?> disabled>
                                    <label for="my-input">NO</label>
                                </div>
                            </div>
                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                            <span class="count"></span><br>
                        </td>
                        <td colspan="2">If YES, give details:</td>
                        <td colspan="3"><b><?php echo $yes_details_38_a; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                            <span class="count"></span> b. Have you resigned from the government service during the
                            three (3)-month period before the last
                        </td>
                        <td colspan="2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_38_by; ?> disabled>
                                    <label for="my-input">YES</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_38_bn; ?> disabled>
                                    <label for="my-input">NO</label>
                                </div>
                            </div>
                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                            <span class="count"></span> election to promote/actively campaign for a national or local
                            candidate?
                        </td>
                        <td colspan="2">If YES, give details:</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label"></td>
                        <td colspan="2"><b><?php echo $yes_details_38_b; ?></b></td>
                        <td colspan="3"></td>
                    </tr>
                </tbody>

                <!-- Q6 -->
                <tbody class="table-body question-block">
                    <tr>
                        <td colspan="7" class="s-label border-bottom-0">
                            <span class="count">39.</span> Have you acquired the status of an immigrant or permanent
                            resident of another country?
                        </td>
                        <td colspan="2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_39y; ?> disabled>
                                    <label for="my-input">YES</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_39n; ?> disabled>
                                    <label for="my-input">NO</label>
                                </div>
                            </div>
                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                        </td>
                        <td colspan="2">if YES, give details (country):</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                        </td>
                        <td colspan="2"><b><?php echo $yes_details_39; ?></b></td>
                        <td colspan="3"></td>
                    </tr>
                </tbody>

                <!-- Q7 -->
                <tbody class="table-body question-block">
                    <tr>
                        <td colspan="7" class="s-label border-bottom-0">
                            <span class="count">40.</span> Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna
                            Carta for Disabled Persons (RA<br>
                            <span class="count"></span> 7277); and (c) Solo Parents Welfare Act of 2000 (RA 8972),
                            please answer the following items:
                        </td>
                        <td colspan="2">

                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                            <span class="count"></span>a. Are you a member of any indigenous group?<br>
                        </td>
                        <td colspan="2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_40_ay; ?> disabled>
                                    <label for="my-input">YES</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_40_an; ?> disabled>
                                    <label for="my-input">NO</label>
                                </div>
                            </div>
                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                            <span class="count"></span><br>
                        </td>
                        <td colspan="2">If YES, please specify:</td>
                        <td colspan="3"><b><?php echo $a_yes_details_40; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                            <span class="count"></span>b. Are you a person with disability?
                        </td>
                        <td colspan="2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_40_by; ?> disabled>
                                    <label for="my-input">YES</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_40_bn; ?> disabled>
                                    <label for="my-input">NO</label>
                                </div>
                            </div>
                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                        </td>
                        <td colspan="2">If YES, please specify:</td>
                        <td colspan="3"><b><?php echo $b_yes_details_b; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label">
                            <span class="count"></span>c. Are you a solo parent?
                        </td>
                        <td colspan="2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_40_cy; ?> disabled>
                                    <label for="my-input">YES</label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" <?php echo $question_40_cn; ?> disabled>
                                    <label for="my-input">NO</label>
                                </div>
                            </div>
                        </td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label"></td>
                        <td colspan="2">If YES, please specify:</td>
                        <td colspan="3"><b><?php echo $c_yes_details_c; ?></b></td>
                    </tr>
                </tbody>

                <!-- End of Page 4 -->

                <tbody class="table-body">
                    <tr>
                        <td colspan="8" class="s-label">
                            <span class="count">41.</span> REFERENCES <span class="text-danger">(Person not related by
                                consanguinity or affinity to applicant /appointee)</span>
                        </td>
                        <td colspan="4" rowspan="5" class="p-5">
                            <table class="w-75 mx-auto border-0">
                                <tbody class="border-0">
                                    <tr>
                                        <td class="text-center p-3">ID picture taken within the last 6 months3.5 cm. X
                                            4.5 cm(passport size)With full and handwrittenname tag and signature
                                            overprinted nameComputer generated or photocopied picture is not acceptable
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-0 text-muted lead text-center">PHOTO</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="4" class="s-label">NAME</td>
                        <td colspan="2" class="s-label">ADDRESS</td>
                        <td colspan="2" class="s-label">TEL. NO.</td>
                    </tr>

                    <?php
            require('db_config.php');
            $id = $_GET['print'];
            
            $sql = "SELECT * FROM tbl_references WHERE employee_id=$id  ORDER BY references_id";
            $refs = $mysqli->query($sql);
            while($ref = $refs->fetch_assoc()){
            ?>

                    <tr>
                        <td colspan="4"><b><?php echo $ref['ref_name'] ?></b></td>
                        <td colspan="2"><b><?php echo $ref['ref_address'] ?></b></td>
                        <td colspan="2"><b><?php echo $ref['ref_tel_no'] ?></b></td>
                    </tr>
                    <?php } ?>

                    <tr>
                        <td colspan="8">
                            <span class="count">42.</span> I declare under oath that I have personally accomplished this
                            Personal Data Sheet which is a true correct and<br><span class="count"></span> complete
                            statement pursuant to the provisions of pertinent laws, rules and regulations of the
                            Republic of the<br><span class="count"></span> Philippines. I authorize the agency head /
                            authorized representative t verify validate the contents stated herein.<br><span
                                class="count"></span> I agree that any misrepresentation made in this document and its
                            attachments shall cause the filing of<br><span class="count"></span> administrative/criminal
                            case/s against me.
                        </td>
                    </tr>
                    <tr>
                        <td colspan="12" class="border-0 p-0">
                            <table class="border-0 w-100">
                                <tbody class="border-0">
                                    <tr>
                                        <td colspan="4" class="border-0 p-3" style="width: 38.5%;">
                                            <table class="border-0 w-100">
                                                <tbody>
                                                    <tr>
                                                        <td class="s-label py-2">Government Issued ID(i.e.Passport,
                                                            GSIS, SSS, PRC, Driver's License, etc.)<br> PLEASE INDICATE
                                                            ID Number and Date of Issuance</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 30%;">Government Issued ID: <b>
                                                                <?php echo $ggov_id; ?></b></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 30%;">ID/License/Passport No.: <b>
                                                                <?php echo $gid_no; ?></b></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 30%;">Date/Place of Issuance: <b>
                                                                <?php echo $gdate_place_issuance; ?></b></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td colspan="4" class="border-0 p-3" style="width: 38.5%;">
                                            <table class="border-0 w-100">
                                                <tbody class="border-0 text-center">
                                                    <tr>
                                                        <td class="py-4"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="s-label"><small>Signature (Sign inside the
                                                                box)</small></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="s-label"><small>Date Accomplished</small></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td colspan="4" class="border-0 p-3">
                                            <table class="border-0 w-100">
                                                <tbody class="border-0">
                                                    <tr>
                                                        <td class="py-5"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="s-label text-center">Right Thumbmark</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>

                                <tbody class="table-body">
                                    <tr>
                                        <td colspan="12" class="text-center py-2">
                                            SUBSCRIBED AND SWORN to before me this <input type="text"
                                                class="border-top-0 border-left-0 border-right-0" style="width: 25%;"> ,
                                            affiant exhibiting his/her validly issued government ID as indicated above.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="12" class="py-5">
                                            <table class="w-25 mx-auto">
                                                <tbody>
                                                    <tr>
                                                        <td class="py-5"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="s-label text-center">Person Administering Oath</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </td>
                    </tr>
                </tbody>

                <!-- End of References -->
</div>


            </table>
        </form>
    </div>



</main>



<script type="text/javascript">
function PrintElement(elem) {
    var divName = "main-tbl";
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}

function PrintElement1(elem) {
    var divName = "c1";
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}

function PrintElement2(elem) {
    var divName = "c2";
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}

function PrintElement3(elem) {
    var divName = "c3";
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}

function PrintElement4(elem) {
    var divName = "c4";
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}
</script>

  <script type="text/javascript">
        
    function codespeedy(){
      var print_div = document.getElementById("pds_print");
var print_area = window.open();
print_area.document.write(print_div.innerHTML);
print_area.document.close();
print_area.focus();
print_area.print();
print_area.close();
// This is the code print a particular div element
    }
  </script>


