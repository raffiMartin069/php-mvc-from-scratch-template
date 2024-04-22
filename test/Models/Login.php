<?php
require_once '../../src/Models/Login.php'; // Replace with the actual path to your Login class

use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase {
    private $login;

    protected function setUp(): void {
        $this->login = new Login('testId', 'testKey');
    }

    public function testGetId() {
        $this->assertEquals('testId', $this->login->getId());
    }

    // Add more test methods as needed
}