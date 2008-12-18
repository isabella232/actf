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
	$pageTitle 		= "ACTF - aDesigner";
	$pageKeywords	= "Accessibility Tools Framework, aDesigner, accessibility, ACTF, Eclipse";
	$pageAuthor		= "Kentarou FUKUDA";
	
	include('../../../projectNav.php');
	include('../../../rightCol.php');
	include('../../basic_files/buildReleaseTable.php');
	
	$releaseTable = generateReleaseTable('tools', 'aDesigner');
	
	# End: page-specific settings
	#
	
	#
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="midcolumn">
	<h1>ACTF aDesigner</h1>
	<p><ul>
	<li><a href="#overview">Overview</a></li>
	<li><a href="#downloads">aDesigner Releases</a></li>
	<li><a href="#quickStart">Getting started</a></li>
	<li><a href="build.php">Building aDesigner</a></li>
	<li><a href="#requirements">System Requirements</a></li>
	</ul></p>

	<h2><a name="overview">Overview</a></h2>
	<p>aDesigner is a disability simulator that helps designers ensure that 
	their content and applications are accessible and usable by the visually impaired. 
	</p>
	<p>Voice browsers and screen readers read aloud the text on Web pages 
	and are used by visually impaired people. However, these devices are less 
	effective with certain kinds of content, such as highly graphical material. 
	Web developers can use aDesigner to test the accessibility and usability of Web 
	pages for low-vision and blind people. 
	</p>
	<p>
	aDesigner also helps users to check accessibility of ODF documents and Flash content. 
	It also has accessibility information (MSAA/IA2) inspection functions. 
	</p>
	
	<h2><a name="downloads">aDesigner Releases</a></h2>
	<p>All downloads are provided under the terms and conditions of the 
	<a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a>.
	</p>
	
	$releaseTable
	
	<h2><a name="quickStart">Getting started</a></h2>
	<p>ACTF aDesigner is an Eclipse RCP application. Download and unpack a zip file, 
	and execute aDesigner.exe in the aDesigner folder. Online help is available from 
	Help menu.
	</p>
	
	<h2><a name="requirements">System Requirements</a></h2>
	<p><ul>
	 <li>Operating Systems<BR>
	 <UL>
	  <LI>Windows&#174; XP or above
	 </UL>
  	 <li>Hardware
	 <UL>
	  <LI>50MB disk space for installation
	  <LI>100MB disk space (150MB recommended)
	  <LI>512MB memory (1GB+ recommended)
	 </UL>
	 <LI>Software
	 <UL>
	  <li>Java Runtime Environment (JRE) 5.0 or above</li>
	  <li>Internet Explorer 6.0 or above</li>
	  <li>For Flash Accessibility mode:  Adobe&reg; Flash Player, Version 8 or above</li>
	  <li>For OpenDocument Accessibility mode:  OpenOffice.org 2.x (2.1.0 or above)</li>
  	 </UL>
	</ul>
	</p>
</div>

$rightColumn

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
	