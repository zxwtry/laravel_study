<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#btn_start_id").click(function () {
                $("#div_id").animate({left:'300px'}, 3000);
                $("#div_id").animate({fontSize:'2em'}, 3000);
            });
            $("#btn_stop_id").click(function () {
                $("#div_id").stop();
            });
            $("#btn_stop_all_id").click(function () {
                $("#div_id").stop(true);
            });
            $("#btn_stop_continue_id").click(function () {
                $("#div_id").stop(true, true);
            });
        });

    </script>
</head>


<body>
    <button id="btn_start_id">开始</button>
    <button id="btn_stop_id">停止</button>
    <button id="btn_stop_all_id">停止所有</button>
    <button id="btn_stop_continue_id">停止但要完成</button>

    <p><b>开始</b>按钮会启动动画</p>
    <p><b>停止</b>按钮会停止当前活动的动画，但允许已排队的动画向前执行</p>
    <p><b>停止所有</b>按钮会停止当前活动的动画，并清空动画队列，因此元素上的所有动画都会停止</p>
    <p><b>停止但要完成</b>会立即完成当前活动的动画，然后停下来</p>


    <div style="background-color: #33ff22; height: 100px; width: 100px; position: absolute";
         id="div_id">HELLO</div>
</body>
</html>