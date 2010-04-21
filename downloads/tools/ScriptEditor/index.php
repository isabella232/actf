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
	$pageTitle 		= "ACTF - ScriptEditor";
	$pageKeywords	= "Accessibility Tools Framework, ScriptEditor, accessibility, ACTF, Eclipse, audio description, multimedia";
	$pageAuthor		= "Kentarou FUKUDA";
	
	include('../../../projectNav.php');
	include('../../../rightCol.php');
	include('../../basic_files/buildReleaseTable.php');
	
	$releaseTable = generateReleaseTable('tools', 'ScriptEditor');
	
	# End: page-specific settings
	#
	
	#
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="midcolumn">
	<h1>ACTF ScriptEditor</h1>
	<p><ul>
	<li><a href="#overview">Overview</a></li>
	<li><a href="#downloads">aiBrowser Releases</a></li>
	<li><a href="#quickStart">Getting started</a></li>
	<li><a href="build.php">Building aiBrowser</a></li> 
	<li><a href="#requirements">System Requirements</a></li>
	</ul></p>

	<h2><a name="overview">Overview</a></h2>
	<p>The use of multimedia content has increased dramatically over the last 
	few years, but people with limited or no vision have not been able to fully 
	enjoy the benefits of these advances. For example, there are so many movies on the Internet,
	however, almost none of them have audio descriptions.
	</p>
	<p>The ACTF ScriptEditor aims to provide an environment to easily edit audio descriptions for these movies, 
	and it also tries to reduce cost of audio description by using audio synthesis.
	<p/>
	
	<h2><a name="downloads">ScriptEditor Releases</a></h2>	
	<p>ACTF ScriptEditor is now in early prototype phase. Please submit any enhancement request, bug reports, and so on to <a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=ACTF&component=examples">bugzilla</a>.
	</p>

	<p>All downloads are provided under the terms and conditions of the 
	<a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a>.
	</p>
	
	$releaseTable
	
	<h2><a name="quickStart">Getting started</a></h2>
	<p>ACTF ScriptEditor is an Eclipse RCP application. Download and unpack a zip file, 
	and execute ScriptEditor.exe in the ScriptEditor folder. Online help is available from 
	Help menu.
	</p>
		
	<h2><a name="requirements">System Requirements</a></h2>
	<p><ul>
	 <li>Operating Systems<BR>
	 <UL>
	  <LI>Windows&#174; XP SP3 (recommended) or above
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
	  <li>To use Flash Content:  Adobe&reg; Flash Player, Version 8 or above</li>
  	 </UL>
	</ul>
	</p>
</div>

$rightColumn

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
	