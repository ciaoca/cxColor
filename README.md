#jQuery cxColor

cxColor 是基于 jQuery 的颜色选择器插件，输出值为 HEX 格式的颜色值。

版本：

* jQuery v1.4.4+
* jQuery cxColor v1.1

文档：http://code.ciaoca.com/jquery/cxcolor/

示例：http://code.ciaoca.com/jquery/cxcolor/demo/

##【options 参数说明】

<table>
    <thead>
        <tr>
            <th width="80">名称</th>
            <th width="80">默认值</th>
            <th>说明</th>
        </tr>
    </thead>
    <tr>
        <td>color</td>
        <td>"#000000"</td>
        <td>默认颜色<br>※ input 中的 value 值优先级要高级此值。</td>
    </tr>
</table>

##【API 接口】

<table class="manual_table table_form">
    <thead>
        <tr>
            <th width="120">名称</th>
            <th>说明</th>
        <tr>
    </thead>
    <tr>
        <td>show()</td>
        <td>显示面板</td>
    </tr>
    <tr>
        <td>hide()</td>
        <td>隐藏面板</td>
    </tr>
    <tr>
        <td>color(hex)</td>
        <td>设置/获取颜色值，参数值为 HEX 格式，例：<br>color() // 获取当前颜色值<br>color("#ff0000") // 设置颜色值为 #ff0000</td>
        <<tr>
    <tr>
       <td>reset()</td>
       <td>设置默认颜色</td>
    </tr>
    <tr>
       <td>clear()</td>
       <td>清除颜色</td>
    </tr>
</table>

##使用方法

载入 CSS 文件

```html
<link rel="stylesheet" href="css/jquery.cxcolor.css">
```

载入 JavaScript 文件

```html
<script src="js/jquery.js"></script> 
<script src="js/jquery.cxcolor.js"></script>
```

调用 cxColor
```javascript
// 直接调用
$("#element_id").cxColor();

// 自定义参数调用 
$("#element_id").cxColor({
    color:"#009900"
});
```
