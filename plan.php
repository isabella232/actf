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
	$pageTitle 		= "ACTF Plans";
	$pageKeywords	= "Accessibility Tools Framework, accessibility, ACTF, Eclipse";
	$pageAuthor		= "ACTF Team";
	
	include('projectNav.php');
		include('rightCol.php');
	
	# End: page-specific settings
	#
		
		# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML


<div id="midcolumn">	
<p>
<i>Last updated: 4 December 2007</i>
</p>

<h1>Project Plan</h1>
<p>
This page will be updated soon.
</p>
<h2>4Q 2007</h2>
<ul>
 <li>Initial prototypes of exemplary tools on top of ACTF will be available. </li>
 <li>Start discussion about the roadmap.</li>
</ul>

<h2>1Q 2008</h2>
<ul>
 <li>Projected first release, which will include some of the components and exemplary tools/runtimes mentioned in the <a href="http://www.eclipse.org/proposals/actf">project proposal</a>. </li>
 <li>Process input from community to enhance functionality and documentation. </li>
</ul>

<h2>Future plans</h2>
<p>Enhancements currently under consideration include: </p>
 <ul>
 <li>Refinement of APIs</li>
 <li>Expand supported runtimes</li>
 <li>Documentation</li>
 <li>Support for W3C WCAG 2.0. </li>
 <li>Enhancing W3C WAI-ARIA-related functions. </li>
 </ul>

<h1>Release Schedule</h1>
<p>  
  <!--
  Here are some details of recent and upcoming ACTF releases.

  These are plotted on the
  <a href="http://www.eclipse.org/projects/timeline/">Eclipse timeline</a>.
  -->
  
</p>

<div class="homeitem3col">
	<h3>ACTF Release Schedule</h3>
	<p>
	Status: Milestone Release 0.1 Target 1Q 2008
	</p>
<!--    <ul>       
       <li>New Feature #1</li>
       <li>New Feature #2</li>
    </ul>
-->
</div>
<div class="homeitem3col">
	<h3>ACTF Exemplary Tools</h3>
	<p>
	Initial prototype versions will be available in 4Q 2007. 
	</p>
    <ul>
       <li>Accessibility Prove (AccProve) (MSAA/IAccessible2 inspection tool)</li>        
       <li>Accessibility Internet Browser for Multimedia (aiBrowser)</li>
    </ul>
    Please visit <a href="downloads.php">ACTF download page</a>.
</div>
	<hr class="clearer" />
</div>

$rightColumn

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
