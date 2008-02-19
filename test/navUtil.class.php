<?php
/*******************************************************************************
 * Copyright (c) 2007 IBM Corporation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Kentarou FUKUDA - Initial API
 *******************************************************************************/

//include ProjectInfoList and ProjectInfoData
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/classes/projects/projectInfoList.class.php");

class NavUtil {
	private $info;

	function NavUtil($key) {
		$this->info = new ProjectInfoData($key);
	}

	function __get( $varname ){
		$result;
		switch ($varname){
		case "mailinglists":
		case "bugzilla":
		case "newsgroups":
			$result = getUrl($varname);
			break;
		default:
			$result = $projectInfo->__get($varname);			
		}
		if(!$result){
			return "";
		}else{
			return htmlspecialchars($result);
		}
	}
	
	function getUrl( $varname ){
		$x=$projectInfo->__get($varname);
		if ( $x && count($x) > 0 ) {
			$x=$x[0];  //TODO multiple values
			if($x->url){
				return $x->url;
			}
		}
		return null;
	}
}	

?> 