<html>
<head>
<style type="text/css">
.browsers>img, .browsers>span{
	float:left;
}
</style>
</head>
<body>
<h1><?php if(isset($msg)){ echo($msg[0]); } ?></h1>

<h3>Download Browsers</h3>
<div class="browsers">
<a href="https://www.google.com/chrome/browser/desktop/"><img src="/images/chrome.jpg" alt="chrome"/><span>Google Chrome</span></a>

<a href="http://www.mozilla.org/firefox/new/"><img src="/images/firefox.jpg" alt="firefox"/><span>Mozilla Firefox</span></a>
</div>
</body>
</html>