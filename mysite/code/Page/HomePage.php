<?php
class HomePage extends Page {

	private static $many_many = array(
		"BannerSlides" => "BannerSlide"
	);

	public function getCMSFields() {
		$fields = parent::getCMSFields();
		
		$fields->addFieldToTab('Root.BannerSlides', 
			new GridField('BannerSlides', 'Banner Slides', 
				$this->BannerSlides(), 
				GridFieldConfig_RecordEditor::create()
			)
		);

		return $fields;
	}

}
class HomePage_Controller extends Page_Controller {

}