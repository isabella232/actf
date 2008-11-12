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
	$pageTitle 		= "ACTF Documentation";
	$pageKeywords	= "Accessibility Tools Framework, accessibility, ACTF, Eclipse";
	$pageAuthor		= "ACTF Team";
	
	include('../projectNav.php');
		include('../rightCol.php');
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML


<div id="midcolumn">	

 <h1>ACTF Documentation</h1>
 <div class="homeitem3col">
	<h3>Documentation for developers who use ACTF</h3>
	<ul>       
       <li><a href="developers/ACTF.pdf">ACTF Getting Started</a></li>
    </ul>
 </div>
 <!--
 <div class="homeitem3col">
	<h3>Documentation for users of ACTF and ACTF tools</h3>

 </div>
 -->
 <div class="homeitem3col">
	<h3>Technical documentation for contributors/committers</h3>
	<p>Coming soon.</p>
 </div> 
</div>

$rightColumn

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
