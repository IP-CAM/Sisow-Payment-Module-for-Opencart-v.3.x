<?php 

include 'sisow/sisow.php';

class ControllerExtensionPaymentSisowPP extends ControllerExtensionPaymentSisow {
	public function index() {
		$this->_index('sisowpp');
	}

	public function validate() {
		return $this->_validate('sisowpp');
	}
}
?>
