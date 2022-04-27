<!DOCTYPE html>
<html lang="en">
<head>
<title>Expression of Interest</title>

<meta charset="utf-8" />
<meta name="description" content="EOI rows"  />
<meta name="keywords" content="PHP, Rows, Columns, Data, Add" />
<meta name="author" content="Gianluca MT" />
<link rel="stylesheet" href="styles/styles.css" type="text/css" />

</head>
<body>
<?php
	require_once("settings.php");
?>
<?php
//validation
	if(!isset($_POST["refno"])){
		header("location:apply.php");
		exit();
	}
	$errmsg = "";
	//refno
	$JobReferenceNumber = trim (htmlspecialchars($_POST["refno"]));
	if($JobReferenceNumber == "")
		$errmsg .= "<p>Please enter Job Reference Number.</p>";
	if(!preg_match("/[a-zA-Z0-9]+$/",$JobReferenceNumber)){
		$errmsg .= "<p>Job Reference Number may only contain alphanumeric characters.</p>";
	}
	//givename
	$FirstName = trim(htmlspecialchars($_POST["names"]));
	if($FirstName == "")
		$errmsg .= "<p>Please enter your Given Name.</p>";
	if(!preg_match("/[a-zA-Z]+$/",$FirstName)){
		$errmsg .= "<p>Your First Name may only contain letters.</p>";
	}
	//lastname
	$LastName = trim(htmlspecialchars($_POST["fnames"]));
	if($LastName == "")
		$errmsg .= "<p>Please enter your Last Name.</p>";
	if(!preg_match("/[a-zA-Z]+$/",$LastName)){
		$errmsg .= "<p>Your Last Name may only contain letters.</p>";
	}
	//gender - radiobutton
	if (isset($_POST["Gender"])){
		$Gender = trim(stripslashes(htmlspecialchars($_POST["Gender"])));
	}
	else {
		//$Gender = "";
		echo "<p>Please select a Gender</p>";
	}
	//dob
	$DateOfBirth = trim(htmlspecialchars($_POST["dob"]));
	if(!preg_match("/^\d{2}\/\d{2}\/\d{4}$/", $DateOfBirth)){
		$errmsg .= "<p>Please enter your Date of Birth.</p>";
	} else {
		$DateOfBirth=explode("/", $DateOfBirth);
		$DateOfBirth=$DateOfBirth[2] . "-" . $DateOfBirth[1] . "-" . $DateOfBirth[0];
		
		$dateDOB = date_create($DateOfBirth);
		$dateNow = date_create();
		$age = date_diff($dateDOB, $dateNow);
		$age = date_interval_format($age, "%Y");
		
		if ($age<15 || $age>80)
			$errmsg .= "<p>You age is NOT between 15 and 80.</p>";
	}
	//address
	$Address = trim(htmlspecialchars($_POST["street"]));
	if($Address == "")
		$errmsg .= "<p>Please enter your Address.</p>";
	if(!preg_match("/[a-zA-Z0-9'-]+$/",$Address)){
		$errmsg .= "<p>Your Address has an invalid character</p>";
	}
	//subtown
	$SuburbTown = trim(htmlspecialchars($_POST["subtown"]));
	if($SuburbTown == "")
		$errmsg .= "<p>Please enter your Suburb/Town.</p>";
	//state
	$State = trim(htmlspecialchars($_POST["state"]));
	if($State == "")
		$errmsg .= "<p>Please enter your State.</p>";
	if (!($State == "VIC" or
			$State == "NSW" or
			$State == "QLD" or
			$State == "NT" or
			$State == "WA" or
			$State == "SA" or
			$State == "TAS" or
			$State == "ACT"
		)){
			$errmsg .= "<p>Please select a State.</p>";
		}
	//postcode
	$Postcode = trim(htmlspecialchars($_POST["postcode"]));
	if($Postcode == "")
		$errmsg .= "<p>Please enter your Postcode.</p>";
	if(!(strlen($Postcode) == 4)){
		$errmsg .= "<p>Your postcode can only have 4 numbers</p>";
	}
	//suburb and postcode
	switch ($State) {
		case 'VIC':
		if (!($Postcode >= 3000 && $Postcode < 4000) && !($Postcode >= 8000 && $Postcode < 9000)){
			$errmsg .= "<p>Your Postcode must start with 3 or 8.\n</p>";
		}
		break;
		case 'NSW':
		if (!($Postcode >= 1000 && $Postcode < 2000) && !($Postcode >= 2000 && $Postcode < 3000)){
			$errmsg .= "<p>Your Postcode must start with 1 or 2.\n</p>";
		}
		break;
		case 'QLD':
		if (!($Postcode >= 4000 && $Postcode < 5000) && !($Postcode >= 9000 && $Postcode < 10000)){
			$errmsg .= "<p>Your Postcode must start with 4 or 9.\n</p>";
		}
		break;
		case 'TAS':
		if (!($Postcode >= 7000 && $Postcode < 8000)){
			$errmsg .= "<p>Your Postcode must start with 7\n</p>";
		}
		break;
		case 'ACT':
		if (!($Postcode > 0 && $Postcode < 1000)){
			$errmsg .= "<p>Your Postcode must be under 1000\n</p>";
		}
		break;
		case 'NT':
		if (!($Postcode > 0 && $Postcode < 1000)){
			$errmsg .= "<p>Your Postcode must be under 1000\n</p>";
		}
		break;
		case 'WA':
		if (!($Postcode >= 6000 && $Postcode < 7000)){
			$errmsg .= "<p>Your Postcode must start with 6\n</p>";
		}
		break;
		case 'SA':
		if (!($Postcode >= 5000 && $Postcode < 6000)){
			$errmsg .= "<p>Your Postcode must start with 5\n</p>";
		}
		break;
	}
	
	//emailaddress
	$EmailAddress = trim(htmlspecialchars($_POST["emailad"]));
	if($EmailAddress == "")
		$errmsg .= "<p>Please enter your Email Address.</p>";
	if (!filter_var($EmailAddress, FILTER_VALIDATE_EMAIL)) {
	$errmsg .= "<p>Invalid email format</p>";
	}
	//phonenumber
	$PhoneNumber = trim(htmlspecialchars($_POST["phone"]));
	if($PhoneNumber == "")
		$errmsg .= "<p>Please enter your Phone Number.</p>";
	if (!preg_match("/[0-9]+$/", $PhoneNumber)){
		$errmsg .= "<p>Your phone number may only contain numbers</p>";
	}
	//skills - checkboxes
	$skillList = "";
	if (isset($_POST["issue"])){
		$issue = $_POST["issue"];
		foreach($issue as $issueKey => $skill){
		$skillList = $skillList . trim(htmlspecialchars($skill));
		}
		if(isset($_POST["oskillscheck"])){
		$skillList = $skillList . $_POST["oskillscheck"];
		}
	}
	//if(isset($_POST["oskillscheck"])){
	//$oskillscheck = $_POST["oskillscheck"];
	if(empty($_POST["issue"]) && empty($_POST["oskillscheck"])){
		$errmsg .= "<p>Please select Skills.</p>";
	}
	if(!empty($_POST["otherskills"]) && empty($_POST["oskillscheck"])){
		$errmsg .= "<p>Please tick your Other Skills.</p>";
	}
	if(!empty($_POST["oskillscheck"]) && empty($_POST["otherskills"])){
		$errmsg .= "<p>Please enter your Other Skills.</p>";
	}
	$OtherSkills = trim(htmlspecialchars($_POST["otherskills"]));
	//var_dump($_POST);
	//if($OtherSkills && ($issue_values = "oskills") == 0){}

	if ($errmsg!=""){
		echo $errmsg;
	}
	
else {
	require_once"settings.php";
	$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
	//connection check
	if ($conn) { //create database if empty
		$query = "CREATE TABLE IF NOT EXISTS EOI (
			EOINumber INT AUTO_INCREMENT PRIMARY KEY,
			JobReferenceNumber VARCHAR(5),
			FirstName VARCHAR(20),
			LastName VARCHAR(20),
			Gender VARCHAR(6),
			DateOfBirth DATE,
			Address VARCHAR(40),
			SuburbTown VARCHAR(40),
			State VARCHAR(3),
			Postcode INT(4),
			EmailAddress VARCHAR(50),
			PhoneNumber INT(12),
			Skills VARCHAR(50),
			OtherSkills VARCHAR(100)
		);";
	
	$result = mysqli_query ($conn, $query);
	if($result) {
		
		$sql_table = "EOI";
			$query = "insert into $sql_table (JobReferenceNumber, FirstName, LastName, Gender, DateOfBirth, Address, SuburbTown, State, Postcode, EmailAddress, PhoneNumber, Skills, OtherSkills) values
			('$JobReferenceNumber', '$FirstName', '$LastName', '$Gender', '$DateOfBirth', '$Address', '$SuburbTown', '$State', '$Postcode', '$EmailAddress', '$PhoneNumber', '$skillList','$OtherSkills')";
			
		$insert_result = mysqli_query ($conn, $query);
		
		if($insert_result){
			echo "<p class=\"ok\">Successfully added a job record</p>";
		}
		else {
			echo "<p class=\"wrong\">Something is wrong with ", $query, "</p>";
		}
	}
		else {
			echo "<p>Create table operation unsuccessful.</p>";
		}
		mysqli_close($conn);
	}
		else {
			echo "<p>Unable to connect to the database.</p>";
		}
}
	
?>
</body>
</html>