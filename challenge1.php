<?php
function get_the_title(){
    return 'babababa';
} ?>

<!DOCTYPE html>
<html>
<head>
	<title>Change Title</title>
</head>
<body>
<?php
	echo '<h1 id="title"> '.str_replace("b","a",get_the_title()).'</h1></br>';
?>
<button onclick="change()">Change</button>

<script>
function change(){
	var str = document.getElementById('title').innerHTML;
	document.getElementById('title').innerHTML = str.replace(/a/g, "b")
}
</script>
</body>
</html>