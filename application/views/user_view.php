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

		<?php

			foreach ($userArray as $key => $value) {
				
				// echo "<pre>";
				// print_r($value);
				// echo "</pre>";

				echo "<tr>
					<td>".$value['id']."</td>
					<td>".$value['username']."</td>
					<td>".$value['company']."</td>
				</tr>";
			}
		?>
		<!-- <tr>
			<td>1</td>
			<td><?= $userArray['username']; ?> </td>
			<td><?= $userArray['company']; ?> </td>
		</tr> -->
	</table>

</body>
</html>

<!-- <?php

	// echo "<pre>";
	// print_r($userArray);
	// echo "</pre>";

?> -->