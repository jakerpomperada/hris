

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
		//$record = mysqli_query($db, "SELECT * FROM tbl_p_info  WHERE employee_id=\"$id\"");
        $record = mysqli_query($db,"SELECT * FROM `tbl_p_info` Where `tbl_p_info`.`employee_id` = '\"$id\"'");

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
        $record1 = mysqli_query($db, "SELECT * FROM tbl_spouse  WHERE employee_id=\"$id\"");

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
        $record2 = mysqli_query($db, "SELECT * FROM tbl_family WHERE employee_id=\"$id\" and relationship = 'Father' LIMIT 0,1");

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
        $record3 = mysqli_query($db, "SELECT * FROM tbl_family WHERE employee_id=\"$id\" and relationship = 'Mother'");

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
        $record4 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id=\"$id\" LIMIT 0,1");

		if (count($record4) == 1 ) {
			$fc = mysqli_fetch_array($record4);
			$fcname_of_children = $fc['name_of_children'];
            $fcdate_of_birth = $fc['date_of_birth'];
        }

         // family children 1
        $record5 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id=\"$id\" LIMIT 1,1");

		if (count($record5) == 1 ) {
			$fc = mysqli_fetch_array($record5);
			$fc1name_of_children = $fc['name_of_children'];
            $fc1date_of_birth = $fc['date_of_birth'];
        }

        // family children 2
        $record6 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id=\"$id\" LIMIT 2,1");

		if (count($record6) == 1 ) {
			$fc = mysqli_fetch_array($record6);
			$fc2name_of_children = $fc['name_of_children'];
            $fc2date_of_birth = $fc['date_of_birth'];
        }

        // family children 3
        $record7 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id=\"$id\" LIMIT 3,1");

		if (count($record7) == 1 ) {
			$fc = mysqli_fetch_array($record7);
			$fc3name_of_children = $fc['name_of_children'];
            $fc3date_of_birth = $fc['date_of_birth'];
        }

        // family children 4
        $record8 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id=\"$id\" LIMIT 4,1");

		if (count($record8) == 1 ) {
			$fc = mysqli_fetch_array($record8);
			$fc4name_of_children = $fc['name_of_children'];
            $fc4date_of_birth = $fc['date_of_birth'];
        }

        // family children 5
        $record9 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id=\"$id\" LIMIT 5,1");

		if (count($record9) == 1 ) {
			$fc = mysqli_fetch_array($record9);
			$fc5name_of_children = $fc['name_of_children'];
            $fc5date_of_birth = $fc['date_of_birth'];
        }

         // family children 6
        $record10 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id=\"$id\" LIMIT 6,1");

		if (count($record10) == 1 ) {
			$fc = mysqli_fetch_array($record10);
			$fc6name_of_children = $fc['name_of_children'];
            $fc6date_of_birth = $fc['date_of_birth'];
        }

         // family children 7
        $record11 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id=\"$id\" LIMIT 7,1");

		if (count($record11) == 1 ) {
			$fc = mysqli_fetch_array($record11);
			$fc7name_of_children = $fc['name_of_children'];
            $fc7date_of_birth = $fc['date_of_birth'];
        }

         // family children 8
        $record12 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id=\"$id\" LIMIT 8,1");

		if (count($record12) == 1 ) {
			$fc = mysqli_fetch_array($record12);
			$fc8name_of_children = $fc['name_of_children'];
            $fc8date_of_birth = $fc['date_of_birth'];
        }

         // family children 9
        $record13 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id=\"$id\" LIMIT 9,1");

		if (count($record13) == 1 ) {
			$fc = mysqli_fetch_array($record13);
			$fc9name_of_children = $fc['name_of_children'];
            $fc9date_of_birth = $fc['date_of_birth'];
        }

         // family children 10
        $record14 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id=\"$id\" LIMIT 10,1");

		if (count($record14) == 1 ) {
			$fc = mysqli_fetch_array($record14);
			$fc10name_of_children = $fc['name_of_children'];
            $fc10date_of_birth = $fc['date_of_birth'];
        }

         // family children 11
        $record15 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id=\"$id\" LIMIT 11,1");

		if (count($record15) == 1 ) {
			$fc = mysqli_fetch_array($record15);
			$fc11name_of_children = $fc['name_of_children'];
            $fc11date_of_birth = $fc['date_of_birth'];
        }

        // Special Skills 1
        $record16 = mysqli_query($db, "SELECT * FROM tbl_skills_hobbies WHERE employee_id=\"$id\" LIMIT 0,1");

		if (count($record16) == 1 ) {
			$sp = mysqli_fetch_array($record16);
			$sp1special_skills_hobbies = $sp['special_skills_hobbies'];
        }

        // Special Skills 2
        $record17 = mysqli_query($db, "SELECT * FROM tbl_skills_hobbies WHERE employee_id=\"$id\" LIMIT 1,1");

		if (count($record17) == 1 ) {
			$sp = mysqli_fetch_array($record17);
			$sp2special_skills_hobbies = $sp['special_skills_hobbies'];
        }

        // Special Skills 3
        $record18 = mysqli_query($db, "SELECT * FROM tbl_skills_hobbies WHERE employee_id=\"$id\" LIMIT 2,1");

		if (count($record18) == 1 ) {
			$sp = mysqli_fetch_array($record18);
			$sp3special_skills_hobbies = $sp['special_skills_hobbies'];
        }

        // Special Skills 4
        $record19 = mysqli_query($db, "SELECT * FROM tbl_skills_hobbies WHERE employee_id=\"$id\" LIMIT 3,1");

		if (count($record19) == 1 ) {
			$sp = mysqli_fetch_array($record19);
			$sp4special_skills_hobbies = $sp['special_skills_hobbies'];
        }

        // NON-ACADEMIC DISTINCTIONS / RECOGNITION  1
        $record20 = mysqli_query($db, "SELECT * FROM tbl_recog WHERE employee_id=\"$id\" LIMIT 0,1");

		if (count($record20) == 1 ) {
			$na = mysqli_fetch_array($record20);
			$na1non_academic_distinctions = $na['non_academic_distinctions'];
        }

         // NON-ACADEMIC DISTINCTIONS / RECOGNITION  2
        $record21 = mysqli_query($db, "SELECT * FROM tbl_recog WHERE employee_id=\"$id\" LIMIT 1,1");

		if (count($record21) == 1 ) {
			$na = mysqli_fetch_array($record21);
			$na2non_academic_distinctions = $na['non_academic_distinctions'];
        }

         // NON-ACADEMIC DISTINCTIONS / RECOGNITION  3
        $record22 = mysqli_query($db, "SELECT * FROM tbl_recog WHERE employee_id=\"$id\" LIMIT 2,1");

		if (count($record22) == 1 ) {
			$na = mysqli_fetch_array($record22);
			$na3non_academic_distinctions = $na['non_academic_distinctions'];
        }

         // NON-ACADEMIC DISTINCTIONS / RECOGNITION  4
        $record23 = mysqli_query($db, "SELECT * FROM tbl_recog WHERE employee_id=\"$id\" LIMIT 3,1");

		if (count($record23) == 1 ) {
			$na = mysqli_fetch_array($record23);
			$na4non_academic_distinctions = $na['non_academic_distinctions'];
        }

        // MEMBERSHIP IN ASSOCIATION/ORGANIZATION  1
        $record24 = mysqli_query($db, "SELECT * FROM tbl_membership WHERE employee_id=\"$id\" LIMIT 0,1");

		if (count($record24) == 1 ) {
			$ma = mysqli_fetch_array($record24);
			$ma1membership_asso_organization = $ma['membership_asso_organization'];
        }

        // MEMBERSHIP IN ASSOCIATION/ORGANIZATION  2
        $record25 = mysqli_query($db, "SELECT * FROM tbl_membership WHERE employee_id=\"$id\" LIMIT 1,1");

		if (count($record25) == 1 ) {
			$ma = mysqli_fetch_array($record25);
			$ma2membership_asso_organization = $ma['membership_asso_organization'];
        }

         // MEMBERSHIP IN ASSOCIATION/ORGANIZATION  3
        $record26 = mysqli_query($db, "SELECT * FROM tbl_membership WHERE employee_id=\"$id\" LIMIT 2,1");

		if (count($record26) == 1 ) {
			$ma = mysqli_fetch_array($record26);
			$ma3membership_asso_organization = $ma['membership_asso_organization'];
        }

         // MEMBERSHIP IN ASSOCIATION/ORGANIZATION  4
        $record27 = mysqli_query($db, "SELECT * FROM tbl_membership WHERE employee_id=\"$id\" LIMIT 3,1");

		if (count($record27) == 1 ) {
			$ma = mysqli_fetch_array($record27);
			$ma4membership_asso_organization = $ma['membership_asso_organization'];
        }

         // tbl_additional_info
        $record28 = mysqli_query($db, "SELECT * FROM tbl_additional_info WHERE employee_id=\"$id\"");

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
        $record29 = mysqli_query($db, "SELECT * FROM tbl_gov_id WHERE employee_id=\"$id\"");

		if (count($record29) == 1 ) {
			$g = mysqli_fetch_array($record29);
            $ggov_id = $g['gov_id'];
            $gid_no = $g['id_no'];
            $gdate_place_issuance = $g['date_place_issuance'];
        }

	}
?>

<style type="text/css">
table#t01{
width: 950px;
border: 1px solid black;
border-collapse: collapse;
font-size: 13px;

}

th, td {
border: 1px solid black;
border-collapse: collapse;
padding: 2px;

</style>

<html>
<head> </head>
<body>


<table id="t01" class="centerTable">	
				
					
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
                        <td colspan="3"><b><?php $question_35_b_datefiled;
                         $dmonth = substr($question_35_b_datefiled, 5, 2); 
                         $dday = substr($question_35_b_datefiled, 8, 2);
                         $dyear = substr($question_35_b_datefiled, 0, 4);

                         echo $totalbd = $dmonth . "-" . $dday . "-" . $dyear;
                        ?></b></td> 
                    </tr>
                    <tr>
                        <td colspan="7" class="s-label"></td>
                        <td colspan="2">Status of Case/s:</td>
                        <td colspan="3"><b><?php echo $status_cases_35_b; ?></b></td>
                    </tr>
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
					<tr>
                        <td colspan="9" class="s-label">
                            <span class="count">41.</span> REFERENCES <span class="text-danger">(Person not related by
                                consanguinity or affinity to applicant /appointee)</span>
                        </td>
                        <td colspan="4" rowspan="6">
                          
											<div style="border-style: solid; border-width:1px; width:150px; height: 185;">
												<centeR>
												ID picture taken within the last 6 months3.5 cm. X
												4.5 cm(passport size) 
												<br><br> With full and handwrittenname tag and signature
												overprinted name
												<br><br> Computer generated or photocopied picture is not acceptable
												</centeR>
											</div> <Br>
											<centeR>
											PHOTO </center>
                               
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="4" class="s-label">NAME</td>
                        <td colspan="3" class="s-label">ADDRESS</td>
                        <td colspan="2" class="s-label">TEL. NO.</td>
                    </tr>
					<?php 
						require('db_config.php');
						$id = $_GET['print'];
						
						$sql = "SELECT * FROM tbl_references WHERE employee_id=\"$id\"  ORDER BY references_id";
						$refs = $mysqli->query($sql);
						
						$num_rows_ref = mysqli_num_rows($refs);
						while($ref = $refs->fetch_assoc()){
					?>

                    <tr>
                        <td colspan="4"><b><?php echo $ref['ref_name'] ?></b></td>
                        <td colspan="3"><b><?php echo $ref['ref_address'] ?></b></td>
                        <td colspan="2"><b><?php echo $ref['ref_tel_no'] ?></b></td>
                    </tr>
                    <?php } ?>
					
					<?php 
					for( $num_rows_ref>=0; $num_rows_ref <=2; $num_rows_ref++ ){
					?>
					
					 <tr>
                        <td colspan="4"><b>&nbsp;</b></td>
                        <td colspan="3"><b>&nbsp;</b></td>
                        <td colspan="2"><b>&nbsp;</b></td>
                   
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
                                                        <td>Government Issued ID(i.e.Passport,
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
										<centeR>
											<div style="border-style: solid; border-width:1px; width:290px; height: 50px;"> 
											&nbsp;
											</div>
											<div style="border-style: solid; border-width:1px; width:290px; height: 20px;"> 
											Signature (Sign inside the box)
											</div>
											<div style="border-style: solid; border-width:1px; width:290px; height: 30px;"> 
											&nbsp;
											</div>
											<div style="border-style: solid; border-width:1px; width:290px; height: 20px;"> 
											Date Accomplished
											</div>
										
										</centeR>							
                                        </td>
                                        <td colspan="4" class="border-0 p-3">
										<centeR>
											<div style="border-style: solid; border-width:1px; width:150px; height: 85px;"> 
											&nbsp;
											</div>
											<div style="border-style: solid; border-width:1px; width:150px; height: 20px;"> 
											Right Thumbmark
											</div>
										</centeR>
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
										
										
											<centeR>
											<div style="border-style: solid; border-width:1px; width:450px; height: 70px;"> 
											&nbsp;
											</div>
											<div style="border-style: solid; border-width:1px; width:450px; height: 20px;"> 
											Person Administering Oath
											</div>
										</centeR>
                                         
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </td>
                    </tr>
					
	
</table>
        
</div>

</body>

</html>

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


