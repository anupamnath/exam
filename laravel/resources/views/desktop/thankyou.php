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
		<link rel="stylesheet" href="/css/normalize.min.css">
        <link rel="stylesheet" href="/css/main070816.css">

        <script src="/js/vendor/modernizr-2.8.3.min.js"></script>

        <link href='https://fonts.googleapis.com/css?family=Lato:400,300italic' rel='stylesheet' type='text/css'>

    </head>
    <body class="page-instructions">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <main>

            <section class="o-content-box">
			
                <h1 class="page-heading"><center>Rate Your Exam</center></h1>
			<form method="post" action="/rating" role="form" style="background-color:#f5f5f5">
                <p>
                    <span>⚫</span>
                    <span>
                        How would you like to rate your online examination experience?
                    </span>
					<div class="form-group">
									<div class="radio">	
										<label>
											<input type="radio" name="rating" id="optionsRadios1" value="5">Very Good
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="rating" id="optionsRadios2" value="4">Good
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="rating" id="optionsRadios3" value="3">Average
										</label>
									</div>
									<div class="radio">	
										<label>
											<input type="radio" name="rating" id="optionsRadios1" value="2">None of the above
										</label>
									</div>
					</div>	

                </p>              
				<br/>
                <p>
                    <span>⚫</span>
                    <span>
                       What improvements would you suggest?
                    </span>
						<div class="form-group">
							<textarea name="review" class="form-control textbox" rows="3"placeholder="Enter max 50 words..."></textarea>
						</div>
							
                </p>

               <h3><center>Wish You very best of luck for your Results!!!</center></h3>
			   
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <center><button type="submit" class="btn btn-info btn-lg">Submit</button></center>
			</form>

        </section>


        <script src="/js/vendor/jquery-1.11.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

<!--         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
<!--         <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.2.min.js"><\/script>')</script> -->

        <script src="/js/plugins.js"></script>
        <script src="/js/main.js"></script>

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

    </body>
</html>
