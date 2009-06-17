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
	<h3>Documentation for developers who use/extend ACTF</h3>
	<ul>       
       <li><div>October 12 2008</div><a href="developers/ACTF.pdf">ACTF Getting Started</a></li>
    </ul>
 </div>
 <div class="homeitem3col">
	<h3>Documentation for users of ACTF SDKs/runtimes/tools</h3>
	<p>note: many of ACTF SDKs/runtimes/tools includes online documentation. Please use Help menu to read it.</p>
	<ul>
       <li><div>October 08 2008</div>
       Tool: <a href="users/aDesigner/docs/">ACTF aDesigner (v0.5) Help</a> 
       (Japanese version is available from <a href="users/aDesigner/ja/docs/">here</a>.)
       </li>
       <li><div>October 08 2008</div>
       Tool: <a href="users/aiBrowser/docs/">ACTF aiBrowser (v0.5) Help</a>
       (Japanese version is available from <a href="users/aiBrowser/ja/docs/">here</a>.)
       </li>
	</ul>	
 </div>
 <div class="homeitem3col">
	<h3>Technical documentation for contributors/committers</h3>
	<p>Coming soon.</p>
 </div> 
 <div class="homeitem3col">
	<h3>Presentations</h3>
	<ul>
	   <li><div>June 16 2009</div>
	   <img border="0" src="http://live.eclipse.org/files/ECLP_webinar.gif" alt="">Eclipse Webinar -
	   <a href="http://live.eclipse.org/node/748">Accessibility Tools Framework (ACTF)</a>
	   </li>	   
	   <li><div>March 20 2008</div>
	   EclipseCon 2008 (long talk) - 
	   <a href="http://www.eclipsecon.org/2008/sub/attachments/ACTF_Visualization_Engines_and_Components_for_Alternative_Interfaces.pdf">
	   ACTF Visualization Engines and Components for Alternative Interfaces</a>
	   </li>
	   <li><div>March 18 2008</div>
	   EclipseCon 2008 (short talk) - 
	   <a href="http://www.eclipsecon.org/2008/sub/attachments/What_is_the_Accessibility_Tools_Framework.pdf">
	   What is the Accessibility Tools Framework?</a>
	   </li>
	</ul>
 </div> 
 
</div>

$rightColumn

EOHTML;

	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="docs.css"/>' . "\n");

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
