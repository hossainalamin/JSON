<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="30">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>
	<div class="header"><h1>JSON</h1></div>
	<div class="subheader"><h2>JSON READ DATA</h2></div>
	<div class="showdata"></div>
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
				$('.showdata').append(value.id +" "+value.title + "<br>");
			});
		}
	);
});
</script>
</body>

</html>
