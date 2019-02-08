<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php echo form_open('login/verifikasi'); ?>
	 <table border="5">
	 	<tr>
	 		<td colspan="3" align="center">
	 			<h3>Login ya</h3>
	 		</td>
	 	</tr>
	 	<tr>
	 		<td> Username </td>
	 		<td><?php echo form_input('Username');
	 		echo "<br>"; ?></td>
	 	</tr>
	 	<tr>
	 		<td> Password </td>
	 		<td><?php echo form_input('password');
	 		echo "<br>"; ?></td>
	 	</tr>

	 	<tr>
	 		<td colspan="3" align="center">
	 			<?php echo form_submit('submit', 'Log In');
	 			echo form_close();?>
	 		</td>
	 	</tr>
	 </table>


</body>
</html>