<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title><?php echo $title;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo $title;?>">
<meta name="author" content="Luke">

<!-- CSS -->
<link href="styles/bootstrap-3.3.5-dist/css/bootstrap.css"
	rel="stylesheet">
<link href="styles/bootstrap-3.3.5-dist/css/bootstrap-responsive.css"
	rel="stylesheet">
<link href="styles/web_app_style.css" rel="stylesheet">
</head>

<body>
	<div id="wrap">
		<div class="navbar navbar-fixed-top navbar-inverse">
			<div class="navbar-inner">
				<div class="container">
					<a class="brand" href="#"> <?php echo $date;?></a>
					<form class="navbar-form pull-right">
						<input class="span2 form-control" type="text" placeholder="Email">
						<input class="span2 form-control" type="password"
							placeholder="Password">
						<button type="submit" class="span1 btn btn-primary btn-xm">Sign in</button>
					</form>
				</div>
			</div>
		</div>

		<div class="hero-unit">
			<h1><?php echo $quote;?></h1>
			<h2>The list of users is:</h2>

			<div class="row">
				<div class="col-md-3">
				<?php
				$ulList = "<ul>";
				foreach ( $userList as $recordNumber => $row ) {
					$ulList .= "<div>";
					$ulList .= " <label> &nbsp; $row[name] $row[surname] </label> &nbsp;";
					
					// delete form
					$ulList .= " <form class='pull-left' action='index.php' method='get'>";
					$ulList .= " <input type='submit' class='btn btn-danger btn-xs' value='X'>";
					$ulList .= " <input type='hidden' name='action' value='delete'>";
					$ulList .= " <input type='hidden' name='idUser' value='$row[id]'>";
					$ulList .= "</form>";
					
					// update form
					$ulList .= " <form  class='pull-left' action='index.php' method='get'>";
					$ulList .= " <input type='submit' class='btn btn-primary btn-xs' value='Update'>";
					$ulList .= " <input type='hidden' name='action' value='updateUser'>";
					$ulList .= " <input type='hidden' name='idUser' value='$row[id]'>";
					$ulList .= "</form> ";
					$ulList .= "</div>";
				}
				$ulList .= "</ul>";
				echo $ulList;
				?>
				</div>
				<div class="col-md-3">
				<?php
				if ($isUpdateUserFormVisible) {
						include ("template_existing_user.php");
				} else
					include ("template_new_user.php");
				
				?>
				</div>
			</div>

			<div id="push"></div>
		</div>
		<div id="footer">
			<div class="container"><?php echo $footer;?></div>
		</div>

</body>
</html>