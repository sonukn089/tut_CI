<?php
	
	//echo "I am View for user Details";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
</head>
<body>

	<table>
		<tr>
			<th>Sr No.</th>
			<th>Username</th>
			<th>Company</th>
		</tr>
		<tr>
			<td>1</td>
			<td><?= $userArray['username']; ?> </td>
			<td><?= $userArray['company']; ?> </td>
		</tr>
	</table>

</body>
</html>

<!-- <?php

	// echo "<pre>";
	// print_r($userArray);
	// echo "</pre>";

?> -->