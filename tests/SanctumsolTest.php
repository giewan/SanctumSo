<?php
/**
 * Tests for SanctumSoL
 */

use PHPUnit\Framework\TestCase;
use Sanctumsol\Sanctumsol;

class SanctumsolTest extends TestCase {
    private Sanctumsol $instance;

    protected function setUp(): void {
        $this->instance = new Sanctumsol(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Sanctumsol::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
