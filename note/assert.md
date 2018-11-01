## 断言（assert）

对测试的代码进行预期的判断，比如断言这个结果返回的状态`200`.

## 断言的方法（method）

### 布尔值的断言

+ assertTrue()
+ assertFalse()

### 数组的断言方法


### 字符串断言

+ assertRegExp()
+ assertStringMatchesFormat()
+ assertStringMatchesFormatFile()
+ assertSame()
+ assertStringEndsWith()
+ assertStringStartsWith()
+ assertStringEqualsFile()


### 类的常用断言

+ assertEquals()：方法和属性的判断，不对值进行判断
+ assertInstanceOf()
+ assertClassHasStaticAttribute()
+ assertClassHasAttribute()
+ assertClassHasStaticAttribute()
+ assertObjectHasAttribute()

### 目录和文件的断言

**目录**

+ assertDirectoryExists()
+ assertDirectoryIsReadable()
+ assertDirectoryIsWritable()
+ *assertIsReadable()*
+ *assertIsWritable()*

**文件**

+ assertFileEquals()
+ assertFileExists()
+ assertFileIsReadable()
+ assertFileIsWritable()
+ *assertIsReadable()*
+ *assertIsWritable()*


### JSON断言

+ assertJsonFileEqualsJsonFile()
+ assertJsonStringEqualsJsonFile()
+ assertJsonStringEqualsJsonString()

### 数字断言

+ assertInfinite($variable)：当 `$actual` 不是 `INF` 时报告错误
+ assertLessThan($expected, $actual)：`$expected` 小大于 `$actual`
+ assertLessThanOrEqual()
+ assertNan()：当 `$variable` 不是 `NAN` 时报告错误（结果不是数字）
+ assertGreaterThan($expected, $actual)：`$expected` 不大于 `$actual`
+ assertGreaterThanOrEqual()

### 其他断言方法

+ assertEmpty()
+ assertInternalType()：断言php的内部类型。如：float
+ assertNull()