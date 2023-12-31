<?php
/****************************************************
****   Advanced Data Manager
****   Designed by: Tom Moore
****   Written by: Tom Moore
****   (c) 2001 - 2021 TEEMOR eBusiness Solutions
****************************************************/
    include "tmp/header.php";

// Grab action
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else {
    $action = '';
}
//*******************************************************
//*******************  MAIN FORM  ***********************
//*******************************************************
function main_form() {
global $PHP_SELF, $mysqli, $msg, $notice, $notice_header, $notice_body;
global $system_tablename, $sysid, $president , $vice, $treasurer, $secretary, $directorafrica, $deanedu, $corecourses, $followers, $facebook, $twitter, $youtube, $linkedin, $info, $updatedate, $cookietime, $sysadminver, $verdate, $releasenotes, $goalamt, $curgoal;
global $menuid, $goal, $current, $pct, $userid;
global $enrollments_tablename, $enrollid, $euserid , $eprogid, $ecourseid, $examscore, $passed, $compdate, $rating;
global $courses_tablename, $courseid, $cprogid , $coursecode, $coursename, $coursedesc, $overview, $credits, $filename, $validcourse, $brief_desc, $course_photo, $course_cost, $course_discount, $hours, $videos, $cont_one, $cont_one_desc, $cont_two, $cont_two_desc, $cont_three, $cont_three_desc, $head_photo, $top_course;
    
dbconnect();
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}

information_modal();
$menuid = 3;
    
if(!empty($_SESSION['userid'])){
    $userid = $_SESSION['userid'];
}

testadmin();

$id = $_GET['id'];

?>
<div class="height-100">
    <br>
    <div id="boxed">
        <p class="text-center"><span style="font-size: 32px;">Enrollment Into <?php echo $id; ?></span></p>
                
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <p>HOLD</p>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

    <div id="boxed" style="margin-bottom: 50px;">&nbsp;</div>
</div>
<?php
include "tmp/footer.php";
}

//*******************************************************
//**********************  SWITCH  ***********************
//*******************************************************
function goto_course(){
    $coursename = $_GET['coursename'];

    echo "coursename: ".$coursename."<br>";
    exit;
}

//*******************************************************
//**********************  SWITCH  ***********************
//*******************************************************
switch($action) {
    case "completed":
        goto_course();
    break;
	default:
		main_form();
	break;
}
?>