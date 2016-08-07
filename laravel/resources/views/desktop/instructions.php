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
<style>
.c-cam-button-disabled{
	cursor: not-allowed;
	background-color: #ccc;
}

.c-cam-button-disabled:hover{
    background-color: #ccc;
}

#photo-box { position: relative }
#my_camera { position: absolute; border: 1px solid #ccc; display: block; margin: 0 0 0 0; vertical-align: top; }
#my_result { position: absolute; border: 1px solid #ccc; display: block; vertical-align: top;}

.page-heading{font-size: 1.5em}

/*------Spinner Loader----------*/
.loader {
    border: 5px solid #f3f3f3; /* Light grey */
    border-top: 5px solid #000000; /* Black */
    border-radius: 50%;
    width: 100px;
    height: 100px;
    animation: spin 2s linear infinite;	
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

#dimScreen
{
    position:fixed;
    padding:0;
    margin:0;

    top:0;
    left:0;

    width: 100%;
    height: 100%;
    background:rgba(255,255,255,0.5);
	
	z-index:9999;
}
/*-----------//spinner loader----------*/
</style>
    </head>
    <body class="page-instructions">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<div class="alert alert-danger alert-dismissable" style="display:none">
<button aria-hidden="true" data-dismiss="alert" class="close" type="button"> x </button>
<span class="msg"></span>
</div>
        <div class="o-field photo-container">
                        <label class="o-field__label">Welcome! <?php echo($name); ?></label>
						<!--<form method="POST" enctype="multipart/form-data" action="/getphoto" id="cameraForm">
							<input name="photo" id="photo" type="text" class="o-field__input" value=""/>
							<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
						</form>-->                      

                        <div>
                            <div id="photo-box" class="photo input-field"> <!--Photo-->
								<div id="my_camera"></div>
								<div id="my_result"></div>
                            </div>
                             <div id="camera-button" class="c-cam-button" type="button">Snap</div>
                        </div>

        </div>

        <main>
			
            <section class="container" style="padding-bottom:2em">
		<h1 class="page-heading">Welcome to the i-Scholar online exam test window. Please read the following instructions very carefully before you begin:</h1>

                <p>
                    <span>⚫</span>
                    <span>
                        There are a total of 60 questions to be completed in 60 minutes (one hour)
                    </span>

                </p>

                <p>
                    <span>⚫</span>
                    <span>
                        All questions are compulsory
                    </span>
                </p>

                <p>
                    <span>⚫</span>
                    <span>
                        Choose the right answer from given options
                    </span>

                </p>

                <p>
                    <span>⚫</span>
                    <span>
                        You will be awarded 2 marks for each correct answer
                    </span>
                </p>

                <p>
                    <span>⚫</span>
                    <span>
                        There is no negative marking
                    </span>

                </p>

                <p>
                    <span>⚫</span>
                    <span>
                        The clock has been set at the server and countdown timer displayed at the top of the question paper will update you on remaining time to complete on every minute
                    </span>
                </p>
				<p>
                    <span>⚫</span>
                    <span>
                        You must click on the <b>“SAVE”</b> option below to save your answer for each attempted question
                    </span>
                </p>
				<p>
                    <span>⚫</span>
                    <span>
                        You can unmark your answer by clicking on the <b>"CLEAR"</b> option below
                    </span>
                </p>
				<p>
                    <span>⚫</span>
                    <span>
                        You can mark a question for reviewing it later by clicking on the <b>"MARK"</b> option below 
                    </span>
                </p>
				<p>
                    <span>⚫</span>
                    <span>
                        By clicking on top right of your window, you will be able to view the total number of questions attempted or marked for later reviewing 
                    </span>
                </p>
				<p>
                    <span>⚫</span>
                    <span>
                        You can use rough sheets while taking the test
                    </span>
                </p>
				<p>
                    <span>⚫</span>
                    <span>
                        <b>DO NOT USE CALCULATOR, MOBILE PHONES, LOG TABLES, DICTIONARIES</b> or any other printed online reference material during the test
                    </span>
                </p>
				<p>
                    <span>⚫</span>
                    <span>
                        After completing your test paper, you will find a <b>Rate Your Exam</b> page where you can rate your exam experience alongwith your brief comments if any or you can skip and click on the <b>SUBMIT</b> button
                    </span>
                </p>
				<p>
                    <span>⚫</span>
                    <span>
                        Once clicked on the <b>SUBMIT</b> button, you cannot redo the test
                    </span>
                </p>
				<p>                    
                    <span>
                        <b>Goodluck for the Exam</b>
                    </span>
                </p>
				
				<div class="form-group checkbox well">
					<label>
					<input type="checkbox" id="agree">I have read and understood all the instructions. All my computer hardwares, including webcam, are in proper working condition. I agree that in case of not adhering to the listed instructions, I will be disqualified from the exam.</label>
				</div>
		  
                <a href="#" id="btn-start-exam" class="btn btn-success btn-lg">Start exam</a>	


        </section>
		</main>

<div id="dimScreen" style="display:none">
<div class="loader"></div>
</div>
        <script src="/js/vendor/jquery-1.11.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

<!--         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
<!--         <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.2.min.js"><\/script>')</script> -->

        <script src="/js/plugins.js"></script>
        <script src="/js/main.js"></script>
		<script type="text/javascript" src="/js/webcam.min.js"></script>

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
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=' +screen.height+ ',width=' +screen.width+ ',left=0,top=0,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=no');	
}


$(document).ready(function(){
	var photoUpload = false;
	var deviceFound = false;
	
	camera_button = document.getElementById('camera-button');
	video = document.getElementById('my_camera');
	canvas = document.getElementById('my_result');
	
	function init(){
		
		/*---force_flash: true---*/
		
		Webcam.set({
			width: 240,
			height: 180,
			image_format: 'jpeg',
			jpeg_quality: 60,
			force_flash: true,
			flashNotDetectedText: 'No Adobe Flash Player. <a href="https://get.adobe.com/flashplayer/" target="_blank">Download latest version here.</a>'
		});
		
		Webcam.attach( '#my_camera' );
		
		Webcam.on( 'live', function() {
			deviceFound = true;
		});
		
		Webcam.on( 'error', function(err) {
			disableSnap(err.message);
		});
		
	}
	
	init();	
	
			
	function take_snapshot() {
		Webcam.snap( function(data_uri) {
			document.getElementById('my_result').innerHTML = '<img src="'+data_uri+'"/>';
			
			var raw_image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');
			
			$.get('/getphoto', {photo:raw_image_data}, function(data,status,xhr){
				photoUpload = true;
				Webcam.reset();
			});			
			
		} );
	}
				

	$(camera_button).on('click', function(e){
         e.preventDefault();
		if(deviceFound){
			if( $(camera_button).html() == 'Snap' ){
				
				$(canvas).css("display","block");
						
				take_snapshot();
				
                $(camera_button).html('Re-Snap');
            }
			
			else if ( $(camera_button).html() == 'Re-Snap' ) {
				init();
				
                $(canvas).css("display","none");

                $(camera_button).html('Snap');
            }
		}
		
	});
				
	function disableSnap(error){
		$('.alert .msg').text(error);
		$('.alert').show();
		$(camera_button).addClass('c-cam-button-disabled');
	}
				
	$('#btn-start-exam').on('click', function(e){
		e.preventDefault();
		if(!photoUpload){
			alert("Please snap your photo!");
			return false;
		}
		if(!$('#agree').prop('checked')){
			alert('Please agree to our instructions.');
			return false;
		}
		
		newPopup('/questions');
		window.location.replace('/thankyou');
	});
});

/*----------for spinner loader----------*/
var $loading = $('.loader');
var $dimScreen = $('#dimScreen');
jQuery.fn.center = function ()
{
	this.css("position","fixed");
	this.css("top", ($(window).height() / 2) - (this.outerHeight() / 2));
	this.css("left", ($(window).width() / 2) - (this.outerWidth() / 2));
	return this;
}
$(document).ready(function(){
	$loading.center();
});
$(window).resize(function(){
	$loading.center();
});
$(document)
  .ajaxStart(function () {	
	$dimScreen.show();
  })
  .ajaxStop(function () {
    $dimScreen.hide();
  });
/*----------//for spinner loader----------*/
        </script>
    </body>
</html>