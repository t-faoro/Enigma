<?php 
/**
* Filename: EnigmaTemplates.class.php
* @author Tylor Faoro
* Email: tylor@tylorfaoro.ca
*
* Source Credit: http://biglancers.com/blog/2013/03/php-cms-from-scratch/
*
* Purpose: This class manages the template objects for the backend of Enigma. Templates can be customized, and more may be added later. 
* This class will handle all necessary logic required. This class works in unison with several other files, and makes up part of a MVC framework
* intended to assist clients with managing their own websites.
*/


require_once('EnigmaBase.class.php');

class EnigmaTemplates extends EnigmaBase{
	
	//:: Variable Declaration
	public $templateName = 'default'; // Will display default template
	public $widgetPosition = array(); // array which holds widget positions and widget names.
	
	/**
	 * Purpose: Show the page, with active template, in the sites View.
	*/
	public function show(){
		require_once( $this->getCurrentTemplatePath() . 'index.php' );
	}
	
	/**
	 * Purpose: Returns the current template path, where all template files are located.
	 *
	 * @return The default templates directory. If this directory is not present the process will fail.
	*/
	public function getCurrentTemplatePath(){
		return 'templates/' . $this->templateName . '/';
	}
	
	/**
	 * Purpose: Allows the user to set the desired template for their site. This allows for custom stylesheets and landing pages.
	 *
	 * @param $templateName The name of the template that is going to be used.
	*/
	public function setTemplate( $templateName ){
		$this->templateName = $templateName;
	}
	
	public function enigmaOutput(){		
		require_once('include/EnigmaApplication.class.php');		
		$app = new EnigmaApplication();
		$app->run();
		
	}
	
	/**
	 * Purpose: Draws the necessary markup to display the widget data. The widget is drawn in the 'position' that the user
	 * would have declared recently.
	 *
	 * @param $positionName The position where the user would like the widget to be drawn.
	*/
	public function widgetOutput( $positionName = 'default' ){
		
		if( !empty( $this->widgetPosition[$positionName] ) ){
			
			$widgets = $this->widgetPosition[$positionName];
			foreach( $widgets as $widgetName ){
				require_once('widgets/' . $widgetName . '/'. $widgetName. '.widget.php');
				$widgetClass = ucfirst( $widgetName ) . 'Widget';
				$widget = new $widgetClass(); // Create a widget object.
				$widget->run( $widgetName );  // Pass the newly instantiated widget object into the object.
			}
		}
	}
	
	/**
	 * Purpose: Accepts a position and a Widget name, determines if the Widget already exists, if not then it is created, 
	 * otherwise it is pushed into the array.
	 * 
	 * @param $position The intended position of the widget. e.g SideBar
	 * @param $widgetName The actualy name (no extensions) of the widget to be used in the position previously selected.
	*/	
	public function setWidget( $position , $widgetName ){
		
		if( empty( $this->widgetPosition[$position] ) ){
			$this->widgetPosition[$position] = array($widgetName);
		
		}
		else{
			array_push( $this->widgetPosition[$position], $widgetName );
		
		}
	
	}


} // End of Class





?>