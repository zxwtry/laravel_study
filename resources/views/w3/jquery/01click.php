<html>
<head>
    <script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("p").click(function(){
                $(this).hide();
            });
            $("button").click(function () {
                $(this).hide();
            });
            $("#btn_hide_warning").click(function () {
                $("#warning").hide();
            })
            $("#input_hide_all_p").click(function () {
                $("p").hide()
            });
            $("#input_hide_all_test_class").click(function () {
                $(".test").hide()
            });
        });
    </script>
</head>

<body>
<p>If you click on me, I will disappear.</p>
<p>If you click on me, I will disappear.</p>
<p>If you click on me, I will disappear.</p>
<p>If you click on me, I will disappear.</p>
<p id="warning">warning</p>
<p class="test">这是第一个test class</p>
<p class="test">这是第二个test class</p>
<button type="button">Click me</button>
<button id="btn_hide_warning">hide warning</button>
<input type="button" id="input_hide_all_p" value="hide all p"/>
<br />
<input type="button" id="input_hide_all_test_class" value="hide all test class"/>
</body>

</html>


<!--
    //防止文档在完全加载之前运行jQuery代码
    $(document).ready(function() {
        //执行
    });
-->