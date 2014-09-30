<?php
/**
* @package		Master App
* @author		ZOOlanders http://www.zoolanders.com
* @copyright	Copyright (C) JOOlanders, SL
* @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
*/

/**
 * Application Class. Here you can do advanced things, like
 * adding new paths for the application, changing the way the 
 * actions are dispatched etc.
 */
class MasterappApplication extends Application {
	
	/**
	 * Called whenever the application is loaded and distpaches the actions
	 */
	public function dispatch() {

		/**
		 * Let's load extra controllers
		 */
		// if ($path = $this->app->path->path('applications:masterapp/controllers')) {
		// 	$this->app->path->register($path, 'controllers');
		// }

		/**
		 * Let's bind an event to each category loading
		 */
		// $this->app->event->dispatcher->connect('category:init', array($this, 'categoryLoaded'));

		parent::dispatch();
	}

	/**
	 * The dispatcher calls this event passing the event as a parameter
	 * The event contains all the informations, like the category itself
	 */
	public function categoryLoaded($event)
	{
		$cat = $event->getSubject();
		echo 'We have loaded the category: ' . $cat->name . '<br />'; 
	}
}