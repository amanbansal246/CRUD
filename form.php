<html>
	<head>
		<script>
			function validataion(){
				var name=document.forms['myform']['uname'].value;
				if(name=="")
				{
					alert('please fill name');
					return false;
				}
				return true;
			}
		</script>
	</head>
	<body>
		<form action="" method="post" name="myform" onsubmit="return validataion()">  	
			username : <input type="text" name="uname">
				<input type="submit" name="submit" value="submit">
		</form>
	</body>
</html>
<?php
	if(isset($_POST['submit'])
	{
		echo "Form filled succesfully";	
	}
?>