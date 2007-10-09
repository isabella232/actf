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
	$pageTitle 		= "ACTF";
	$pageKeywords	= "Type, page, keywords, here";
	$pageAuthor		= "Type your name here";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
<H1>Accessibility Tools Framework (ACTF)</H1>
<P>The Accessibility Tools Framework (ACTF) is an incubation phase project 
that is a subproject of the Eclipse Technology Project.</P>
<P>The ACTF is a software framework which serves as an extensible infrastructure
upon which developers can build a variety of utilities that help to evaluate and
enhance the accessibility of applications and content for people with disabilities.
A collection of example utilities will also be provided which were created on
top of the framework such as compliance validation tools, assistive technology 
simulation  applications, usability visualization tools, unit-testing utilities, 
and alternative accessible interfaces for applications.  The ACTF infrastructure
and the utilities will be integrated into a single tooling  environment on top of
the Eclipse framework. The framework components will function cooperatively 
with each other and with other Eclipse projects to provide a comprehensive
development environment for creating accessible applications and content.
</P>
<P>For additional details about the ACTF project, please visit the <A 
href="http://www.eclipse.org/proposals/actf/">project proposal page</A>. More 
information will be available shortly. </P>
<H2>Source code migration</H2>
<P>The IBM development teams are currently working to move source code and 
resources to the ACTF Eclipse CVS repository. Obviously, this will be an 
ongoing process but initial components may appear as early as November-December 2007. </P>
<H2>Join the project</H2>You can join the project, <A 
href="https://dev.eclipse.org/mailman/listinfo/actf-dev">subscribing to the 
mailing-list </A>and start the discussion at <A 
href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.actf">the 
newsgroup</A>. We would like to hear from you! 
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
