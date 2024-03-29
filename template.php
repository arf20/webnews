<?php
/*		
	This PHP script is licensed under the GPL

	Author: Terence Yim
	E-mail: chtyim@gmail.com
	Homepage: http://web-news.sourceforge.net
*/

	ob_start();
?>
<html>
<head>
	<style type="text/css">
		A {text-decoration: none; }
		A:hover {text-decoration: underline; color: <?php echo $over_link_color; ?>;}
	</style>
	<title><?php echo $messages_ini["text"]["title"]?></title>
</head>
<body bgcolor="#ffffff" text="#000000" topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0" <?php if (isset($on_load_script)) {echo "onLoad=\"$on_load_script\"";} ?>>
<table cellpadding="0" border="0" align="center" width="95%">
	<tr bgcolor="<?php echo $primary_color; ?>">
		<th>
			<font face="<?php echo $font_family; ?>" size="+1"><?php echo $messages_ini["text"]["header1"]; ?>
			<br></font>
			<font face="<?php echo $font_family; ?>" size="<?php echo $font_size; ?>"><?php echo $messages_ini["text"]["header2"]; ?></font>
		</th>
	</tr>
	<tr>
		<td>
<?php
			include($content_page);
?>
		</td>
	</tr>
</table>
</body>
</html>

<?php
	ob_end_flush();
?>
