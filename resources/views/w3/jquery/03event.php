<html>
    <head>
        <script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>
        <script>
            var jq = jQuery.noConflict();
            jq(document).ready(function () {
                jq("#btn_event").click(function () {
                    jq(".p_para").text("jquery仍然在运行！");
                })
            })
        </script>
    </head>

    <body>
        <p class="p_para">这是一个段落</p>
        <button id="btn_event">测试JQ</button>
    </body>

</html>

<!--
    jQuery使用$符号作为jQuery的简介方式。
    其他一些JavaScript库中的函数（比如Prototype）同样使用$符号
    jQuery使用名为noConflict()的方法来解决问题。
    var jq=jQuery.noConflict()，帮助使用自己的名称（如jq）代替$符号
-->

<!--
    jQuery开发原则：
        1，把所有jQuery代码置于事件处理函数中。
        2，把所有事件处理函数置于文档就绪事件处理器中
        3，把jQuery代码置于单独的.js文件中
        4，如果存在名称冲突，重命名jQuery库
-->

<!--
    jQuery中事件方法的例子：
        1，$(document).ready(function)       将函数绑定到文档的就绪事件
        2，$(selector).click(function)       被选元素的点击事件
        3，$(selector).dblclick(function)    被选元素的双击事件
        4，$(selector).focus(function)       被选元素的获得焦点事件
        5，$(selector).mouseover(function)   被选元素的鼠标悬停事件
-->