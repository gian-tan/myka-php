<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description"	content="MykaApps Homepage" />
	<meta name="keywords"		content="MykaApps,Myka Apps, Web, Application, Developer, Homepage, Job, Recruitment" />
	<meta name="author"			content="Gianluca MT" />
	<title>MykaApps Jobs</title>
	<link href="styles/styles.css" rel="stylesheet" />
	<link href="styles/styles-apply.css" rel="stylesheet" />
	<!-- <script src="enhancements2.js"></script> -->
</head>
<body>
<?php
include "nav.inc";
?>

<form id='register' method='post' action='processEOI.php' novalidate='novalidate'> <!-- http://mercury.swin.edu.au/it000000/formtest.php -->
	<fieldset id='applyjob'>
		<legend>Apply Job</legend>
			<p><label for='refno'>Job Reference Number:</label>
			<input type='text' name='refno' id='refno' pattern='\d{5}' maxlength='5' size='10' required='required'> <!--readonly-->
			<!-- <span id='jobrefno'></span> -->
			<!-- <input type='hidden' name='refno' id='refno' /> -->
			</p>
			<p id='errref' style='display:none; color:red; font-size:11pt;'>*Your reference number is invalid.</p>
			
			
			<p><label for='names'>Given Names:</label>
			<input type='text' name='names' id='names' pattern='^[a-zA-Z]+$' maxlength='20' size='10' required='required'>
			</p>
			<p id='errnames' style='display:none; color:red; font-size:11pt;'>*Your first name must only contain alpha characters</p>
			
			<p><label for='fnames'>Family Names:</label>
			<input type='text' name='fnames' id='fnames' pattern='^[a-zA-Z]+$' maxlength='20' size='10' required='required'>
			</p>
			<p id='errfnames' style='display:none; color:red; font-size:11pt;'>*Your last name must only contain alpha characters and hyphen.</p>
			
			<!-- edited from previous version -->
			<!-- onblur='validate()' removed -->
			<p><label for='dob'>Date of Birth:</label>
			<input type='text' id='dob' name='dob' pattern='\d{1,2}\/\d{1,2}\/\d{4}' placeholder='dd/mm/yyyy' maxlength='15' size='10' required='required' /> 
			</p>
			<p id='errdate1' style='display:none; color:red; font-size:11pt;'>*Your age must be 15 or older</p>
			<p id='errdate2' style='display:none; color:red; font-size:11pt;'>*Your age must be 80 or younger</p>
			
	</fieldset>
	<fieldset id='gender'>
		<legend>Gender:</legend>
			<p>
			<label for='male'>M</label>
			<input type='radio' id='male' name='Gender' value='male' required='required'>
			<label for='female'>F</label>
			<input type='radio' id='female' name='Gender' value='female' required='required'>
			</p>
			<p id='errgender' style='display:none; color:red; font-size:11pt;'>*You must select a gender</p>
	</fieldset>		
	<fieldset id='address'>
		<legend>Address:</legend>
			<p><label for='street'>Street Address:</label>
			<input type='text' name='street' id='street' pattern='^\d+\s[A-z'-]+\s[A-z]+' maxlength='40' size='20' required='required'>
			</p>
			<p id='errstreet' style='display:none; color:red; font-size:11pt;'>*Your street address is invalid</p>
			
			<p><label for='subtown'>Suburb/Town:</label>
			<input type='text' name='subtown' id='subtown' pattern='^[a-zA-Z]+$' maxlength='40' size='20' required='required'>
			</p>
			<p id='errsubtown' style='display:none; color:red; font-size:11pt;'>*Your suburb/town must only contain alpha characters</p>
			
			
			<p><label for='state'>State:</label>
				<select name='state' id='state'>
					<option value='Please Select'>Please Select</option>
					<option value='ACT'>ACT</option>
					<option value='NSW'>NSW</option>
					<option value='NT'>NT</option>
					<option value='QLD'>QLD</option>
					<option value='SA'>SA</option>
					<option value='TAS'>TAS</option>
					<option value='VIC'>VIC</option>
					<option value='WA'>WA</option>
				</select>
				<p id='errstate' style='display:none; color:red; font-size:11pt;'>*You must choose a State</p>
			</p>

			<p><label for='postcode'>Postcode:</label>
			<input type='text' name='postcode' id='postcode' pattern='\d{4}' maxlength='4' size='10' required='required'>
			<p id='errpost' style='display:none; color:red; font-size:11pt;'>*Your postcode is invalid</p>
			</p>
	</fieldset>
	
	<fieldset id='comm'>
		<legend>Communication Details</legend>
			<p><label for='emailad'>E-mail Address:</label>
			<input type='email' name='emailad' id='emailad' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$' size='20' placeholder='email@email.com' required='required'>
			</p>
			<p id='erremail' style='display:none; color:red; font-size:11pt;'>*Your email address is invalid</p>
			
			<p><label for='phone'>Phone Number:</label>
			<input type='text' name='phone' id='phone' pattern='\d{8,12}' maxlength='12' size='10' required='required'>
			</p>
			<p id='errphone' style='display:none; color:red; font-size:11pt;'>*Your number must be 8 to 12 numbers long</p>
	</fieldset>

	<fieldset id='skills'>
		<legend>Skill List</legend>
			<label for='html'>HTML</label>
			<!-- <input type='hidden' name='issue[]' value='' /> -->
			<input type='checkbox' id='html' name='issue[]' value='html' />
			
			<label for='css'>CSS</label>
			<input type='checkbox' id='css' name='issue[]' value='css'/>
			
			<label for='photoshop'>Adobe Photoshop</label>
			<input type='checkbox' id='photoshop' name='issue[]' value='photoshop'/>
			
			<label for='indesign'>Adobe InDesign</label>
			<input type='checkbox' id='indesign' name='issue[]' value='indesign'/>
			</br>
			<label for='ruby'>Ruby</label>
			<input type='checkbox' id='ruby' name='issue[]' value='ruby'/>
			
			<label for='c++'>C++</label>
			<input type='checkbox' id='cplus' name='issue[]' value='c++'/>
			
			<label for='c#'>C#</label>
			<input type='checkbox' id='csharp' name='issue[]' value='c#'/>
			
			<input type='hidden' name='oskillscheck' value=''>
			<p><label for='oskill'>Other Skills:</label><input type='checkbox' id='oskills' name='oskillscheck' value='oskills'/></p>
			<textarea id='otherskills' name='otherskills' rows='5' cols='50' placeholder='Write your other skills here...'></textarea>
			<p id='errskill' style='display:none; color:red; font-size:11pt;'>*You must choose at least 1 skill</p> 
			<p id='errskill2' style='display:none; color:red; font-size:11pt;'>*Other skills are cannot be empty</p> 
	</fieldset>
	
	<div id='buttons'>
	<input type='submit' value='Apply' />
	<input type='reset' value='Reset Application' />
	</div>
</form>


<?php include "footer.inc";?>
</body>
</html>