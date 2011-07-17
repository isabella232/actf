<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "ACTF - miChecker build instruction";
	$pageKeywords	= "Accessibility Tools Framework, miChecker, accessibility, ACTF, Eclipse";
	$pageAuthor		= "Kentarou FUKUDA";
	
	header("Content-Type: text/html;charset=UTF-8");
	
	include('../../../projectNav.php');
	include('../../../rightCol.php');
		
	# End: page-specific settings
	#
	
	#
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="midcolumn">
	<h1>About miChecker</h1>
	<p>miChecker is a support tool for Web accessibility evaluation that developed on top of ACTF SDK. 
	 It was developed by the Japanese Ministry of Internal Affairs and Communications (MIC) to support Web accessibility improvements in Japanese government offices.
     In addition to supporting accessibility evaluation work, the tool is designed to support learning Web accessibility through their work. 
	 To download this tool, please visit <a href="http://www.soumu.go.jp/main_sosiki/joho_tsusin/b_free/miChecker_download.html">miChecker download page (in Japanese)</a>. (Jump to MIC Web site).
	 </p>
	 <p>
	 MIC contributed the source code and documentation of miChecker to ACTF to continue the open and transparent development into the future.
     </p>
	
	<h1>miChecker build instruction</h1>
	<p>To build a miChecker, please follow instructions below.</p>
	<p><a href="miChecker_development.pdf">miChecker build instruction (PDF format)</a>	
	</p>
	
	<div style="text-align:right">
	<a href="build_ja.php">日本語のガイド</a>
	</div>
	
</div>

$rightColumn

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
	