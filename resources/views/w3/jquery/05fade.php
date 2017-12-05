<html>

<head>
    <script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#btn_hide_id").click(function () {
                $("#div1").hide("fast");
                $("#div2").hide();
                $("#div3").hide("slow");
            });
            $("#btn_show_id").click(function () {
                $("#div1").show("fast");
                $("#div2").show();
                $("#div3").show("slow");
            });
            $("#btn_fadeIn_id").click(function () {
                $("#div1").fadeIn("fast");
                $("#div2").fadeIn();
                $("#div3").fadeIn("slow");
            });
            $("#btn_fadeOut_id").click(function () {
                $("#div1").fadeOut("fast");
                $("#div2").fadeOut();
                $("#div3").fadeOut("slow");
            });
            $("#btn_fadeToggle_id").click(function () {
                $("#div1").fadeToggle("fast");
                $("#div2").fadeToggle();
                $("#div3").fadeToggle("slow");
            });
            $("#btn_fadeTo_id").click(function () {
                $("#div1").fadeTo("fast", 0.2);
                $("#div2").fadeTo("fast", 0.5);
                $("#div3").fadeTo("slow", 0.8);
            });
        });
    </script>
</head>

<body>

<p>演示带有不同参数的 fadeIn() 方法。</p>
<button id="btn_fadeIn_id">fadeIn</button> <br>
<button id="btn_fadeOut_id">fadeOut</button> <br>
<button id="btn_fadeToggle_id">fadeToggle</button> <br>
<button id="btn_fadeTo_id">fadeTo</button> <br>

<button id="btn_hide_id">hide</button> <br>
<button id="btn_show_id">show</button> <br>

<br><br>
<div id="div1" style="width:80px;height:80px;display:none;background-color:red;"></div>
<br>
<div id="div2" style="width:80px;height:80px;display:none;background-color:green;"></div>
<br>
<div id="div3" style="width:80px;height:80px;display:none;background-color:blue;"></div>

</body>

</html>


<!--
    hide，show，fade*
    没有参数：没有动画，一般动作最快
-->

<!--
    fadeTo方法
    $(selector).fadeTo(speed, opacity, callback)
    必须的speed参数规定效果的时长，可以 "slow"、"fast"或毫秒值
    必须的opacity参数将淡入淡出效果设置为给定的不透明度（0与1之间）
    可选的callback参数是该函数完成后所执行的函数名称。
-->