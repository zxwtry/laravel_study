<!DOCTYPE html>

<html>
<head>
    <script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("button").click(function () {
                $("h1, h2, p").addClass("blue");
                $("div").addClass("important");
            });
            $("input").click(function () {
                $("h1, h2, p").removeClass("blue");
                $("div").removeClass("important");
            });
            $("b").click(function () {
                $("h1, h2, p").toggleClass("blue");
                $("div").toggleClass("important");
            });
        });
    </script>
    <style type="text/css">
        .important {
            font-weight: bold;
            font-size: xx-large;
        }
        .blue {
            color:blue;
        }

    </style>
</head>

<body>
<h1>标题 1</h1>
<h2>标题 2</h2>
<p>这是一个段落。</p>
<p>这是另一个段落。</p>
<div>这是非常重要的文本！</div>
<br>
<button>向元素添加类</button>
<input type="button" value="从元素中删除类"/>
<b>向元素添加/删除类</b>
</body>
</html>


<!--
    jQuery操作CSS的方法：
    1，addClass() 向被选元素添加一个或多个类
    2，removeClass() 从被选元素删除一个或多个类
    3，toggleClass() 对被选元素进行添加/删除类的切换操作
    4，css() 设置或返回样式属性
-->