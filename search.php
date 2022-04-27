<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Search Application by Ref Number</title>
<meta name="description" content="Search"  />
<meta name="keywords" content="PHP, EOI, SQL, Table" />
<meta name="author" content="Gianluca MT" />
<link rel="stylesheet" href="styles/styles.css" type="text/css" />
</head>
<body>
<?php include "nav.inc"; ?>
<?php
	
	// if(!isset($_POST["refno"]))
		// $query = "SELECT * FROM EOI;";
	// else {
		// $JobReferenceNumber = trim(htmlspecialchars($_POST["refno"]));
		// $query = "SELECT * FROM EOI WHERE JobReferenceNumber LIKE '$JobReferenceNumber'";
	// }
	
	require_once("settings.php");
	$conn = @mysqli_connect($host,
	$user,
	$pwd,
	$sql_db
	);
	//connection check
	if (!$conn) {
		echo "<p>Database connection failure</p>";
	} else {
			$sql_table = "EOI";
			$JobReferenceNumber = trim(htmlspecialchars($_POST["refno"]));
			$query = "SELECT * FROM EOI WHERE JobReferenceNumber LIKE '$JobReferenceNumber'";
			$result = mysqli_query($conn, $query);
			if (!$result) {
				echo "<p>Something is wrong with ", $query, "</p>";
			} else {
				echo "<table border=\"1\">\n";
				echo "<tr>\n "
				."<th scope=\"col\">EOINumber</th>\n"
				."<th scope=\"col\">JobReferenceNumber</th>\n"
				."<th scope=\"col\">FirstName</th>\n"
				."<th scope=\"col\">LastName</th>\n"
				."<th scope=\"col\">Gender</th>\n"
				."<th scope=\"col\">DateOfBirth</th>\n"
				."<th scope=\"col\">Address</th>\n"
				."<th scope=\"col\">SuburbTown</th>\n"
				."<th scope=\"col\">State</th>\n"
				."<th scope=\"col\">Postcode</th>\n"
				."<th scope=\"col\">EmailAddress</th>\n"
				."<th scope=\"col\">PhoneNumber</th>\n"
				."<th scope=\"col\">Skills</th>\n"
				."<th scope=\"col\">OtherSkills</th>\n"
				."</tr>\n";
			
				while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr>\n ";
				echo "<td>",$row["EOINumber"],"</td>\n";
				echo "<td>",$row["JobReferenceNumber"],"</td>\n";
				echo "<td>",$row["FirstName"],"</td>\n";
				echo "<td>",$row["LastName"],"</td>\n";
				echo "<td>",$row["Gender"],"</td>\n";
				echo "<td>",$row["DateOfBirth"],"</td>\n";
				echo "<td>",$row["Address"],"</td>\n";
				echo "<td>",$row["SuburbTown"],"</td>\n";
				echo "<td>",$row["State"],"</td>\n";
				echo "<td>",$row["Postcode"],"</td>\n";
				echo "<td>",$row["EmailAddress"],"</td>\n";
				echo "<td>",$row["PhoneNumber"],"</td>\n";
				echo "<td>",$row["Skills"],"</td>\n";
				echo "<td>",$row["OtherSkills"],"</td>\n";
				echo "</tr>\n ";
				}
			
			echo "</table>\n";
			mysqli_free_result($result);
			echo "<p class=\"ok\">Successful searches</p>";
		}
		mysqli_close($conn);
	}
	

?>
</body>
</html>