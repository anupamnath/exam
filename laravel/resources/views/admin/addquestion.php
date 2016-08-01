<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Online Examination System - Add Question</title>

<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/datepicker3.css" rel="stylesheet">
<link href="/css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="/js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<?php include(base_path('resources/views/admin/navbar.php')); ?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add Student</h1>
<!----display messages--------->
<?php if(session()->has('msg')){ $msg = array_flatten(session('msg')); }
if(count($errors) > 0){ $msg = $errors->all(); }
 ?>
<div class="alert alert-warning alert-dismissable" style="<?php if(empty($msg)){ echo('display:none'); } ?>">
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
				<form role="form" method="post" action="/admin/addquestion">
					<div class="form-group">
						<label>Question Set</label>
						<div class="radio">
							<label>
								<input type="radio" name="question_set" value="set_1">Set 1
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="question_set" value="set_2">Set 2
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="question_set" value="set_3">Set 3
							</label>
						</div>
					</div>
					
					<div class="form-group">
						<label>Question No</label>
						<input class="form-control" placeholder="Question No" name="question_no" type="text">
					</div>		
					<div class="form-group">
						<label>Section</label>
						<input class="form-control" placeholder="Section" name="section" type="text">
					</div>
					<div class="form-group">
						<label>Question</label>
						<textarea class="form-control textbox" rows="7" name="question"></textarea>
					</div>
					<div class="form-group">
						<label>Answer A</label>
						<textarea class="form-control textbox" rows="7" name="a"></textarea>
					</div>
					<div class="form-group">
						<label>Answer B</label>
						<textarea class="form-control textbox" rows="7" name="b"></textarea>
					</div>
					<div class="form-group">
						<label>Answer C</label>
						<textarea class="form-control textbox" rows="7" name="c"></textarea>
					</div>
					<div class="form-group">
						<label>Answer D</label>
						<textarea class="form-control textbox" rows="7" name="d"></textarea>
					</div>
					<div class="form-group">
						<label>Correct Option</label>
						<div class="radio">
							<label>
								<input type="radio" name="correct_option" value="a">A
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="correct_option" value="b">B
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="correct_option" value="c">C
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="correct_option" value="d">D
							</label>
						</div>
					</div>
					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
				
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->

	<script src="/js/jquery-1.11.1.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/tinymce/tinymce.min.js"></script>
	<script type="text/javascript">
	tinymce.init({
		mode : "specific_textareas",
		editor_selector : "textbox",
		themes: "advanced",
		relative_urls:false,
		plugins: [
		"advlist autolink lists link image charmap print preview anchor",
		"searchreplace visualblocks code fullscreen",
		"insertdatetime media table contextmenu paste textcolor"
		],
		external_plugins: {
			"jbimages": "/js/tinymce/plugins/jbimages/plugin.min.js"
		},
		toolbar1: "undo redo | bold italic underline | fontselect |  fontsizeselect | forecolor backcolor",
		toolbar2: "alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | jbimages"
	});
	</script>
</body>

</html>
