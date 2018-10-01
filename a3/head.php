<?php 
function head_module($pageTitle) {
  $html = <<<"OUTPUT"
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<title>$pageTitle</title>
			<link href="css/style.css" rel="stylesheet" type="text/css" />
			<script src='alza.js'> </script>
		</head>
OUTPUT;
  echo $html;
}

?>