<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="<?php echo(csrf_token()); ?>" />
		
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

		<link href="/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="/css/main070816.css"/>


        <link href='https://fonts.googleapis.com/css?family=Lato:400,300italic' rel='stylesheet' type='text/css'>
    </head>

    <body class="page-login">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header>
            <div class="i-scholar">
                <img class="logo" src="images/logo.png" alt="ADTU logo"/>
                <span class="i-scholar__caption"> i-Scholar 2016</span>
            </div>
        </header>

        <main>

            <section class="o-content-box">

<!----display messages--------->
<?php if(session()->has('msg')){ $msg = array_flatten(session('msg')); }
if(count($errors) > 0){ $msg = $errors->all(); }
 ?>
<div class="alert alert-danger alert-dismissable" style="<?php if(empty($msg)){ echo('display:none'); } ?>">
<button aria-hidden="true" data-dismiss="alert" class="close" type="button"> x </button>
<span class="msg">
<?php 
	if(!empty($msg)){
		echo('<ul style="list-style:none">');
		foreach($msg as $message){
			echo('<li>'.$message.'</li>');
		}
		echo('</ul>');
	}
?>
</span>
</div>
<!----//display messages--------->

                <form method="post" action="/login">

                    <!--<h2 class="form-heading">Login</h2>-->
					<div class="o-field">
                        <label class="o-field__label">User ID</label>
                        <input class="o-field__input" type="text" name="uid" required/>
                    </div>

                    <div class="o-field">
                        <label class="o-field__label">Password</label>
                        <input class="o-field__input" type="password" name="password" required/>
                    </div>

                    <div class="o-field">
						<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <input class="o-field__input" type="submit" value="LOGIN" name="login"/>
                    </div>

                </form>

			<a href="/howto">FAQ</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#" onclick="zpopup()">Online Support</a>
        </section>


		<script src="/js/vendor/jquery-1.11.2.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js"></script>
<!--         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
<!--         <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.2.min.js"><\/script>')</script> -->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--
<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>-->
<script type="text/javascript">
function zpopup(){
	var url='https://v2.zopim.com/widget/livechat.html?key=47e3cZiOBZpxvClV1PFUv1YrMWF86hQj&mid=TBePkxv25KHnSn&lang=en&hostname=<?php echo($_SERVER['HTTP_HOST']); ?>&api_calls=%5B%5D';
	var zpopupWindow = window.open(
		url,'popUpWindow','height=500,width=400,left=0,top=0,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes');
}
</script>
    </body>
</html>
