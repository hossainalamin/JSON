<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="30">
	<link rel="stylesheet" href="css/style.css">
	<title>Document</title>
</head>
<body>
	<div class="header"><h1>JSON</h1></div>
	<div class="subheader"><h2>JSON READ DATA</h2></div>
	<div class="showdata">
	<table class="showtable" border ="2" width="100%" cellpaddin ="10px">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
		</tr>
	</table>
	<div class="form">
		<form action="save-form.php" method="post">
			<table cellpaddin="10px" width="100%">
				<tr>
					<td><label>Name</label></td>
					<td><input type="text" name="name" class="name"  autocomplete="off"></td>
				</tr>
				<tr>
					<td><label for="age">Age</label></td>
					<td><input type="number" name="age" class="age" autocomplete="off"></td>
				</tr>
				<tr>
					<td><label for="city">City</label></td>
					<td><input type="text" name="city" class="city" autocomplete="off"></td>
				</tr>
				<tr>
					<td></td>
					<td><button type="submit" name="submit" class="submit">Submit</button></td>
				</tr>
			</table>
		</form>
	</div>

	</div>
<script src="js/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
	/*$.ajax({
		url  : "json/test.json",
		type : "GET",
		success : function(data){
			$.each(data, function(key,value){
			$(".showdata").append(value.id + " " +value.title+"<br>");
			});
		}
	});*/
	$.getJSON(
		"json/test.json",
		function(data){
			$.each(data, function(key,value){
				$('.showdata').append(value.id +" "+value.name + "<br>");
			});
		}
	);
	$.ajax({
		url  : "fetch_json.php",
		type : "POST",
		data : {id : 2},
		dataType : "JSON",
		success  :function(data){
			$.each(data, function(key,value){
				$('.showtable').append("<tr><td>"+value.id +"</td><td>"+value.name + "</td><td>"+value.email + "</td></tr>");
			});
		}
	});
});
</script>
</body>
</html>
