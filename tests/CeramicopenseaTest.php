<?php
/**
 * Tests for CeramicOpensea
 */

use PHPUnit\Framework\TestCase;
use Ceramicopensea\Ceramicopensea;

class CeramicopenseaTest extends TestCase {
    private Ceramicopensea $instance;

    protected function setUp(): void {
        $this->instance = new Ceramicopensea(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Ceramicopensea::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
