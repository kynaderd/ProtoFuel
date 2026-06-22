<?php
/**
 * Tests for ProtoFuel
 */

use PHPUnit\Framework\TestCase;
use Protofuel\Protofuel;

class ProtofuelTest extends TestCase {
    private Protofuel $instance;

    protected function setUp(): void {
        $this->instance = new Protofuel(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Protofuel::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
