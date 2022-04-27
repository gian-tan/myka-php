<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description"	content="MykaApps About Us" />
	<meta name="keywords"		content="MykaApps,Myka Apps, Web, Application, Developer, Homepage, Job, Recruitment" />
	<meta name="author"			content="Gianluca MT" />
	<title>MykaApps About Us</title>
	<link href="styles/styles.css" rel="stylesheet" />
	<link href="styles/styles-about.css" rel="stylesheet" />
	<!-- <script src="enhancements2.js"></script> -->
</head>
<body>
<?php
include "nav.inc";
?>

<h2>Who We Are</h2>
<img src="styles/images/gian.jpg" id="profpic" alt="picture placeholder" />
<dl id="profile">
	<dt>Name:</dt>
		<dd>Gianluca MT</dd>
	<dt>Student Number:</dt>
		<dd>102402352</dd>
	<dt>Tutor Name:</dt>
		<dd>Guangming Cui</dd>
	<dt>Courses:</dt>
		<dd>Creating Web Applications</dd>
		<dd>Introduction to Programming</dd>
		<dd>Introduction to Business and Information Systems</dd>
		<dd>Database, Analysis, and Design</dd>
</dl>

<div id="profile2">
<h3>Profile</h3>
<p>Hey Luca here, currently a Master's of IT student enrolled in Swinburne.
I graduated from RMIT University in 2018, I'm both an animator and a digital artist at heart, passionate about everything from
animation to illustration, graphic design to character designs.<br />As a life-long learner even after graduation,
I'm ready to undertake various jobs and projects in the animation and entertainment industry.
My hobbies are playing video games, watching anime, and reading manga.</p>
<p>Email me <a href="mailto:102402352@student.swin.edu.au">here</a></p>
</div>

<table id="timetable">
	<caption>Timetable</caption>
		<thead>
			<tr>
			<th>Days</th>
			<th rowspan="2">Monday</th>
			<th rowspan="2">Tuesday</th>
			<th rowspan="2">Wednesday</th>
			<th rowspan="2">Thursday</th>
			</tr>
			<tr>
			<th>Courses</th>
			</tr>
			</thead>
		<tbody>
			<tr>
			<th scope="row" class="courses">Creating Web Applications</th>
				<td class="scheduled">Lecture<br />4:30 - 6:30 PM<br /> Tutorial<br />6:30 - 8:30 PM</td>
				<td>N/A</td>
				<td>N/A</td>
				<td>N/A</td>
			</tr>
			<tr>
			<th scope="row" class="courses">Introduction to Programming</th>
				<td>N/A</td>
				<td>N/A</td>
				<td class="scheduled">Lecture<br />12:30 - 2:30 PM</td>
				<td class="scheduled">Tutorial<br />2:30 - 4:30 PM</td>
			</tr>
			<tr>
			<th scope="row" class="courses">Introduction to Business and Information Systems</th>
				<td>N/A</td>
				<td class="scheduled">Lecture<br />5:30 - 7:30 PM<br />Tutorial<br />7:30 - 9:30 PM</td>
				<td>N/A</td>
				<td>N/A</td>
			</tr>
			<tr>
			<th scope="row" class="courses">Database, Analysis, and Design</th>
				<td>N/A</td>
				<td>N/A</td>
				<td class="scheduled">Lecture<br />5:30 - 7:30 PM</td>
				<td class="scheduled">Tutorial<br />5:30 - 7:30 PM</td>
			</tr>
		</tbody>
</table>

<?php include "footer.inc";?>
</body>
</html>
