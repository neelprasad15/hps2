<?php
/**
 *
 * @author    Latpay Team
 * @copyright Copyright (c) Latpay
 * @license   Addons PrestaShop license limitation
 * @version   1.0.0
 * @link      https://www.latpay.com.au/
 *
 */

class LatpayFormModuleFrontController extends ModuleFrontController
{

	public function init()
	{
		parent::init();
	}


	public function initcontent()
	{
		parent::initContent();

		$this->context->smarty->assign(
		);

		$this->setTemplate('module:latpay/views/templates/front/form.tpl');
	}




	
}