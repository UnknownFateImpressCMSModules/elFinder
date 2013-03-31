<?php
/**
 * "elFinder" module 
 *
 * This file holds tinyMCE integration
 *
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		debianus
 * @package	elFinder
 * @version		$Id$
 */
 
include_once "../../mainfile.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>File Manager</title>
		<?php
			$html = "<link rel='stylesheet' type='text/css' media='screen' href='".ICMS_URL."/libraries/jquery/ui/css/ui-smoothness/ui.css'>";
			echo ($html);
			$html = "<link rel='stylesheet' type='text/css' media='screen' href='".ICMS_URL."/modules/elFinder/css/elfinder.min.css'>";
			echo ($html);
			$html = "<link rel='stylesheet' type='text/css' media='screen' href='".ICMS_URL."/modules/elFinder/css/theme.css'>";
			echo ($html);
			$html = "<script type='text/javascript' src='".ICMS_URL."/libraries/jquery/jquery.js'></script>";
			echo ($html);
			$html = "<script type='text/javascript' src='".ICMS_URL."/libraries/jquery/ui/ui.min.js'></script>";
			echo ($html);
			$html = "<script type='text/javascript' src='".ICMS_URL."/modules/elFinder/js/elfinder.min.js'></script>";
			echo ($html);
			
			if ( file_exists( ICMS_ROOT_PATH."/editors/tinymce/jscripts/tiny_mce_popup.js" ) ) {
	$html = "<script type='text/javascript' src='".ICMS_URL."/editors/tinymce/jscripts/tiny_mce_popup.js'></script>";
} else {
	$html = "<script type='text/javascript' src='".ICMS_URL."/editors/tinymce/jscripts/tiny_mce/tiny_mce_popup.js'></script>";
}
			echo ($html);
		?>

		<script type="text/javascript">
		  var FileBrowserDialogue = {
		    init: function() {
		      // Here goes your code for setting your custom things onLoad.
		    },
		    mySubmit: function (URL) {
		      var win = tinyMCEPopup.getWindowArg('window');

		      // pass selected file path to TinyMCE
		      win.document.getElementById(tinyMCEPopup.getWindowArg('input')).value = URL;

		      // are we an image browser?
		      if (typeof(win.ImageDialog) != 'undefined') {
		        // update image dimensions
		        if (win.ImageDialog.getImageData) {
		          win.ImageDialog.getImageData();
		        }
		        // update preview if necessary
		        if (win.ImageDialog.showPreviewImage) {
		          win.ImageDialog.showPreviewImage(URL);
		        }
		      }

		      // close popup window
		      tinyMCEPopup.close();
		    }
		  }

		  tinyMCEPopup.onInit.add(FileBrowserDialogue.init, FileBrowserDialogue);

		  $().ready(function() {
		    var elf = $('#elfinder').elfinder({
		      // set your elFinder options here
		      url: 'php/connector.php',  // connector URL
		      getFileCallback: function(url) { // editor callback
		        FileBrowserDialogue.mySubmit(url); // pass selected file path to TinyMCE 
		      }
		    }).elfinder('instance');      
		  });
		</script>
	</head>
	<body>
		<!-- Element where elFinder will be created (REQUIRED) -->
		<div id="elfinder"></div>
	</body>
</html>