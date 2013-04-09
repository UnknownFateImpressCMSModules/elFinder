<?php

include_once "../../../mainfile.php";

error_reporting(0); // Set E_ALL for debuging

$handler = icms::handler( 'icms_module' );
$elFinderModule = &$handler -> getByDirname( basename( dirname( dirname( __FILE__ ) ) ) );
$config_handler = icms::$config;
$elFinderModuleConfig = &$config_handler -> getConfigsByCat( 0, $elFinderModule -> getVar( 'mid' ) );
$physicalroot2        = $elFinderModuleConfig['physycalrootconfig'];
$rootconfig2        = $elFinderModuleConfig['rootconfig'];
$uploadMaxSize2        = $elFinderModuleConfig['uploadMaxSize'];
$rootname2            = $elFinderModuleConfig['rootname'];
$upload_deny2        = $elFinderModuleConfig['upload_deny'];
$copyOverwrite2        = $elFinderModuleConfig['copyOverwrite'];
$uploadOverwrite2    = $elFinderModuleConfig['uploadOverwrite'];
$tmbSize2            = $elFinderModuleConfig['tmbSize'];

// Required for MySQL storage connector
// include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinderVolumeMySQL.class.php';
// Required for FTP connector support
// include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinderVolumeFTP.class.php';
include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinderConnector.class.php';
include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinder.class.php';
include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinderVolumeDriver.class.php';
include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinderVolumeLocalFileSystem.class.php';
/**
 * Simple function to demonstrate how to control file access using "accessControl" callback.
 * This method will disable accessing files/folders starting from  '.' (dot)
 *
 * @param  string  $attr  attribute name (read|write|locked|hidden)
 * @param  string  $path  file path relative to volume root directory started with directory separator
 * @return bool|null
 **/
function access($attr, $path, $data, $volume) {
	return strpos(basename($path), '.') === 0       // if file/folder begins with '.' (dot)
		? !($attr == 'read' || $attr == 'write')    // set read+write to false, other (locked+hidden) set to true
		:  null;                                    // else elFinder decide it itself
}

$opts = array(
 
    'roots'  => array(
		array(
		'driver'        => 'LocalFileSystem',
		'path'   => $physicalroot2,
		'URL'    => $rootconfig2, //deactivated; path to the files will not show
		'alias'  => $rootname2,  
		'uploadDeny'  => $upload_deny2,
		'uploadMaxSize' => $uploadMaxSize2,
		'uploadOverwrite' => $uploadOverwrite2,
		'copyOverwrite' => $copyOverwrite2,
		'tmbSize' => $tmbSize2,
		'accessControl' => 'access'      // disable and hide dot starting files (OPTIONAL)
        )
    )
);
// run elFinder
$connector = new elFinderConnector(new elFinder($opts));
$connector->run();