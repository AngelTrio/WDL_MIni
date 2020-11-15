<?php
$connect = mysqli_connect("localhost", "root", "", "exp8");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM surveys 
	WHERE name LIKE '%".$search."%'
	OR email LIKE '%".$search."%' 
	OR age LIKE '%".$search."%' 
	OR role LIKE '%".$search."%' 
	OR outbreak LIKE '%".$search."%'
	OR precautions LIKE '%".$search."%'
	OR covidcase_locality LIKE '%".$search."%'
	OR comment LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM surveys ORDER BY id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Name</th>
							<th>Email-Id</th>
							<th>Age</th>
							<th>Role</th>
							<th>Ourbreak</th>
							<th>Precautions</th>
							<th>Covid Case Locality</th>
							<th>Comment</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["name"].'</td>
				<td>'.$row["email"].'</td>
				<td>'.$row["age"].'</td>
				<td>'.$row["role"].'</td>
				<td>'.$row["outbreak"].'</td>
				<td>'.$row["precautions"].'</td>
				<td>'.$row["covidcase_locality"].'</td>
				<td>'.$row["comment"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>