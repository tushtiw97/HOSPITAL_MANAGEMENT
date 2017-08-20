<html>
	<head><title>PHP DB</title><head>
	<body>
		<?php
			$connection = new mysqli("localhost","root","tushar1997","TESTDB") or die("Connection Unsuccessful");
			$result = $connection->query("SELECT * FROM `TEST`");
			if(!result){
				die("Query Unsuccessful");
			}
			if($result->num_rows > 0){
				$rows = $result->fetch_all();
				echo "<table>";
				echo "<tr><td><b>ID</b></td><td><b>Name</b></td></tr>";
				for($i=0;$i<count($rows);$i++){
					echo "<tr><td>".$rows[$i][0]."</td><td>".$rows[$i][1]."</td></tr>";
				}
				echo "</table>";
			}
			else {
				echo "No rows selected";
			}
			$connection->close();
		?>
	</body>
</html>
