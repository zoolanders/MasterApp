<?php
/**
* @package		Master App
* @author		ZOOlanders http://www.zoolanders.com
* @copyright	Copyright (C) JOOlanders, SL
* @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// load assets
$this->app->document->addStylesheet($this->template->resource.'assets/style.css');

// init vars
$css_class = $this->application->getGroup().'-'.$this->template->name;

?>

<!-- THIS PART OF THE PAGE IS THE CONTENT OF THE SINGLE ITEM VIEW -->
<div id="yoo-zoo" class="yoo-zoo <?php echo $css_class; ?> <?php echo $css_class.'-'.$this->item->alias; ?>">

	<div class="item item-<?php echo $this->item->type;?>">

		<!-- If the type has it's own renderer folder -->
		<?php if ($this->renderer->pathExists('item/' . $this->item->type)) : ?>
		<?php echo $this->renderer->render('item.' . $this->item->type . '.full', array('view' => $this, 'item' => $this->item)); ?>

		<!-- Else use the common folder -->
		<?php else : ?>
		<?php echo $this->renderer->render('item.full', array('view' => $this, 'item' => $this->item)); ?>
		<?php endif; ?>

		<!-- COMMENTS -->
		<?php echo $this->app->comment->renderComments($this, $this->item); ?>

</div>