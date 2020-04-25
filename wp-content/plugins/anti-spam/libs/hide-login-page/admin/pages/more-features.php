<?php

	/**
	 * The page Settings.
	 *
	 * @since 1.0.0
	 */

	// Exit if accessed directly
	if( !defined('ABSPATH') ) {
		exit;
	}

	class WHLP_MoreFeaturesPage extends Wbcr_FactoryClearfy218_MoreFeaturesPage {

		public function getPageTitle()
		{
			return __('More features', 'wbcr_factory_clearfy_205');
		}
	}
