<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body><!-- Header start -->
<div id="Header">
<div>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tbody>
        <tr>
            <td width="100%">
            <table border="0" cellspacing="0" cellpadding="5" width="100%">
                <tbody>
                    <tr>                      
                        <td valign="bottom"><font color="#666666" size="2" face="verdana, sans-serif">
                         <img border="0" alt="GetKraft" src="<?php echo(config('settings.domain').'/images/'.config('settings.get_textlogo')); ?>" >
						</td>
                    </tr>
                </tbody>
            </table>
            </td>
        </tr>
    </tbody>
</table>
</div>
</div>
<div id="Title">
<div>
<table border="0" cellspacing="0" cellpadding="0" width="100%" bgcolor="#ffaf4b">
    <tbody>
        <tr>
            <td valign="top" width="8"></td>
            <td valign="bottom" width="100%">
            <h1 style="margin-top: 2px; font-family: arial; margin-bottom: 2px; color: #ffffff; font-size: 14pt; font-weight: bold"><font size="4" face="Arial, Verdana"><strong>Reset your password</strong></font></h1>
            </td>
            <td valign="top" width="8" align="right"></td>
        </tr>
        <tr>
            <td bgcolor="#ff920a" height="4" colspan="3"><spacer></spacer></td>
        </tr>
    </tbody>
</table>
</div>
</div>
<!-- Header end --><div id="EmailBody"><br /><br />
<font size="2" face="Arial, Verdana">
Click here to reset your password: <a href="{{ url('password/reset/'.$token) }}">{{ url('password/reset/'.$token) }}</a>
</font><br /></div><!-- Footer begin -->
<div id="Footer"><hr style="height: 1px" />
<table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tbody>
        <tr>
            <td width="100%"><font color="#666666" size="2" face="Arial, Verdana">
            <br />
            Copyright &copy;2012 GetKraft.com. All Rights Reserved. GetKraft.com and the GetKraft.com logo are trademarks of GetKraft.com. GetKraft.com is located at <?php echo(config('settings.ofc_address')); ?><br />
            </font></td>
        </tr>
    </tbody>
</table>
</div>
<!-- Footer end -->
</body>
</html>
