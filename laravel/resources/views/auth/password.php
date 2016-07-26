<?php
	$meta_keywords = config('settings.meta_keywords');
	$meta_description = config('settings.meta_description');
	$title = 'Recover Password | '.config('settings.title');
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo($title); ?></title>
<?php include(base_path('resources/views/desktop/meta.php')); ?>
</head>
<body>

<?php include(base_path('resources/views/desktop/header.php')); ?>

<div class="container" style="padding-top:10px;">

<!-- recover password -->

<?php
	if (session('status')){ ?>
		<div class="alert alert-success"><?php echo(session('status')); ?></div>
<?php	}

if(count($errors) > 0){ $msg = $errors->all(); }
 ?>
<div class="alert alert-danger alert-dismissable" style="<?php if(empty($msg)){ echo('display:none'); } ?>">
<button aria-hidden="true" data-dismiss="alert" class="close" type="button"> x </button>
<span class="msg">
<?php 
	if(!empty($msg)){
		echo('<ul style="margin:0">');
		foreach($msg as $errmsg){
			echo('<li>'.$errmsg.'</li>');
		}
		echo('<li>If you are facing any problem you can <a href="/contactus">contact us</a>.</li>');
		echo('</ul>');
	}
?>
</span>
</div>

		<h4>Forgotten your password?</h4>
		<p>To reset your password, type the full email address (or) phone no. that you use to 
		log-in.</p>
		<form id="forgotPass" method="POST" action="<?php echo(url('/password/email')); ?>" style="margin-top:1em">
		<div class="form-group">
			<label for="email">E-Mail:</label>
			<input name="email" type="email" class="form-control" id="email" placeholder="Email" value="<?php echo(Request::old('email')); ?>">
		</div>
		<p>(or)</p>
		<div class="form-group">
			<label for="phone">Phone No:</label>
			<input name="phone" type="text" class="form-control" id="phone" placeholder="Phone no" value="<?php echo(Request::old('phone')); ?>">
		</div>
		<input type="hidden" name="_token" value="<?php echo(csrf_token()); ?>">
		<button class="btn btn-primary" name="action" type="submit" value="RECOVER" style="padding:8px">Send Password Reset Link</button>
		</form>

<!-- //recover password -->
</div>

<?php include(base_path('resources/views/desktop/footer.php')); ?>
</body>
</html>
