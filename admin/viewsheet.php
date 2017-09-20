<?php 
include('adminheader.php');
if (!empty($_GET) && $_GET['id'] != null){
    $id = $_GET['id'];
} else {
    header('Location: viewjobs.php'); 
}
?>
<?php
require_once('../includes/mysqli_connect.php');
            $query = "SELECT * FROM customer INNER JOIN job ON customer.customer_id = job.customer_id where job.job_id = '". $id ."'";
            $result = mysqli_query($dbc, $query);
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $custname = $row['cust_name'];
				$custcontactfname = $row['cust_contactfname'];
				$custcontactsname = $row['cust_contactsname'];
				$custcontactnum = $row['cust_contactnum'];
				
				$jobcontactfname = $row['job_contactfname'];
				$jobcontactsname = $row['job_contactsname'];
				$jobcontactnum = $row['job_contactnum'];
				
				$jobtype = $row['job_type'];
			    $jobaccess = $row['job_accessinfo'];
				
				$jobaddress1 = $row['job_address1'];
				$jobaddress2 = $row['job_address2'];
				$jobtown = $row['job_town'];
				$jobcounty = $row['job_county'];
				$jobpcode = $row['job_pcode'];
				
				$jobdate = $row['job_date'];
				$jobtime = $row['job_time'];
				
				$jobsummary = $row['job_summary'];
				$jobpaymeth = $row['job_paymentmeth'];
				
				
				
            }
?>	
<div class="container">
<div class="row">
  <div class="col-md-6">
  
  <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;Customer Details</h3>
  </div>
  <div class="panel-body">
  <p><strong>Customer:&nbsp;</strong><?php echo $custname?><br/>
  <strong>Contact Name:&nbsp;</strong><?php echo $custcontactfname?>&nbsp;<?php echo $custcontactsname?><br/>
  <strong>Contact #:&nbsp;</strong><?php echo $custcontactnum?></p>
  </div>  
	</div>

  <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Property Information</h3>
  </div>
  <div class="panel-body">
  <p><strong>Contact Name:&nbsp;</strong><?php echo $jobcontactfname?>&nbsp;<?php echo $jobcontactsname?><br/>
  <strong>Contact #:&nbsp;</strong><?php echo $jobcontactnum?><br/></p>
  
  <p><strong>Residential or Commercial:&nbsp;</strong><?php echo $jobtype?><br/>
  <strong>Access Information:&nbsp;</strong><?php echo $jobaccess?></p>
  
  <p><strong>Address 1:&nbsp;</strong><?php echo $jobaddress1?><br/>
  <strong>Address 2:&nbsp;</strong><?php echo $jobaddress2?><br/>
  <strong>Town:&nbsp;</strong><?php echo $jobtown?><br/>
  <strong>County:&nbsp;</strong><?php echo $jobcounty?><br/>
  <strong>Post Code:&nbsp;</strong><?php echo $jobpcode?></p>
  </div>
</div>

  <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;Job Description</h3>
  </div>
  <div class="panel-body">
  <p><strong>Date:&nbsp;</strong><?php echo $jobdate?><br/>
  <strong>Time:&nbsp;</strong><?php echo $jobtime?><br/><br/>
  <strong>Summary of work required:&nbsp;</strong><?php echo $jobsummary?><br/>
  <strong>Job Description:&nbsp;</strong><br/>
  <form class="form-horizontal">
  <div class="form-group">
  <label class="control-label col-sm-1" for ="paymentmeth"><strong>Method of payment:&nbsp;</strong></label>
  <select class="form-control" id="paymentmeth">
    <option>Invoice</option>
    <option>Cash on Delivery</option>
    <option>Under Guarantee</option>
  </select>
</div>
  <strong>Notes from Office:&nbsp;</strong>Test</p>
  </div>
</div>

<a href="http://maps.google.com?q=<?php echo $jobpcode?>" target="_blank"><button class="btn btn-primary navbar-btn"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>&nbsp;Open Google Maps</button></a> <button class="btn btn-success navbar-btn"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;Mark as completed</button> <a href="viewjobs.php"><button class="btn btn-danger navbar-btn"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp;Back</button></a>

</div>

  <div class="col-md-6">
  <div class="col-6">
  
  <div class="panel panel-default">
  <div class="panel-heading">
  <h3 class="panel-title"><span class="glyphicon glyphicon-road" aria-hidden="true"></span>&nbsp;Location</h3>
  </div>
  <div class="panel-body">
<!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA2AK6V94TJ-ZXz4MdudrH9bJlKPRojUdw&q=<?php echo $jobpcode?>"></iframe>
</div>
</div>
</div>
</div>
</div>
</div>
 </div> <!-- /container -->
 <?php include('../includes/footer.php');?>