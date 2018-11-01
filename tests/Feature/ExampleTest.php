<?php
namespace Tests\Feature;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase {
    /**
     * @group thread
     */
    public function testThread() {
        $this->assertEquals(0, 1);
    }

    /**
     * @group thread
     * @group reply
     */
    public function testHasReply() {
        $this->assertTrue(true);
    }

    /**
     * @group user
     */
    public function testBelongToUser() {
        $this->assertFalse(0);
    }

    public function testArrayHasKey() {
        $arr = [
                'a' => 1,
                'b' => 2
        ];
//        $this->assertArrayHasKey('m', $arr);
        $this->assertArraySubset([1], $arr);
    }

    public function testArraySubset() {
        $arr = [
            'a' => 1,
            'b' => 2
        ];
//        $this->assertArrayHasKey('m', $arr);
        $this->assertArraySubset(['a'=>1], $arr);
    }
}