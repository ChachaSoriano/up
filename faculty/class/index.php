<?php include '../../../table.class.php' ?>
<!DOCTYPE HTML>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="css/images/ceaslogo.png">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.8.0.min.js"></script>

	<link rel="stylesheet" type="text/css" href="../../../source/styles/flexigrid.css">
	<link rel="stylesheet" type="text/css" href="../../../source/styles/style.css">
	<script type="text/javascript" src="flexigrid/flexigrid.pack.js"></script>
	<script type="text/javascript" src="flexigrid/flexigrid.js"></script>
	<script>
		$(document).ready(function(){
			windowHeight = $(window).height() - 330;
			$('#grid').flexigrid({
				url: 'functions/list.php',
				dataType: 'json',
				//buttons: [
				//	{separator:true},{separator:true},{separator:true},{separator:true},
				//	{separator:true},{separator:true},{separator:true},{separator:true},
					
				//	{name: 'SHOW STUDENTS', bclass: 'add', onpress: function(){
				//		a = $('.aysem').val() ;b = a.split(',');
				//		item = $('.trSelected :nth-child(1) > div');
						
				//		if(item.length == 1){
				//			ay = b[0]; sem = b[1]; clas = item[0].innerHTML;
				//			window.location = 'students/?class='+ clas +'&ay='+ ay +'&sem='+ sem;
				//		}else{
				//			alert("Select a Class");
				//		}

				//	}},
					
				//	{separator:true},{separator:true},{separator:true},{separator:true},
				//	{separator:true},{separator:true},{separator:true},{separator:true},
				//	{name: 'UPLOAD CLASS LOADS', bclass: 'add', onpress: function(){
				//		item = $('#grid').html();
				//		if(item!=""){
				//			alert('Class load is already uploaded.');
				//		}else{
				//			window.location = 'upload';
				//		}
						
				//	}},
				//	{separator:true},{separator:true},{separator:true},{separator:true},
				//	{separator:true},{separator:true},{separator:true},{separator:true},
				//	{name: 'UPDATE CLASS LOADS', bclass: 'add', onpress: function(){
				//		window.location = 'update';
				//	}},
				//	{separator:true},{separator:true},{separator:true},{separator:true},
				//	{separator:true},{separator:true},{separator:true},{separator:true},
					
				//	{name: 'DELETE', bclass: 'delete', onpress: function(){
				//		items = "";
				//		a = $('.aysem').val() ;b = a.split(',');
				//		item = $('.trSelected :nth-child(1) > div');
				//		if(item.length > 0){
				//			ay = b[0]; sem = b[1];
				//			$.each(item,function(i){
				//				items += item[i].innerHTML + ',';
				//			});
				//			conf = confirm("Delete " + item.length + " Class\nThis action will remove all data related on this class.");
							
				//			if(conf==true){
				//				$.ajax({
				//					type: 'POST',
				//					url: 'functions/delete.php',
				//					data: {
				//						ay: ay,
				//						sem: sem,
				//						classes: items,
				//					},
				//					success: function(i){
				//						$('#grid').flexReload();
				//					}
				//				});
				
				//			}
							
				//		}else{
				//			alert("Select a Class");
				//		}
				//	}},
				//	{separator:true},
				//],
				colModel : [
					{display: 'CLASS CODE', name : 'col', width : 100, align: 'center'},
					{display: 'SUBJECT CODE', name : 'col', width : 100, align: 'center'},
					{display: 'SUBJECT TITLE', name : 'col', width : 320, align: 'center'},
					{display: 'LEC. UNITS', name : 'col', width : 80, align: 'center', hide:true },
					{display: 'LAB. UNITS', name : 'col', width : 80, align: 'center', hide:true},
					{display: 'PREREQUISITE', name : 'col', width : 100, align: 'center', hide:true},
					{display: 'DAY', name : 'col', width : 70, align: 'center'},
					{display: 'START TIME', name : 'col', width : 100, align: 'center'},
					{display: 'END TIME', name : 'col', width : 100, align: 'center'},
					{display: 'ROOM', name : 'col', width : 70, align: 'center'},
					{display: 'STUDENTS', name : 'col', width : 100, align: 'center'},

				],
				searchitems : [
					{display: 'Select Academic Year & Semester', name: ''},
					<?php
						
						$table = new Table();
						$classLoadAYSem = $table->showTable("ay,sem","rclass where instr='".$_SESSION['faculty']."' group by ay,sem order by ay desc,sem desc");
						
						foreach($classLoadAYSem['rows'] as $i){
							echo "{display: '".$i[0]." ".sem('first semester',$i[1])."', name : '".$i[0]." ".sem('first semester',$i[1])."'},\n";
						}
						
					?>
				],
				usepager: true,
				pagestat: 'Displaying {total} Class Loads',
				nomsg: 'No Class Loads',
				title: 'CLASS SCHEDULES: <span>AY: <?php echo enlistment('ay').' '.enlistment('sem') ?></span>',
				height: windowHeight
			});
			
			$('.sDiv2 > select[name=qtype]').change(function(){
				a = $('.sDiv2 > select[name=qtype]').val();b = a.split(" ");
				ay = b[0];sem = "";
				for(i=1; i < b.length; i++){sem += b[i];}
				if(sem=="FirstSemester"){sem="1";}else if(sem=="SecondSemester"){sem="2";}else if(sem=="Summer"){sem="3";}
				$('.aysem').val(ay + "," + sem);
				$('.ftitle').html('CLASS LOAD : <span>AY: ' + $('.sDiv2 > select[name=qtype]').val() + '</span>');
			});
			
			$('.sDiv2 :nth-child(1)').hide();
			$('.pDiv2 :nth-child(2),.pDiv2 :nth-child(3),.pDiv2 :nth-child(4),.pDiv2 :nth-child(5),.pDiv2 :nth-child(6),.pDiv2 :nth-child(7),.pDiv2 :nth-child(8),.pDiv2 :nth-child(9)').hide();
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
<body >
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
			<div class="left" style="font-size:15px"><?php echo $_SESSION['faculty'] ?> - <?php echo faculty($_SESSION['faculty'],'lastname').', '.faculty($_SESSION['faculty'],'firstname').' '.faculty($_SESSION['faculty'],'middlename').' - '.faculty($_SESSION['faculty'],'position') ?></div>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					<a href="../logout.php">LOGOUT</a>
				
			</div>
	</div>

	<div class="page-content">
		<input type="hidden" class="aysem" value="<?php echo enlistment('ay').','.sem('1',enlistment('sem')) ?>">
		<input type="hidden" id="aysem" value="CLASS LOAD : <span>AY: <?php echo enlistment('ay').' '.enlistment('sem') ?></span>">
		<table id="grid"></table>
	</div>
	
	
</body>
</html>