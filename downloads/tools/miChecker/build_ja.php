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
	$pageTitle 		= "ACTF - miChecker 開発手順";
	$pageKeywords	= "Accessibility Tools Framework, miChecker, accessibility, ACTF, Eclipse";
	$pageAuthor		= "Kentarou FUKUDA";
	
	include('../../../projectNav.php');
	include('../../../rightCol.php');
		
	# End: page-specific settings
	#
	
	#
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="midcolumn">
	<h1>miChecker について</h1>
	<p>miCheckerは、平成22年8月のJIS X 8341-3:2010の改定に合わせ、国、地方公共団体等におけるウェブアクセシビリティ評価の取組を促進することを目的として、
	総務省が開発し、
	<a href="http://www.soumu.go.jp/main_sosiki/joho_tsusin/b_free/miChecker_download.html">「みんなのアクセシビリティ評価ツール（miChecker（エムアイチェッカー））」</a>
	として広く一般に提供しているアクセシビリティのチェックツールです。その第一の目的は検証作業の支援ですが、同時に知識の習得にも役立つよう配慮されています。
	
	miCheckerのソースコードは、miCheckerの機能・性能・品質の向上と、アクセシブルなウェブの普及を目的として、
	総務省よりEclipse　Accessibility Tools Framework (ACTF)に寄贈され、一般に公開されると共に、継続的に改善を実施しています。
	</p>
	
	<h1>miChecker 開発手順</h1>
	<p>以下の開発手順書に、miCheckerの開発手順および問い合わせ先などをまとめてありますので、是非ご活用ください。</p>
	<p><a href="miChecker_development_ja.pdf">開発手順書(PDF形式)</a>	
	</p>
	
</div>

$rightColumn

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
	