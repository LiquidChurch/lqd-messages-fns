<?php

/**
 * Class LCF_Shortcodes_Test
 */
class LCF_Shortcodes_Test extends WP_UnitTestCase {
	function test_class_exists() {
		$this->assertTrue( class_exists( 'LCF_Shortcodes') );
	}

	function test_class_access() {
		$this->assertInstanceOf( LCF_Shortcodes::class, lc_func()->shortcodes );
	}
}
