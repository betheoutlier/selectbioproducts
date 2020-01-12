<?php
// PHP File Tree Demo
// For documentation and updates, visit http://abeautifulsite.net/notebook.php?article=21

// Main function file
include("php_file_tree.php");

?>
<HTML>
<HEAD>
<meta http-equiv="Content-Language" content="en-us">
<META NAME="Author" CONTENT="Foss Familj">
<META NAME="Generator" CONTENT="Jasc Paint Shop Pro 7">
		<title>Select BioProducts - Document Center</title>
		<link href="styles/default/default.css" rel="stylesheet" type="text/css" media="screen" />
<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
  		<script src="php_file_tree_jquery.js" type="text/javascript"></script>

</HEAD>
<BODY leftmargin="0" topmargin="0" background="../backgroundinner2.jpg" link="#003366">

<!-- Begin Table -->
<TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0" WIDTH="1000">

<TR>
<TD WIDTH="1" HEIGHT="36">
	<IMG NAME="blank" SRC="../blank.gif" WIDTH="1" BORDER="0"><IMG NAME="innerheader0" SRC="../innerheader.jpg" WIDTH="1000" HEIGHT="192" BORDER="0" USEMAP="#innerheader">

<MAP NAME="innerheader">
<AREA SHAPE="rect" COORDS="382,161,439,188" HREF="../index.html">
<AREA SHAPE="rect" COORDS="449,158,523,192" HREF="../products.html">
<AREA SHAPE="rect" COORDS="544,158,627,192" HREF="../ordering.html">
<AREA SHAPE="rect" COORDS="640,159,775,192" HREF="../document-center/">
<AREA SHAPE="rect" COORDS="790,159,890,192" HREF="../contact.html">
<AREA SHAPE="rect" COORDS="550,5,753,41" HREF="../all.html">
<AREA SHAPE="rect" COORDS="313,96,429,136" HREF="../register.html">
<AREA SHAPE="rect" COORDS="314,139,434,157" HREF="../service.html">
<AREA SHAPE="rect" COORDS="309,21,495,95" HREF="../index.html">
</MAP></TD>
</TR>

</table><table height="216">
<TR>
<TD ROWSPAN="1" COLSPAN="8" WIDTH="1000" backround="1a_7x1.jpg" valign="top">
			<table border="0" width="100%" cellspacing="10" cellpadding="15" id="table1">
				<tr>
					<td>
					
					
							<h1>Document Center</h1>
				
		<?php
		
		// This links the user to http://example.com/?file=filename.ext
		//echo php_file_tree($_SERVER['DOCUMENT_ROOT'], "http://example.com/?file=[link]/");

		// This links the user to http://example.com/?file=filename.ext and only shows image files
		//$allowed_extensions = array("gif", "jpg", "jpeg", "png");
		//echo php_file_tree($_SERVER['DOCUMENT_ROOT'], "http://example.com/?file=[link]/", $allowed_extensions);
		
		// This displays a JavaScript alert stating which file the user clicked on
		echo php_file_tree("files/", "http://selectbioproducts.com/document-center/[link]");
		
		?>
					
					
					
					
					
		</td>
				</tr>
			</table>
			</TD>
<TD WIDTH="1" HEIGHT="212">
	<IMG NAME="blank" SRC="../blank.gif" WIDTH="1" BORDER="0"></TD>
</TR></table>
<table width="100%" background="../bottom.jpg">
<TR>
<TD ROWSPAN="1" COLSPAN="1" WIDTH="83" valign="top">
	<p align="center">
	<a href="../index.html">
	<img border="0" src="../home.jpg" width="69" height="66"></a></TD>
<TD ROWSPAN="1" COLSPAN="1" WIDTH="72" valign="top">
	<a href="contact.html">
	<img border="0" src="../contact.jpg" width="76" height="66"></a></TD>
<TD ROWSPAN="1" COLSPAN="1" WIDTH="143" valign="top">
	<a href="map.html">
	<img border="0" src="../map.jpg" width="67" height="66"></a></TD>
<TD ROWSPAN="1" COLSPAN="5" WIDTH="702">
	<p align="center"><i><b><font size="1" face="Arial" color="#808080">
	<br>
	Select BioProducts &copy; </font></b></i><font size="1" face="Arial"><i><b><font color="#808080">All Rights Reserved 2014</font></b></i><br>
	<font color="#808080">Select BioProducts<br>
	PO Box 6221<br>
	Edison, NJ 08818-6221<br>
	<a href="mailto:sales@selectbioproducts.com"><font color="#003366">
	sales@selectbioproducts.com</font></a></font></font><font face="Arial"><br>
&nbsp;</font></TD>
</TR></TABLE>
<!-- End Table -->
	</body>
	
</html>
