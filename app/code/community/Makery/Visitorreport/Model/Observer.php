<?php
class Makery_Visitorreport_Model_Observer {

	public function logVisitorAction($observer) {

		$email = '';
		if($customer = Mage::getSingleton('customer/session')->isLoggedIn()) {
				$customer = Mage::getSingleton('customer/session')->getCustomer();
				$email = $customer->getEmail();
		}

		$ip = Mage::helper('core/http')->getHttpHost($clean = true);
		$currentUrl = Mage::helper('core/url')->getCurrentUrl();
		$visitorreport_col = Mage::getModel('visitorreport/visitorreport');
			try {
					$visitorreport_col->setData('customer_email', $email)
									  ->setData('customer_ip', $ip)
									  ->setData('visited_time', now())
									  ->setData('visited_url', $currentUrl);
					$visitorreport_col->save();			
			}
			catch (Exception $e) {
					Mage::log('Following error occured while saving visitor data: '.$e, null, 'visitorreport.log');
			}
	}
}