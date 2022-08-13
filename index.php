<?php
	include("connection.php");
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script>
	function set_stu_data(stu_id)
	{
		$.post("ajax_data.php",{stu_id:stu_id,action:"show"},function(data){
			var split_value=data.split("#");
			$('#stu_name').val(split_value[1]);
			$('#stu_sem').val(split_value[2]);
			$('#stu_cgpa').val(split_value[3]);
			$('#stu_address').val(split_value[4]);
		});
	}
	
	$(function(){
		$("#stu_name,#stu_sem,#stu_cgpa,#stu_address").keyup(function(){
			var stu_id=$('#stu_id').val();
			if(stu_id!="select_one")
			{
				var stu_name=$('#stu_name').val();
				var stu_sem=$('#stu_sem').val();
				var stu_cgpa=$('#stu_cgpa').val();
				var stu_address=$('#stu_address').val();
				$.post("ajax_data.php",{stu_id:stu_id,stu_name:stu_name,stu_sem:stu_sem,stu_cgpa:stu_cgpa,stu_address:stu_address,action:"update"},function(data){
					$("#msg").text(data);
				});
			}
		});
	});
  </script>
</head>
<body>

<div class="container">
  <h2>Student Information</h2>
  <form role="form">
    <div class="form-group">
      <label for="email">Student ID:</label>
	  <select class="form-control" id="stu_id" onchange="set_stu_data(this.value)">
		<option value="select_one">Select ID</option>
		<?php
			$sql=mysqli_query($con,"SELECT `student_id` FROM `student_info`");
			while($result=$sql->fetch_object())
			{
		?>
		<option value="<?php echo $result->student_id;?>"><?php echo $result->student_id;?></option>
		<?php } ?>
	  </select>
    </div>
    <div class="form-group">
      <label for="pwd">Student Name:</label>
      <input type="text" class="form-control" id="stu_name" placeholder="Student Name">
    </div>
	 <div class="form-group">
      <label for="pwd">Semister:</label>
      <input type="text" class="form-control" id="stu_sem" placeholder="Semister">
    </div>
	 <div class="form-group">
      <label for="pwd">CGPA:</label>
      <input type="text" class="form-control" id="stu_cgpa" placeholder="CGPA">
    </div>
	 <div class="form-group">
      <label for="pwd">Address:</label>
      <input type="text" class="form-control" id="stu_address" placeholder="Address">
    </div>
	<div class="form-group">
      <label id="msg"></label>
    </div>
  </form>
</div>

</body>
</html>
