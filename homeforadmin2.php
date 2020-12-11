

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />

  	<style>
  		.float-container {
	    
	    padding: 20px;
		}

		.float-child {
		    width: 33%;
		    float: left;
		    padding: 20px;
		    
		}  
		
  		h2{
  			margin-left: 7%;
  			margin-top: 2%;
  		}
  		
  		
  		table{
  			
  			background-color: #fff;
  			margin-left:  2%;
  			 border-radius: 10px;
  		}

  		.tdclass3{
  			border:1px solid #f2f2f2;
  			padding: 2px 15px;
  			text-align: center;
  			color: grey;
  		}
  		.tdclass2{
  			border:1px solid #f2f2f2;
  			padding: 2px 42px;
  			text-align: center;
  			color: grey;
  		}
  		.tdclass1{
  			border:1px solid #f2f2f2;
  			padding: 2px 15px;
  			text-align: center;
  			color: grey;
  		}*/
  		
  		th{
  			text-transform: uppercase;
  			font-weight: 500;
  		}
  		.fa{
  			font-size: 18px;
  		}
  		.fa-edit{
  			color:#63c76a;
  		}
  		.fa-trash{
  			color:#ff0000;
  		}
  		#table2{
  			background-color: #fff;
  			
  			margin-bottom: 5%;
  			 border-radius: 10px;
  		}
  		.center-div1{
  			
  			
  			padding: 20px 0 0 0 ;

  		}
  		#table3{
  			
  			margin-left: 2%;
  		}
  		.tdclass{
  			padding: 2px 30px;
  		}

  	</style>

</head>
<body style="background: -webkit-linear-gradient(left,#5DADE2,#00c6ff);">


	
	  	<div class="row">
	  		<a href="homeforadmin3.php" class="btn btn-danger ml-5 mb-5 mt-4" role="button">back </a>
	  	   	<a href="mainhome.php" class="btn btn-danger  ml-5 mb-5 mt-4" role="button">logout.</a>
	  	</div>
	
<div class="float-container ">
<h2><pre>Questions data                     userdata                        Answer data</pre></h2>
	<div class="center-div float-child ">
		<div class="table-responsive 1">
			<table>
				<thead>
					<tr>
						<th class="tdclass1">qid</th>
						<th class="tdclass1">question</th>
						<th class="tdclass1">ans_id</th>
						<th colspan="2" class="tdclass1" >operation</th>
					</tr>
				</thead>
				<tbody>
					<?php
						session_start();
						$con=mysqli_connect('localhost','root');mysqli_select_db($con,'quizproject');


						$selectquery="select * from question";
						$q=mysqli_query($con,$selectquery);
						$nums=mysqli_num_rows($q);
							#echo $nums;

						while ($res=mysqli_fetch_array($q)) {
					?>		
					<tr >
						<td class="tdclass1"><?php echo $res['qid']; ?></td>
						<td class="tdclass1"><?php echo $res['question']; ?></td>
						<td class="tdclass1"><?php echo $res['ans_id']; ?></td>
						<td class="tdclass1"><a href="homeforadmin4.php?id=<?php echo $res['qid']; ?>" data-toggle="tooltip" data-placement="top" title="UPDATE"><i class="fa fa-edit fa-lg"></i></a></td>
						<td class="tdclass1"><a href="homeforadmin6.php?idth=<?php echo $res['qid']; ?>" data-toggle="tooltip" data-placement="top" title="DELETE"><i class="fa fa-trash fa-lg"></i></a></td>
					</tr>
						<?php } ?>
				</tbody>
			</table>
		</div>
	</div>

	<div>
		<div class="float-child">
			<div class="table-responsive 2">
					<table id="table3">
						<thead>
							<tr>
								<th class="tdclass2">Sr. No</th>
							
								<th class="tdclass2">username</th>
								
								<th class="tdclass2">result</th>
								
							</tr>
						</thead>
						<tbody>
							<?php
								
								$con=mysqli_connect('localhost','root');
								mysqli_select_db($con,'Quizproject1');


								$selectquery="select * from user";
								$q=mysqli_query($con,$selectquery);
								$nums=mysqli_num_rows($q);
									#echo $nums;

								while ($res=mysqli_fetch_array($q)) {
							?>		
							<tr>
								<td class="tdclass2"><?php echo $res['uid']; ?></td>
								<td class="tdclass2"><?php echo $res['username']; ?></td>
								
								<td class="tdclass2"><?php echo $res['answerscorrect']; ?></td>
								
							</tr>
								<?php } ?>
						</tbody>
					</table>
		</div>
	</div>

	
	
	<div class="center-div1 float-child">
		<div class="table-responsive ">
			<table id="table2">
				<thead>
					<tr>
						<th class="tdclass3">aid</th>
						<th class="tdclass3">answer</th>
						<th class="tdclass3">ans_id</th>
						<th colspan="2" class="tdclass3">operation</th>
					</tr>
				</thead>
				<tbody>
					<?php
						#session_start();
						$con=mysqli_connect('localhost','root');
						mysqli_select_db($con,'Quizproject1');


						$selectquery1="select * from answer";
						$q1=mysqli_query($con,$selectquery1);
						$nums1=mysqli_num_rows($q1);
							#echo $nums;

						while ($res=mysqli_fetch_array($q1)) {
					?>		
					<tr>
						<td class="tdclass3"><?php echo $res['aid']; ?></td>
						<td class="tdclass3"><?php echo $res['answer']; ?></td>
						<td class="tdclass3"><?php echo $res['ans_id']; ?></td>
						<td class="tdclass3"><a href="homeforadmin5.php?id=<?php echo $res['aid']; ?>" data-toggle="tooltip" data-placement="top" title="UPDATE"><i class="fa fa-edit fa-lg"></i></a></td>
						<td class="tdclass3"><a href="homeforadmin7.php?idth1=<?php echo $res['aid']; ?>" data-toggle="tooltip" data-placement="top" title="DELETE"><i class="fa fa-trash fa-lg"></i></a></td>
					</tr>
						<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
		
</div>


  	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>