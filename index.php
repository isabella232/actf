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
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "ACTF Project Home";
	$pageKeywords	= "Accessibility Tools Framework, accessibility, ACTF, Eclipse";
	$pageAuthor		= "ACTF Team";
	
	include('projectNav.php');
		include('rightCol.php');
	
	# End: page-specific settings
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
<H1>Accessibility Tools Framework (ACTF)</H1>
<P>The Accessibility Tools Framework (ACTF) is an incubation phase project 
that is a subproject of the Eclipse Technology Project.</P>
<P>ACTF is a framework that serves as an extensible infrastructure
upon which developers can build a variety of utilities that help to evaluate and
enhance the accessibility of applications and content for people with disabilities.
A collection of example utilities will also be provided which were created on
top of the framework such as compliance validation tools, assistive technology 
simulation  applications, usability visualization tools, unit-testing utilities, 
and alternative accessible interfaces for applications.  The ACTF componentry 
and the utilities will be integrated into a single tooling  environment on top of
the Eclipse framework. The framework components will function cooperatively 
with each other and with other Eclipse projects to provide a comprehensive
development environment for creating accessible applications and content.
</P>
<P>For additional details about the ACTF project, please visit the <A 
href="http://www.eclipse.org/proposals/actf/">project proposal page</A>.</P>
<H2>Release 0.7 (Galileo) is now available!</H2>
<P>ACTF 0.7 including Visualization SDK is now available.
Please visit 
<a href="downloads/index.php">downloads page</a> and get ACTF components!</p>
<p>
<a href="./newandnoteworthy/07/actf-07.html">ACTF 0.7 New and Noteworthy</a>
</p>


<H2>Join the Project</H2>
<p>You can join the project, 
<A href="https://dev.eclipse.org/mailman/listinfo/actf-dev">subscribe to the 
mailing-list, </A>
and discuss project issues in 
<A href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.actf">
the newsgroup</A>. 
We would like to hear from you! 
</div>

$rightColumn
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
