
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );

if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from films where f_id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="films deleted !!";
		  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Manage Movies</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div class="span9" style="width:100%">
					<div class="content">

	<div class="module">
							<div class="module-head">
								<h3>Manage films</h3>
							</div>
							<div class="module-body table">
	<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

							
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											
											<th>film Name</th>
											<th>film date </th>
											<th>langues</th>
											<th>country</th>
											<th>type name</th>
                                            <th>class</th>
                                            <th>quality</th>
                                            <th>publisher date</th>
                                            <th>translate</th>
                                            <th>story</th>
                                            <th>peroid</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

<?php $query=mysqli_query($con,"SELECT f_id, f_name, f_date, lang, country, type_name, class, qua, pub_date, trans, story, peroid, image FROM films,type WHERE films.type_id=type.type_id ");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>
											
											<td><?php echo htmlentities($row['f_name']);?></td>
											<td><?php echo htmlentities($row['f_date']);?></td>
											<td> <?php echo htmlentities($row['lang']);?></td>
											<td><?php echo htmlentities($row['country']);?></td>
											<td><?php echo htmlentities($row['type_name']);?></td>
                                            <td><?php echo htmlentities($row['class']);?></td>
											<td><?php echo htmlentities($row['qua']);?></td>
											<td> <?php echo htmlentities($row['pub_date']);?></td>
											<td><?php echo htmlentities($row['trans']);?></td>
											<td><?php echo htmlentities($row['story']);?></td>
                                            <td><?php echo htmlentities($row['peroid']);?></td>

											<td>
											<a href="manageMovies.php?id=<?php echo $row['f_id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><i class="icon-remove-sign"></i></a></td>
										</tr>
										<?php  } ?>
										
								</table>
							</div>
						</div>						

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php include('include/footer.php');?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>
<?php } ?>