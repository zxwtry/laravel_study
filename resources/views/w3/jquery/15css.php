<!DOCTYPE html>

<html>
<head>
    <script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            console.log('para1_id ' + $("#para1_id").css("background-color"));
            console.log('para2_id ' + $("#para2_id").css("background-color"));
            console.log('para3_id ' + $("#para3_id").css("background-color"));
            /*
                输出：
                    para1_id rgb(255, 0, 0)
                    para2_id rgb(0, 255, 0)
                    para3_id rgb(0, 0, 255)
             */
            $("#change_color_btn").click(function () {
                $("#para1_id").css("background-color", "rgb(255, 255, 255)");
                $("#para2_id").css("background-color", "rgb(255, 255, 255)");
                $("#para3_id").css("background-color", "rgb(255, 255, 255)");
            });
        });
    </script>
</head>

<body>
<p id="para1_id" style="background-color:#ff0000">这是一个段落。</p>
<p id="para2_id" style="background-color:#00ff00">这是一个段落。</p>
<p id="para3_id" style="background-color:#0000ff">这是一个段落。</p>
<button id="change_color_btn">change_color_btn</button>
</body>
</html>


<!--
    css()方法的作用：
    1， 返回css属性。例：$("p").css("background-color");
    2， 设置css属性。例：$("p").css("background-color","yellow");
        设置多个css属性，例：
        $("p").css({"background-color":"yellow","font-size":"200%"});
-->