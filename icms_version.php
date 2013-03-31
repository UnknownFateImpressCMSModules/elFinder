<?php
/**
 * "elFinder" module version infomation
 *
 * This file holds the configuration information of this module
 *
 * @copyright		Copyright Madfish (Simon Wilkinson) 2011
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		Madfish (Simon Wilkinson) <simon@isengard.biz>
 * @author		Debianus
 * @package		elFinder
 * @version		$Id$
 */

defined("ICMS_ROOT_PATH") or die("ICMS root path not defined");

/**  General Information  */
$modversion = array(
	"name"					=> basename(dirname(__FILE__)),
	"version"				=> 1.0,
	"author"				=> "debianus",
	"credits"				=> "Madfish (Simon Wilkinson), elFinder Dev Team",
	"help"					=> "",
	"license"				=> "GNU General Public License (GPL) V2 or any later version",
	"official"				=> 0,
	"dirname"				=> basename(dirname(__FILE__)),
	"modname"				=> basename(dirname(__FILE__)),

/**  Images information  */
	"iconsmall"				=> "img/icon_small.png",
	"iconbig"				=> "img/icon_big.png",
	"image"					=> "img/icon_big.png", /* for backward compatibility */

/**  Development information */
	"status_version"			=> "1.0",
	"status"				=> "Beta",
	"date"					=> "25/03/2013",
	"author_word"				=> "",
	"warning"				=> _CO_ICMS_WARNING_BETA,

/** Contributors */
	"developer_website_url"		=> "http://themes.impresscms.es",
	"developer_website_name"	=> "Impressmizing",
	"developer_email"			=> "",
/** Administrative information */
	"hasAdmin"				=> 1,
	"adminindex"				=> "admin/index.php",
	"adminmenu"				=> "admin/menu.php",
/** Search information */
	"hasSearch"				=> 0,

/** Menu information */
	"hasMain"				=> 1,

/** Comments information */
	"hasComments"				=> 0);

/** other possible types: testers, translators, documenters and other */
$modversion['people']['developers'][] = "debianus";
$modversion['people']['testers'][] = '<a href="http://community.impresscms.org/userinfo.php?uid=446">Evasan</a>';
$modversion['people']['other'] [] = '<a href="http://community.impresscms.org/userinfo.php?uid=179" target="_blank">McDonald</a> &nbsp;&nbsp;<span style="font-size: smaller;">( pietjebell31 [at] hotmail [dot] com )</span>';
$modversion['people']['other'][] = 'Evasan (help in icons)';
$modversion['support_site_url'] = 'http://community.impresscms.org/modules/newbb/viewforum.php?forum=9';
$modversion['support_site_name']= 'ImpressCMS Community Forum';

/** Preferences */
$modversion['config'][1] = array(
	'name' => 'rootconfig',
	'title' => '_ELFINDER_MI_ROOT',
	'description' => '_ELFINDER_MI_ROOT_DSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'text',
	'default'		=> ICMS_UPLOAD_URL 
	);
	
$modversion['config'][] = array(
	'name' => 'physycalrootconfig',
	'title' => '_ELFINDER_MI_ROOT_PHYSYCAL',
	'description' => '_ELFINDER_MI_ROOT_PHYSYCAL_DSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'text',
	'default'		=> ICMS_UPLOAD_PATH 
	);
	
$modversion['config'][] = array(
	'name' => 'rootname',
	'title' => '_ELFINDER_MI_ROOT_NAME',
	'description' => '_ELFINDER_MI_ROOT_NAME_DSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'text',
	'default'		=> ''
	);
	
$modversion['config'][] = array(
	'name'			=> 'upload_deny',
	'title'			=> '_ELFINDER_MI_UPLOAD_DENY',
	'description' 	=> '_ELFINDER_MI_UPLOAD_DENY_DSC',
	'formtype' 		=> 'select_multi',
	'valuetype' 	=> 'array',
	'options'		=> array(
			'exe-bin'   => 'application/octet-stream',
			'php'   => 'text/x-php',
			'html'  => 'text/html',
			'sql'   => 'text/x-sql',
			),
	'default' 		=> ''
	);
	
$modversion['config'][] = array(	
	'name' 			=> 'uploadMaxSize',
	'title' 		=> '_ELFINDER_UPLOADMAXSIZE',
	'description' 	=> '_ELFINDER_UPLOADMAXSIZE_DESC',
	'formtype' 		=> 'textbox',
	'valuetype' 	=> 'int',
	'default' 		=> 0 
	);
	
$modversion['config'][] = array(						
	'name' 			=> 'copyOverwrite',
	'title' 		=> '_ELFINDER_COPYOVERWRITE',
	'description' 	=> '_ELFINDER_COPYOVERWRITE_DESC',
	'formtype' 		=> 'yesno',
	'valuetype' 	=> 'int',
	'default' 		=> 1
	);
	
$modversion['config'][] = array(						
	'name' 			=> 'uploadOverwrite',
	'title' 		=> '_ELFINDER_UPLOADOVERWRITE',
	'description' 	=> '_ELFINDER_UPLOADOVERWRITE_DESC',
	'formtype' 		=> 'yesno',
	'valuetype' 	=> 'int',
	'default' 		=> 1
	);
	
$modversion['config'][] = array(
	'name' => 'tmbSize',
	'title' => '_ELFINDER_TMBSIZE',
	'description' => '_ELFINDER_TMBSIZE_DSC',
	'formtype'		=> 'textbox',
	'valuetype' 	=> 'text',
	'default'		=> '48px'
	);
	
$modversion['config'][] = array(
	'name' => 'height',
	'title' => '_ELFINDER_HEIGHT',
	'description' => '_ELFINDER_HEIGHT_DSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'text',
	'default'		=> '400px'
	);
	
$modversion['config'][] = array(
	'name' => 'deactivated',
	'title' => '_ELFINDER_DEACTIVATED',
	'description' => '_ELFINDER_DEACTIVATED_DSC',
	'formtype' 		=> 'select_multi',
	'valuetype' 	=> 'array',
	'options'		=> array(
		'rename'  =>'rename',
		'download'  =>'download',
		'remove'  =>	'"rm',
		'makedir'  =>'mkdir',
		'makefile'  => 'mkfile', 
		'upload'  =>'upload',
		'copy'  =>'copy', 
		'cut'  =>'cut',
		'paste'  => 'paste',
		'edit'  =>'edit', 
		'extract'  =>'extract',
		'archive'  =>'archive'
		)
	);

$modversion['config'][] = array(
	'name' 			=> 'elfinder_dateformat',
	'title' 		=> '_ELFINDER_DATE_FORMAT',
	'description' 	=> '_ELFINDER_DATE_FORMAT_DSC',
	'formtype' 		=> 'textbox',
	'valuetype' 	=> 'text',
	'default' 		=> 'M d, Y h:i A'
	);
								
$modversion['config'][] = array(
	'name' => 'defaultView',
	'title' => '_ELFINDER_DEFAULTVIEW',
	'description' => '_ELFINDER_DEFAULTVIEW_DSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'text',
	'default'		=> 'icons'
	);
							
/** Templates information */

$modversion['templates'][] = array(
	'file'			=> 'elfinder_index.html',
	'description'	=> 'Module Main Page' 
	);