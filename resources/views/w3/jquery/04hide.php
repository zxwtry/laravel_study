<html>

<head>
    <script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function () {
            $(".ex .hide").click(function () {
                $(this).parents(".ex").hide("slow");
            });
            $(".bsc").click(function () {
                $(this).next().show("slow");
            })
            $("#toggle_id").click(function () {
                $(this).next().toggle();
            })
        });
    </script>
    <style type="text/css">
        div.ex {
            background-color: #e5eecc;
            padding:7px;
            border: solid 1px #c3c3c3;
        }
    </style>
</head>

<body>
    <h3 class="bsc">中国办事处</h3>
    <div class="ex">
        <button class="hide" type="button">隐藏</button>
        <p>联系人：张先生<br/>
            地址一<br/>
            北京<br/>
        </p>
    </div>
    <br/>
    <h3 class="bsc">美国办事处</h3>
    <div class="ex">
        <button class="hide" type="button">隐藏</button>
        <p>联系人：张先生<br/>
            地址一<br/>
            美国<br/>
        </p>
    </div>

    <h3 id="toggle_id">点击toggle</h3>
    <p>你好toggle</p>

</body>

</html>


<!--
    show() hide()
    toggle()：显示被隐藏的元素  或者  隐藏被显示的元素

    $(selector).toggle(speed, callback)
    speed参数规定隐藏/显示的速度，可以是："slow", "fast", 毫秒数
    可选的callback参数是toggle()方法完成后执行的函数名称
-->

