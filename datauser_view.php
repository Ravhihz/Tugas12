<html><head><title>CRUD JQUERY AJAX</title>
<style>
.danger(background-color:red;color:white;)
.success(background-color:green;color:white;)
</style>
<script src="<?php echo base_url('assets/jquery/jquery.js')?>"></script>
</head>
<body><h2>Master User</h2>
<div id='divpesan'></div>
<div id='divform'>
	<form method="post" id='form1'>
	<input type="hidden" name="hiduser: id="hiduser">
	<table>
	<tr>
	<th>Username</th>
	<td><input type="text" id="user" name="user" required></td>
	</tr>
	<tr>
	<th>Nama</th>
	<td><input type="text" id="nama" name="nama" required></td>
	</tr>
	<tr>
	<th>Password</th>
	<td><input type="password" id="pass" name="pass" required></td>
	</tr>
	<tr> <th>&nbsp;</th>
	<td><input type="submit" name"tblsimpan" id="tblsimpan" value="Save">
		<input type="button" name"tblreset" id"tblreset" value="Reset" onclick='backbutton()'>
		<input type="button" value="Close" onclick="$('#divform').fadeout();"></td> </tr>
	</table>
	</form>
	</div>
	<script>
	$(document).ready(function(e){
		$("#form1").submit(function(){
			var datastring = $("form1").serialize();
			$.ajax({
				type: "POST",
				url: <?php echo base_url('index.php/datauser/save')?>",
				data: datastring,
				dataType: "json",
				succes: function(data){
					$('#divpesan').addClass(data.stat);
					$('#divpesan').html(data.msg);
				},
				error: function(){
					alert('Error');
				}
			});
			return false;
		})
	});
</script>
</body>
</html>