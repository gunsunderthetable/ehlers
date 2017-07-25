<?php

	class Product extends DataObject{
		
		public static $db = array(
			'Title' => 'Varchar(200)',
			'Description' => 'Text',
			'Price' => 'Varchar',
			'OrderCode' => 'Varchar',
            'SortOrder'=>'Int'                          
		);
		
		public static $has_one = array(
			'ProductImage' => 'Image',
			'CategoryPage' => 'CategoryPage'
		);
                
        public static $default_sort='SortOrder';		
                
		public function getCMSFields(){
			return new FieldList(
				new TextField('Title', 'Title'),
				new TextAreaField('Description', 'Description'),
				new TextField('Price', 'Price'),
				new TextField('OrderCode', 'Order code'),

				new UploadField('ProductImage', 'Image')
			);
		}
		
	}
