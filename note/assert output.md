
## 结果分析

```bash
$ phpunit ./tests/Unit/ExampleTest.php
```

输出结果：

```
PHPUnit 7.4.3 by Sebastian Bergmann and contributors.

F                                                                   1 / 1 (100%)

Time: 135 ms, Memory: 4.00MB

There was 1 failure:

1) Tests\Unit\ExampleTest::testAMember
OP
Failed asserting that 0 is true.

/home/vagrant/code/phpunit/tests/Unit/ExampleTest.php:11

FAILURES!
Tests: 1, Assertions: 1, Failures: 1.
```

关于进度条的解析：

+ `.`：成功
+ `F`：Fail，失败
+ `E`：Error，错误
+ `R`：Risk，有风险
+ `S`：Skip，跳过
+ `I`：Incomplete，未完成


代码如下：

```php
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
```

输出结果如下：

```
$ phpunit ./tests/Unit/ExampleTest.php
PHPUnit 7.4.3 by Sebastian Bergmann and contributors.

.FERSI                                                              6 / 6 (100%)

Time: 157 ms, Memory: 4.00MB

There was 1 error:

1) Tests\Unit\ExampleTest::testError
Error: Call to undefined function Tests\Unit\hhha()

/home/vagrant/code/phpunit/tests/Unit/ExampleTest.php:18

--

There was 1 failure:

1) Tests\Unit\ExampleTest::testFail
Failed asserting that 0 is true.

/home/vagrant/code/phpunit/tests/Unit/ExampleTest.php:14

--

There was 1 risky test:

1) Tests\Unit\ExampleTest::testRisk
This test did not perform any assertions

/home/vagrant/code/phpunit/tests/Unit/ExampleTest.php:23

ERRORS!
Tests: 6, Assertions: 3, Errors: 1, Failures: 1, Skipped: 1, Incomplete: 1, Risky: 1.
```

> 消息显示优先级：E > F > R 。

