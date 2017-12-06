<!DOCTYPE html>

<html>

<head>
    <script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
//            console.log($("div p").first().text())
            // 这是 div 中的一个段落。

//            console.log($("div p").last().text())
            // 这是 div 中的另一个段落。

//            console.log($("p").eq(1).text())
            // 这是 div 中的另一个段落。

//            console.log($("p").filter(".demo").text())
            // 这是 div 中的一个段落。

//            console.log($("p").not(".demo").text())
            // 这是 div 中的另一个段落。这也是段落。
        })
    </script>
</head>

<body>

<h1>欢迎来到我的主页</h1>
<div>
    <p class="demo">这是 div 中的一个段落。</p>
</div>

<div>
    <p>这是 div 中的另一个段落。</p>
</div>

<p>这也是段落。</p>

<h1>这是h1</h1>

</body>

</html>

<!--

    jQuery遍历 - 过滤
    过滤方法：
    first()     返回被选元素的首个元素
        例：$("div p").first()   选取首个<div>元素内部的第一个<p>元素
    last()      返回被选元素的最后一个元素
        例：$("div p").last()   选取最后一个<div>元素内部的最后一个<p>元素
    eq()        返回被选元素中带有指定索引号的元素
        例：$("p").eq(1)   选取第二个<p>元素（索引号1）
    filter()    只返回匹配的元素
        例：$("p").filter(".intro");  返回带有类名"intro"的所有<p>元素
    not()       只返回不匹配的元素
        例：$("p").not(".intro");  返回不带有类名"intro"的所有<p>元素
-->