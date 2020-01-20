<?php

/**
 * Class BaseTest
 */
class BaseTest extends WP_UnitTestCase {
	public function test_class_exists() {
		$this->assertTrue( class_exists( 'LiquidChurch_Functionality') );
	}

	public function test_get_instance() {
		$this->assertInstanceOf( LiquidChurch_Functionality::class, lc_func() );
	}
}
