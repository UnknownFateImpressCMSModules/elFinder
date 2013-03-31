<?php

/**
 * "elFinder" module 
 *
 * Main Page
 *
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		debianus
 * @package	elFinder
 * @version		$Id$
 */

include_once "../../mainfile.php";

$xoopsOption["template_main"] = "elfinder_index.html";

include_once ICMS_ROOT_PATH . "/header.php";

/* Retrieve Module Preferences as vars and assign them as SESSION vars for use in class/connector.php */

$rootconfig = icms::$module -> config['rootconfig'];
$physicalroot = icms::$module -> config['physycalrootconfig'];
$rootname = icms::$module -> config['rootname'];
$upload_deny = icms::$module -> config['upload_deny'];
$uploadMaxSize = icms::$module -> config['uploadMaxSize'];
$copyOverwrite = icms::$module -> config['copyOverwrite'];
$uploadOverwrite = icms::$module -> config['uploadOverwrite'];
$tmbSize = icms::$module -> config['tmbSize'];
$height = icms::$module -> config['height'];
$elfinder_dateformat = icms::$module -> config['elfinder_dateformat'];
$defaultView = icms::$module -> config['defaultView'];

$_SESSION['uploadMaxSize'] = $uploadMaxSize;
$_SESSION['rootconfig'] = $rootconfig;
$_SESSION['physicalroot'] = $physicalroot;
$_SESSION['rootname'] = $rootname;
$_SESSION['upload_deny'] = $upload_deny;
$_SESSION['copyOverwrite'] = $copyOverwrite;
$_SESSION['uploadOverwrite'] = $uploadOverwrite;
$_SESSION['tmbSize'] = $tmbSize;

/* Only Admins can upload restricted files according module preferences */
if (!is_object(icms::$user) || !is_object($icmsModule) || !icms::$user->isAdmin($icmsModule->getVar('mid'))) 
{
	$deactivated = icms::$module -> config['deactivated'];
	define('_DEACTIVATED', json_encode($deactivated));
} 
else {
define('_DEACTIVATED', '[]' );
}

/* Module preferences client configuration related . Because they are used as javascript vars, PHP var are defines */
define('_CONF_HEIGHT', $height);
define('_DATEFORMAT', $elfinder_dateformat);
define('_DEFAULTVIEW', $defaultView);

/* Loading  required files CSS and js */
$xoTheme->addStylesheet("/modules/elFinder/css/elfinder.min.css");
$xoTheme->addStylesheet("/modules/elFinder/css/theme.css");
$xoTheme->addScript("/modules/elFinder/js/elfinder.min.js");

/* Load Language files according the Language Preferences */
if (_LANGCODE == 'es') {$xoTheme->addScript("/modules/elFinder/js/i18n/elfinder.es.js");}
elseif (_LANGCODE == 'de') {$xoTheme->addScript("/modules/elFinder/js/i18n/elfinder.de.js");}
elseif (_LANGCODE == 'fr') {$xoTheme->addScript("/modules/elFinder/js/i18n/elfinder.fr.js");}
elseif (_LANGCODE == 'nl') {$xoTheme->addScript("/modules/elFinder/js/i18n/elfinder.nl.js");}
else {}

/* Script for load the client settings and init the elfinder instance */
$xoTheme->addScript('', array('type' => 'text/javascript'), '
		$().ready(function() {
		var myCommands = elFinder.prototype._options.commands;
		var disabled = ' . _DEACTIVATED . ';
		$.each(disabled, function(i, cmd) {
			(idx = $.inArray(cmd, myCommands)) !== -1 && myCommands.splice(idx,1);
			});
		var elf = $("#elfinder").elfinder({
			lang: "' . _LANGCODE . '",
			height: "' . _CONF_HEIGHT . '",
			commands : myCommands,
			dateFormat : "' . _DATEFORMAT . '",
			defaultView: "' . _DEFAULTVIEW . '",
			url : "' . ICMS_URL . '/modules/elFinder/class/connector.php",
		}).elfinder("instance");			
	});
');
include_once ICMS_ROOT_PATH . '/footer.php';