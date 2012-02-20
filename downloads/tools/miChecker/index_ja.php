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
	$pageTitle 		= "ACTF - miCheckerについて";
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
	<h1 id="about">miChecker について</h1>
	<p>miCheckerは、平成22年8月のJIS X 8341-3:2010の改定に合わせ、国、地方公共団体等におけるウェブアクセシビリティ評価の取組を促進することを目的として、
	総務省が開発し、
	<a href="http://www.soumu.go.jp/main_sosiki/joho_tsusin/b_free/miChecker_download.html">「みんなのアクセシビリティ評価ツール（miChecker（エムアイチェッカー））」</a>
	として広く一般に提供しているアクセシビリティのチェックツールです。その第一の目的は検証作業の支援ですが、同時に知識の習得にも役立つよう配慮されています。
    </p>

    <p>
	miCheckerのソースコードは、その機能・性能・品質の向上と、アクセシブルなウェブの普及を目的として、
	総務省よりEclipse　Accessibility Tools Framework (ACTF)に寄贈され、一般に公開されると共に、継続的な改善が実施されています。
	</p>

	<h2 id="download">miChecker の入手方法</h2>
	<p>
	miCheckerの最新版は総務省の
	<a href="http://www.soumu.go.jp/main_sosiki/joho_tsusin/b_free/miChecker_download.html">みんなのアクセシビリティ評価ツール： （miChecker（エムアイチェッカー） ダウンロードページ</a>
	から入手してください。また、miCheckerの開発手順等は<a href="build_ja.php">こちら</a>で公開されていますので、あわせて是非ご活用下さい。
    </p>
    
    <h2 id="misc">miChecker 関連情報</h2>
    <p>
    miChecker本体の更新とあわせて、ワークシートなどの付属文書の更新作業も進められています。miChecker本体が更新されるまでの間は、
    以下のリンクから最新版の付属文書を入手した上でご活用下さい。
	</p>
	<p>
     <a href="worksheet_ja.zip">ワークシート</a>　（zip形式： Excel形式およびOpenOffice形式のワークシートが含まれます）<br>

    <div>全てのダウンロードは 
	<a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a>の条件の下で提供されます。
	</div>
    </p>

<!--		
	<div style="text-align:right">
	<a href="build.php">instructions in English</a>
	</div>
-->
</div>

$rightColumn

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
	