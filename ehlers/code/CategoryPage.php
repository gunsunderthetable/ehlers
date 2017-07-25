<?php
class CategoryPage extends Page {

    public static $has_many = array(
        "Products" => "Product"
    );  
    
    private static $icon = "cms/images/treeicons/page-gold-file.gif";

    public function getCMSFields() {
      $fields = parent::getCMSFields();

        $gridFieldConfig = GridFieldConfig::create()->addComponents(
          new GridFieldSortableRows('SortOrder'),                         
          new GridFieldToolbarHeader(),
          new GridFieldAddNewButton('toolbar-header-right'),
          new GridFieldSortableHeader(),
          new GridFieldDataColumns(),
          new GridFieldPaginator(30),
          new GridFieldEditButton(),
          new GridFieldDeleteAction(),
          new GridFieldDetailForm()
        );

        $gridField = new GridField("Products", "Products", $this->Products(), $gridFieldConfig);
        $fields->addFieldToTab("Root.Products", $gridField);

        return $fields;
        
    }
        

    
}

class CategoryPage_Controller extends Page_Controller {
	
}
