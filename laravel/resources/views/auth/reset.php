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

		<h4>Reset your password</h4>
		<form id="forgotPass" method="POST" action="<?php echo(url('/password/reset')); ?>" style="margin-top:1em">
		<div class="form-group">
			<label for="email">E-mail:</label>
			<input name="email" type="email" class="form-control" id="email" placeholder="Email" value="<?php echo(Request::old('email')); ?>">
		</div>
		<div class="form-group">
			<label for="password">New Password:</label>
			<input name="password" type="password" class="form-control" id="password" placeholder="New Password">
		</div>
		<div class="form-group">
			<label for="password_confirmation">Confirm Password:</label>
			<input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Confirm Password">
		</div>
		<input type="hidden" name="token" value="<?php echo($token); ?>">
		<input type="hidden" name="_token" value="<?php echo(csrf_token()); ?>">
		<button class="btn btn-primary" name="action" type="submit" value="RECOVER">Reset Password</button>
		</form>

<!-- //recover password -->
</div>

<?php include(base_path('resources/views/desktop/footer.php')); ?>
</body>
</html>
