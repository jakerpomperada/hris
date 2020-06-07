
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
		//$record = mysqli_query($db, "SELECT * FROM tbl_p_info  WHERE employee_id=$id");
        $record = mysqli_query($db,"SELECT * FROM `tbl_p_info` Where `tbl_p_info`.`employee_id` = \"$id\"");

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
        $record13 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id=\"id\"LIMIT 9,1");

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
        $record25 = mysqli_query($db, "SELECT * FROM tbl_membership WHERE employee_id=\"$i\" LIMIT 1,1");

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
<head>
    <style type="text/css">
            table{
                font-family: Arial Narrow;
                font-size: 14px !important;
            }
            .bot{
                border-bottom-color: transparent;
            }
            .top{
                border-top-color: transparent;
            }
            .eleven{
                font-size: 17px;
            }
            .nine{
                font-size: 15px;
            }
            .header{
                font-family: Arial Black;
                font-size: 28px;
            }
            .nopadding{
                padding: 0;
            }
            .col-color{
                background-color: #969696 !important;
            }
            .cat-head{
                background-color: #969696 !important;
                color: #FFF;
                font-style: italic;
                font-size: 17px !important;
                font-weight: bold;
            }
            .left-head{
                background-color: #EAEAEA !important;
            }
            .text-center{
                text-align: center;
            }
            .text-center{
                text-align: center;
            }
            .cont{
                background-color: #EAEAEA !important;
                color: red;
                font-weight: bold;
            }
            .sig{
                font-size: 17px;
                font-weight: bold;
                font-style: italic;
                padding: 10px;
                background-color: #EAEAEA !important;
            }
            .empty{
                padding: 4.8px;
            }
        </style>
</head>
<body>

<table id="t01" class="centerTable">
					
					
					<tr>
                        <td colspan="12" class="text-white separator cat-head">IV. CIVIL SERVICE ELIGIBILITY</td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="5" rowspan="2" class="s-label border-bottom-0 left-head" style="width:30%">
                            <span class="count float-left">27.</span>
                            CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER SPECIAL LAWS/ CES/ CSEE
                            BARANGAY ELIGIBILITY / DRIVER'S LICENSE
                        </td>
                        <td colspan="1" rowspan="2" class="s-label border-bottom-0 left-head left-head">RATING<br>(If Applicable)</td>
                        <td colspan="1" rowspan="2" class="s-label border-bottom-0 left-head">DATE OF EXAMINATION / CONFERMENT</td>
                        <td colspan="3" rowspan="2" class="s-label border-bottom-0 left-head">PLACE OF EXAMINATION / CONFERMENT</td>
                        <td colspan="2" class="s-label border-bottom-0 left-head">LICENSE<br>(if applicable)</td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="1" class="s-label left-head">NUMBER</td>
                        <td colspan="1" class="s-label left-head">Date of Validity</td>
                    </tr>
					
					<?php 
						require('db_config.php');
						$id = $_GET['print'];
						
						$sql = "SELECT * FROM tbl_eligibility WHERE employee_id=\"$id\"  ORDER BY civil_service_id LIMIT 0, 7";
						$eligs = $mysqli->query($sql);
						
						$num_rows_eligs = mysqli_num_rows($eligs);
								
					
						while($elig = $eligs->fetch_assoc()){
					?>
                    <tr>
                        <td colspan="5"><b><?php echo $elig['descriptionx'] ?></b></td>
                        <td colspan="1"><b><?php echo $elig['rating'] ?></b></td>
                        <td colspan="2" class="text-center"><b><?php $elig['date_exam'];
                         $dmonth = substr($elig['date_exam'], 5, 2); 
                         $dday = substr($elig['date_exam'], 8, 2);
                         $dyear = substr($elig['date_exam'], 0, 4);

                        echo $totalbd = $dmonth . "-" . $dday . "-" . $dyear;
                        ?></b></td> 
                        <td colspan="2"><b><?php echo $elig['place_examination'] ?></b></td>
                        <td colspan="1"><b><?php echo $elig['cert_no'] ?></b></td>
                        <td colspan="1"><b><?php  $elig['date_of_validity'] ;
                         $dmonth = substr($elig['date_of_validity'] , 5, 2); 
                         $dday = substr($elig['date_of_validity'] , 8, 2);
                         $dyear = substr($elig['date_of_validity'] , 0, 4);
                           echo $totalbd = $dmonth . "-" . $dday . "-" . $dyear;
                        ?></b></td> 
                    </tr>
                    <?php }?>
				
					<?php
					for( $num_rows_eligs>=0; $num_rows_eligs <=6; $num_rows_eligs++ ){
					?>
					<tr>
                        <td colspan="5" class="empty"><b>&nbsp;</b></td>
                        <td colspan="1" class="empty"><b>&nbsp;</b></td>
                        <td colspan="2" class="empty"><b>&nbsp;</b></td>
                        <td colspan="2" class="empty"><b>&nbsp;</b></td>
                        <td colspan="1" class="empty"><b>&nbsp;</b></td>
                        <td colspan="1" class="empty"><b>&nbsp;</b></td>
                    </tr>
					<?php  } ?> 
					<tr>
                        <td colspan="12" class="text-white separator bg-transparent text-danger text-center cont">
                            <i>(Continue on seperate sheet if necessary)</i>
                        </td>
                    </tr>
					<tr>
                        <td colspan="12" class="text-white separator cat-head">
                            V. WORK EXPERIENCE<br>
                            <small><i>(Include private employment. Start from your recent work) Description of duties
                                    should be indicated in the attached Work Experience sheet.</i></small>
                        </td>
                    </tr>
					<tr>
                        <td colspan="2" class="s-label border-bottom-0 left-head text-center" style="width: 20%;">
                            <span class="count float-left">28.</span>
                            INCLUSIVE DATES<br>(mm/dd/yyyy)

						</td>
						<td colspan="4" class="s-label border-bottom-0 left-head text-center" rowspan="2">
                            POSITION TITLE<br>
                            Write in full/Do not abbreviate)
                        </td>
						<td colspan="2" class=" left-head text-center" rowspan="2"> 
						DEPARTMENT  / AGENCY / OFFICE / COMPANY <Br>
						(Write in full/Do not abbreviate)
						</td>
						<td colspan="1" class="s-label border-bottom-0 left-head text-center" rowspan="2">MONTHLY<br>SALARY</td>
                        <td colspan="1" class="s-label border-bottom-0 left-head" rowspan="2"><small>SALARY/ JOB/ PAY<br>GRADE (if
                                applicable)& STEP (Format "00-0")/ INCREMENT</small></td>
                        <td colspan="1" class="s-label border-bottom-0 left-head text-center" rowspan="2">STATUS OF<br>APPOINTMENT</td>
                        <td colspan="1" class="s-label border-bottom-0 left-head text-center" rowspan="2">GOV'T SERVICE<br>
                            <small>(Y/ N)</small></td>
						
					</tr>
					<tr>
                        <td colspan="1" width="10%" class="text-center left-head">
                          From  
                        </td>
                        <td colspan="1" width="10%"  class="text-center left-head">
                          Until
                        </td>
                    </tr>
					<?php 
					require('db_config.php');
					$id = $_GET['print'];
					
					$sql = "SELECT * FROM tbl_work_experience WHERE employee_id=\"$id\"  ORDER BY work_experience_id LIMIT 0, 28";
					$works = $mysqli->query($sql);
					
					$num_rows_works2 = mysqli_num_rows($works);
					
					
					while($work = $works->fetch_assoc()){
					?>
					<tr>
                        <td colspan="1" width="10%" class="text-center">
                        <b><?php  $work['work_from'];
                                 $dmonth = substr($work['work_from'], 5, 2); 
                                 $dday = substr($work['work_from'], 8, 2);
                                 $dyear = substr($work['work_from'], 0, 4);

                                echo $totalbd = $dmonth . "-" . $dday . "-" . $dyear;
                        ?></b></td> 
                                        
                            <td colspan="1" width="10%"  class="text-center"><b><?php  $work['work_to'];
                                 $dmonth = substr($work['work_from'], 5, 2); 
                                 $dday = substr($work['work_from'], 8, 2);
                                 $dyear = substr($work['work_from'], 0, 4);

                                echo $totalbd = $dmonth . "-" . $dday . "-" . $dyear;
                        ?></b></td> 
                        <td colspan="4"><b><?php echo $work['position_title'] ?></b></td>
                        <td colspan="2"><b><?php echo $work['department_agency'] ?></b></td>
                        <td colspan="1"><b><?php echo $work['monthly_salary'] ?></b></td>
                        <td colspan="1"><b><?php echo $work['salary_job_step'] ?></b></td>
                        <td colspan="1"><b><?php echo $work['status_appointment'] ?></b></td>
                        <td colspan="1" class="text-center"><b><?php echo $work['government_service_y_n'] ?></b></td>
                    </tr>
                    <?php } ?>
					<?php 
					for( $num_rows_works>=0; $num_rows_works < (28 - $num_rows_works2); $num_rows_works++ ){
					?>
					<tr>
<style>					
table#working_experience {
border: 0px solid black;
border-collapse: collapse;

}

table#working_experience td {
border: 0px solid black;
border-collapse: collapse;
}
</style>
                        <td colspan="1" width="10%" class="text-center empty">
                        </td>
                        <td colspan="1" width="10%"  class="text-center empty">
                        </td>
                        <td colspan="4" class="empty"><b>&nbsp;</b></td>
                        <td colspan="2" class="empty"><b>&nbsp;</b></td>
                        <td colspan="1" class="empty"><b>&nbsp;</b></td>
                        <td colspan="1" class="empty"><b>&nbsp;</b></td>
                        <td colspan="1" class="empty"><b>&nbsp;</b></td>
                        <td colspan="1" class="empty"><b>&nbsp;</b></td>
                    </tr>
					<?php  } ?> 
					<tr>
                        <td colspan="12" class="text-white separator bg-transparent text-danger text-center cont">
                            <i>(Continue on seperate sheet if necessary)</i>
                        </td>
                    </tr>
					<tr>
                        <td colspan="2" class="text-center sig"><i><b>SIGNATURE</b></i></td>
                        <td colspan="5"></td>
                        <td colspan="2" class="text-center sig"><i><b>DATE</b></i></td>
                        <td colspan="3"></td>
                    </tr>
					<!-- End of Page 2 -->
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


