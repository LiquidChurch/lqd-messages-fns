<?php

/**
 * Class LCF_Shortcodes_Resources_Test
 */
class LCF_Shortcodes_Resources_Test extends WP_UnitTestCase {
	function test_class_exists() {
		$this->assertTrue( class_exists( 'LCF_Shortcodes_Resources') );
	}

	function test_class_access() {
		$this->assertTrue( lc_func()->shortcodes-resources instanceof LCF_Shortcodes_Resources );
	}
}
