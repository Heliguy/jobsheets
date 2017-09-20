<?php $page = "My jobs";
include ("adminheader.php");?>
<div class="container">
<h3>Customer Management</h3>
<?php include ("../includes/mysqli_connect.php");
$result = mysqli_query($dbc,"SELECT * FROM customer");

echo "<div class=table-responsive>
<table class=table>
<thead>
<tr>
<th>Customer #</th>
<th>Customer Name</th>
<th>Contact Person</th>
<th>Contact #</th>
</tr>
</thead>";

while($row = mysqli_fetch_array($result))
{
echo "<tbody>";	
echo "<tr>";
echo "<td>" . $row['customer_id'] . "</td>";
echo "<td>" . $row['cust_name'] . "</td>";
echo "<td>" . $row['cust_contactfname'] . "</td>";
echo "<td>" . $row['cust_contactnum'] . "</td>";
echo '<td><button type="submit" title="View and edit Customer" style="width: 100%;" onClick="#" class="btn btn-primary"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>&nbsp;View</button><td><button type="submit" title="Delete Customer" style="width: 100%;" onClick="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;Delete</button></td>';
echo "</tr>";
echo "</tbody>";
}
echo "</table>";
mysqli_close($con);
?>
<button title="Add Customer" style="width: 100%;" onClick="#" class="btn btn-primary"><span class="	glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Customer</button>
</div> <!-- /container -->
<?php include ("../includes/footer.php");?>