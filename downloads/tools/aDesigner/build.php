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
		
	# End: page-specific settings
	#
	
	#
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="midcolumn">
	<h1>ACTF aDesigner build instruction</h1>
	<p><ul>
	<li><a href="#quickStart">Getting started</a></li>
	<li><a href="#requirements">System Requirements</a></li>
	</ul></p>

	<h2><a name="quickStart">Getting started</a></h2>
	<p><ul>
	  <li>Obtain source code</li>
	  <ul>
	   <li>Prepare Eclipse and other pre-reqs. (See <a href="#requirements">System Requirements</a>)</li>
	   <li>Download Team Project Set file (*.psf).</li>
	    <ul>
	      <li>for Committers: <a href="aDesigner-committer.psf">aDesigner-committer.psf</a></li>
	      <li>for others: <a href="aDesigner-anonymous.psf">aDesigner-anonymous.psf</a></li>
	    </ul>
	   <li>Import the downloaded Team Project Set file (*.psf) from Eclipse's 'File' -&gt; 'Import' menu.</li>
	    <ul>
	      <li>Committers: use your committer id and password</li>
	      <li>Others: user -&gt; "anonymous", password -&gt; "" (null)</a></li>
	    </ul>
	   <li>Add Classpath Variable for OOo (if needed) from 'Window' -&gt; 'Preferences' -&gt; 'Java' -&gt; 'Build Path' -&gt; 'Classpath Variables' as below:<br>
		Name: OOO_HOME<br>
		Path: &lt;OOo install dir&gt; (e.g., "c:\Program Files\OpenOffice.org 2.3")<br>
	  </ul> 
	  <li>Launch aDesigner from workspace</li>
	  <ul>
	   <li>Open 'org.eclipse.actf.examples.adesigner' project and select 'aDesigner.product'.</li>
	   <li>Select 'Synchronize' under 'Testing' section.</li>
	   <li>Select 'Launch an Eclipse Application' under 'Testing' section.</li>
	  </ul>
	  <li>Build aDesigner</li>
	  <ul>
	   <li>Open 'org.eclipse.actf.examples.adesigner' project and select 'aDesigner.product'.</li>
	   <li>Select 'Synchronize' under 'Testing' section.</li>
	   <li>Open an export product wizard by selecting 'Eclipse product export wizard' under 'Exporting' section and follow the wizard.</li>
	  </ul>
	</p>
	
	<h2><a name="requirements">System Requirements</a></h2>
	<p><ul>
	 <li>Operating Systems<BR>
	 <UL>
	  <LI>Windows&#174; XP or above
	 </UL>
	 <LI>Software
	 <UL>
	  <li>Java Runtime Environment (JRE) 1.5.0 or above</li>
	  <li><a href="http://www.eclipse.org/downloads/">Eclipse for RCP/Plug-in Developers 3.3.1.1 or above</a></li>
	  <li>Internet Explorer 6.0 or above</li>
	  <li>For Flash Accessibility mode:  Adobe&reg; Flash Player, Version 8 or above</li>
	  <li>For OpenDocument Accessibility mode:  OpenOffice.org 2.1.0 or above</li>
  	 </UL>
	</ul>
	</p>
</div>

$rightColumn

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
	