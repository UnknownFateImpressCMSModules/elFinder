<?php
/**
 *English language constants related to module preferences
 *
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		debianus
 * @package	elfinder
 * @version		$Id$
 */

define('_ELFINDER_MI_ROOT', 'URL');
define('_ELFINDER_MI_ROOT_DSC', 'URL where the files are located. Default: uploads');
define('_ELFINDER_MI_ROOT_PHYSYCAL', 'Physical root');
define('_ELFINDER_MI_ROOT_PHYSYCAL_DSC', 'Remember if you change the default URL change this root too. Default: uploads.');
define('_ELFINDER_MI_ROOT_NAME', 'Root name');
define('_ELFINDER_MI_ROOT_NAME_DSC', 'Leave blank folder name will be used');
define('_ELFINDER_MI_UPLOAD_DENY', 'Mimetypes not allowed to upload.');
define('_ELFINDER_MI_UPLOAD_DENY_DSC', 'This selection is only for Groups can access the module, not for Groups can administrate it.');
define('_ELFINDER_COPYOVERWRITE', 'Replace files on paste?');
define('_ELFINDER_COPYOVERWRITE_DESC', 'Replace files on paste or give new names to pasted files. true - old file will be replaced with new one, false - new file get name - original_name-number.ext');
define('_ELFINDER_UPLOADMAXSIZE', 'Maximum upload file size');
define('_ELFINDER_UPLOADMAXSIZE_DESC', 'This size is per files. Value is a number. Note you still have to configure PHP files upload limits.');
define('_ELFINDER_UPLOADOVERWRITE', 'Replace files on upload?');
define('_ELFINDER_UPLOADOVERWRITE_DESC', 'Replace files on upload or give them new names. Yes - replace old files, No give new names like original_name-number.ext');
define('_ELFINDER_TMBSIZE', 'Thumbnails size');
define('_ELFINDER_TMBSIZE_DSC', 'Thumbnails size in pixels for preview. Thumbnails are square');
define('_ELFINDER_DEACTIVATED', 'Deactivated buttons');
define('_ELFINDER_DEACTIVATED_DSC', 'If you set up certain mimetypes as forbidden, remember deactivate  <em>rename</em>. This selection is only for Groups can access the module, not for Groups can administrate it. ');
define('_ELFINDER_HEIGHT', 'Height');
define('_ELFINDER_HEIGHT_DSC', 'The height of the elFinder main interface (in pixels).Default value: 400px');
define('_ELFINDER_DATE_FORMAT', 'Datetime format');
define('_ELFINDER_DATE_FORMAT_DSC', 'Value from selected language is used by default.
Set format here to overwrite it. Format is set in <a href="http://www.php.net/manual/en/function.date.php">PHP date</a>. Default: d, Y h:i A will return Mar 13, 2012 05:27 PM');
define('_ELFINDER_DEFAULTVIEW', 'Default view mode');
define('_ELFINDER_DEFAULTVIEW_DSC', 'Can be icons and list. Default value: icons');
define('_ELFINDER_MI_ELFINDER_TEMPLATES', 'Templates');
