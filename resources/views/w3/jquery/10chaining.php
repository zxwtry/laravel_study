<!DOCTYPE html>

<html>

<head>
    <script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#to_edit_btn_id").click(function () {
                $("#to_edit_p_id").css("color", "red").hide(1000).show(1000).css('fontSize', '3em');
                //可以看到  'fontSize', '3em'操作发生在hide(1000)执行的过程中
            });
        });
    </script>
</head>

<body>
    <button id="to_edit_btn_id">点击开始一串操作</button>
    <p id="to_edit_p_id">要编辑的内容</p>
</body>
</body>

</html>