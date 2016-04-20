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
	
	header("Content-Type: text/html;charset=UTF-8");
	
	include('../../../projectNav.php');
	include('../../../rightCol.php');
		
	# End: page-specific settings
	#
	
	#
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="midcolumn">
	<h1>miChecker について</h1>
	<p><a href="http://www.soumu.go.jp/main_sosiki/joho_tsusin/b_free/michecker.html">「みんなのアクセシビリティ評価ツールmiChecker」</a>
	（以下、miChecker）は、JIS X 8341-3:2016（高齢者・障害者等配慮設計指針－情報通信における機器，ソフトウェア及びサービス－第３部：ウェブコンテンツ）に
	基づくウェブアクセシビリティ対応の取組を支援するために、総務省が開発し、提供するアクセシビリティ評価ツールです。
	その第一の目的はアクセシビリティ検証作業の支援です。加えて、付属文書等に沿って検証作業を行うことで、関連する知識の習得が可能です。
    </p>
    <p>
	miCheckerのソースコードは、その機能・性能・品質の向上と、アクセシブルなウェブの普及を目的として、
	総務省よりEclipse　Accessibility Tools Framework (ACTF)に寄贈され、一般に公開されると共に、継続的な改善が実施されています。
	</p>
	
	<h1>miChecker 開発手順</h1>
	<p>以下の開発手順書に、miCheckerのソースコード入手方法、開発手順および問い合わせ先などをまとめてありますので、是非ご活用ください。</p>
	<p><a href="miChecker_dev_env.pdf">開発手順書(PDF形式)</a>	
	</p>
	
	<div style="text-align:right">
	<a href="build.php">Instructions in English</a>
	</div>
</div>

$rightColumn

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
	