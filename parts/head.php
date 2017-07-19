<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
	<?PHP
	if(isset($_SESSION['title'])){
		echo $_SESSION['title'];
	}
	?>
	</title>

    <!-- Bootstrap -->
    <link href="<?PHP echo $_SESSION['site'] . '/css/bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?PHP echo $_SESSION['site'] . '/css/theme.css'?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?PHP echo $_SESSION['site'] . '/js/bootstrap.min.js'?>"></script>
    <script src="<?PHP echo $_SESSION['site'] . '/js/theme.js'?>"></script>
</head>