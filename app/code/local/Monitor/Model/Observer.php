<?php

class Zendserver_Monitor_Model_Observer
{

	public function handleEvent(Varien_Event_Observer $observer)
	{
		zend_monitor_custom_event('Magento', $observer->getEvent()->getName());
	}
	
}