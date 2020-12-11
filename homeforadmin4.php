<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body background="Quiz-bg.jpg">


	<div class="row">
	  		<a href="homeforadmin2.php" class="btn btn-danger ml-5 mb-5 mt-4" role="button">back </a>
	  	   	<a href="mainhome.php" class="btn btn-danger  ml-5 mb-5 mt-4" role="button">logout.</a>
	  	</div>

			<div class="col-lg-6 bg-secondary   " style="border-radius: 5px;margin-left: 25%;margin-top: 10%;">
				<h2 class="text-center p-2">Update data for questions.</h2>
					<form action="" method="POST">
						<div class="row pl-5">
							<?php

								#session_start();
								$con=mysqli_connect('localhost','root');
								mysqli_select_db($con,'quizproject');
								$ids=$_GET['id'];
								$showquery="select * from question where qid=$ids";
								$showdata=mysqli_query($con,$showquery);
								$arrdata=mysqli_fetch_array($showdata);


								if(isset($_POST['update']))
								{
									$qid=$_POST['qid'];
									$question=$_POST['question'];
									$que_ans_id=$_POST['que_ans_id'];

									$q="update question set qid=$qid,question='$question',ans_id='$que_ans_id' where qid=$ids";
									$res=mysqli_query($con,$q);
									/*if($res)
									{
										echo "success";
									}*/
									#header('location:homeforadmin4.php');
								}
								
							

							?>
 

								<div class="form-group">
									<label style="margin-left:40%;">qid</label>
									<input type="text" name="qid" value="<?php echo $arrdata['qid']; ?>" class="form-control">
								</div>
								<div class="form-group pl-2">
									<label style="margin-left:35%;">Question</label>
									<input type="text" name="question" value="<?php echo $arrdata['question']; ?>" class="form-control">
								</div>

								<div class="form-group pl-2">
									<label style="margin-left:30%;">answer id</label>
									<input type="text" name="que_ans_id" value="<?php echo $arrdata['ans_id']; ?>" class="form-control">
								</div>

						</div>
						<button type="submit" class="btn btn-light mb-3  " name="update" style="margin-left:40% ">UPDATE </button>
					</form>
			</div>

			

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>