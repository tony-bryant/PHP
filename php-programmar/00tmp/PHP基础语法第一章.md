## 类型
### 1-0简介
* 变量类型由PHP根据上下文运行时决定
* 支持10种原始数据类型
    * 四种标量类型
        * bool
        * int
        * float  double
        * string
    * 四种复合类型
        * array 数组
        * object 对象
        * callable 可调用
        * iterable 可迭代
    * 特殊类型
        * resource 资源
        * NULL 无类型
* 变量使用$
* gettype() 获取变量类型
* istype() 判断变量类型
    * is_string()
    * is_int()
* 类型转换
    * 强制转换
    * settype()函数

### 1-1布尔类型
* boolean输出0/1
* 类型转换
    * 使用bool转换
    * 使用boolean转换
* 类型转换判断为false的情况
  ![0ead28f383738a7a9429ef9d28fbd2f2.png](evernotecid://BA026592-005A-499F-87F9-6442AACEC50A/appyinxiangcom/23649234/ENResource/p111)

### 1-2整型
* 可以使用十进制，十六进制，八进制或二进制表示
    * 十六进制 0x
    * 八进制 0
    * 二进制 0b
* 加负号代表负数
* 所有整型都有符号
* 整型字长于平台有关
    * PHP_INT_SIZE 字长
    * PHP_INT_MAX 最大值
    * PHP_INT_MIN 最小值
* 向8进制传入非法字符（即 8 或 9）
    * PHP7以前 后面其余数字会被忽略
    * **PHP7以后，会产生 Parse Error**
* 整数溢出会返回float
* 整数相除会返回float
    * 转换成int办法
    * 强转 int()
    * 四舍五入 round()
* 整数转换
    * 大部分会自动转换
    * intval()
    * 强转 int()
    * 四舍五入 round()
* **浮点数转换会向下取整**
* **超出范围浮点数不会报错**
* **分数转int会发生异常**

### 1-3浮点数
* 高精度浮点数
    * 数学函数
    * gmp函数
* 大部分类型先转换成整型，在转换成浮点数
* 对象转换成浮点数 发生 E_NOTICE
* 不可描述的计算结果NAN,松散和严格比较都是false
    * is_nan()检查是否为NAN
    * 松散比较== 类型不同先转换再比较
    * 严格比较=== 类型不同直接返回不相等


### 1-4字符串
* 由字符（字节）组成
* 只支持256的字符集 不支持Unicode
* 一个字符串可以用 4 种方式表达
    * 单引号
        * 变量和特殊字符转义序列不会被转换
    * 双引号
        * ![f636ae613daa9e639f88f03e15ef8d45.png](evernotecid://BA026592-005A-499F-87F9-6442AACEC50A/appyinxiangcom/23649234/ENResource/p112)
    * **heredoc 语法结构**
        * <<<
        * 标识符 只能包含字母、数字和下划线 开头只能是字母和下划线
        * 初始化静态变量和类的属性和常量
        * 初始化静态值
        * 可以解析操作
    * nowdoc 语法结构
        * 类似单引号
        * 不进行解析操作
        * <<<'EOT' 标识符要用单引号括起来
        * 可以初始化类的属性或常量
* 变量解析
    * 使用双引号或者heredoc
    * 简单规则
        * 使用$符号
        * 建议使用{}
    * 复杂规则
        * 使用复杂表达式
* 存取和修改字符串中的字符
    * 使用下标进行修改
        * 超出字符串长度将会用空格填充
        * 非整数类型下标会被转换成整数
        * 非法下标类型会产生一个 E_NOTICE 级别错误
        * 用负数下标写入字符串时会产生一个 E_NOTICE 级别错误
        * 用负数下标读取字符串时返回空字符串
        * 写入时只用到了赋值字符串的第一个字符
        * 用空字符串赋值则赋给的值是 NULL 字符
        * 字符串默认转换成0
    * substr()和substr_replace()修改多个字符
    * 字符串函数https://www.php.net/manual/zh/ref.strings.php
    * URL字符串函数https://www.php.net/manual/zh/ref.url.php
* 转换字符串
    * (string)
    * strval()
* 各类型间转换成字符串
    * bool转字符串
        * true 1
        * false ""
    * 数组 array 转换成 "Array"
    * 对象 object 转换成 "Object"
    * resource转换成 "Resource id #1"
    * null被转变成空字符串。
* 字符串转换成其他类型
    * 转换为数值
        * 不包含 '.'，'e' 或 'E' 且在整型中 转整型
        * 包含或超出范围 转浮点型
* 字符串会被按照该脚本文件相同的编码方式来编码


|  |单引号|双引号|heredoc|nowdoc|
| --- | --- | --- | --- | --- |
|  |‘’|”“|<<< 标识符 string 标识符 |  |
||只能转义\'和\\|可以对特殊的字符进行解析|  |  |  
|  |  |变量会被解析{$var}  | 用在方法参数中 |  |
|  |  |  |初始化静态值  |  |
|  |  |  |类似于双引号  |  |
|  |  |  |  |  |

### 1-5Numeric strings
* 可以翻译为整型或浮点型
* 从PHP8开始使用

### 1-6array数组
* 是一种有序映射key-value
    * 数组
    * 列表
    * 映射
    * 字典
    * 集合
    * 栈
    * 队列
    * 树形结构
    * 多维数组
* 可省略最后一个逗号
* 5.4以后使用 [] 替代 array()
* key&value
    * key是int或者是value
    * value是任意类型
    * 合法整型数字转换成数字
    * 浮点数转换成整型 丢弃小数点
    * 布尔值转换成整型 true=1 false=0
    * null被存储为“”
    * 数组和对象不能被用为键名
    * 相同的key会覆盖值
    * key=>value
* 通过array[key]语法来访问数组
    * []和{}都可以用
* 修改数组的值
    * $arr[key] = value; 修改value
    * $arr[] = value; 不指定键名 新增一个key=key+1
* 删除值 unset()函数
* 字符串需要加引号
* 变量和常量不需要加引号
* 其余类型转换成数组
    *  integer，float，string，boolean 和 resource 类型转换数组，得到仅包含该元素的数组
    *  object转数组除外 属性名称为成员变量名
 