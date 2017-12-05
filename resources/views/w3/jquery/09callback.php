<html>

<head>
    <script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#to_hide_btn_id").click(function () {
                $("#to_hide_p_id").hide('slow', function () {
                    alert('隐藏完成');
                })
            });
        });

    </script>
</head>

<body>
    <p id="to_hide_p_id">这是一条要隐藏的信息</p>
    <button id="to_hide_btn_id">to_hide_btn_id</button>
</body>

</html>


<!--
    Callback 函数在当前动画 100% 完成之后执行。
    针对：speed 或 duration 作为可选参数
    例子：$("p").hide("slow")
    speed 或 duration 参数可以设置许多不同的值，比如 "slow", "fast", "normal" 或毫秒。
-->