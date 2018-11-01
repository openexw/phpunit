<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase {

    public function testPoint() {
        $this->assertTrue(true, "OP");
    }

    public function testFail() {
        $this->assertTrue(0);
    }

    public function testError() {
        hhha();
        
    }

   
    public function testRisk() {
        // 没有任何内容     
    }

    public function testSkip() {
        // 标记当前的方法为跳过
        $this->markTestSkipped();
    }

    public function testIncomplete() {
        $this->assertTrue(true);
        // 标记为未完成
        $this->markTestIncomplete();
    }
}