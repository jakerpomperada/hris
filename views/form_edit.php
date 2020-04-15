<?php include '../template/header.php';?>
<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hris";

$db = new mysqli($servername, $username, $password, $dbname);

if (isset($_GET['edit'])) {


  $id = $_GET['edit'];
  $update = true;

        // personal info
		//$record = mysqli_query($db, "SELECT * FROM tbl_p_info  WHERE employee_id='$id'");
  $record = mysqli_query($db,"SELECT * FROM `tbl_p_info` Where `tbl_p_info`.`employee_id` = '$id'");

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
   $employment_status = $n['employment_status'];
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
        //$record1 = mysqli_query($db, "SELECT * FROM tbl_spouse  WHERE employee_id='$id'");
$record1 = mysqli_query($db,"SELECT * FROM `tbl_spouse` Where `tbl_spouse`.`employee_id` = '$id'");

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
       // $record2 = mysqli_query($db, "SELECT * FROM tbl_family WHERE employee_id='$id' and relationship = 'Father' LIMIT 0,1");
$record2 = mysqli_query($db,"SELECT * FROM `tbl_family` Where `tbl_family`.`employee_id` = '$id' and `tbl_family`.`relationship`='Father' LIMIT 0,1");

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
        //$record3 = mysqli_query($db, "SELECT * FROM tbl_family WHERE employee_id='$id' and relationship = 'Mother'");
$record3 = mysqli_query($db,"SELECT * FROM `tbl_family` Where `tbl_family`.`employee_id` = '$id' and `tbl_family`.`relationship`='Mother'");

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
        //$record4 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id='$id' LIMIT 0,1");
$record4 = mysqli_query($db,"SELECT * FROM `tbl_children` Where `tbl_children`.`employee_id` = '$id' LIMIT 0,1");

if (count($record4) == 1 ) {
   $fc = mysqli_fetch_array($record4);
   $fcname_of_children = $fc['name_of_children'];
   $fcdate_of_birth = $fc['date_of_birth'];
}

         // family children 1
        //$record5 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id='$id' LIMIT 1,1");
$record5 = mysqli_query($db,"SELECT * FROM `tbl_children` Where `tbl_children`.`employee_id` = '$id' LIMIT 1,1");

if (count($record5) == 1 ) {
   $fc = mysqli_fetch_array($record5);
   $fc1name_of_children = $fc['name_of_children'];
   $fc1date_of_birth = $fc['date_of_birth'];
}

        // family children 2
        //$record6 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id='$id' LIMIT 2,1");
$record6 = mysqli_query($db,"SELECT * FROM `tbl_children` Where `tbl_children`.`employee_id` = '$id' LIMIT 2,1");

if (count($record6) == 1 ) {
   $fc = mysqli_fetch_array($record6);
   $fc2name_of_children = $fc['name_of_children'];
   $fc2date_of_birth = $fc['date_of_birth'];
}

        // family children 3
        //$record7 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id='$id' LIMIT 3,1");
$record7 = mysqli_query($db,"SELECT * FROM `tbl_children` Where `tbl_children`.`employee_id` = '$id' LIMIT 3,1");

if (count($record7) == 1 ) {
   $fc = mysqli_fetch_array($record7);
   $fc3name_of_children = $fc['name_of_children'];
   $fc3date_of_birth = $fc['date_of_birth'];
}

        // family children 4
        //$record8 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id='$id' LIMIT 4,1");
$record8 = mysqli_query($db,"SELECT * FROM `tbl_children` Where `tbl_children`.`employee_id` = '$id' LIMIT 4,1");

if (count($record8) == 1 ) {
   $fc = mysqli_fetch_array($record8);
   $fc4name_of_children = $fc['name_of_children'];
   $fc4date_of_birth = $fc['date_of_birth'];
}

        // family children 5
        //$record9 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id='$id' LIMIT 5,1");
$record9 = mysqli_query($db,"SELECT * FROM `tbl_children` Where `tbl_children`.`employee_id` = '$id' LIMIT 5,1");

if (count($record9) == 1 ) {
   $fc = mysqli_fetch_array($record9);
   $fc5name_of_children = $fc['name_of_children'];
   $fc5date_of_birth = $fc['date_of_birth'];
}

         // family children 6
        //$record10 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id='$id' LIMIT 6,1");
$record10 = mysqli_query($db,"SELECT * FROM `tbl_children` Where `tbl_children`.`employee_id` = '$id' LIMIT 6,1");

if (count($record10) == 1 ) {
   $fc = mysqli_fetch_array($record10);
   $fc6name_of_children = $fc['name_of_children'];
   $fc6date_of_birth = $fc['date_of_birth'];
}

         // family children 7
        //$record11 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id='$id' LIMIT 7,1");
$record11 = mysqli_query($db,"SELECT * FROM `tbl_children` Where `tbl_children`.`employee_id` = '$id' LIMIT 7,1");

if (count($record11) == 1 ) {
   $fc = mysqli_fetch_array($record11);
   $fc7name_of_children = $fc['name_of_children'];
   $fc7date_of_birth = $fc['date_of_birth'];
}

         // family children 8
        //$record12 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id='$id' LIMIT 8,1");
$record12 = mysqli_query($db,"SELECT * FROM `tbl_children` Where `tbl_children`.`employee_id` = '$id' LIMIT 8,1");

if (count($record12) == 1 ) {
   $fc = mysqli_fetch_array($record12);
   $fc8name_of_children = $fc['name_of_children'];
   $fc8date_of_birth = $fc['date_of_birth'];
}

         // family children 9
        //$record13 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id='$id' LIMIT 9,1");
$record13 = mysqli_query($db,"SELECT * FROM `tbl_children` Where `tbl_children`.`employee_id` = '$id' LIMIT 9,1");

if (count($record13) == 1 ) {
   $fc = mysqli_fetch_array($record13);
   $fc9name_of_children = $fc['name_of_children'];
   $fc9date_of_birth = $fc['date_of_birth'];
}

         // family children 10
        //$record14 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id='$id' LIMIT 10,1");
$record14 = mysqli_query($db,"SELECT * FROM `tbl_children` Where `tbl_children`.`employee_id` = '$id' LIMIT 10,1");

if (count($record14) == 1 ) {
   $fc = mysqli_fetch_array($record14);
   $fc10name_of_children = $fc['name_of_children'];
   $fc10date_of_birth = $fc['date_of_birth'];
}

         // family children 11
        //$record15 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id='$id' LIMIT 11,1");
$record15 = mysqli_query($db,"SELECT * FROM `tbl_children` Where `tbl_children`.`employee_id` = '$id' LIMIT 11,1");

if (count($record15) == 1 ) {
   $fc = mysqli_fetch_array($record15);
   $fc11name_of_children = $fc['name_of_children'];
   $fc11date_of_birth = $fc['date_of_birth'];
}

        // Special Skills 1
        //$record16 = mysqli_query($db, "SELECT * FROM tbl_skills_hobbies WHERE employee_id='$id' LIMIT 0,1");
$record16 = mysqli_query($db,"SELECT * FROM `tbl_skills_hobbies` Where `tbl_skills_hobbies`.`employee_id` = '$id' LIMIT 0,1");

if (count($record16) == 1 ) {
   $sp = mysqli_fetch_array($record16);
   $sp1special_skills_hobbies = $sp['special_skills_hobbies'];
}

        // Special Skills 2
        //$record17 = mysqli_query($db, "SELECT * FROM tbl_skills_hobbies WHERE employee_id='$id' LIMIT 1,1");
$record17 = mysqli_query($db,"SELECT * FROM `tbl_skills_hobbies` Where `tbl_skills_hobbies`.`employee_id` = '$id' LIMIT 1,1");

if (count($record17) == 1 ) {
   $sp = mysqli_fetch_array($record17);
   $sp2special_skills_hobbies = $sp['special_skills_hobbies'];
}

        // Special Skills 3
        //$record18 = mysqli_query($db, "SELECT * FROM tbl_skills_hobbies WHERE employee_id='$id' LIMIT 2,1");
$record18 = mysqli_query($db,"SELECT * FROM `tbl_skills_hobbies` Where `tbl_skills_hobbies`.`employee_id` = '$id' LIMIT 2,1");

if (count($record18) == 1 ) {
   $sp = mysqli_fetch_array($record18);
   $sp3special_skills_hobbies = $sp['special_skills_hobbies'];
}

        // Special Skills 4
        //$record19 = mysqli_query($db, "SELECT * FROM tbl_skills_hobbies WHERE employee_id='$id' LIMIT 3,1");
$record19 = mysqli_query($db,"SELECT * FROM `tbl_skills_hobbies` Where `tbl_skills_hobbies`.`employee_id` = '$id' LIMIT 3,1");

if (count($record19) == 1 ) {
   $sp = mysqli_fetch_array($record19);
   $sp4special_skills_hobbies = $sp['special_skills_hobbies'];
}

        // NON-ACADEMIC DISTINCTIONS / RECOGNITION  1
        //$record20 = mysqli_query($db, "SELECT * FROM tbl_recog WHERE employee_id='$id' LIMIT 0,1");
$record20 = mysqli_query($db,"SELECT * FROM `tbl_recog` Where `tbl_recog`.`employee_id` = '$id' LIMIT 0,1");

if (count($record20) == 1 ) {
   $na = mysqli_fetch_array($record20);
   $na1non_academic_distinctions = $na['non_academic_distinctions'];
}

         // NON-ACADEMIC DISTINCTIONS / RECOGNITION  2
        //$record21 = mysqli_query($db, "SELECT * FROM tbl_recog WHERE employee_id='$id' LIMIT 1,1");
$record21 = mysqli_query($db,"SELECT * FROM `tbl_recog` Where `tbl_recog`.`employee_id` = '$id' LIMIT 1,1");

if (count($record21) == 1 ) {
   $na = mysqli_fetch_array($record21);
   $na2non_academic_distinctions = $na['non_academic_distinctions'];
}

         // NON-ACADEMIC DISTINCTIONS / RECOGNITION  3
        //$record22 = mysqli_query($db, "SELECT * FROM tbl_recog WHERE employee_id='$id' LIMIT 2,1");
$record22 = mysqli_query($db,"SELECT * FROM `tbl_recog` Where `tbl_recog`.`employee_id` = '$id' LIMIT 2,1");

if (count($record22) == 1 ) {
   $na = mysqli_fetch_array($record22);
   $na3non_academic_distinctions = $na['non_academic_distinctions'];
}

         // NON-ACADEMIC DISTINCTIONS / RECOGNITION  4
        //$record23 = mysqli_query($db, "SELECT * FROM tbl_recog WHERE employee_id='$id' LIMIT 3,1");
$record23 = mysqli_query($db,"SELECT * FROM `tbl_recog` Where `tbl_recog`.`employee_id` = '$id' LIMIT 3,1");

if (count($record23) == 1 ) {
   $na = mysqli_fetch_array($record23);
   $na4non_academic_distinctions = $na['non_academic_distinctions'];
}

        // MEMBERSHIP IN ASSOCIATION/ORGANIZATION  1
        //$record24 = mysqli_query($db, "SELECT * FROM tbl_membership WHERE employee_id='$id' LIMIT 0,1");
$record24 = mysqli_query($db,"SELECT * FROM `tbl_membership` Where `tbl_membership`.`employee_id` = '$id' LIMIT 0,1");

if (count($record24) == 1 ) {
   $ma = mysqli_fetch_array($record24);
   $ma1membership_asso_organization = $ma['membership_asso_organization'];
}

        // MEMBERSHIP IN ASSOCIATION/ORGANIZATION  2
        //$record25 = mysqli_query($db, "SELECT * FROM tbl_membership WHERE employee_id='$id' LIMIT 1,1");
$record25 = mysqli_query($db,"SELECT * FROM `tbl_membership` Where `tbl_membership`.`employee_id` = '$id' LIMIT 1,1");

if (count($record25) == 1 ) {
   $ma = mysqli_fetch_array($record25);
   $ma2membership_asso_organization = $ma['membership_asso_organization'];
}

         // MEMBERSHIP IN ASSOCIATION/ORGANIZATION  3
        //$record26 = mysqli_query($db, "SELECT * FROM tbl_membership WHERE employee_id='$id' LIMIT 2,1");
$record26 = mysqli_query($db,"SELECT * FROM `tbl_membership` Where `tbl_membership`.`employee_id` = '$id' LIMIT 2,1");

if (count($record26) == 1 ) {
   $ma = mysqli_fetch_array($record26);
   $ma3membership_asso_organization = $ma['membership_asso_organization'];
}

         // MEMBERSHIP IN ASSOCIATION/ORGANIZATION  4
        //$record27 = mysqli_query($db, "SELECT * FROM tbl_membership WHERE employee_id='$id' LIMIT 3,1");
$record27 = mysqli_query($db,"SELECT * FROM `tbl_membership` Where `tbl_membership`.`employee_id` = '$id' LIMIT 3,1");

if (count($record27) == 1 ) {
   $ma = mysqli_fetch_array($record27);
   $ma4membership_asso_organization = $ma['membership_asso_organization'];
}

         // tbl_additional_info
        //$record28 = mysqli_query($db, "SELECT * FROM tbl_additional_info WHERE employee_id='$id'");
$record28 = mysqli_query($db,"SELECT * FROM `tbl_additional_info` Where `tbl_additional_info`.`employee_id` = '$id'");

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

if ($question_34_a === 'YES' || $question_34_b ==='YES' || $question_35_a ==='YES' || $question_35_b ==='YES' || $question_36 ==='YES' || $question_37 ==='YES' || $question_38_a ==='YES' || $question_38_b ==='YES' || $question_39 ==='YES'  || $question_40_a ==='YES' || $question_40_b ==='YES' || $question_40_c ==='YES'){
    $question_34_ay = 'checked';
    $question_34_an = 'no';
    $question_34_by = 'checked';
    $question_34_bn = 'no';
    $question_35_ay = 'checked';
    $question_35_an = 'no';
    $question_35_by = 'checked';
    $question_35_bn = 'no';
    $question_36y = 'checked';
    $question_36n = 'no';
    $question_37y = 'checked';
    $question_37n = 'no';
    $question_38_ay = 'checked';
    $question_38_an = 'no';
    $question_38_by = 'checked';
    $question_38_bn = 'no';
    $question_39y = 'checked';
    $question_39n = 'no';
    $question_40_ay = 'checked';
    $question_40_an = 'no';
    $question_40_by = 'checked';
    $question_40_bn = 'no';
    $question_40_cy = 'checked';
    $question_40_cn = 'no';
} else {
    $question_34_ay = 'no';
    $question_34_an = 'checked';
    $question_34_by = 'no';
    $question_34_bn = 'checked';
    $question_35_ay = 'no';
    $question_35_an = 'checked';
    $question_35_by = 'no';
    $question_35_bn = 'checked';
    $question_36y = 'no';
    $question_36n = 'checked';
    $question_37y = 'no';
    $question_37n = 'checked';
    $question_38_ay = 'no';
    $question_38_an = 'checked';
    $question_38_by = 'no';
    $question_38_bn = 'checked';
    $question_39y = 'no';
    $question_39n = 'checked';
    $question_40_ay = 'no';
    $question_40_an = 'checked';
    $question_40_by = 'no';
    $question_40_bn = 'checked';
    $question_40_cy = 'no';
    $question_40_cn = 'checked';
}

         // tbl_gov_id
        //$record29 = mysqli_query($db, "SELECT * FROM tbl_gov_id WHERE employee_id='$id'");
$record29 = mysqli_query($db,"SELECT * FROM `tbl_gov_id` Where `tbl_gov_id`.`employee_id` = '$id'");

if (count($record29) == 1 ) {
   $g = mysqli_fetch_array($record29);
   $ggov_id = $g['gov_id'];
   $gid_no = $g['id_no'];
   $gdate_place_issuance = $g['date_place_issuance'];
}

         // tbl_educ
        //$record30 = mysqli_query($db, "SELECT * FROM tbl_educ WHERE employee_id='$id' and ed_level = 'Elementary'");
$record30 = mysqli_query($db,"SELECT * FROM `tbl_educ` Where `tbl_educ`.`employee_id` = '$id' and `tbl_educ`.`ed_level`= 'Elementary'");

if (count($record30) == 1 ) {
   $ed = mysqli_fetch_array($record30);
   $ed1name_of_school = $ed['name_of_school'];
   $ed1educ_degree = $ed['educ_degree'];
   $ed1att_from = $ed['att_from'];
   $ed1att_to = $ed['att_to'];
   $ed1level_earned = $ed['level_earned'];
   $ed1year_grad = $ed['year_grad'];
   $ed1scholarship_honors = $ed['scholarship_honors'];
}

        //$record31 = mysqli_query($db, "SELECT * FROM tbl_educ WHERE employee_id='$id' and ed_level = 'Secondary'");
$record31 = mysqli_query($db,"SELECT * FROM `tbl_educ` Where `tbl_educ`.`employee_id` = '$id' and `tbl_educ`.`ed_level`= 'Secondary'");

if (count($record31) == 1 ) {
   $ed = mysqli_fetch_array($record31);
   $ed2name_of_school = $ed['name_of_school'];
   $ed2educ_degree = $ed['educ_degree'];
   $ed2att_from = $ed['att_from'];
   $ed2att_to = $ed['att_to'];
   $ed2level_earned = $ed['level_earned'];
   $ed2year_grad = $ed['year_grad'];
   $ed2scholarship_honors = $ed['scholarship_honors'];
}

        //$record32 = mysqli_query($db, "SELECT * FROM tbl_educ WHERE employee_id='$id' and ed_level = 'Vocational/Trade Course'");
$record32 = mysqli_query($db,"SELECT * FROM `tbl_educ` Where `tbl_educ`.`employee_id` = '$id' and `tbl_educ`.`ed_level`= 'Vocational/Trade Course'");

if (count($record32) == 1 ) {
   $ed = mysqli_fetch_array($record32);
   $ed3name_of_school = $ed['name_of_school'];
   $ed3educ_degree = $ed['educ_degree'];
   $ed3att_from = $ed['att_from'];
   $ed3att_to = $ed['att_to'];
   $ed3level_earned = $ed['level_earned'];
   $ed3year_grad = $ed['year_grad'];
   $ed3scholarship_honors = $ed['scholarship_honors'];
}

         //$record33 = mysqli_query($db, "SELECT * FROM tbl_educ WHERE employee_id='$id' and ed_level = 'College'");
$record33 = mysqli_query($db,"SELECT * FROM `tbl_educ` Where `tbl_educ`.`employee_id` = '$id' and `tbl_educ`.`ed_level`= 'College'");

if (count($record33) == 1 ) {
   $ed = mysqli_fetch_array($record33);
   $ed4name_of_school = $ed['name_of_school'];
   $ed4educ_degree = $ed['educ_degree'];
   $ed4att_from = $ed['att_from'];
   $ed4att_to = $ed['att_to'];
   $ed4level_earned = $ed['level_earned'];
   $ed4year_grad = $ed['year_grad'];
   $ed4scholarship_honors = $ed['scholarship_honors'];
}

         //$record34 = mysqli_query($db, "SELECT * FROM tbl_educ WHERE employee_id='$id' and ed_level = 'Graduate Studies'");
$record34 = mysqli_query($db,"SELECT * FROM `tbl_educ` Where `tbl_educ`.`employee_id` = '$id' and `tbl_educ`.`ed_level`= 'Graduate Studies'");

if (count($record34) == 1 ) {
   $ed = mysqli_fetch_array($record34);
   $ed5name_of_school = $ed['name_of_school'];
   $ed5educ_degree = $ed['educ_degree'];
   $ed5att_from = $ed['att_from'];
   $ed5att_to = $ed['att_to'];
   $ed5level_earned = $ed['level_earned'];
   $ed5year_grad = $ed['year_grad'];
   $ed5scholarship_honors = $ed['scholarship_honors'];
}

        //$record35 = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id='$id' LIMIT 0,1");
$record35 = mysqli_query($db,"SELECT * FROM `tbl_children` Where `tbl_children`.`employee_id` = '$id' LIMIT 0,1");

if (count($record35) == 1 ) {
   $ch = mysqli_fetch_array($record35);
   $child_id = $ch['child_id'];
   $chname_of_children = $ch['name_of_children'];
   $chdate_of_birth = $ch['date_of_birth'];
}

}
?>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    connect();
}

function connect(){
    /* CONNECTION */
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hris";

    $conn = mysqli_connect("localhost","root","","hris");

    //$conn = new mysqli($servername, $username, $password, $dbname);
    
    /* PERSONAL INFO */
    $pemployee_id  = trim(strtoupper($_POST['pemployee_id']));
    $psurname =      trim(ucwords($_POST['psurname']));
    $pfirst_name  =   trim(ucwords($_POST['pfirst_name']));
    $pmiddle_name =  trim(ucwords($_POST['pmiddle_name']));
    $pname_extension= trim(ucwords($_POST['pname_extension']));
    $pdate_birth= trim($_POST['pdate_birth']);
    $pplace_of_birth = trim(ucwords($_POST['pplace_of_birth']));
    $psex = $_POST['psex'];
    $pcivil_status = ($_POST['pcivil_status']);
    $pheight_m = trim($_POST['pheight_m']);
    $pweight_m = trim($_POST['pweight_m']);
    $pblood_type= trim($_POST['pblood_type']);
    $pgsis_id_no= trim($_POST['pgsis_id_no']);
    $pphilhealth_no = trim($_POST['pphilhealth_no']);
    $ppagibig_id_no = trim($_POST['ppagibig_id_no']);
    $psss_no = trim($_POST['psss_no']);
    $ptin_no=  trim($_POST['ptin_no']);
    $pagency_employee_no= trim($_POST['pagency_employee_no']);
    $pcitizenship = $_POST['pcitizenship'];
    $pcountry = (ucwords($_POST['pcountry']));
    $pdual_citizenship =  $_POST['pdual_citizenship'];
    $presidential_house_block_lot_no= trim(ucwords($_POST['presidential_house_block_lot_no']));
    $presidential_street= trim(ucwords($_POST['presidential_street']));

    $presidential_subdivision_village= trim(ucwords($_POST['presidential_subdivision_village']));
    $presidential_barangay=  trim(ucwords($_POST['presidential_barangay']));
    $presidential_city_municipality=  trim(ucwords($_POST['presidential_city_municipality']));
    $presidential_province=   trim(ucwords($_POST['presidential_province']));
    $presidential_zipcode=  trim(ucwords($_POST['presidential_zipcode']));
    $ppermanent_house_block_lot_no=  trim(ucwords($_POST['ppermanent_house_block_lot_no']));
    $ppermanent_street=  trim(ucwords($_POST['ppermanent_street']));
    $ppermanent_subdivision_village=  trim(ucwords($_POST['ppermanent_subdivision_village']));
    $ppermanent_barangay=  trim(ucwords($_POST['ppermanent_barangay']));
    $ppermanent_city_municipality=   trim(ucwords($_POST['ppermanent_city_municipality']));
    $ppermanent_province=  trim(ucwords($_POST['ppermanent_province']));
    $ppermanent_zipcode=   (ucwords($_POST['ppermanent_zipcode']));
    $ptelephone_no=  trim($_POST['ptelephone_no']);
    $pmobile_no=   trim($_POST['pmobile_no']);
    $pemail_address= trim($_POST['pemail_address']);
    $pemployment_status= trim($_POST['status_emp']);
    
    
    if(mysqli_connect_error())
        die("Connection failed".mysqli_connect_error());
    
    $sql_one = "UPDATE tbl_p_info SET surname = '$psurname', first_name = '$pfirst_name', 
                middle_name = '$pmiddle_name', name_extension = '$pname_extension', 
                date_birth = '$pdate_birth', place_of_birth = '$pplace_of_birth', sex = '$psex', 
                civil_status = '$pcivil_status', height_m = '$pheight_m', weight_m = '$pweight_m',
                blood_type = '$pblood_type', gsis_id_no = '$pgsis_id_no', pagibig_id_no = '$ppagibig_id_no',
                philhealth_no = '$pphilhealth_no',sss_no = '$psss_no',tin_no = '$ptin_no', 
                agency_employee_no = '$pagency_employee_no', citizenship = '$pcitizenship', 
                country = '$pcountry', dual_citizenship = '$pdual_citizenship',
                residential_house_block_lot_no = '$presidential_house_block_lot_no',
                residential_street = '$presidential_street', residential_subdivision_village = '$presidential_subdivision_village', 
                residential_barangay = '$presidential_barangay' ,residential_city_municipality = '$presidential_city_municipality', 
                residential_province = '$presidential_province',residential_zipcode = '$presidential_zipcode',
                permanent_house_block_lot_no = '$ppermanent_house_block_lot_no',permanent_street = '$ppermanent_street',
                permanent_subdivision_village = '$ppermanent_subdivision_village', permanent_barangay = '$ppermanent_barangay',
                permanent_city_municipality = '$ppermanent_city_municipality', permanent_province = '$ppermanent_province', 
                permanent_zipcode = '$ppermanent_zipcode', telephone_no = '$ptelephone_no', mobile_no = '$pmobile_no',
                email_address = '$pemail_address', employment_status = '$pemployment_status' 
                WHERE `employee_id` = '$pemployee_id'";
    

    /* SPOUSE */
    $sspouses_surname =  trim(ucwords($_POST['sspouses_surname'])) ? trim(ucwords($_POST['sspouses_surname'])) : '';
    $sfirst_name =  trim(ucwords($_POST['sfirst_name'])) ?  trim(ucwords($_POST['sfirst_name'])) : '';
    $smiddle_name =  trim(ucwords($_POST['smiddle_name'])) ? trim(ucwords($_POST['smiddle_name'])) : '';
    $sname_extension =  trim(ucwords($_POST['sname_extension'])) ? trim(ucwords($_POST['sname_extension'])) : '';
    $soccupation =  trim(ucwords($_POST['soccupation'])) ?  trim(ucwords($_POST['soccupation'])) : '';
    $semployer_business_name =  trim(ucwords($_POST['semployer_business_name'])) ?  trim(ucwords($_POST['semployer_business_name'])) : '';
    $sbusiness_address =  trim(ucwords($_POST['sbusiness_address'])) ? trim(ucwords($_POST['sbusiness_address'])) : '';
    $stelephone_no =  trim($_POST['stelephone_no']) ?  trim($_POST['stelephone_no']) : '';

    $sql_two = "INSERT INTO tbl_spouse(employee_id,spouses_surname,first_name,middle_name,name_extension,occupation,
    employer_business_name,business_address,telephone_no) 
    VALUES ('$pemployee_id','$sspouses_surname','$sfirst_name','$smiddle_name','$sname_extension', '$soccupation',
    '$semployer_business_name','$sbusiness_address','$stelephone_no')";


    /* CHILDREN */
    $childCount = count($_POST["cname_of_children"]);
    $childValues=0;
    $query_one = "INSERT INTO tbl_children (employee_id,name_of_children,date_of_birth) VALUES ";
    $queryValue = "";
    for($i=0;$i<$childCount;$i++) {
        if(!empty($_POST["cname_of_children"][$i]) || !empty($_POST["cdate_of_birth"][$i])) {
            $childValues++;
            if($queryValue!="") {
                $queryValue .= ",";
            }
            $queryValue .= "('" . trim($_POST["pemployee_id"]). "','" . trim(ucwords($_POST["cname_of_children"][$i])) . "', '" . trim($_POST["cdate_of_birth"][$i]) . "')";
        }
    }
    $sql_3 = $query_one.$queryValue;

    /* FATHERS */
    $farelationship = 'Father';
    $fasurname =  trim(ucwords($_POST['fasurname'])) ?  trim(ucwords($_POST['fasurname'])) : '';
    $fafirst_name =  trim(ucwords($_POST['fafirst_name'])) ?  trim(ucwords($_POST['fafirst_name'])) : '';
    $famiddle_name =  trim(ucwords($_POST['famiddle_name'])) ?  trim(ucwords($_POST['famiddle_name'])) : '';
    $faname_extension =  trim(ucwords($_POST['faname_extension'])) ?  trim(ucwords($_POST['faname_extension'])) : '';

    $sql_4 = "INSERT INTO tbl_family(employee_id,relationship,surname,first_name,middle_name,name_extension,maidenname) VALUES ('$pemployee_id','$farelationship','$fasurname','$fafirst_name','$famiddle_name', '$faname_extension', '')";

    /* MOTHERS */
    $morelationship = 'Mother'; 
    $momaiden =  trim(ucwords($_POST['momaiden'])) ?  trim(ucwords($_POST['momaiden'])) : '';
    $mosurname =  trim(ucwords($_POST['mosurname'])) ?  trim(ucwords($_POST['mosurname'])) : '';
    $mofirst_name =  trim(ucwords($_POST['mofirst_name'])) ? trim(ucwords($_POST['mofirst_name'])) : '';
    $momiddle_name =  trim(ucwords($_POST['momiddle_name'])) ?  trim(ucwords($_POST['momiddle_name'])) : '';


    $sql_5 = "INSERT INTO tbl_family(employee_id,relationship,surname,first_name,middle_name,name_extension,maidenname) VALUES ('$pemployee_id','$morelationship','$mosurname','$mofirst_name','$momiddle_name', '', '$momaiden')";

    /* EDUCATIONAL */
    $elementary= 'Elementary';
    $elname_of_school =  trim(ucwords($_POST['elname_of_school'])) ?  trim(ucwords($_POST['elname_of_school'])) : '';
    $eleduc_degree =   trim(ucwords($_POST['eleduc_degree'])) ?  trim(ucwords($_POST['eleduc_degree'])) : '';
    $elatt_from =   trim($_POST['elatt_from']) ?  trim($_POST['elatt_from']) : '';
    $elatt_to =  trim($_POST['elatt_to']) ?  trim($_POST['elatt_to']) : '';
    $ellevel_earned =  trim($_POST['ellevel_earned']) ?  trim($_POST['ellevel_earned']) : '';
    $elyear_grad =  trim($_POST['elyear_grad']) ?  trim($_POST['elyear_grad']) : '';
    $elscholarship_honors = trim(ucwords($_POST['elscholarship_honors'])) ?  trim(ucwords($_POST['elscholarship_honors'])) : '';

    $sql_6 = "INSERT INTO tbl_educ(employee_id,ed_level,name_of_school,educ_degree,att_from,att_to,level_earned, year_grad, scholarship_honors) VALUES ('$pemployee_id','$elementary','$elname_of_school','$eleduc_degree','$elatt_from', '$elatt_to', '$ellevel_earned','$elyear_grad','$elscholarship_honors')";

    $secondary= 'Secondary';
    $sename_of_school =  trim(ucwords($_POST['sename_of_school'])) ?  trim(ucwords($_POST['sename_of_school'])) : '';
    $eseduc_degree =   trim(ucwords($_POST['seeduc_degree'])) ?   trim(ucwords($_POST['seeduc_degree'])) : '';
    $seatt_from =   trim($_POST['seatt_from']) ?   trim($_POST['seatt_from']) : '';
    $seatt_to =   trim($_POST['seatt_to']) ?   trim($_POST['seatt_to']) : '';
    $selevel_earned =   trim($_POST['selevel_earned']) ?   trim($_POST['selevel_earned']) : '';
    $seyear_grad =   trim($_POST['seyear_grad']) ?   trim($_POST['seyear_grad']) : '';
    $sescholarship_honors =   trim(ucwords($_POST['sescholarship_honors'])) ?   trim(ucwords($_POST['sescholarship_honors'])) : '';

    $sql_7 = "INSERT INTO tbl_educ(employee_id,ed_level,name_of_school,educ_degree,att_from,att_to,level_earned, year_grad, scholarship_honors) VALUES ('$pemployee_id','$secondary','$sename_of_school','$eseduc_degree','$seatt_from', '$seatt_to', '$selevel_earned','$seyear_grad','$sescholarship_honors')";

    $vocational= 'Vocational/Trade Course';
    $voname_of_school =   trim(ucwords($_POST['voname_of_school'])) ? trim(ucwords($_POST['voname_of_school'])) : '';
    $voeduc_degree =   trim(ucwords($_POST['voeduc_degree'])) ?   trim(ucwords($_POST['voeduc_degree'])) : '';
    $voatt_from =   trim($_POST['voatt_from']) ?   trim($_POST['voatt_from']) : '';
    $voatt_to =   trim($_POST['voatt_to']) ?  trim( $_POST['voatt_to']) : '';
    $volevel_earned =   trim(ucwords($_POST['volevel_earned'])) ?   trim(ucwords($_POST['volevel_earned'])) : '';
    $voyear_grad =   trim($_POST['voyear_grad']) ?   trim($_POST['voyear_grad']) : '';
    $voscholarship_honors =   trim(ucwords($_POST['voscholarship_honors'])) ?   trim(ucwords($_POST['voscholarship_honors'])) : '';

    $sql_8 = "INSERT INTO tbl_educ(employee_id,ed_level,name_of_school,educ_degree,att_from,att_to,level_earned, year_grad, scholarship_honors) VALUES ('$pemployee_id','$vocational','$voname_of_school','$voeduc_degree','$voatt_from', '$voatt_to', '$volevel_earned','$voyear_grad','$voscholarship_honors')";
    $college = 'College';
    $coname_of_school =   trim(ucwords($_POST['coname_of_school'])) ?   trim(ucwords($_POST['coname_of_school'])) : '';
    $coeduc_degree =   trim(ucwords($_POST['coeduc_degree'])) ?   trim(ucwords($_POST['coeduc_degree'])) : '';
    $coatt_from =   trim(ucwords($_POST['coatt_from'])) ?   trim(ucwords($_POST['coatt_from'])) : '';
    $coatt_to =   trim(ucwords($_POST['coatt_to'])) ?   trim(ucwords($_POST['coatt_to'])) : '';
    $colevel_earned =   trim($_POST['colevel_earned']) ? trim($_POST['colevel_earned']) : '';
    $coyear_grad =    trim($_POST['coyear_grad']) ?   trim($_POST['coyear_grad']) : '';
    $coscholarship_honors =   trim(ucwords($_POST['coscholarship_honors'])) ?   trim(ucwords($_POST['coscholarship_honors'])) : '';

    $sql_9 = "INSERT INTO tbl_educ(employee_id,ed_level,name_of_school,educ_degree,att_from,att_to,level_earned, year_grad, scholarship_honors) VALUES ('$pemployee_id','$college','$coname_of_school','$coeduc_degree','$coatt_from', '$coatt_to', '$colevel_earned','$coyear_grad','$coscholarship_honors')";

    $graduatestudies = 'Graduate Studies';
    $grname_of_school =   trim(ucwords($_POST['grname_of_school'])) ?   trim(ucwords($_POST['grname_of_school'])) : '';
    $greduc_degree =   trim(ucwords($_POST['greduc_degree'])) ?   trim(ucwords($_POST['greduc_degree'])) : '';
    $gratt_from =   trim(ucwords($_POST['gratt_from'])) ?   trim(ucwords($_POST['gratt_from'])) : '';
    $gratt_to =   trim($_POST['gratt_to']) ?   trim($_POST['gratt_to']) : '';
    $grlevel_earned =   trim($_POST['grlevel_earned']) ?   trim($_POST['grlevel_earned']) : '';
    $gryear_grad =   trim($_POST['gryear_grad']) ?   trim($_POST['gryear_grad']) : '';
    $grscholarship_honors =   trim(ucwords($_POST['grscholarship_honors'])) ?   trim(ucwords($_POST['grscholarship_honors'])) : '';

    $sql_10 = "INSERT INTO tbl_educ(employee_id,ed_level,name_of_school,educ_degree,att_from,att_to,level_earned, year_grad, scholarship_honors) VALUES ('$pemployee_id','$graduatestudies','$grname_of_school','$greduc_degree','$gratt_from', '$gratt_to', '$grlevel_earned','$gryear_grad','$grscholarship_honors')";


    /* CIVIL SERVICE */
    $csCount = count($_POST["csdescription"]);
    $csValues=0;
    $query_11 = "INSERT INTO  tbl_eligibility(employee_id,descriptionx,rating,date_exam,place_examination,cert_no,date_of_validity) VALUES ";
    $queryValue = "";
    for($i=0;$i<$csCount;$i++) {
        if(!empty($_POST["csdescription"][$i]) || 
            !empty($_POST["csrating"][$i]) || 
            !empty($_POST["csdate_exam"][$i]) || 
            !empty($_POST["csplace_examination"][$i]) || 
            !empty($_POST["cscert_no"][$i]) || 
            !empty($_POST["csdate_of_validity"][$i])) {
            $csValues++;
        if($queryValue!="") {
            $queryValue .= ",";
        }
        $queryValue .= "('" . trim($_POST["pemployee_id"]) . "','" . trim(ucwords($_POST["csdescription"][$i])) . "', '" . trim($_POST["csrating"][$i]) . "','" . $_POST["csdate_exam"][$i]. "', '" . trim(ucwords(($_POST["csplace_examination"][$i]))) . "', '" . trim($_POST["cscert_no"][$i]) . "', '" . trim($_POST["csdate_of_validity"][$i]) . "')";
    }
}
$sql_11 = $query_11.$queryValue;

/* WORK EXPERIENCE */
$WCount = count($_POST["wwork_from"]);
$wValues=0;
$query_12 = "INSERT INTO  tbl_work_experience(employee_id,work_from,work_to,position_title,department_agency,monthly_salary,salary_job_step,status_appointment,government_service_y_n) VALUES ";
$queryValue = "";
for($i=0;$i<$WCount;$i++) {
    if(!empty($_POST["wwork_from"][$i]) || 
        !empty($_POST["wwork_to"][$i]) || 
        !empty($_POST["wposition_title"][$i]) || 
        !empty($_POST["wdepartment_agency"][$i]) || 
        !empty($_POST["wmonthly_salary"][$i]) || 
        !empty($_POST["wsalary_job_step"][$i]) || 
        !empty($_POST["wstatus_appointment"][$i]) || 
        !empty($_POST["wgovernment_service_y_n"][$i])) {
        $wValues++;
    if($queryValue!="") {
        $queryValue .= ",";
    }
    $queryValue .= "('" . trim($_POST["pemployee_id"]) . "','" . trim($_POST["wwork_from"][$i]) . "','" . trim($_POST["wwork_to"][$i]) . "', '" . trim($_POST["wposition_title"][$i]) . "','" . trim(ucwords($_POST["wdepartment_agency"][$i])) . "', '" . trim($_POST["wmonthly_salary"][$i]) . "', '" . trim($_POST["wsalary_job_step"][$i]) . "', '" . trim($_POST["wstatus_appointment"][$i]) . "', '" . trim($_POST["wgovernment_service_y_n"][$i]). "')";
}
}
$sql_12 = $query_12.$queryValue;

/* VOLUNTARY WORK */
$VCount = count($_POST["vname_address"]);
$vValues=0;
$query_13 = "INSERT INTO  tbl_voluntary_work(employee_id,name_address,voluntary_from,voluntary_to,no_of_hours,position_nature_of_work) VALUES ";
$queryValue = "";
for($i=0;$i<$VCount;$i++) {
    if(!empty($_POST["vname_address"][$i]) || 
        !empty($_POST["vvoluntary_from"][$i]) || 
        !empty($_POST["vvoluntary_to"][$i]) || 
        !empty($_POST["vno_of_hours"][$i]) || 
        !empty($_POST[" vposition_nature_of_work "][$i])) {
        $vValues++;
    if($queryValue!="") {
        $queryValue .= ",";
    }
    $queryValue .= "('" . trim($_POST["pemployee_id"]) . "','" . trim(ucwords($_POST["vname_address"][$i])). "','" . trim($_POST["vvoluntary_from"][$i]) . "', '" . trim($_POST["vvoluntary_to"][$i]). "','" . trim($_POST["vno_of_hours"][$i]) . "', '" . trim($_POST["vposition_nature_of_work"][$i]) . "')";
}
}
$sql_13 = $query_13.$queryValue;


/* Training */
$TCount = count($_POST["ttitle"]);
$tValues=0;
$query_14 = "INSERT INTO  tbl_training(employee_id,title,att_from,att_to,type_of_ld,no_hours,conducted_by) VALUES ";
$queryValue = "";
for($i=0;$i<$TCount;$i++) {
    if(!empty($_POST["ttitle"][$i]) || !empty($_POST["tatt_from"][$i]) || !empty($_POST["tatt_to"][$i]) || !empty($_POST["ttype_of_ld"][$i]) || !empty($_POST["tno_hours"][$i]) || !empty($_POST["tconducted_by"][$i])) {
        $tValues++;
        if($queryValue!="") {
            $queryValue .= ",";
        }
        $queryValue .= "('" . trim($_POST["pemployee_id"]) . "','" . trim(ucwords($_POST["ttitle"][$i])) . "','" . trim($_POST["tatt_from"][$i]) . "','" . trim($_POST["tatt_to"][$i]) . "', '" . trim($_POST["ttype_of_ld"][$i]) . "','" .trim($_POST["tno_hours"][$i]) . "', '" . trim($_POST["tconducted_by"][$i]) . "')";
    }
}
$sql_14 = $query_14.$queryValue;

/* Skills */
$SCount = count($_POST["special_skills_hobbies"]);
$sValues=0;
$query_15 = "INSERT INTO  tbl_skills_hobbies(employee_id,special_skills_hobbies) VALUES ";
$queryValue = "";
for($i=0;$i<$SCount;$i++) {
    if(!empty($_POST["special_skills_hobbies"][$i])) {
        $sValues++;
        if($queryValue!="") {
            $queryValue .= ",";
        }
        $queryValue .= "('" . trim($_POST["pemployee_id"]) . "','" . trim(ucwords($_POST["special_skills_hobbies"][$i])) . "')";
    }
}
$sql_15 = $query_15.$queryValue;

/* Membership */
$MCount = count($_POST["membership_asso_organization"]);
$mValues=0;
$query_16 = "INSERT INTO  tbl_membership(employee_id,membership_asso_organization) VALUES ";
$queryValue = "";
for($i=0;$i<$MCount;$i++) {
    if(!empty($_POST["membership_asso_organization"][$i])) {
        $mValues++;
        if($queryValue!="") {
            $queryValue .= ",";
        }
        $queryValue .= "('" . trim($_POST["pemployee_id"]) . "','" .  trim(ucwords($_POST["membership_asso_organization"][$i])) . "')";
    }
}
$sql_16 = $query_16.$queryValue;

/* Non Academic */
$NCount = count($_POST["non_academic_distinctions"]);
$nValues=0;
$query_17 = "INSERT INTO  tbl_recog(employee_id,non_academic_distinctions) VALUES ";
$queryValue = "";
for($i=0;$i<$NCount;$i++) {
    if(!empty($_POST["non_academic_distinctions"][$i])) {
        $nValues++;
        if($queryValue!="") {
            $queryValue .= ",";
        }
        $queryValue .= "('" . trim($_POST["pemployee_id"]) . "','" . trim(ucwords($_POST["non_academic_distinctions"][$i])) . "')";
    }
}
$sql_17 = $query_17.$queryValue;


/* ADDITIONAL INFO*/
$question_34_a = isset($_POST['question_34_a']) ? $_POST['question_34_a'] : '';
$question_34_b = isset($_POST['question_34_a']) ? $_POST['question_34_a'] : '';
$yes_details_34_b = isset($_POST['yes_details_34_b']) ? $_POST['yes_details_34_b'] : '';
$question_35_a = isset($_POST['question_35_a']) ? $_POST['question_35_a'] : '';
$yes_details_35_a = isset($_POST['yes_details_35_a']) ? $_POST['yes_details_35_a'] : '';
$question_35_b = isset($_POST['question_35_b']) ? $_POST['question_35_b'] : '';
$question_35_b_datefiled = isset($_POST['question_35_b_datefiled']) ? $_POST['question_35_b_datefiled'] : '';
$status_cases_35_b = isset($_POST['status_cases_35_b']) ? $_POST['status_cases_35_b'] : '';
$question_36 =isset($_POST['question_36']) ? $_POST['question_36'] : '';
$yes_details_36 = isset($_POST['yes_details_36']) ? $_POST['yes_details_36'] : '';
$question_37 = isset($_POST['question_37']) ? $_POST['question_37'] : '';
$yes_details_37 = isset($_POST['yes_details_37']) ? $_POST['yes_details_37'] : '';
$question_38_a = isset($_POST['question_38_a']) ? $_POST['question_38_a'] : '';
$yes_details_38_a = isset($_POST['yes_details_38_a']) ? $_POST['yes_details_38_a'] : '';
$question_38_b = isset($_POST['question_38_b']) ? $_POST['question_38_b'] : '';
$yes_details_38_b = isset($_POST['yes_details_38_b']) ? $_POST['yes_details_38_b'] : '';
$question_39 = isset($_POST['question_39']) ? $_POST['question_39'] : '';
$yes_details_39 = isset($_POST['yes_details_39']) ? $_POST['yes_details_39'] : '';
$question_40_a = isset($_POST['question_40_a']) ? $_POST['question_40_a'] : '';
$a_yes_details_40 = isset($_POST['a_yes_details_40']) ? $_POST['a_yes_details_40'] : '';
$question_40_b = isset($_POST['question_40_b']) ? $_POST['question_40_b'] : '';
$b_yes_details_b = isset($_POST['b_yes_details_b']) ? $_POST['b_yes_details_b'] : '';
$question_40_c = isset($_POST['question_40_c']) ? $_POST['question_40_c'] : '';
$c_yes_details_c = isset($_POST['c_yes_details_c']) ? $_POST['c_yes_details_c'] : '';

$sql_18 = "INSERT INTO tbl_additional_info(employee_id,question_34_a,question_34_b,yes_details_34_b,question_35_a,yes_details_35_a,question_35_b,question_35_b_datefiled, status_cases_35_b, question_36,yes_details_36,question_37,yes_details_37,question_38_a,yes_details_38_a,question_38_b,yes_details_38_b,question_39,yes_details_39,question_40_a,a_yes_details_40,question_40_b,b_yes_details_b,question_40_c,c_yes_details_c) VALUES ('$pemployee_id','$question_34_a','$question_34_b','$yes_details_34_b','$question_35_a','$yes_details_35_a', '$question_35_b', '$question_35_b_datefiled','$status_cases_35_b','$question_36','$yes_details_36','$question_37','$yes_details_37','$question_38_a','$yes_details_38_a','$question_38_b','$yes_details_38_b','$question_39','$yes_details_39','$question_40_a','$a_yes_details_40','$question_40_b','$b_yes_details_b','$question_40_c','$c_yes_details_c')";

/* REFERENCE */
$ReCount = count($_POST["ref_name"]);
$reValues=0;
$query_19 = "INSERT INTO  tbl_references(employee_id,ref_name,ref_address,ref_tel_no) VALUES ";
$queryValue = "";
for($i=0;$i<$ReCount;$i++) {
    if(!empty($_POST["ref_name"][$i]) || !empty($_POST["ref_address"][$i]) || !empty($_POST["ref_tel_no"][$i])) {
        $reValues++;
        if($queryValue!="") {
            $queryValue .= ",";
        }
        $queryValue .= "('" . trim($_POST["pemployee_id"]) . "','" .  trim(ucwords($_POST["ref_name"][$i])) . "','" .  trim(ucwords($_POST["ref_address"][$i])) . "','" . trim($_POST["ref_tel_no"][$i]) . "')";
    }
}
$sql_19 = $query_19.$queryValue;


/* GOVERNMENT ID */
$gov_id =  trim(ucwords($_POST['gov_id'])) ?  trim(ucwords($_POST['gov_id'])) : '';
$id_no =  trim(ucwords($_POST['id_no'])) ?  trim(ucwords($_POST['id_no'])) : '';
$date_place_issuance =  trim($_POST['date_place_issuance']) ?  trim($_POST['date_place_issuance']) : '';

$sql_20 = "INSERT INTO  tbl_gov_id(employee_id,gov_id,id_no,date_place_issuance) VALUES ('$pemployee_id','$gov_id','$id_no','$date_place_issuance')";

$id = $pemployee_id;

$sql = $sql_one . "; 
    SET FOREIGN_KEY_CHECKS=0;
    Delete from tbl_spouse Where employee_id='$id';
    Delete from tbl_children Where employee_id='$id';
    Delete from tbl_family Where employee_id='$id';
    Delete from tbl_educ Where employee_id='$id';
    Delete from tbl_eligibility Where employee_id='$id';
    Delete from tbl_work_experience Where employee_id='$id';
    Delete from tbl_voluntary_work Where employee_id='$id';
    Delete from tbl_training Where employee_id='$id';
    Delete from tbl_skills_hobbies Where employee_id='$id';
    Delete from tbl_membership Where employee_id='$id';
    Delete from tbl_recog Where employee_id='$id';
    Delete from tbl_additional_info Where employee_id='$id';
    Delete from tbl_references Where employee_id='$id';
    Delete from tbl_gov_id Where employee_id='$id';
    " . $sql_two . ";
    " . $sql_3 . ";
    " . $sql_4 . ";
    " . $sql_5 . ";
    " . $sql_6 . ";
    " . $sql_7 . ";
    " . $sql_8 . ";
    " . $sql_9 . ";
    " . $sql_10 . ";
    " . $sql_11 . ";
    " . $sql_12 . ";
    " . $sql_13 . ";
    " . $sql_14 . ";
    " . $sql_15 . ";
    " . $sql_16 . ";
    " . $sql_17 . ";
    " . $sql_18 . ";
    " . $sql_19 . ";
    " . $sql_20 . ";
";

if(mysqli_multi_query($conn, $sql)) {
        // header("Location: Lab01_Display.php");
    echo "<script> alert('Submitted Successfully!'); document.location.replace('form_edit.php?edit=$id')</script>";
}
else echo "<script> alert('Submission Failed!')</script>".$conn->error;

$conn->close();
}  

?>


<main class="form-pds">
    <div class="container py-5">
        <div class="row add-personal-info">
            <div class="card w-100 shadow-lg  border-0">
                <div class="card-header  bg-secondary text-white">
                    <span><i class="fa fa-pencil"></i> Update Employee</span>
                </div>
                <div class="card-body">
                    <small>
                        <i><b>WARNING:</b> Any misrepresentation made in the Personal Data Sheet and the Work
                            Experience Sheet shall cause the filling of administrative/criminal case/s against the
                            person concerned.
                        </i>
                    </small>
                    <small class="d-block">
                        <i><b>READ THE GUIDE TO FILLING OUT THE PERSONAL DATA SHEET (PDS) BEFORE ACCOMPLISHING THE PDS
                        FORM.</b>
                    </i>
                </small>
                <small class="d-block">
                    <i>
                        Indicate N/A if not applicable. <b>DO NOT ABBREVIATE.</b>
                    </i>
                </small>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <div class="panel-groups" id="accordion">
                        <div class="panel panel-default mt-1">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="btn-block collapsed" data-toggle="collapse" data-parent="#accordion"
                                    href="#pers-info">
                                Personal Information</a>
                            </h4>
                        </div>
                        <div id="pers-info" class="panel-collapse collapse in show">
                            <div class="panel-body">
                                <div class="d-flex flex-wrap">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Employee ID</label>
                                            <input class="update-empid form-control" type="text"
                                            name="pemployee_id" value="<?php echo $id; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="my-select">Status Employemnt</label>
                                            <select name="status_emp" class="form-control" name="">
                                                <option value="Regular" <?php
                                                if($n['employment_status']=="Regular") { echo "Selected"; }
                                                ?>>Regular</option>
                                                <option value="Retired" <?php if($n['employment_status']=="Retired")
                                                { echo "Selected"; } ?>>Retired</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Surname</label>
                                            <input id="" class="form-control" type="text" name="psurname"
                                            value="<?php echo $surname; ?>" autofocus="autofocus" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">First Name</label>
                                            <input id="" class="form-control" type="text" name="pfirst_name"
                                            value="<?php echo $first_name; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Name Extension (JR, SR)</label>
                                            <input id="" class="form-control" type="text" name="pname_extension"
                                            value="<?php echo $name_extension; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Middle Name</label>
                                            <input id="" class="form-control" type="text" name="pmiddle_name"
                                            value="<?php echo $middle_name; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Date of Birth</label>
                                            <input id="" class="form-control" type="date" name="pdate_birth"
                                            value="<?php echo $date_birth; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Place of Birth</label>
                                            <input id="" class="form-control" type="text" name="pplace_of_birth"
                                            value="<?php echo $place_of_birth; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="title-cont">
                                            <label for="">Sex</label>
                                        </div>
                                        <div class="option-cont d-flex flex-wrap">
                                            <div
                                            class="form-check d-flex align-items-center justify-content-between mr-auto">
                                            <input id="my-input" class="form-check-input" type="radio"
                                            name="psex" value="Male" <?php echo $sexy; ?>>
                                            <label for="my-input" class="form-check-label">Male</label>
                                        </div>
                                        <div
                                        class="form-check d-flex align-items-center justify-content-between mx-auto">
                                        <input id="my-input" class="form-check-input" type="radio"
                                        name="psex" value="Female" <?php echo $sexn; ?>>
                                        <label for="my-input" class="form-check-label">Female</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="title-cont">
                                    <label for="">Civil Status</label>
                                </div>
                                <div class="option-cont d-flex flex-wrap justify-content-between">
                                    <div
                                    class="form-check d-flex align-items-center justify-content-between mr-3">
                                    <input id="my-input" class="form-check-input" type="radio"
                                    name="pcivil_status" value="Single"
                                    <?php echo $civil_statuss; ?>>
                                    <label for="my-input" class="form-check-label">Single</label>
                                </div>
                                <div
                                class="form-check d-flex align-items-center justify-content-between  mr-3">
                                <input id="my-input" class="form-check-input" type="radio"
                                name="pcivil_status" value="Married"
                                <?php echo $civil_statusm; ?>>
                                <label for="my-input" class="form-check-label">Married</label>
                            </div>
                            <div
                            class="form-check d-flex align-items-center justify-content-between  mr-3">
                            <input id="my-input" class="form-check-input" type="radio"
                            name="pcivil_status" value="Widowed"
                            <?php echo $civil_statusw; ?>>
                            <label for="my-input" class="form-check-label">Widowed</label>
                        </div>
                        <div
                        class="form-check d-flex align-items-center justify-content-between  mr-3">
                        <input id="my-input" class="form-check-input" type="radio"
                        name="pcivil_status" value="Separated"
                        <?php echo $civil_statusse; ?>>
                        <label for="my-input" class="form-check-label">Separated</label>
                    </div>
                    <div
                    class="form-check d-flex align-items-center justify-content-between  mr-3">
                    <input id="my-input" class="form-check-input" type="radio"
                    name="pcivil_status" value="Other"
                    <?php echo $civil_statuso; ?>>
                    <label for="my-input" class="form-check-label">Other/s</label>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label for="">Height (m)</label>
                <input id="" class="form-control" type="text" name="pheight_m"
                value="<?php echo $height_m; ?>" required>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label for="">Weight (kg)</label>
                <input id="" class="form-control" type="text" name="pweight_m"
                value="<?php echo $weight_m; ?>" required>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label for="">Blood Type</label>
                <input id="" class="form-control" type="text" name="pblood_type"
                value="<?php echo $blood_type; ?>" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="">GSIS ID NO.</label>
                <input id="" class="form-control" type="text" name="pgsis_id_no"
                value="<?php echo $gsis_id_no; ?>" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="">Pag-ibig NO.</label>
                <input id="" class="form-control" type="text" name="ppagibig_id_no"
                value="<?php echo $pagibig_id_no; ?>" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="">Philhealth NO.</label>
                <input id="" class="form-control" type="text" name="pphilhealth_no"
                value="<?php echo $philhealth_no; ?>" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="">SSS NO.</label>
                <input id="" class="form-control" type="text" name="psss_no"
                value="<?php echo $sss_no; ?>" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="">Tin NO.</label>
                <input id="" class="form-control" type="text" name="ptin_no"
                value="<?php echo $tin_no; ?>" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="">Agency Employee NO.</label>
                <input id="" class="form-control" type="text"
                name="pagency_employee_no"
                value="<?php echo $agency_employee_no; ?>" required>
            </div>
        </div>
        <div class="col-md-6">

            <div class=" form-group">
                <label for="">Citizenship</label>
                <small class="mb-3 btn-block">If holder of dual citizenship
                    please
                indicate the details</small>
            </div>

            <div class="d-flex flex-wrap  p-0">
                <div class="citizenhp-select">
                    <div
                    class="form-check d-flex align-items-center justify-content-between  mr-3">
                    <input id="my-input" class="form-check-input" type="radio"
                    name="pcitizenship" value="Filipino"
                    <?php echo $citizenshipy; ?>>
                    <label for="my-input"
                    class="form-check-label">Filipino</label>
                </div>
            </div>
            <div class="citizenhp-select">
                <div
                class="form-check d-flex align-items-center justify-content-between  mr-3">
                <input id="my-input" class="form-check-input" type="radio"
                name="pcitizenship" value="Dual Citizenship"
                <?php echo $citizenshipn; ?>>
                <label for="my-input" class="form-check-label">Dual
                Citizenship</label>
            </div>
        </div>
        <div class="citizenhp-select">
            <div
            class="form-check d-flex align-items-center justify-content-between  mr-3">
            <input id="my-input" class="form-check-input" type="radio"
            name="pdual_citizenship" value="By Birth"
            <?php echo $dual_citizenshipy; ?>>
            <label for="my-input" class="form-check-label">By
            Birth</label>
        </div>
    </div>
    <div class="citizenhp-select">
        <div
        class="form-check d-flex align-items-center justify-content-between  mr-3">
        <input id="my-input" class="form-check-input" type="radio"
        name="pdual_citizenship" value="By
        Naturalization" <?php echo $dual_citizenshipn; ?>>
        <label for="my-input" class="form-check-label">By
        Naturalization</label>
    </div>
</div>
<div class="w-100 citizenhp-select">
    <div class="form-group">
        <label for="my-select">Pls. indicate country:</label>
        <select id="my-select" class="form-control" name="pcountry"
        country-data-region-id="gds-cr-one">
        <option value="Philippines" <?php
        if($n['country']=="Philippines") { echo "Selected"; }
        ?>>Philippines</option>

    </select>
</div>
</div>
</div>

<div class="row">
    <div class="col-md-12 mt-2">

        <div class=" form-group">
            <label for="">Permanent Address</label>
        </div>
        <div
        class="residential-wrapper justify-content-between d-flex flex-wrap">
        <div class="col-md-6 pl-0">
            <div class="form-group">
                <small for="">House/Block/Lot No.</small>
                <input id="" class="form-control" type="text"
                name="ppermanent_house_block_lot_no"
                value="<?php echo $permanent_house_block_lot_no; ?>"
                required>
            </div>
        </div>
        <div class="col-md-6 pr-0">
            <div class="form-group">
                <small for="">Street</small>
                <input id="" class="form-control" type="text"
                name="ppermanent_street"
                value="<?php echo $permanent_street; ?>"
                required>
            </div>
        </div>
        <div class="col-md-6 pl-0">
            <div class="form-group">
                <small for="">Subdivision/Village</small>
                <input id="" class="form-control" type="text"
                name="ppermanent_subdivision_village"
                value="<?php echo $permanent_subdivision_village; ?>"
                required>
            </div>
        </div>
        <div class="col-md-6 pr-0">
            <div class="form-group">
                <small for="">Barangay</small>
                <input id="" class="form-control" type="text"
                name="ppermanent_barangay"
                value="<?php echo $permanent_barangay; ?>"
                required>
            </div>
        </div>
        <div class="col-md-6 pl-0">
            <div class="form-group">
                <small for="">City/Municipality</small>
                <input id="" class="form-control" type="text"
                name="ppermanent_city_municipality"
                value="<?php echo $permanent_city_municipality; ?>"
                required>
            </div>
        </div>
        <div class="col-md-6 pr-0">
            <div class="form-group">
                <small for="">Province</small>
                <input id="" class="form-control" type="text"
                name="ppermanent_province"
                value="<?php echo $permanent_province; ?>"
                required>
            </div>
        </div>
        <div class="col-md-12 p-0">
            <div class="form-group">
                <small for="">Zipcode</small>
                <input id="" class="form-control" type="text"
                name="ppermanent_zipcode"
                value="<?php echo $permanent_zipcode; ?>"
                required>
            </div>
        </div>
    </div>

</div>
</div>
</div>
<div class="col-md-6">

    <div class=" form-group">
        <label for="">Residential Address</label>
    </div>
    <div class="residential-wrapper justify-content-between d-flex flex-wrap">
        <div class="col-md-6 pl-0">
            <div class="form-group">
                <small for="">House/Block/Lot No.</small>
                <input id="" class="form-control" type="text"
                name="presidential_house_block_lot_no"
                value="<?php echo $residential_house_block_lot_no; ?>"  required>
            </div>
        </div>
        <div class="col-md-6 pr-0">
            <div class="form-group">
                <small for="">Street</small>
                <input id="" class="form-control" type="text"
                name="presidential_street"
                value="<?php echo $residential_street; ?>" required>
            </div>
        </div>
        <div class="col-md-6 pl-0">
            <div class="form-group">
                <small for="">Subdivision/Village</small>
                <input id="" class="form-control" type="text"
                name="presidential_subdivision_village"
                value="<?php echo $residential_subdivision_village; ?>"
                required>
            </div>
        </div>
        <div class="col-md-6 pr-0">
            <div class="form-group">
                <small for="">Barangay</small>
                <input id="" class="form-control" type="text"
                name="presidential_barangay"
                value="<?php echo $residential_barangay; ?>" required>
            </div>
        </div>
        <div class="col-md-6 pl-0">
            <div class="form-group">
                <small for="">City/Municipality</small>
                <input id="" class="form-control" type="text"
                name="presidential_city_municipality"
                value="<?php echo $residential_city_municipality; ?>"
                required>
            </div>
        </div>
        <div class="col-md-6 pr-0">
            <div class="form-group">
                <small for="">Province</small>
                <input id="" class="form-control" type="text"
                name="presidential_province"
                value="<?php echo $residential_province; ?>" required>
            </div>
        </div>
        <div class="col-md-12 p-0">
            <div class="form-group">
                <small for="">Zipcode</small>
                <input id="" class="form-control" type="text"
                name="presidential_zipcode"
                value="<?php echo $residential_zipcode; ?>" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mt-2 d-flex flex-wrap">

            <div class="col-md-6 pl-0">
                <div class="form-group">
                    <label for="">Telephone No.</label>
                    <input id="" class="form-control" type="text"
                    name="ptelephone_no"
                    value="<?php echo $telephone_no; ?>" required>
                </div>
            </div>
            <div class="col-md-6 pr-0">
                <div class="form-group">
                    <label for="">Mobile No.</label>
                    <input id="" class="form-control" type="text"
                    name="pmobile_no" value="<?php echo $mobile_no; ?>"
                    required>
                </div>
            </div>
            <div class="col-md-12 p-0">
                <div class="form-group">
                    <label for="">Email Address</label>
                    <input id="" class="form-control" type="text"
                    name="pemail_address"
                    value="<?php echo $email_address; ?>" required>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

</div>
</div>
</div>
<div class="panel panel-default mt-1">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a class="btn-block text-white" data-toggle="collapse" data-parent="#accordion"
            href="#family-back">
        Family Background</a>
    </h4>
</div>
<div id="family-back" class="panel-collapse collapse">
    <div class="panel-body">
        <div class="row  p-3 group-fields">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Spouse's Surname</label>
                    <input id="" class="form-control" type="text"
                    name="sspouses_surname" value="<?php echo $spouses_surname; ?>">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">First Name</label>
                    <input id="" class="form-control" type="text" name="sfirst_name"
                    value="<?php echo $sfirst_name; ?>">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Middle Name</label>
                    <input id="" class="form-control" type="text" name="smiddle_name"
                    value="<?php echo $smiddle_name; ?>">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Name Extension (JR, SR)</label>
                    <input id="" class="form-control" type="text" name="sname_extension"
                    value="<?php echo $sname_extension; ?>">
                </div>
            </div>
        </div>
        <div class="row  p-3 group-fields">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Occupation</label>
                    <input id="" class="form-control" type="text" name="soccupation"
                    value="<?php echo $soccupation; ?>">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Employer/Business Name</label>
                    <input id="" class="form-control" type="text"
                    name="semployer_business_name"
                    value="<?php echo $semployer_business_name; ?>">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Business Address</label>
                    <input id="" class="form-control" type="text"
                    name="sbusiness_address"
                    value="<?php echo $sbusiness_address; ?>">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Telephone Number</label>
                    <input id="" class="form-control" type="text" name="stelephone_no"
                    value="<?php echo $stelephone_no; ?>">
                </div>
            </div>
        </div>
        <hr>
        <div class="row  p-3 group-fields">
            <div id="tbl-children" class="d-flex flex-wrap col-md-9">
                <div class="cont-child d-flex align-items-center col-md-12">
                    <div class="col-md-1 d-flex align-items-center">
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">




                            <label for="">Name Of Children (Write full name and list
                            all</label>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Date of Birth</label>

                        </div>
                    </div>
                </div>

                <?php
                require('db_config.php');
                $id = $_GET['edit'];

                $sql = "SELECT * FROM tbl_children WHERE employee_id='$id'";
                $childs = $mysqli->query($sql);
                while($child = $childs->fetch_assoc()){
                    ?>

                    <div class="cont-child d-flex align-items-center col-md-12">
                        <div class="col-md-1 d-flex align-items-center"><input
                            type="checkbox" name="item_index[]" /></div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input id="" class="form-control" type="hidden" name="child_id[]" value="<?php echo $child['child_id'] ?>">
                                    <input id="" class="form-control"
                                    type="text" name="cname_of_children[]"
                                    value="<?php echo $child['name_of_children'] ?>"></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="" class="form-control" type="date"
                                        name="cdate_of_birth[]"
                                        value="<?php echo $child['date_of_birth'] ?>">
                                    </div>
                                </div>
                            </div>

                        <?php } ?>

                    </div>
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <button class="btn btn-secondary btn-sm mr-2" type="button"
                        name="add_item" onClick="addMore();">Add More</button>
                        <button class="btn btn-danger btn-sm border-radius-0" type="button"
                        name="del_item" onClick="deleteRow();">Delete</button>
                    </div>
                </div>
                <hr>
                <div class="row  p-3 group-fields">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Father's Surname</label>
                            <input id="" class="form-control" type="text" name="fasurname"
                            value="<?php echo $fsurname; ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input id="" class="form-control" type="text" name="fafirst_name"
                            value="<?php echo $ffirst_name; ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Middle Name</label>
                            <input id="" class="form-control" type="text" name="famiddle_name"
                            value="<?php echo $fmiddle_name; ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Name Extension (JR., SR)</label>
                            <input id="" class="form-control" type="text" name="faname_extension"
                            value="<?php echo $fname_extension; ?>">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row  p-3 group-fields">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Mother's Maiden Name</label>
                            <input id="" class="form-control" type="text" name="momaiden"
                            value="<?php echo $fmmaidenname; ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Surname</label>
                            <input id="" class="form-control" type="text" name="mosurname"
                            value="<?php echo $fmsurname; ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input id="" class="form-control" type="text" name="mofirst_name"
                            value="<?php echo $fmfirst_name; ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Middle Name</label>
                            <input id="" class="form-control" type="text" name="momiddle_name"
                            value="<?php echo $fmmiddle_name; ?>">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="panel panel-default mt-1">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a class="btn-block" data-toggle="collapse" data-parent="#accordion"
                href="#educational-back">
            Educational Background</a>
        </h4>
    </div>
    <div id="educational-back" class="panel-collapse collapse">
        <div class="panel-body">
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>Level</th>
                        <th>Name of School <br> (write in full)</th>
                        <th>Basic Education/Degree/Course <br> (write in full)</th>
                        <th>Period of <br> <span>From</span></th>
                        <th>Attendance <br /><span>To</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Elementary</td>
                        <td><input id="" class="form-control" type="text"
                            name="elname_of_school"
                            value="<?php echo $ed1name_of_school; ?>">
                        </td>
                        <td>
                            <input id="" class="form-control" type="text"
                            name="eleduc_degree" value="<?php echo $ed1educ_degree; ?>">
                        </td>
                        <td width="10%">
                            <input id="" class="form-control" type="date" name="elatt_from"
                            value="<?php echo $ed1att_from; ?>">
                        </td>
                        <td width="10%">
                            <input id="" class="form-control" type="date" name="elatt_to"
                            value="<?php echo $ed1att_to; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Secondary</td>
                        <td>
                            <input id="" class="form-control" type="text"
                            name="sename_of_school"
                            value="<?php echo $ed2name_of_school; ?>">
                        </td>
                        <td>
                            <input id="" class="form-control" type="text"
                            name="seeduc_degree" value="<?php echo $ed2educ_degree; ?>">
                        </td>
                        <td width="10%">
                            <input id="" class="form-control" type="date" name="seatt_from"
                            value="<?php echo $ed2att_from; ?>">
                        </td>
                        <td width="10%">
                            <input id="" class="form-control" type="date" name="seatt_to"
                            value="<?php echo $ed2att_to; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Vocational / Trade Course</td>
                        <td>
                            <input id="" class="form-control" type="text"
                            name="voname_of_school"
                            value="<?php echo $ed3name_of_school; ?>">
                        </td>
                        <td>
                            <input id="" class="form-control" type="text"
                            name="voeduc_degree" value="<?php echo $ed3educ_degree; ?>">
                        </td>
                        <td width="10%">
                            <input id="" class="form-control" type="date" name="voatt_from"
                            value="<?php echo $ed3att_from; ?>">
                        </td>
                        <td width="10%">
                            <input id="" class="form-control" type="date" name="voatt_to"
                            value="<?php echo $ed3att_to; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Colloge</td>
                        <td>
                            <input id="" class="form-control" type="text"
                            name="coname_of_school"
                            value="<?php echo $ed4name_of_school; ?>">
                        </td>
                        <td>
                            <input id="" class="form-control" type="text"
                            name="coeduc_degree" value="<?php echo $ed4educ_degree; ?>">
                        </td>
                        <td width="10%">
                            <input id="" class="form-control" type="date" name="coatt_from"
                            value="<?php echo $ed4att_from; ?>">
                        </td>
                        <td width="10%">
                            <input id="" class="form-control" type="date" name="coatt_to"
                            value="<?php echo $ed4att_to; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Graduate Studies</td>
                        <td>
                            <input id="" class="form-control" type="text"
                            name="grname_of_school"
                            value="<?php echo $ed5name_of_school; ?>">
                        </td>
                        <td>
                            <input id="" class="form-control" type="text"
                            name="greduc_degree" value="<?php echo $ed5educ_degree; ?>">
                        </td>
                        <td width="10%">
                            <input id="" class="form-control" type="date" name="gratt_from"
                            value="<?php echo $ed5att_from; ?>">
                        </td>
                        <td width="10%">
                            <input id="" class="form-control" type="date" name="gratt_to"
                            value="<?php echo $ed5att_to; ?>">
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>Level</th>
                        <th>Highest Level/Units Earned <br> (if not graduated)</th>
                        <th>Year Graduated</th>
                        <th>Scholarship/Academic Honors Received</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Elementary</td>
                        <td>
                            <input id="" class="form-control" type="text"
                            name="ellevel_earned"
                            value="<?php echo $ed1level_earned; ?>">
                        </td>
                        <td>
                            <input id="" class="form-control" type="number"
                            name="elyear_grad" value="<?php echo $ed1year_grad; ?>">
                        </td>
                        <td>
                            <input id="" class="form-control" type="text"
                            name="elscholarship_honors"
                            value="<?php echo $ed1scholarship_honors; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Secondary</td>
                        <td>
                            <input id="" class="form-control" type="text"
                            name="selevel_earned"
                            value="<?php echo $ed2level_earned; ?>">
                        </td>
                        <td>
                            <input id="" class="form-control" type="number"
                            name="seyear_grad" value="<?php echo $ed2year_grad; ?>">
                        </td>
                        <td>
                            <input id="" class="form-control" type="text"
                            name="sescholarship_honors"
                            value="<?php echo $ed2scholarship_honors; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Vocational / Trade Course</td>
                        <td>
                            <input id="" class="form-control" type="text"
                            name="volevel_earned"
                            value="<?php echo $ed3level_earned; ?>">
                        </td>
                        <td>
                            <input id="" class="form-control" type="number"
                            name="voyear_grad" value="<?php echo $ed3year_grad; ?>">
                        </td>
                        <td>
                            <input id="" class="form-control" type="text"
                            name="voscholarship_honors"
                            value="<?php echo $ed3scholarship_honors; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>College</td>
                        <td>
                            <input id="" class="form-control" type="text"
                            name="colevel_earned"
                            value="<?php echo $ed4level_earned; ?>">
                        </td>
                        <td>
                            <input id="" class="form-control" type="number"
                            name="coyear_grad" value="<?php echo $ed4year_grad; ?>">
                        </td>
                        <td>
                            <input id="" class="form-control" type="text"
                            name="coscholarship_honors"
                            value="<?php echo $ed4scholarship_honors; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Graduate Studies</td>
                        <td>
                            <input id="" class="form-control" type="text"
                            name="grlevel_earned"
                            value="<?php echo $ed5level_earned; ?>">
                        </td>
                        <td>
                            <input id="" class="form-control" type="number"
                            name="gryear_grad" value="<?php echo $ed5year_grad; ?>">
                        </td>
                        <td>
                            <input id="" class="form-control" type="text"
                            name="grscholarship_honors"
                            value="<?php echo $ed5scholarship_honors; ?>">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="panel panel-default mt-1">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a class="btn-block" data-toggle="collapse" data-parent="#accordion"
            href="#civil-service-eli">
        Civil Service Eligibility</a>
    </h4>
</div>
<div id="civil-service-eli" class="panel-collapse collapse">
    <div class="panel-body">
        <table class="table table-light tbl-civilservice">
            <thead class="thead-light">
                <tr>
                    <th>Career Service/RA 1080 (BOARD/ BAR) UNDER <br /> SPECIAL
                        LAWS/CES/CSEE
                        <br /> BARANGAY ELIGIBILITY / DRIVER'S LICENSE
                    </th>
                    <th>RATING <br> (If Applicable)</th>
                    <th>DATE OF <br> EXAMINATION / <br> CONFERMENT</th>
                    <th>PLACE OF EXAMINATION / CONFERMENT</th>
                    <th>License (if applicable) NUMBER</th>
                    <th>Date of Validity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                require('db_config.php');
                $id = $_GET['edit'];

                $sql = "SELECT * FROM tbl_eligibility WHERE employee_id='$id'";
                $civils = $mysqli->query($sql);
                while($civil = $civils->fetch_assoc()){
                    ?>
                    <tr>
                        <td>

                            <input id="" class="form-control" type="hidden" name="civil_service_id[]" value="<?php echo $civil['civil_service_id'] ?>">

                            <input id="" class="form-control" type="text"
                            name="csdescription[]"
                            value="<?php echo $civil['descriptionx'] ?>"></td>
                            <td><input id="" class="form-control" type="text" name="csrating[]"
                                value="<?php echo $civil['rating'] ?>">
                            </td>
                            <td><input id="" class="form-control" type="date"
                                name="csdate_exam[]"
                                value="<?php echo $civil['date_exam'] ?>">
                            </td>
                            <td><input id="" class="form-control" type="text"
                                name="csplace_examination[]"
                                value="<?php echo $civil['place_examination'] ?>"></td>
                                <td><input id="" class="form-control" type="text" name="cscert_no[]"
                                    value="<?php echo $civil['cert_no'] ?>">
                                </td>
                                <td><input id="" class="form-control" type="date"
                                    name="csdate_of_validity[]"
                                    value="<?php echo $civil['date_of_validity'] ?>">
                                </td>
                                <td> <input type="checkbox" name="cs_index[]" />
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
                <div class="col-md-12 mb-3 d-flex align-items-center justify-content-center">
                    <button class="btn btn-secondary btn-sm mr-2" type="button" name="add_item"
                    onClick="addCS();">Add More</button>
                    <button class="btn btn-danger btn-sm border-radius-0" type="button"
                    name="del_item" onClick="deleteCS();">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default mt-1">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a class="btn-block" data-toggle="collapse" data-parent="#accordion"
                href="#work-experience">
                Work Experience
            </a>
        </h4>
    </div>
    <div id="work-experience" class="panel-collapse collapse">
        <div class="panel-body">
            <small class="ml-2 w-100">(include private employment. Start from your
                recent work)
                Description of duties should be indicated in the attached Work
                Experience
            Sheet.</small>
            <table class="table table-light tbl-workexperiences1">
                <thead class="thead-light">
                    <tr>
                        <th>INCLUDES DATES <br> (mm/dd/yyyy)
                        From</th>
                        <th width="10%">To</th>
                        <th>POSITION TITLE <br> (Write in full/Do not abbreviate)</th>
                        <th>DEPARTMENT / AGENCY / OFFICE / COMPANY <br> (Write in
                            full/Do not
                        abbreviate)</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    require('db_config.php');
                    $id = $_GET['edit'];

                    $sql = "SELECT * FROM tbl_work_experience WHERE employee_id='$id'";
                    $works = $mysqli->query($sql);
                    while($work = $works->fetch_assoc()){


                        ?>
                        <tr>
                            <td>
                                <input input id="" class="form-control" type="hidden"
                                name="employee_ids" value="<?php echo $work['employee_id'] ?>">
                                <input input id="" class="form-control" type="hidden"
                                name="work_id[]" value="<?php echo $work['work_experience_id'] ?>">
                                <input id="" class="form-control" type="date"
                                name="wwork_from[]"
                                value="<?php echo $work['work_from'] ?>">
                            </td>
                            <td><input id="" class="form-control" type="date" name="wwork_to[]"
                                value="<?php echo $work['work_to'] ?>">
                            </td>
                            <td><input id="" class="form-control" type="text"
                                name="wposition_title[]"
                                value="<?php echo $work['position_title'] ?>"></td>
                                <td><input id="" class="form-control" type="text"
                                    name="wdepartment_agency[]"
                                    value="<?php echo $work['department_agency'] ?>"></td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                    <table class="table table-light tbl-workexperiences2">
                        <thead class="thead-light">
                            <tr>

                                <th>Monthly Salary</th>
                                <th>SALARY/JOB/PAY GRADE (if applicable) & STEP (Format "00-0")/
                                INCREMENT</th>
                                <th>STATUS OF APPOINTMENT</th>
                                <th>GOV'T SERVICE (Y/N)</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            require('db_config.php');
                            $id = $_GET['edit'];

                            $sql = "SELECT * FROM tbl_work_experience WHERE employee_id='$id'";
                            $works = $mysqli->query($sql);
                            while($work = $works->fetch_assoc()){
                                ?>
                                <tr>
                                    <td><input id="" class="form-control" type="text"
                                        name="wmonthly_salary[]"
                                        value="<?php echo $work['monthly_salary'] ?>"></td>
                                        <td><input id="" class="form-control" type="text"
                                            name="wsalary_job_step[]"
                                            value="<?php echo $work['salary_job_step'] ?>"></td>
                                            <td><input id="" class="form-control" type="text"
                                                name="wstatus_appointment[]"
                                                value="<?php echo $work['status_appointment'] ?>"></td>
                                                <td><input id="" class="form-control" type="text"
                                                    name="wgovernment_service_y_n[]"
                                                    value="<?php echo $work['government_service_y_n'] ?>"></td>
                                                    <td></td>
                                                </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                    <div class="col-md-12 mb-3 d-flex align-items-center justify-content-center">
                                        <button class="btn btn-secondary btn-sm mr-2" type="button" name="add_item"
                                        onClick="addWE();">Add More</button>
                                        <button class="btn btn-danger btn-sm border-radius-0" type="button"
                                        name="del_item" onClick="deleteWE();">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default mt-1">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="btn-block" data-toggle="collapse" data-parent="#accordion"
                                    href="#volu-work-involv">
                                    Voluntary Work or Involvement in Civic / Non-Government / People /
                                    Voluntary
                                Organization/s</a>
                            </h4>
                        </div>
                        <div id="volu-work-involv" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table class="table table-light tbl-volutarywork">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>NAME & ADDRESS OF ORGANIZATION <br> (Write in full)</th>
                                            <th>INCLUSIVE DATES <br> (mm/dd/yyyy) <br> From</th>
                                            <th>To</th>
                                            <th>Number of Hours</th>
                                            <th>POSITION / NATURE OF WORK</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        require('db_config.php');
                                        $id = $_GET['edit'];

                                        $sql = "SELECT * FROM tbl_voluntary_work WHERE employee_id='$id'";
                                        $vols = $mysqli->query($sql);
                                        while($vol = $vols->fetch_assoc()){
                                            ?>
                                            <tr>
                                                <td>
                                                    <input id="" class="form-control" type="hidden"  name="voluntary_work_id[]" value="<?php echo $vol['voluntary_work_id'] ?>">
                                                    <input id="" class="form-control" type="text"
                                                    name="vname_address[]"
                                                    value="<?php echo $vol['name_address'] ?>"></td>
                                                    <td><input id="" class="form-control" type="date"
                                                        name="vvoluntary_from[]"
                                                        value="<?php echo $vol['voluntary_from'] ?>"></td>
                                                        <td><input id="" class="form-control" type="date"
                                                            name="vvoluntary_to[]"
                                                            value="<?php echo $vol['voluntary_to'] ?>"></td>
                                                            <td><input id="" class="form-control" type="text"
                                                                name="vno_of_hours[]"
                                                                value="<?php echo $vol['no_of_hours'] ?>"></td>
                                                                <td><input id="" class="form-control" type="text"
                                                                    name="vposition_nature_of_work[]"
                                                                    value="<?php echo $vol['position_nature_of_work'] ?>"></td>
                                                                    <td><input type="checkbox" name="training_index[]" /></td>
                                                                </tr>
                                                            <?php } ?>

                                                        </tbody>
                                                    </table>
                                                    <div class="col-md-12 mb-3 d-flex align-items-center justify-content-center">
                                                        <button class="btn btn-secondary btn-sm mr-2" type="button" name="add_item"
                                                        onClick="addVW();">Add More</button>
                                                        <button class="btn btn-danger btn-sm border-radius-0" type="button"
                                                        name="del_item" onClick="deleteVW();">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default mt-1">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="btn-block" data-toggle="collapse" data-parent="#accordion"
                                                    href="#learning-and-dev">
                                                    Learning and Development (L&D) Interventions/Training Programs
                                                Attended</a>
                                            </h4>
                                        </div>
                                        <div id="learning-and-dev" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <small class="ml-2">(Start from the most recent L & D/Training taken for the
                                                    last five (5)
                                                years for Division Chief/Executive/Management positions)</small>
                                                <table class="table table-light tbl-training">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>TITLE OF LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING
                                                                PROGRAMS
                                                                <br> (Write in full)</th>
                                                                <th>INCLUSIVE DATES OF ATTENDANCE <br> (mm/dd/yyyy) <br> From
                                                                </th>
                                                                <th>To</th>
                                                                <th>Number of Hours</th>
                                                                <th>Type of LD (Managerial / Supervisory / Technical/etc)</th>
                                                                <th>CONDUCTED/ SPONSORED BY <br> (Write in full)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <?php
                                                            require('db_config.php');
                                                            $id = $_GET['edit'];

                                                            $sql = "SELECT * FROM tbl_training WHERE employee_id='$id'";
                                                            $trains = $mysqli->query($sql);
                                                            while($train = $trains->fetch_assoc()){
                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <input id="" class="form-control" type="hidden" name="training_id[]" value="<?php echo $train['training_id'] ?>">

                                                                        <input id="" class="form-control" type="text" name="ttitle[]"
                                                                        value="<?php echo $train['title'] ?>">
                                                                    </td>
                                                                    <td><input id="" class="form-control" type="date" name="tatt_from[]"
                                                                        value="<?php echo $train['att_from'] ?>">
                                                                    </td>
                                                                    <td><input id="" class="form-control" type="date" name="tatt_to[]"
                                                                        value="<?php echo $train['att_to'] ?>">
                                                                    </td>
                                                                    <td><input id="" class="form-control" type="number"
                                                                        name="tno_hours[]" value="<?php echo $train['no_hours'] ?>">
                                                                    </td>
                                                                    <td><input id="" class="form-control" type="text"
                                                                        name="ttype_of_ld[]"
                                                                        value="<?php echo $train['type_of_ld'] ?>">
                                                                    </td>
                                                                    <td><input id="" class="form-control" type="text"
                                                                        name="tconducted_by[]"
                                                                        value="<?php echo $train['conducted_by'] ?>">
                                                                    </td>
                                                                </td>
                                                                <td><input type="checkbox" name="vw_index[]" /></td>
                                                            </tr>
                                                        <?php } ?>

                                                    </tbody>
                                                </table>
                                                <div class="col-md-12 mb-3 d-flex align-items-center justify-content-center">
                                                    <button class="btn btn-secondary btn-sm mr-2" type="button" name="add_item"
                                                    onClick="addTraining();">Add More</button>
                                                    <button class="btn btn-danger btn-sm border-radius-0" type="button"
                                                    name="del_item" onClick="deleteTraining();">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default mt-1">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="btn-block" data-toggle="collapse" data-parent="#accordion"
                                                href="#other-info">
                                            Other Information</a>
                                        </h4>
                                    </div>
                                    <div id="other-info" class="panel-collapse collapse">
                                        <div class="panel-body d-flex allign-items-center flex-wrap">

                                            <table class="table table-light tbl-skills">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>SPECIAL SKILLS and HOBBIES</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    require('db_config.php');
                                                    $id = $_GET['edit'];

                                                    $sql = "SELECT * FROM tbl_skills_hobbies WHERE employee_id='$id'";
                                                    $skills = $mysqli->query($sql);
                                                    while($skill = $skills->fetch_assoc()){
                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <input id="" class="form-control" type="hidden"
                                                                name="skills_hobbies_id[]"
                                                                value="<?php echo $skill['skills_hobbies_id'] ?>">

                                                                <input id="" class="form-control" type="text"
                                                                name="special_skills_hobbies[]"
                                                                value="<?php echo $skill['special_skills_hobbies'] ?>"></td>
                                                                <td><input type="checkbox" name="skills_index[]" /></td>
                                                                <td></td>
                                                            </tr>
                                                        <?php } ?>

                                                    </tbody>
                                                </table>

                                                <div class="col-md-12 mb-3 d-flex align-items-center justify-content-center">
                                                    <button class="btn btn-secondary btn-sm mr-2" type="button" name="add_item"
                                                    onClick="addSkills();">Add More</button>
                                                    <button class="btn btn-danger btn-sm border-radius-0" type="button"
                                                    name="del_item" onClick="deleteSkills();">Delete</button>
                                                </div>
                                                <hr class="w-100">
                                                <table class="table table-light tbl-academic">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>NON-ACADEMIC DISTINCTIONS / RECOGNITION <br> (Write in full)
                                                            </th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php
                                                        require('db_config.php');
                                                        $id = $_GET['edit'];

                                                        $sql = "SELECT * FROM tbl_recog WHERE employee_id='$id'";
                                                        $acads = $mysqli->query($sql);
                                                        while($acad = $acads->fetch_assoc()){
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <input id="" class="form-control" type="hidden"
                                                                    name="distinction_recog_id[]"
                                                                    value="<?php echo $acad['distinction_recog_id'] ?>">


                                                                    <input id="" class="form-control" type="text"
                                                                    name="non_academic_distinctions[]"
                                                                    value="<?php echo $acad['non_academic_distinctions'] ?>">
                                                                </td>
                                                                <td><input type="checkbox" name="academic_index[]" /></td>
                                                            </tr>
                                                        <?php } ?>

                                                    </tbody>
                                                </table>
                                                <div class="col-md-12 mb-3 d-flex align-items-center justify-content-center">
                                                    <button class="btn btn-secondary btn-sm mr-2" type="button" name="add_item"
                                                    onClick="addAcademic();">Add More</button>
                                                    <button class="btn btn-danger btn-sm border-radius-0" type="button"
                                                    name="del_item" onClick="deleteAcademic();">Delete</button>
                                                </div>
                                                <hr class="w-100">

                                                <table class="table table-light tbl-membership">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>MEMBERSHIP IN ASSOCIATION / ORGANIZATION <br> (Write in
                                                                full)
                                                            </th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php
                                                        require('db_config.php');
                                                        $id = $_GET['edit'];

                                                        $sql = "SELECT * FROM tbl_membership WHERE employee_id='$id'";
                                                        $mems = $mysqli->query($sql);
                                                        while($mem = $mems->fetch_assoc()){
                                                            ?>

                                                            <tr>
                                                                <td>
                                                                    <input id="" class="form-control" type="hidden"
                                                                    name="assoc_org_id[]"
                                                                    value="<?php echo $mem['assoc_org_id'] ?>">

                                                                    <input id="" class="form-control" type="text" `
                                                                    name="membership_asso_organization[]"
                                                                    value="<?php echo $mem['membership_asso_organization'] ?>">
                                                                </td>
                                                                <td><input type="checkbox" name="membership_index[]" /></td>
                                                                <td></td>
                                                            </tr>
                                                        <?php } ?>

                                                    </tbody>
                                                </table>
                                                <div class="col-md-12 mb-3 d-flex align-items-center justify-content-center">
                                                    <button class="btn btn-secondary btn-sm mr-2" type="button" name="add_item"
                                                    onClick="addMembership();">Add More</button>
                                                    <button class="btn btn-danger btn-sm border-radius-0" type="button"
                                                    name="del_item" onClick="deleteMembership();">Delete</button>
                                                </div>
                                                <hr class="w-100">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default mt-1">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="btn-block" data-toggle="collapse" data-parent="#accordion"
                                                href="#futher-question">
                                            Additional Questions</a>
                                        </h4>
                                    </div>
                                    <div id="futher-question" class="panel-collapse collapse">
                                        <div class="panel-body d-flex allign-items-center flex-wrap">
                                            <div class="row">
                                                <div class="col-md-12 m-2">
                                                    <small>Are you related by consanguinity or affinity to the
                                                        appointing or
                                                        recommending authority, or to the
                                                        chief of bureau or office or to the person who has immediate
                                                        supervision
                                                        over you in the Office,
                                                        Bureau or Department where you will be apppointed,
                                                    </small>
                                                </div>
                                                <div class="col-md-12 m-2 d-flex flex-wrap justify-content-between">
                                                    <div class="col-md-6">
                                                        <small>a. within the third degree?</small>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check d-flex align-items-center">
                                                            <div class="mr-5">
                                                                <input id="my-input" class="form-check-input" type="radio"
                                                                name="question_34_a" value="YES"
                                                                <?php echo $question_34_ay; ?>>
                                                                <label for="my-input" class="form-check-label">YES</label>
                                                            </div>
                                                            <div class="div">
                                                                <input id="my-input" class="form-check-input" type="radio"
                                                                name="question_34_a" value="NO"
                                                                <?php echo $question_34_an; ?>>
                                                                <label for="my-input" class="form-check-label">NO</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 m-2 d-flex flex-wrap justify-content-between">
                                                    <div class="col-md-6">
                                                        <small> b. within the fourth degree (for Local Government Unit -
                                                            Career
                                                        Employees)?</small>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check d-flex align-items-center">
                                                            <div class="mr-5">
                                                                <input id="my-input" class="form-check-input" type="radio"
                                                                name="question_34_b" value="YES"
                                                                <?php echo $question_34_by; ?>>
                                                                <label for="my-input" class="form-check-label">YES</label>
                                                            </div>
                                                            <div class="div">
                                                                <input id="my-input" class="form-check-input" type="radio"
                                                                name="question_34_b" value="NO"
                                                                <?php echo $question_34_bn; ?>>
                                                                <label for="my-input" class="form-check-label">NO</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <label for="my-input">if YES, give details</label>
                                                            <input id="" class="form-control" type="text"
                                                            name="yes_details_34_b"
                                                            value="<?php echo $yes_details_34_b; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="w-100">

                                            <div class="row">
                                                <div class="col-md-12 m-2 d-flex flex-wrap justify-content-between">
                                                    <div class="col-md-6">
                                                        <small>a. Have you ever been found guilty of any administrative
                                                        offense?</small>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check d-flex align-items-center">
                                                            <div class="mr-5">
                                                                <input id="my-input" class="form-check-input" type="radio"
                                                                name="question_35_a" value="YES"
                                                                <?php echo $question_35_ay; ?>>
                                                                <label for="my-input" class="form-check-label">YES</label>
                                                            </div>
                                                            <div class="div">
                                                                <input id="my-input" class="form-check-input" type="radio"
                                                                name="question_35_a" value="NO"
                                                                <?php echo $question_35_an; ?>>
                                                                <label for="my-input" class="form-check-label">NO</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <label for="my-input">if YES, give details</label>
                                                            <input id="" class="form-control" type="text"
                                                            name="yes_details_35_a"
                                                            value="<?php echo $yes_details_35_a; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 m-2 d-flex flex-wrap justify-content-between">
                                                    <div class="col-md-6">
                                                        <small> b. Have you been criminally charged before any
                                                        court?</small>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check d-flex align-items-center">
                                                            <div class="mr-5">
                                                                <input id="my-input" class="form-check-input" type="radio"
                                                                name="question_35_b" value="YES"
                                                                <?php echo $question_35_by; ?>>
                                                                <label for="my-input" class="form-check-label">YES</label>
                                                            </div>
                                                            <div class="div">
                                                                <input id="my-input" class="form-check-input" type="radio"
                                                                name="question_35_b" value="NO"
                                                                <?php echo $question_35_bn; ?>>
                                                                <label for="my-input" class="form-check-label">NO</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <label for="my-input">if YES, give details</label>
                                                            <label for="my-input">Date Field:</label>
                                                            <input id="" class="form-control" type="date"
                                                            name="question_35_b_datefiled"
                                                            value="<?php echo $question_35_b_datefiled; ?>">
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <label for="my-input">Status of Case/s:</label>
                                                            <input id="" class="form-control" type="text"
                                                            name="status_cases_35_b"
                                                            value=" <?php echo $status_cases_35_b; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="w-100">

                                            <div class="row">
                                                <div class="col-md-12 m-2 d-flex flex-wrap justify-content-between">
                                                    <div class="col-md-6">
                                                        <small>Have you ever been convicted of any crime or violation of
                                                            any
                                                            law, decree, ordinance or regulation by any court or
                                                        tribunal?</small>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check d-flex align-items-center">
                                                            <div class="mr-5">
                                                                <input id="my-input" class="form-check-input" type="radio"
                                                                name="question_36" value="YES"
                                                                <?php echo $question_36y; ?>>
                                                                <label for="my-input" class="form-check-label">YES</label>
                                                            </div>
                                                            <div class="div">
                                                                <input id="my-input" class="form-check-input" type="radio"
                                                                name="question_36" value="NO"
                                                                <?php echo $question_36n; ?>>
                                                                <label for="my-input" class="form-check-label">NO</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <label for="my-input">if YES, give details</label>
                                                            <input id="" class="form-control" type="text"
                                                            name="yes_details_36"
                                                            value=" <?php echo $yes_details_36; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="w-100">
                                                <div class="col-md-12 m-2 d-flex flex-wrap justify-content-between">
                                                    <div class="col-md-6">
                                                        <small> Have you ever been separated from the service in any of
                                                            the
                                                            following modes: resignation, retirement, dropped from the
                                                            rolls,
                                                            dismissal, termination, end of term, finished contract or
                                                            phased out
                                                        (abolition) in the public or private sector? </small>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check d-flex align-items-center">
                                                            <div class="mr-5">
                                                                <input id="my-input" class="form-check-input" type="radio"
                                                                name="question_37" value="YES"
                                                                <?php echo $question_37y; ?>>
                                                                <label for="my-input" class="form-check-label">YES</label>
                                                            </div>
                                                            <div class="div">
                                                                <input id="my-input" class="form-check-input" type="radio"
                                                                name="question_37" value="NO"
                                                                <?php echo $question_37n; ?>>
                                                                <label for="my-input" class="form-check-label">NO</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <label for="my-input">if YES, give details</label>
                                                            <input id="" class="form-control" type="text"
                                                            name="yes_details_37"
                                                            value="<?php echo $yes_details_37; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="w-100">
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 m-2 d-flex flex-wrap justify-content-between">
                                                    <div class="col-md-6">
                                                        <small>a. Have you ever been a candidate in a national or local
                                                            election
                                                            held within the last year (except Barangay
                                                        election)?</small>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check d-flex align-items-center">
                                                            <div class="mr-5">
                                                                <input id="my-input" class="form-check-input" type="radio"
                                                                name="question_38_a" value="YES"
                                                                <?php echo $question_38_ay; ?>>
                                                                <label for="my-input" class="form-check-label">YES</label>
                                                            </div>
                                                            <div class="div">
                                                                <input id="my-input" class="form-check-input" type="radio"
                                                                name="question_38_a" value="NO"
                                                                <?php echo $question_38_an; ?>>
                                                                <label for="my-input" class="form-check-label">NO</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <label for="my-input">if YES, give details</label>
                                                            <input id="" class="form-control" type="text"
                                                            name="yes_details_38_a"
                                                            value="<?php echo $yes_details_38_a; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 m-2 d-flex flex-wrap justify-content-between">
                                                    <div class="col-md-6">
                                                        <small> b. Have you resigned from the government service during
                                                            the
                                                            three (3)-month period before the last election to
                                                            promote/actively
                                                        campaign for a national or local candidate?</small>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check d-flex align-items-center">
                                                            <div class="mr-5">
                                                                <input id="my-input" class="form-check-input" type="radio"
                                                                name="question_38_b" value="YES"
                                                                <?php echo $question_38_by; ?>>
                                                                <label for="my-input" class="form-check-label">YES</label>
                                                            </div>
                                                            <div class="div">
                                                                <input id="my-input" class="form-check-input" type="radio"
                                                                name="question_38_b" value="NO"
                                                                <?php echo $question_38_bn; ?>>
                                                                <label for="my-input" class="form-check-label">NO</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <label for="my-input">if YES, give details</label>
                                                            <input id="" class="form-control" type="text"
                                                            name="yes_details_38_b"
                                                            value="  <?php echo $yes_details_38_b; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="w-100">
                                            <div class="row">
                                                <div class="col-md-12 m-2 d-flex flex-wrap justify-content-between">
                                                    <div class="col-md-6">
                                                        <small>Have you acquired the status of an immigrant or permanent
                                                        resident of another country?</small>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check d-flex align-items-center">
                                                            <div class="mr-5">
                                                                <input id="my-input" class="form-check-input" type="radio"
                                                                name="question_39" value="YES"
                                                                <?php echo $question_39y; ?>>
                                                                <label for="my-input" class="form-check-label">YES</label>
                                                            </div>
                                                            <div class="div">
                                                                <input id="my-input" class="form-check-input" type="radio"
                                                                name="question_39" value="NO"
                                                                <?php echo $question_39n; ?>>
                                                                <label for="my-input" class="form-check-label">NO</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <label for="my-input">if YES, give details (country)</label>
                                                            <input id="" class="form-control" type="text"
                                                            name="yes_details_39"
                                                            value=" <?php echo $yes_details_39; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="w-100">
                                                <div class="col-md-12 m-2 d-flex flex-wrap justify-content-between">
                                                    <div class="col-md-12">
                                                        <small>Pursuant to: (a) Indigenous People's Act (RA 8371); (b)
                                                            Magna
                                                            Carta for Disabled Persons (RA 7277); and (c) Solo Parents
                                                            Welfare
                                                            Act of 2000 (RA 8972), please answer the following
                                                        items:</small>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <small>Are you a member of any indigenous group?</small>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check d-flex align-items-center">
                                                            <div class="mr-5">
                                                                <input id="my-input" class="form-check-input" type="radio"
                                                                name="question_40_a" value="YES"
                                                                <?php echo $question_40_ay; ?>>
                                                                <label for="my-input" class="form-check-label">YES</label>
                                                            </div>
                                                            <div class="div">
                                                                <input id="my-input" class="form-check-input" type="radio"
                                                                name="question_40_a" value="NO"
                                                                <?php echo $question_40_an; ?>>
                                                                <label for="my-input" class="form-check-label">NO</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <label for="my-input">if YES, please specify</label>
                                                            <input id="" class="form-control" type="text"
                                                            name="a_yes_details_40"
                                                            value="<?php echo $a_yes_details_40; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 m-2 d-flex flex-wrap justify-content-between">
                                                    <div class="col-md-6">
                                                        <small>Are you a person with disability?</small>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check d-flex align-items-center">
                                                            <div class="mr-5">
                                                                <input id="my-input" class="form-check-input" type="radio"
                                                                name="question_40_b" value="YES"
                                                                <?php echo $question_40_by; ?>>
                                                                <label for="my-input" class="form-check-label">YES</label>
                                                            </div>
                                                            <div class="div">
                                                                <input id="my-input" class="form-check-input" type="radio"
                                                                name="question_40_b" value="NO"
                                                                <?php echo $question_40_bn; ?>>
                                                                <label for="my-input" class="form-check-label">NO</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <label for="my-input">if YES, please specify ID No.</label>
                                                            <input id="" class="form-control" type="text"
                                                            name="b_yes_details_b"
                                                            value=" <?php echo $b_yes_details_b; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 m-2 d-flex flex-wrap justify-content-between">
                                                    <div class="col-md-6">
                                                        <small>Are you a solo parent?</small>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check d-flex align-items-center">
                                                            <div class="mr-5">
                                                                <input id="my-input" class="form-check-input" type="radio"
                                                                name="question_40_c" value="YES"
                                                                <?php echo $question_40_cy; ?>>
                                                                <label for="my-input" class="form-check-label">YES</label>
                                                            </div>
                                                            <div class="div">
                                                                <input id="my-input" class="form-check-input" type="radio"
                                                                name="question_40_c" value="NO"
                                                                <?php echo $question_40_cn; ?>>
                                                                <label for="my-input" class="form-check-label">NO</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <label for="my-input">if YES, please specify ID No.</label>
                                                            <input id="" class="form-control" type="text"
                                                            name="c_yes_details_c"
                                                            value=" <?php echo $c_yes_details_c; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="panel panel-default mt-1">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="btn-block" data-toggle="collapse" data-parent="#accordion"
                                            href="#references">
                                        REFERENCES</a>
                                    </h4>
                                </div>
                                <div id="references" class="panel-collapse collapse">
                                    <div class="panel-body d-flex allign-items-center flex-wrap">
                                        <small class="ml-2">(Person not related by consanguinity or affinity to
                                        applicant/appointee)</small>
                                        <table class="table table-light tbl-reference">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>NAME</th>
                                                    <th>ADDRESS</th>
                                                    <th>TEL. NO.</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                require('db_config.php');
                                                $id = $_GET['edit'];

                                                $sql = "SELECT * FROM tbl_references WHERE employee_id='$id'";
                                                $refs = $mysqli->query($sql);
                                                while($ref = $refs->fetch_assoc()){
                                                    ?>
                                                    <tr>
                                                        <td><input id="" class="form-control" type="text" name="ref_name[]"
                                                            value="<?php echo $ref['ref_name'] ?>">
                                                        </td>
                                                        <td><input id="" class="form-control" type="text"
                                                            name="ref_address[]"
                                                            value="<?php echo $ref['ref_address'] ?>"></td>
                                                            <td><input id="" class="form-control" type="text"
                                                                name="ref_tel_no[]"
                                                                value="<?php echo $ref['ref_tel_no'] ?>">
                                                            </td>
                                                            <td><input type="checkbox" name="reference_index[]" /></td>
                                                        </tr>
                                                    <?php } ?>

                                                </tbody>
                                            </table>
                                            <div class="col-md-12 mb-3 d-flex align-items-center justify-content-center">
                                                <button class="btn btn-secondary btn-sm mr-2" type="button" name="add_item"
                                                onClick="addReference();">Add More</button>
                                                <button class="btn btn-danger btn-sm border-radius-0" type="button"
                                                name="del_item" onClick="deleteReference();">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default mt-1">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="btn-block" data-toggle="collapse" data-parent="#accordion"
                                            href="#govid">
                                        Government Issued ID</a>
                                    </h4>
                                </div>
                                <div id="govid" class="panel-collapse collapse">
                                    <div class="panel-body d-flex allign-items-center flex-wrap">
                                        <div class="col-md-12">
                                            <small>(i,e Passport, GSIS, SSS, PRC, Driver's License, etc.) <br>
                                                <b>PLEASE
                                                    <i>INDICATE ID Number and DATE of Issuance</i> </b></small>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="my-input">Government Issued ID: </label>
                                                        <input id="my-input" class="form-control" type="text" name="gov_id"
                                                        value="<?php echo $ggov_id; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="my-input">ID/License/Passport No.:</label>
                                                        <input id="my-input" class="form-control" type="text" name="id_no"
                                                        value="<?php echo $gid_no; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="my-input">Date/Place of Issuance:</label>
                                                        <input id="my-input" class="form-control" type="text"
                                                        name="date_place_issuance"
                                                        value="<?php echo $gdate_place_issuance; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <div class=" btn-wrapper d-flex align-items-center justify-content-center">
                                        <button class="btn-app btn btn-primary mx-2 col-sm-2" type="Submit"
                                        name="pbutton">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php include '../template/footer.php';?>
        </main>