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

<div class="category float-left width25">
	<a href="<?php echo $this->app->route->category($category); ?>">
		<h3><?php echo $category->name; ?></h3>
		<?php 
		$image = $category->getImage('content.teaser_image'); ?>
		<img src="<?php echo $image['src']; ?>" <?php echo $image['width_height']; ?> />
	</a>
</div>