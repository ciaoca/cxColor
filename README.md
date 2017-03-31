# jQuery cxColor

cxColor 是基于 jQuery 的颜色选择器插件，输出值为 HEX 格式的颜色值。

**版本：**

* jQuery v1.4.4+
* jQuery cxColor v1.2

文档：http://code.ciaoca.com/jquery/cxcolor/

示例：http://code.ciaoca.com/jquery/cxcolor/demo/

## 使用方法

### 载入 CSS 文件

```html
<link rel="stylesheet" href="jquery.cxcolor.css">
```

### 载入 JavaScript 文件

```html
<script src="jquery.js"></script> 
<script src="jquery.cxcolor.js"></script>
```

### 调用 cxColor

```javascript
// 直接调用
$("#element_id").cxColor();

// 自定义参数调用 
$("#element_id").cxColor({
    color:"#009900"
});
```

## options 参数说明

名称|默认值|说明
---|---|---
color|"#000000"|默认颜色<br>※ input 中的 value 值优先级要高级此值。

## API 接口

名称|说明
---|---
show()|显示面板
hide()|隐藏面板
color(hex)|设置/获取颜色值，参数值为 HEX 格式，例：<br>color() // 获取当前颜色值<br>color("#ff0000") // 设置颜色值为 #ff0000
reset()|设置默认颜色
clear()|清除颜色
