<?php $page = "My jobs";
include ("../includes/header.php");?>
<div class="container">
<h3>Your Jobs</h3>
<?php include ("../includes/mysqli_connect.php");
$result = mysqli_query($dbc,"SELECT * FROM customer");

echo "<div class=table-responsive>
<table class=table>
<thead>
<tr>
<th>Job #</th>
<th>Customer Name</th>
<th>Job Summary</th>
<th>Job Location</th>
</tr>
</thead>";

while($row = mysqli_fetch_array($result))
{
echo "<tbody>";	
echo "<tr>";
echo "<td>" . $row['job_id'] . "</td>";
echo "<td>" . $row['cust_name'] . "</td>";
echo "<td>" . $row['job_summary'] . "</td>";
echo "<td>" . $row['job_town'] . "</td>";
echo '<td><button type="submit" title="Set Location Details" style="width: 100%;" onClick="document.location.href=\'viewsheet.php?id=' . $row['job_id'] . '\'" class="btn btn-primary"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>&nbsp;View job</button></td>';
echo '<td><button type="submit" title="Set Location Details" style="width: 100%;" onClick="document.location.href=\'viewsheet.php?id=' . $row['job_id'] . '\'" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;Mark as completed</button></td>';
echo "</tr>";
echo "</tbody>";
}
echo "</table>";
mysqli_close($con);
?>
</div> <!-- /container -->
<?php include ("../includes/footer.php");?>