<?php
/**
 *Spanish language constants related to module preferences
 *
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		debianus
 * @package	elfinder
 * @version		$Id$
 */

define('_ELFINDER_MI_ROOT', 'URL de la carpeta de archivos');
define('_ELFINDER_MI_ROOT_DSC', 'Predeterminado: uploads');
define('_ELFINDER_MI_ROOT_PHYSYCAL', 'Ruta física');
define('_ELFINDER_MI_ROOT_PHYSYCAL_DSC', 'Debe indicarse la misma carpeta que se haya escogido en el URL');
define('_ELFINDER_MI_ROOT_NAME', 'Nombre del root');
define('_ELFINDER_MI_ROOT_NAME_DSC', 'Dejándolo en blanco se usará el nombre de la carpeta');
define('_ELFINDER_MI_UPLOAD_DENY', 'Tipos de archivos prohibidos');
define('_ELFINDER_MI_UPLOAD_DENY_DSC', 'Tipos de archivos que no podrán ser subidos');
define('_ELFINDER_COPYOVERWRITE', '¿Reemplazar archivos al copiar?');
define('_ELFINDER_COPYOVERWRITE_DESC', 'Cuando se copian archivos con el mismo nombre se puede elegir entre reemplazar el existente con el contenido del nuevo o dar un nombre distinto al que se quiere copiar');
define('_ELFINDER_UPLOADMAXSIZE', 'Tamaño máximo de archivos');
define('_ELFINDER_UPLOADMAXSIZE_DESC', 'Debe indicarse de forma numérica; tenga en cuenta que es necesario configurar el límite máximo en las opciones de PHP.');
define('_ELFINDER_UPLOADOVERWRITE', '¿Reemplazar archivos existentes si coincide el nombre con los que se suben?');
define('_ELFINDER_UPLOADOVERWRITE_DESC', 'Cuando se suben un archivo con el mismo nombre que uno existente se puede elegir entre reemplazar el existente con el contenido del nuevo o dar un nombre distinto al que se quiere subir');
define('_ELFINDER_TMBSIZE', 'Tamaño de las miniaturas');
define('_ELFINDER_TMBSIZE_DSC', 'Determina el tamaño que tendrán las imágenes a mostrar en la Vista previa');
define('_ELFINDER_DEACTIVATED', 'Comandos desactivados');
define('_ELFINDER_DEACTIVATED_DSC', 'Esta opción no se aplica a los usuarios que tengan permisos para administrar el módulo. Si establece limitaciones en los tipos de archivos que pueden ser subidos es recomendable que el comando <em>rename</em> esté desactivado');
define('_ELFINDER_HEIGHT', 'Alto de la ventana');
define('_ELFINDER_HEIGHT_DSC', 'Altura de la ventana en la que se mostrará el explorador. Predeterminado: 400px');
define('_ELFINDER_DATE_FORMAT', 'Formato de fecha');
define('_ELFINDER_DATE_FORMAT_DSC', 'Se usarán los valores del lenguaje seleccionado y el formato se ajustará a los valores propios de <a href="http://www.php.net/manual/es/function.date.php">PHP</a>. Predeterminado: M d, Y h:i A');
define('_ELFINDER_DEFAULTVIEW', 'Modo de vista');
define('_ELFINDER_DEFAULTVIEW_DSC', 'Los valores son icons (vista de iconos) y list (vista de detalles). Predeterminado: icons');
define('_ELFINDER_MI_ELFINDER_TEMPLATES', 'Plantillas');