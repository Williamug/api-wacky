<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase {
	/**
	 * A basic test example.
	 *
	 * @return void
	 * @watch
	 */
	public function testBasicTest() {
		$response = $this->get('/');

		$response->assertStatus(200);
	}
}
