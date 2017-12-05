<html>

<head>
    <script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#to_left_btn_id").click(function () {
                $("#to_left_div1_id").animate({left:'150px'});
                $("#to_left_div2_id").animate({left:'150px'});
            });

            $("#expand_left_btn_id").click(function () {
                $("#expand_left_div_id").animate({
                    left:'500px',
                    opacity:'0.5',
                    height:'300px',
                    width:'300px'
                });
            });

            $("#expand_left_btn2_id").click(function () {
                $("#expand_left_div_id").animate({
                    left:'500px',
                    opacity:'0.5',
                    height:'+=200px',
                    width:'+=200px'
                });
            });

            $("#toggle_height_btn_id").click(function () {
                $("#expand_left_div_id").animate({
                    height:"toggle"
                });
            });

            $("#fontSize_btn_id").click(function () {
                $("#expand_left_div_id").animate({
                    left:'100px'
                },"slow");
                $("#expand_left_div_id").animate({
                    fontSize:'3em'
                },"slow");
            });

        });
    </script>
</head>

<body>
    <div align="center">
        <button id="to_left_btn_id">到left等于150px</button>
    </div>

    <div style="background:#386f81;height:100px;width:100px;position:absolute;left:0px"
         id="to_left_div1_id"></div>
    <div style="background:#98bf21;height:100px;width:100px;position:absolute;left:500px"
         id="to_left_div2_id"></div>

    <div align="center">
        <button id="expand_left_btn_id" style="margin-top: 145px">扩大left到300px</button>
        <button id="expand_left_btn2_id" style="margin-top: 145px">扩大left到300px</button>
        <button id="toggle_height_btn_id" style="margin-top: 145px">高度toggle</button>
        <button id="fontSize_btn_id" style="margin-top: 145px">fontSize</button>
    </div>
    <div style="background:#98bf21;height:100px;width:100px;position:absolute;left:00px;top: 200px"
         id="expand_left_div_id">HELLO</div>

</body>

</html>


<!--
    animate()方法：
        animate方法用于创建自定义动画
        语法：
            $(selector).animate({params}, speed, callback)
            必需的params参数定义形成动画的css属性。
            可选的speed参数
            可选的callback参数

    $("#btn_id").click(function() {
        $("#show_id").animate({left:'250px'});
    });
    会将show_id

    如果需要对位置进行操作，记得首先把元素的CSS position属性设置为relative、fixed或absolute！
-->


