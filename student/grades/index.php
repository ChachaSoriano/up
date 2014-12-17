<?php include '../../../config.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>Student</title>
	<link rel="icon" type="image/png" href="../../../source/images/icon.png">
	<link rel="stylesheet" type="text/css" href="../../../source/styles/flexigrid.css">
	<link rel="stylesheet" type="text/css" href="../../../source/styles/style.css">
	<script type="text/javascript" src="../../../source/scripts/flexigrid.pack.js"></script>
	<script type="text/javascript" src="../../../source/scripts/flexigrid.js"></script>
	<script>
		$(function(){
			
			windowHeight = $(window).height() - 300;
			$('#grid').flexigrid({
				url: 'functions/list.php',
				dataType: 'json',
				colModel : [
					{display: 'SUBJECT CODE', name : 'SubjectCode', width : 90, align: 'center'},
					{display: 'SUBJECT TITLE', name : 'SubjectTitle', width : 320, align: 'center'},
					{display: 'LEC.', name : 'Lec', width : 30, align: 'left' ,hide:true },
					{display: 'LAB.', name : 'Lab', width : 30, align: 'left' ,hide:true },
					{display: 'PREREQUISITE', name : 'Prerequisite', width : 100, align: 'left'},
					{display: 'YEAR', name : 'Year', width : 40, align: 'left'},
					{display: 'SEM.', name : 'Sem', width : 40, align: 'left'},
					{display: 'PRELIM GRADE', name : 'Prelim', width : 70, align: 'left' ,hide:true },
					{display: 'PRELIM ABS.', name : 'Absences', width : 70, align: 'left' ,hide:true },
					{display: 'MIDTERM GRADE', name : 'Midterm', width : 70, align: 'left' ,hide:true },
					{display: 'MIDTERM ABS.', name : 'Absences', width : 70, align: 'left' ,hide:true },
					{display: 'FINAL GRADE', name : 'Grade', width : 70, align: 'left'},
					{display: 'FINAL ABS.', name : 'Grade', width : 70, align: 'left' ,hide:true },
					{display: 'TOTAL ABS.', name : 'TotalAbsences', width : 70, align: 'left' ,hide:true },
					{display: 'EQUIV.', name : 'Equiv', width : 40, align: 'left'},
					{display: 'REMARKS', name : 'Remarks', width : 90, align: 'left'},
					{display: 'INSTRUCTOR', name : 'Instructor', width : 150, align: 'left'},
					{display: 'CLASS CODE', name : 'ClassCode', width : 80, align: 'left' ,hide:true },
					{display: 'DAY', name : 'Time', width : 80, align: 'left' ,hide:true },
					{display: 'TIME', name : 'Time', width : 100, align: 'left' ,hide:true },
					{display: 'ROOM', name : 'Room', width : 40, align: 'left' ,hide:true },
					{display: 'ACADEMIC YEAR', name : 'AcademicYear', width : 90, align: 'left' ,hide:true },
					{display: 'SEMESTER', name : 'Semester', width : 50, align: 'left' ,hide:true }
				],
				usepager: true,
				searchitems : [
					{display: 'Subject Code', name : 'a.subject_code'}
				],
				pagestat: 'Displaying {total} Records',
				nomsg: 'Search has no results.',
				title: 'YOUR GRADES',
				height: windowHeight
			});
			
			$('.sDiv2 :nth-child(2),.pDiv2 :nth-child(2),.pDiv2 :nth-child(3),.pDiv2 :nth-child(4),.pDiv2 :nth-child(5),.pDiv2 :nth-child(6),.pDiv2 :nth-child(7),.pDiv2 :nth-child(8),.pDiv2 :nth-child(9)').hide();

			setInterval(function(){
				var items = $('tr :nth-child(16) > div');
				$.each(items,function(i){
					//console.log(items[i].innerHTML);
					if(items[i].innerHTML=="Passed"){
						$(items[i]).css('color','green');
					}else if(items[i].innerHTML=="&nbsp;" || items[i].innerHTML=="" || items[i].innerHTML=="REMARKS"){
						$(items[i]).css('color','');
					}else{
						$(items[i]).css('color','red');
					}
				});
			},1);
		});
	</script>
	
	<style type="text/css">
table {
border-collapse:collapse;
border-style:solid;
border-width:2px;
border-color:#333333;
font:14px Georgia, serif;
padding:0px;
box-shadow:2px 2px 3px 2px #121212;
}

th
{
color:#FFFFFF;
background:#000099;
background: -moz-linear-gradient(top, #000099 0%, #0650a4 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#000099), color-stop(100%,#0650a4));
background: -webkit-linear-gradient(top,#000099 0%,#0650a4 100%);
background: -o-linear-gradient(top,#000099 0%,#0650a4 100%);
background: -ms-linear-gradient(top,#000099 0%,#0650a4 100%);
background: linear-gradient(top,#000099 0%,#0650a4 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#000099',endColorstr='#0650a4',GradientType=0s);
font-weight:bold;
padding:5px;
text-align:center;
vertical-align:top;
}

tr
{
color:#000000;
border-top-style: solid;
border-width:1px;
border-color:#707070;
font-weight:normal;
}

tr:hover td
{
background:#000099;
color:#080707;
}

tr:nth-child(odd) td
{
background:#66a2f5;
}

tr:nth-child(odd):hover td
{
background:#000099;
}

td
{
background:#FFFFFF;
padding:3px 5px;
text-align:left;
vertical-align:top;
}
	
	</style>
	
</head>
<body>
	<div class="head">
		<div class="wraper">
			<div class="head-logo1"></div>
			<div class="head-logo"></div>
			<div class="head-label">
				<div class="center" style="font-size:18px; position: center">COLLEGE OF EDUCATION, ARTS AND SCIENCES</div>
				<div class="center" style="font-size:18px;"> STUDENT</div>
			</div>
		</div>
	</div>


	<div class="title">
		<div class="wraper">
			<div class="left" style="font-size:15px"><?php echo $_SESSION['student'].' - '.student($_SESSION['student'],"lastname").", ".student($_SESSION['student'],"firstname").", ".student($_SESSION['student'],"middlename")." - ".student($_SESSION['student'],"course")." ".student($_SESSION['student'],"year"); ?></div>
		
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					<a href="../logout.php">LOGOUT</a>
				
		</div>
	</div>

	<div class="page-content"><table id="grid"></table></div>
	
</body>
</html>