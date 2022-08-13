<?php
	include("connection.php");
	$action=$_REQUEST['action'];
	$stu_id=$_REQUEST['stu_id'];
	if($action=="show")
	{
		$sql="SELECT `student_id`,`student_name`,`student_address`,`semister`,`stu_cgpa` FROM `student_info` WHERE `student_id`='".$stu_id."'";
		$qry=mysqli_query($con,$sql);
		$result=$qry->fetch_object();
		print $result->student_id."#".$result->student_name."#".$result->semister."#".$result->stu_cgpa."#".$result->student_address;
	}
	if($action=="update")
	{
		$stu_name=$_REQUEST['stu_name'];
		$stu_sem=$_REQUEST['stu_sem'];
		$stu_cgpa=$_REQUEST['stu_cgpa'];
		$stu_address=$_REQUEST['stu_address'];
		$sql="UPDATE `student_info` SET `student_name`='".$stu_name."',`student_address`='".$stu_address."',`semister`='".$stu_sem."',`stu_cgpa`='".$stu_cgpa."' WHERE `student_id`='".$stu_id."'";
		$result=mysqli_query($con,$sql);
		print ($result==1)?"Update successfull..":"Update failed!";
	}
?>