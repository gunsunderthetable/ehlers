<?php

	class Box extends DataObject{
		
		public static $db = array(
			'Title' => 'Varchar(200)',
			'Colour' => 'Varchar(80)',
			'Description' => 'Text',
            'ExternalLink' => 'Text',
            'SortOrder'=>'Int',
            'TextShadow' => 'Boolean',
            'TextPosition' => 'Varchar(80)'                 
		);
		
		public static $has_one = array(
			'BoxImage' => 'Image',
			'HomePage' => 'HomePage',
			'LinkPage' => 'SiteTree'
		);
                
        public static $default_sort='SortOrder';		
                
		public function getCMSFields(){
			$colourDrop=DropdownField::create('Colour','Box colour', array(
				'unselected' => 'unselected',
				'whitetext' => 'white',
				'greytext' => 'lightgrey',
				'blacktext'=> 'black'));

			$positionDrop=DropdownField::create('TextPosition','Text position', array(
				'unselected' => 'unselected',
				'top' => 'top',
				'middle' => 'middle',
				'bottom'=> 'bottom'));

			return new FieldList(
				new TextField('Title', 'Box title'),
				new TextareaField('Description', 'Box description'),
				new CheckBoxField('TextShadow','Use a text shadow'),
				new TreeDropdownField('LinkPageID', 'Select a page to link to from the image', 'SiteTree'),
				new UploadField('BoxImage', 'Image')
			);
		}
		
	}
