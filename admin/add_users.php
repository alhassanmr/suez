<!DOCUTYPE="html">
<html lang="en-us">
	
	
	<head>
	<?php
	// First of all, don't make use of mysql_* functions, those are old
	$pdo = new PDO("mysql:host=localhost;dbname=suez;charset=utf8", "Developer", "developer");
	?>
	<link href="css/styles.css" media="screen" rel="stylesheet" type="text/css" />
	
	</head>
	
	<body>
	
	<form action="saveuser.php" method="post">
	<center>
	<h4>
	<i class="icon-plus-sign icon-large">
	</i>Add Users</h4>
	</center>
	<hr>
	<div id="ac">
	<span>Firstname &nbsp;&nbsp;&nbsp;&nbsp;:</span>
	<select id="firstname" name="firstname">
			<option value="">Select First Name</option>
			<?php
				$st = $pdo->prepare("SELECT firstname FROM employees ORDER BY firstname ASC");
				$st->execute();
				$rows = $st->fetchAll(PDO::FETCH_ASSOC);
				foreach ($rows as $row) {
				?><option value="<?php echo $row ['firstname']; ?>"><?php echo $row ['firstname']; ?></option><?php
				}
			?>
	</select>
	<br>
	<span>Surname &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span><input type="text" style="width:265px; height:30px;" name="surname" id="surname" readonly="surname"/><br>
	<span>UserName &nbsp;&nbsp;&nbsp;: </span><input type="text" style="width:265px; height:30px;" name="username"  required><br>
	<span>Password : </span><input type="text" style="width:265px; height:30px;" name="password" Required/><br>
	
	<span>Role</span>
	<select name="role">
	<option value="">Select Role</option>
	<option value="Administrator">Administrator</option>
	<option value="Finance Controller">Finance Coordinator</option>
	<option value="Stock Manager">Stock Controller</option>
	<option value="Human Resourse Manager">Human Resource Manager</option>
	</select><br>


	<div style="float:left; margin-left:110px;">
	<button class="btn btn-success btn-block btn-large" style="width:200px;height:50px;"><i class="icon icon-save icon-large"></i> Save</button>
	</div>
	</div>
	</form>
	
	<script type="text/javascript">
			$(function() { // This code will be executed when DOM is ready
				$('#firstname').change(function() { // When the value for the Employee_ID element change, this will be triggered
					var $self = $(this); // We create an jQuery object with the select inside
					$.post("magrade.php", { firstname : $self.val()}, function(json) {
						if (json && json.status) {
							$('#firstname').val(json.firstname);
								$('#surname').val(json.surname);
								
								
							  
						}
					})
				});
			})
		</script>
	</body>
</html>
