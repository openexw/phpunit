## 配置格式

```xml
<phpunit
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:noNamespaceSchemaLocation="https://schema.phpunit.de/6.3/phpunit.xsd"
        bootstrap="./bootstrap.php"
        colors="true"
        >
    <testsuites>
        <testsuite name="Unit">
            <directory>./tests/Unit</directory>
        </testsuite>
        <testsuite name="Feature">
            <directory>./tests/Feature</directory>
        </testsuite>
    </testsuites>
</phpunit>
```

+ bootstrap：启动文件
+ testsuites：测试套件
+ colors: 颜色
+ processIsolation：进程

## 测试套件（testsuites）

> 用于将测试套件及测试用例组合出新的测试套件。

比如用于区分`单元测试`、`功能测试`等。

### 子元素

+ testsuite：分组，如`单元测试`、`功能测试`等
+ directory：指定一个测试的目录
+ file：指定测试的文件
+ exclude：排除

属性：

+ phpVersion：php版本
+ phpVersionOperator：操作，默认是`>=`。

如： 

```xml
<testsuite name="Feature">
    <directory phpVersion="5.6" phpVersionOperator=">=">./tests/Feature</directory>
</testsuite>
```

在测试时对 `testsuite`的使用：

```bash
$ phpunit --testsuite Feature
```

## 分组（group）

`testsuite` 是物理目录上的分组，而 `group` 是逻辑上的分组。
 
### 如果添加 group

**第一种：使用注解**

```php
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
}
```

在方法的注释部分使用 `@group` 标明。一个方法可标注多个。使用以下方法进行测：

```bash
$ phpunit --group thread
```

**第二种：配置文件（group）**

`group` 是从 `@group` 中选择需要运行的（`include`）或者不运行的（`exclude`）分组。

```xml
<phpunit
       
        >
   ...
    <group>
        <include>
            <group>thread</group>
            <group>reply</group>
        </include>
        <exclude>
            <group>user</group>
        </exclude>
    </group>
</phpunit>
```

如果不指定 `--group` 参数，默认会执行 `include` 包含的所有分组，而 `exclude` 则会排除在外。


## 日志记录（Logging）

如果执行的单元测试有很多，在命令行界面显示的内容也会很多，而导出则是将测试结果导出。

**命令行**

```bash
$ phpunit --testdox-html ./phpunit.html
```
执行完后，在当前目录下就就会出现结果。

**配置文件**

```xml
<logging>
    <log type="testdox-html" target="./res.html"></log>
    <log type="testdox-text" target="./res.md"></log>
</logging>
```

> 注意：在命令行中指定 `--testdox-html` 会覆盖配置文件的 `<log type="testdox-html" target="./res.html"></log>`。


## 全局变量、常量

```xml
<php>
    <includePath>.</includePath>
    <ini name="swoole" value="swoole.so"></ini> php.ini
    <var name="user"></var>                     $GLOBALS
    <env nam="app_debug" value="true"></env>    $_env
</php>
```