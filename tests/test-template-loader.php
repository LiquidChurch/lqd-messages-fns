<?php

/**
 * Class LCF_Template_Loader_Test
 */
class LCF_Template_Loader_Test extends WP_UnitTestCase {
	public function test_class_exists() {
		$this->assertTrue( class_exists( 'LCF_Template_Loader') );
	}

	public function test_class_access() {
		$this->assertTrue( lc_func()->template-loader instanceof LCF_Template_Loader );
	}
}
