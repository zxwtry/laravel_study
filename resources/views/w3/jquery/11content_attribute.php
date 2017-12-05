<!DOCTYPE html>

<html>

<head>
    <script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            console.log("p_id: text()" + $("#p_id").text());
            console.log("p_id: html()" + $("#p_id").html());
            console.log("p_id: val()" + $("#p_id").val());
            console.log("btn1_id: text()" + $("#btn1_id").text());
            console.log("btn1_id: html()" + $("#btn1_id").html());
            console.log("btn1_id: val()" + $("#btn1_id").val());
            console.log("btn2_id: text()" + $("#btn2_id").text());
            console.log("btn2_id: html()" + $("#btn2_id").html());
            console.log("btn2_id: val()" + $("#btn2_id").val());
            /*
                输出：
                    p_id: text()这是段落中的粗体>文本
                    p_id: html()这是段落中的<b>粗体</b>文本
                    p_id: val()
                    btn1_id: text()显示文本
                    btn1_id: html()显示文本
                    btn1_id: val()
                    btn2_id: text()显示
                    btn2_id: html()显示
                    btn2_id: val()
             */
        });

    </script>
</head>


<body>
<p id="p_id">这是段落中的<b>粗体</b>文本</p>
<button id="btn1_id">显示文本</button>
<button id="btn2_id">显示</button>
</body>

</html>


<!--
    jQuery DOM操作
    jQuery非常重要的部分：操作DOM的能力
    DOM = Document Object Model（文档对象模型）

    获取内容：text()、html()、val()
    text() ： 设置或返回所选原色的文本内容
    html() ： 设置或返回所选元素的内容（包括HTML标记）
    val()  ： 设置或返回表单字段的值


    获取属性：attr()

-->