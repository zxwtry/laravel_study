<!DOCTYPE html>

<html>

<head>
    <script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#remove_btn_id").click(function () {
                $("#p_id").remove();
                $("#div_id").remove();
            });
            $("#empty_btn_id").click(function () {
                $("#p_id").empty();
                $("#div_id").empty();
            })
        });
    </script>

</head>


<body>
    <p id="p_id" style="background-color: #00ff00">初始内容</p>
    <button id="remove_btn_id">点击remove</button>
    <button id="empty_btn_id">点击empty</button>

    <div id="div_id" style="background-color: #ff0000; height: 100px">
        <p>这是第一条内容</p>
        <p>这是第二条内容</p>
    </div>
</body>

</html>