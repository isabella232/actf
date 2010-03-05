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
	$pageTitle 		= "ACTF Downloads";
	$pageKeywords	= "Accessibility Tools Framework, accessibility, ACTF, Eclipse";
	$pageAuthor		= "ACTF Team";
	
include('../projectNav.php');
		include('../rightCol.php');
	
	# End: page-specific settings
	#
		
	#
		# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML


	<div id="midcolumn">
	<h1>ACTF Downloads</h1>

	<h2 id="milestone">ACTF 0.7 (Galileo) Release</h2>
	<p>
	
	<a href="../newandnoteworthy/07/actf-07.html">ACTF 0.7 New and Noteworthy</a>
	
	</p>
	<div class="homeitem3col">
		<h3>Visualization SDK</h3>
		<p>ACTF Visualization SDK includes two types of extensible visualization engines 
		(Blind usability visualization engine and low-vision simulation engine) and several reusable view components. 
		These components support providing a visual representation of the usability of content or applications for People with Disabilities (PwD).
		From this milestone release, major features of visualization part, such as blind usability visualization, low-vision simulation,
		Flash content inspection function, etc., can be used in Eclipse IDE by selecting each accessibility perspective.
		Please visit <a href="http://www.eclipse.org/projects/project-plan.php?projectid=technology.actf">ACTF plan page</a>
		for more details about the updates.
		</p>
		<p>
			<b>Update Site: </b>
			<a href="http://download.eclipse.org/technology/actf/0.7/update-site/">http://download.eclipse.org/technology/actf/0.7/update-site/</a><br>
			<b>Other downloads: </b>
			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/actf/sdk/visualization/0.7.2/actf-visualization-0.7.2-win32-incubation.zip">
			actf-visualization-0.7.2-win32-incubation.zip <img src="../images/go-bottom.png" alt=""></a>
		</p>
	</div>
	<hr class="clearer" />

	<h2 id="tools">ACTF Exemplary Tools</h2>
<div class="homeitem3col">

	<h3>aDesigner</h3>
	<p>The aDesigner is an Eclipse RCP application that helps designers ensure 
	that their content and applications are accessible and usable by the visually 
	impaired. aDesigner provides a visual representation of the visually impaired 
	users' usability of content. It helps users to learn about real accessibility 
	issues in their content and applications. Currently, aDesigner supports HTML, 
	ODF documents and Flash content. 
	It also has accessibility information (MSAA/IA2) inspection functions. 
	</p>
	<p><a href="tools/aDesigner/index.php">aDesigner download page<img src="../images/go-bottom.png" alt=""></a></p>
	<br>
	
	<h3>Accessibility Internet Browser for Multimedia (aiBrowser)</h3>
	<p>aiBrowser is an Eclipse RCP application that allows screen reader users 
	to control embedded multimedia content, with commands to play, stop, or control 
	the volume for streaming video, by simply using predefined shortcut keys. 
	Users can customize the behavior of existing Web content by using metadata. 
	This tool also adds audio descriptions for Internet movies based on a simple text script. 
	</p>
	<p><a href="tools/aiBrowser/index.php">aiBrowser download page<img src="../images/go-bottom.png" alt=""></a>
	</p>
	<br>
</div>

	<hr class="clearer" />

	<h2 id="tools">ACTF Previous Releases</h2>
	<h3><a href="archives/">ACTF Archived Downloads page</a></h3>

	<p>All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php" target="_blank">Eclipse 
          Foundation Software User Agreement</a> unless otherwise specified.</p>
	<hr class="clearer" />


	<h1>Other tools and runtimes on top of ACTF</h1>
	<div class="homeitem3col">
	<h3>Link to external product information site</h3>
	 <h4><a href="http://www-06.ibm.com/jp/software/internet/hpb/products/">HomePage Builder</a>  (Product of IBM Japan)</h4>
	 <p>HomePage Builder is a Web authoring tool that integrates ACTF aDesigner as an accessibility check function.
	 For more details about this tool, please visit <a href="http://www-06.ibm.com/jp/software/internet/hpb/products/">HomePage Builder introduction page (in Japanese)</a>. (Jump to IBM Japan Web site).</p>
	<h3>Link to external download site</h3>
	 <h4><a href="http://www.alphaworks.ibm.com/tech/aibrowser">IBM Accessibility Internet Browser for Multimedia (aiBrowser)</a>  (IBM alphaWorks technology)</h4>
	 <p>The IBM Accessibility Internet Browser for Multimedia (aiBrowser) is an Internet browser for visually impaired users that provides multimedia control features and alternative user interfaces with external metadata. 
	 For more details about this tool, please visit <a href="http://www.alphaworks.ibm.com/tech/aibrowser">aiBrowser introduction page</a>. (Jump to IBM alphaWorks Web site).</p>
	</div>		
</div>

$rightColumn

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
