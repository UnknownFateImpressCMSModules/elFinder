<div class="page">

<div id="header">

# elFinder 1.0 - ImpressCMS Module: Final

Installation and Setting Instructions

</div>

<div id="agreement">

## Release Changelog

The main change from Alpha release is you do not need edit any file for setup and module configuration: Module Preferences does the work!!

You can set up now:physical root, URL, Rootname config, Mimetypes denied ( availables are bin, exe, spl, html, php), Max. Size for files, thumbnails size, height for elFinder window, date format, active buttons selection, default view mode.

More: Language Constants (English and Spanish); ACP Module Administration: (Go to Module, Templates, Preferences, Update, About); elFinder working now with the version of TinyMCE that comes with TinyConfig (thanks MacDonald) and Automatic Language selection: avalaible for en, es, de, fr and nl.

Note: PHP debug mode must to be deactivated for this module in certain servers. If you get an error about "Data are not in Json format", deactivate debug mode for this module.

## What is...and Whats is not

[elFinder](http://elfinder.org/) is an open-source file manager for web, written in JavaScript using jQuery UI. Creation is inspired by simplicity and convenience of Finder program used in Mac OS X operating system.

This module integrate elFinder in an ImpressCMS site as a module and in tinyMCE editor. Creating or editing a page using that Editor you can upload files and insert download links in it. It was done using the Blank module by Madfish as base.

ImpressCMS has a great Imagemanager, but just now not a File or Media Manager and only article module by qm-b has upload files feature. Using this module you solve the problem, but really it is not a File Manager as Imagemanager core feature; only an external aplication integration as module.

This module uses User Groups Permissions feature; but further tests and research about security are neccesaries.

### Features

*   All operations with files and folders on a remote server (copy, move, upload, create folder/file, rename, etc.)
*   High performance server beckend and light client UI
*   Multi-root support
*   Local file system, MySQL, FTP volume storage drivers
*   Background file upload with Drag & Drop HTML5 support
*   List and Icons view
*   Keyboard shortcuts
*   Standard methods of file/group selection using mouse or keyboard
*   Move/Copy files with Drag & Drop
*   Archives create/extract (zip, rar, 7z, tar, gzip, bzip2)
*   Rich context menu and toolbar
*   Quicklook, preview for common file types
*   Edit text files and images
*   "Places" for your favorites
*   Calculate directory sizes
*   Thumbnails for image files
*   Easy to integrate with web editors (elRTE, CKEditor, TinyMCE)
*   Flexible configuration of access rights, upload file types, user interface and other
*   Extensibility
*   Simple client-server API based on JSON

</div>

<div id="howto">

## How to use

### Installation method

1.  Install the module according the normal procedure: decompress the zip file and upload `/elfinder` folder to `/modules` directory in your site.
2.  Please login and go your Control Panel >> Modules >>. Click on install icon.

### Setting up and Configuration

WARNING: set the permissions for the module inmediatly. Go to Control Panel >> System >> Users and Groups >> Groups and deactivate "Can access the following modules" for elFinder module; normally only Administrator User Group must access to it.

*   Preferences:
    1.  URL: URL where the files are located. Default: uploads.
    2.  Physical root: Remember if you change the default URL change this root too. Default: uploads.
    3.  Root name: Leave blank folder name will be used
    4.  Mimetypes not allowed to upload: This selection is only for Groups can access the module, not for Groups can administrate it.
    5.  Replace files on paste: Replace files on paste or give new names to pasted files. true - old file will be replaced with new one, false - new file get name - original_name-number.ext.
    6.  Maximum upload file size: This size is per files. Value is a number.
    7.  Replace files on upload?': Replace files on upload or give them new names. Yes - replace old files, No give new names like original_name-number.ext.
    8.  Thumbnails size: Thumbnails size in pixels for preview. Thumbnails are square');
    9.  Deactivated buttons: If you set up certain mimetypes as forbidden, remember deactivate _rename_. This selection is only for Groups can access the module, not for Groups can administrate it.
    10.  Height: The height of the elFinder main interface (in pixels).Default value: 400px.
    11.  Datetime format: Value from selected language is used by default. Set format here to overwrite it. Format is set in [PHP date](http://www.php.net/manual/en/function.date.php). Default: d, Y h:i A will return Mar 13, 2012 05:27 PM.
    12.  Default view mode':Can be icons and list. Default value: icons.

### TinyMCE integration

*   Just copy the file `tinymce.php` from `extras` folder in`yoursite/editors/tinymce`, overwriting the same file (but not if your use TinyConfig module); or edit that file according this notes:

1.  Open `/editors/tinymce/tinymce.php` file. About line 231

    <pre>force_br_newlines : false,</pre>

    add

    <pre>file_browser_callback: "elFinderBrowser",  </pre>

2.  And just after this code

    <pre>function showMCE(id) {
      if (tinyMCE.getInstanceById(id) == null) {
          tinyMCE.execCommand(\'mceAddControl\', false, id);
      } else {
          tinyMCE.execCommand(\'mceRemoveControl\', false, id);
      }
    }</pre>

    add

    <pre>function elFinderBrowser (field_name, url, type, win) {
      var elfinder_url = "' . ICMS_URL . '/modules/elFinder/tinymce.php";
      tinyMCE.activeEditor.windowManager.open({
        file: elfinder_url,
        title: "File Manager",
        width: 900,  
        height: 450,
        resizable: "yes",
        inline: "yes",    // This parameter only has an effect if you use the inlinepopups plugin!
        popup_css: false, // 
        close_previous: "no"
      }, {
        window: win,
        input: field_name
      });
      return false;
    }</pre>

That´s all: now go to `yoursite/modules/elfinder` and enjoy of your new file manager!!, or editing and article using TinyMCE select some text, clic in Add Link buttom, and you have now a new icon for use the File Manager.

## Extras

### Compres-Uncompress files

Imagine: your fist root is `/uploads` folder, the second `/modules`...you could upload a zip module file, uncompress it and go to Control Panel for installation within ImpressCMS. However note that feature is not PHP related. elFinder does not support PHP zip/zlib modules, it work's only with UNIX command-line utilities. There are autodetect feature; if you have problems, contact with your host provider.

</div>

<div class="agreement">

## License

### elFinder License

elFinder is issued under a [3-clauses BSD license](https://github.com/Studio-42/elFinder#license).

### Modifications for ImpressCMS License

[GNU General Public License v. 3.](http://www.gnu.org/licenses/gpl-3.0.txt)

</div>

<div id="commercial">

## Support

### If you like a theme preview or a question, bugs, problems, suggestions...

<div class="topicbox">Support: [Community Site](http://community.impresscms.org/)</div>

</div>

</div>

<div id="footer">Copyleft 2013 by debianus.</div>
