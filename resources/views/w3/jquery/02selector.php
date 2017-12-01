<html>

<head>
    <script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("button").click(function () {
                $("p").css("background-color", "red");
            });
        })
    </script>
</head>

<body>

<h2>This is a heading</h2>
<p>This is a paragraph.</p>
<p>This is another paragraph.</p>
<button type="button">Click me</button>

</body>


</html>


<!--
    jQuery元素选择器：
        （jQuery使用CSS选择器来选取HTML元素）
        $("p")          选取<p>元素
        $("p.intro")    选取 class="intro"的<p>元素
        $("p#demo")     选取 id="demo"的<p>元素

    jQuery属性选择器
        （jQuery使用XPath表达式来选择带有给定属性的元素）
        $("[href]")             选取所有带href属性的元素
        $("[href='#']")         选取所有href值等于'#'的元素
        $("[href!='#']")        选取所有href值不等于'#'的元素
        $("[href$='.jpg']")     选取所有href值以'.jpg'结尾的元素

    jQuery CSS选择器
        jQuery CSS选择器可用于改变HTML元素的CSS属性
        //下面的例子把所有p元素的背景颜色更改为红色
        $("p").css("background-color", "red");

    更多的选择器实例：
        $(this)         当前HTML元素
        $("p")          所有<p>元素
        $("p.intro")    所有class="intro"的<p>元素
        $(".intro")     所有class="intro"的元素
        $("#intro")     所有id="intro"的元素
        $("ul li:first")     每个<ul>的第一个<li>元素
        $("[href$='.jpg']")     所有href值以'.jpg'结尾的元素
        $("div#intro .head")    id="intro"的<div>元素中所有class="head"的元素
-->