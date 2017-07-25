<?php

class SiteConfigExtension extends DataExtension {
    private static $db = array(
        'FooterLinks' => 'Text',
        'HeaderLinks' => 'Text',
        'TwitterLink' => 'Text',
        'FacebookLink' => 'Text',
        'GoogleAnalytics' => 'Varchar(20)',
        'HeaderSize' => 'Varchar(20)',
        'HeaderColour' => 'Varchar(20)',
        'HeaderDropShadow' => 'Boolean',
        'HeaderBackground' => 'Boolean',
        'SiteColour' => 'Text',
        'HeaderFont' => 'Text',
        'BodyFont' => 'Text',
        'HeaderDepth' => 'Text',
        'HideHeaderText' => 'Text',
        'HideSearch' => 'Boolean',
        'AddressLine1' => 'Text',
        'AddressLine2' => 'Text',
        'AddressLine3' => 'Text',
        'Telephone' => 'Text',
        'Mobile' => 'Text',
        'Email' => 'Text'
    );
    
    private static $has_one = array(
        'Favicon' => 'Image',
        'Masthead' => 'Image',
        'Logo' => 'Image'
    );

    public function updateCMSFields(FieldList $fields)  {
        $fields->removeByName('Tagline');
        $fields->addFieldToTab('Root.Main', new TextField('AddressLine1', 'Contact address line one'));
        $fields->addFieldToTab('Root.Main', new TextField('AddressLine2', 'Contact address line two'));
        $fields->addFieldToTab('Root.Main', new TextField('AddressLine3', 'Contact address line three'));
        $fields->addFieldToTab('Root.Main', new TextField('Telephone', 'Telephone'));
        $fields->addFieldToTab('Root.Main', new TextField('Mobile', 'Mobile'));

        $fields->addFieldToTab('Root.Main', new TextField('Email', 'Email address'));


        $fields->addFieldToTab('Root.Main', new TextField('GoogleAnalytics', 'Google analytics ID'));
        //$fields->addFieldToTab('Root.Main', new CheckBoxField('HideSearch', 'Remove the search field from the header panel'));

        // $fields->addFieldToTab('Root.SocialMedia', new TextField('TwitterLink', 'link to Twitter (include http)'));
        // $fields->addFieldToTab('Root.SocialMedia', new TextField('FacebookLink', 'link to Facebook (include http)'));
        $fields->addFieldToTab('Root.Footer', new TextareaField('FooterLinks', 'Footer links - one link per line. The format is: Page or external web address&lt;space&gt;Text to use as the link<br>For example - /about-us About our company <br>or http://www.google.co.uk Google'));
    }
    
    public function getSiteFonts() {
        if ($this->owner->BodyFont || $this->owner->HeaderFont) {
            $fontString = $this->owner->BodyFont.'|'.$this->owner->HeaderFont;
        } else {
            $fontString = 'Open Sans|Roboto Slab:400,700';
        }
        return $fontString;
    }
    
    public function getFontCss() {
        $headerWeight = '';
        if ($header = $this->owner->HeaderFont) {
            if ($header == 'Baloo Bhaina' || $header == 'Passion One' || $header == 'Acme' || $header == 'Luckiest Guy' || $header == 'Paytone One' || $header == 'Hammersmith One') {
                $headerWeight = 'font-weight:normal;padding-top:4px;letter-spacing:0.3px';
            }
            return '<style>body{font-family:"'.$this->owner->BodyFont.'", arial, sans-serif;} h1,h2,h3,h4,h5,h6 {font-family:"'.$this->owner->HeaderFont.'", arial, sans-serif;'.$headerWeight.'}</style>';            
        } else {
            return '<style>body{font-family:"Open Sans", arial, sans-serif;} h1,h2,h3,h4,h5,h6 {font-family:"Roboto Slab", arial, sans-serif;'.$headerWeight.'}</style>';            
            
        }

    }

}
