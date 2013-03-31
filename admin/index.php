<?php

/**
 *
 * File: /admin/index.php
 * 
 * ACP Menu of the module - Index Page
 * 
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		debianus
 * @version		$Id$
 * @package	elFinder
 *
 */
include '../../../include/cp_header.php';

icms_cp_header();

			$icmsModule->displayAdminMenu ( 0, _MD_ELFINDER_ADMIN );
				
define('LANG_THIS_URL', ICMS_URL.'/modules/elFinder/admin/index.php');
  
icms_cp_footer();
