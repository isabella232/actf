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

	<h2 id="release">ACTF 0.9 (Indigo) Release</h2>
	<p>
	
	<!--<a href="../newandnoteworthy/09/actf-09.html">ACTF 0.9 New and Noteworthy</a>-->
	
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
			<a href="http://download.eclipse.org/technology/actf/0.9/update-site/">
			http://download.eclipse.org/technology/actf/0.9/update-site/</a><br>
			<b>Other downloads: </b><br>
			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/actf/sdk/visualization/0.9.2/actf-visualization-0.9.2-win32-incubation.zip">
			actf-visualization-0.9.2-win32-incubation.zip <img src="../images/go-bottom.png" alt=""></a><br>
			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/actf/sdk/visualization/0.9.1/actf-visualization-0.9.1-win32-incubation.zip">
			actf-visualization-0.9.1-win32-incubation.zip <img src="../images/go-bottom.png" alt=""></a><br>
			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/actf/sdk/visualization/0.9.0/actf-visualization-0.9.0-win32-incubation.zip">
			actf-visualization-0.9.0-win32-incubation.zip <img src="../images/go-bottom.png" alt=""></a>
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

	<h3>Script Editor</h3>
	<p>The use of multimedia content has increased dramatically over the last 
	few years, but people with limited or no vision have not been able to fully 
	enjoy the benefits of these advances. For example, there are so many movies on the Internet,
	however, almost none of them have audio descriptions.
	</p>
	<p>The ACTF Script Editor is an Eclipse RCP application that allows users to easily edit audio descriptions for these movies, 
	and it also tries to reduce cost of audio description by using audio synthesis.
	<p/>
	<p><a href="tools/ScriptEditor/index.php">Script Editor download page<img src="../images/go-bottom.png" alt=""></a>
	</p>
	<br>
	
	
</div>

	<hr class="clearer" />

	<h2 id="oldmaterials">ACTF Previous Releases and Old Materials</h2>
	<ul><li><a href="archive/">ACTF Archived Downloads page<img src="../images/go-bottom.png" alt=""></a></li></ul>

	<hr class="clearer" />

	<p>All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php" target="_blank">Eclipse 
          Foundation Software User Agreement</a> unless otherwise specified.</p>
	<hr class="clearer" />


	<h1 id="consumers">Other Tools and Runtimes on top of ACTF</h1>
	<div class="homeitem3col">
	<h3>Link to external product information site</h3>
	 <h4><a href="http://www.justsystems.com/jp/products/hpb/">HomePage Builder</a>  (Product of JustSystems Corporation)</h4>
	 <p>HomePage Builder is a Web authoring tool that integrates ACTF aDesigner as an accessibility check function.
	 For more details about this tool, please visit <a href="http://www.justsystems.com/jp/products/hpb/">HomePage Builder introduction page (in Japanese)</a>. (Jump to JustSystems Web site).</p>
	 <h4><a href="http://www.aao.ne.jp/aion/index.html">Aion</a>  (Service of Allied Brains, Inc.)</h4>
	 <p>Aion is a Web accessibility evaluation service that integrates ACTF Visualization SDK as an accessibility check engine.
	 For more details about this service, please visit <a href="http://www.aao.ne.jp/aion/index.html">Aion introduction page (in Japanese)</a>. (Jump to Allied Brains Web site).</p>
	<h3>Link to external download site</h3>
	 <h4><a href="http://www.soumu.go.jp/main_sosiki/joho_tsusin/b_free/miChecker_download.html">miChecker</a></h4>
	 <p>miChecker is a support tool for Web accessibility evaluation tool that developed on top of ACTF SDK. 
	 It was developed by the Japanese Ministry of Internal Affairs and Communications (MIC) to support Web accessibility improvements in Japanese government offices.
	 To download this tool, please visit <a href="http://www.soumu.go.jp/main_sosiki/joho_tsusin/b_free/miChecker_download.html">miChecker download page (in Japanese)</a>. (Jump to MIC Web site).
	 </p>
	 <p>
	 MIC also contributed the source code and documentation of miChecker to ACTF to continue the open and transparent development into the future.
	 Build instruction of miChecker is also available from <a href="tools/miChecker/build.php">here</a>.
	 </p>
	</div>		
</div>

$rightColumn

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
