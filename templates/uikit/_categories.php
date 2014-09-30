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

<div class="categories clearfix">
	<?php 
	/**
	 * Let's load a partial for each category
	 */
	foreach ($this->selected_categories as $category) {
		echo $this->partial('category', array('category' => $category));
	}
	?>
</div>