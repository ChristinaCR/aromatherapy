<?php include('includes/doc.php');?>

<title>Home</title>
</head>

<body>

<?php include('includes/header.php');?>

	<div id="wrapper">
	
		

		<div id="main">
			
			
			<div id="content">
				<h4>COMMENTS</h4>
<br />
<form action="formhandler.php" method="post" id="form">
<label>Name:</label>
<input type="text" name="name" id="name">
<!--Don't forget that the label and input tags are inline therefore if you would like to present them vertically, in CSS, display them block-->
<label>Email:</label>
<input type="email" name="email" id="email">
<label>Comments:</label>
<textarea name="comments" id="comments" rows="6">
</textarea>
<button type="submit">Submit</button>	
</form>
		</div><!--end main-->
	</div><!--end wrapper-->

<?php include('includes/footer.php');?>