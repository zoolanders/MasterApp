<?php
/**
* @package		Master App
* @author		ZOOlanders http://www.zoolanders.com
* @copyright	Copyright (C) JOOlanders, SL
* @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

?>

<div class="teaser-item float-left width50">
	<?php
	echo $this->renderer->render('item.teaser', array('view' => $this, 'item' => $item));
	?>
</div>