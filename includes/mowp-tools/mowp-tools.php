<?php
namespace Learndash_Boost\MOWP_Tools;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class MOWP_Tools {
	public static function init() {
		include_once dirname( __FILE__ ) . '/utils/template.php';
		include_once dirname( __FILE__ ) . '/integrations/woocommerce/log.php';
		
		if ( is_admin() ) {
			
		}
	}
}
