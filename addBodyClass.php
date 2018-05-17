<?php /* Add class to body tag;
	 use in block file */

	protected function _prepareLayout()
	{
		$this->pageConfig->addBodyClass('custom-class');
	
        	return parent::_prepareLayout();
    	}
