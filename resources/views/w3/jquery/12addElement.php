<!DOCTYPE html>

<html>

<head>
    <script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#append_btn_id").click(function () {
                $("#p_id").append("A");
            });
            $("#prepend_btn_id").click(function () {
                $("#p_id").prepend("B");
            });
            $("#after_btn_id").click(function () {
                $("#p_id").after("C");
            });
            $("#before_btn_id").click(function () {
                $("#p_id").before("D");
            });
        });
    </script>
</head>


<body>
<button id="append_btn_id">append结尾插入</button>
<button id="prepend_btn_id">prepend开头插入</button>
<button id="after_btn_id">after之后插入</button>
<button id="before_btn_id">before之前插入</button>

<p id="p_id">原来的内容</p>
</body>

</html>

<!--
    添加新的HTML内容
    append()  ： 在被选元素的结尾插入内容
    prepend() ： 在被选元素的开头插入内容
    after()   ： 在被选元素之后插入内容
    before()  ： 在被选元素之前插入内容
-->
