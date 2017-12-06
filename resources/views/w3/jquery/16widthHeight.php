<!DOCTYPE html>

<html>
<head>
    <script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            console.log("width: " + $("#div_id").width());
            console.log("height: " + $("#div_id").height());

            console.log("innerWidth: " + $("#div_id").innerWidth());
            console.log("innerHeight: " + $("#div_id").innerHeight());

            console.log("outerWidth: " + $("#div_id").outerWidth());
            console.log("outerHeight: " + $("#div_id").outerHeight());

            /*
                输出：
                    width: 299.77778
                    height: 99.77778
                    innerWidth: 319.77778
                    innerHeight: 119.77778
                    outerWidth: 322
                    outerHeight: 122
             */

            $("#btn_id").click(function () {
                var txt = "";
                txt += "width is " + $("#div_id").width() + "<br>";
                txt += "height is " + $("#div_id").height() + "<br>";
                $("#div_id").html(txt);
            });
        });
    </script>
</head>

<body>
<div id="div_id" style="height:100px;width:300px;padding:10px;margin:3px;border:1px solid blue;background-color:lightblue;"></div>
<br>
<button id="btn_id">显示 div 的尺寸</button>
<p>width() - 返回元素的宽度。</p>
<p>height() - 返回元素的高度。</p>
</body>
</html>


<!--
    width()：设置/返回元素的宽度（不包括内边距、边框或外边距）
    height()：设置/返回元素的高度（不包括内边距、边框或外边距）

    innerWidth()：返回元素的宽度（包括内边距）
    innerHeight()：返回元素的高度（包括内边距）


    outerWidth()：返回元素的宽度（包括内边距和边框）
    outerHeight()：返回元素的高度（包括内边距和边框）
-->