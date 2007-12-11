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
	$pageTitle 		= "ACTF Downloads";
	$pageKeywords		= "Accessibility Tools Framework, ACTF, Eclipse, Downloads";
	$pageAuthor		= "ACTF team";
	
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
	<h1>ACTF Downloads</h1>

<div class="homeitem3col">
	<h3>ACTF Release Build</h3>
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
	<h4>Accessibility Probe (AccProbe)</h4>
	<p><a href="http://www.eclipse.org/downloads/download.php?file=/technology/actf/examples/AccProbe/200711291013/AccProbe-200711291013-incubation.zip">AccProbe-200711291013-incubation.zip</a></p>
    <h4>Accessibility Internet Browser for Multimedia (aiBrowser)</h4>
	<p>Coming soon!</p>
</div>
	<p>All downloads are provided under the terms and conditions of the <a href="epl/notice.php" target="_blank">Eclipse 
          Foundation Software User Agreement</a> unless otherwise specified.</p>
	<hr class="clearer" />
	<h1>Other tools and runtimes on top of ACTF</h1>
	<div class="homeitem3col">
	 <h3>Links to external download site</h3>
	 <h4><a href="http://www.alphaworks.ibm.com/tech/adesigner">aDesigner</a>  (IBM alphaWorks technology)</h4>
	 <p>The aDesigner is a tool that Web authors can use to ensure that the webpages they create are accessible to individuals who are blind or visually impaired. 
	 For more details about this tool, please visit <a href="http://www.alphaworks.ibm.com/tech/adesigner">aDesigner introduction page</a>. (Jump to IBM alphaWorks Web site).</p>
	 <h4><a href="http://www.alphaworks.ibm.com/tech/aibrowser">IBM Accessibility Internet Browser for Multimedia (aiBrowser)</a>  (IBM alphaWorks technology)</h4>
	 <p>The IBM Accessibility Internet Browser for Multimedia (aiBrowser) is an Internet browser for visually impaired users that provides multimedia control features and alternative user interfaces with external metadata. 
	 For more details about this tool, please visit <a href="http://www.alphaworks.ibm.com/tech/aibrowser">aiBrowser introduction page</a>. (Jump to IBM alphaWorks Web site).</p>
     <h4><a href="http://www.alphaworks.ibm.com/tech/raven">IBM Rule-based Accessibility Validation Environment (RAVEN)</a>  (IBM alphaWorks technology)</h4>
	 <p>A suite of Eclipse plug-ins used to inspect and validate the accessibility of Java-based, rich-client GUIs (Swing or SWT) and Eclipse plug-ins. 
	 For more details about this tool, please visit <a href="http://www.alphaworks.ibm.com/tech/raven">RAVEN introduction page</a>. (Jump to IBM alphaWorks Web site)</p>
	</div>		
</div>


<div id="rightcolumn">
    <div class="sideitem">
	<h6>Related links</h6>
	<ul>
	  <li><a href="http://www.eclipse.org/proposals/actf">Project proposal</a> 
  	<li><a href="http://www.eclipse.org/proposals/actf/ACTF_CreationReview.pdf">
  	Creation Review Slides </a></li>
	</ul>
    </div>	    
    <div class="sideitem">
	<h6>Incubation</h6>
              <div align="center"><a href="http://www.eclipse.org/projects/gazoo.php">
                 <img align="center" src="http://www.eclipse.org/images/egg-incubation.png" border="0" /></a>
              </div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
