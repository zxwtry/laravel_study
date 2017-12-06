<!DOCTYPE html>

<html>

<head>
    <script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
//            console.log($("span").parent().text());
            // li (直接父)
            //      span_val

//            console.log($("span").parents().text());
            // li (直接父)     （一直到 span_val）
            // ul (祖父)       （一直到 span_val）
            // div (曾祖父)    （一直到 span_val）
            // body (曾曾祖父) （一直到 span_val）
            // html            （一直到 span_val）


//            console.log($("ul").parentsUntil("body").text());
            // div (曾祖父)
            //      ul (祖父)
            //          li (直接父)
            //              span_val


//            console.log($("li").children().text());
            // span_val


//            console.log($("ul").children("li").text()) ;
            // li (直接父)
            //      span_val


//            console.log($("ul").find("*").text());
            // li (直接父)
            //      span_val
            // span_val


//            console.log($("ul").find("span").text());
            // span_val
        });
    </script>
    <style>
        .ancestors * {
            display: block;
            border: 2px solid lightgrey;
            color: lightgrey;
            padding: 5px;
            margin: 15px;
        }
    </style>
</head>

<body class="ancestors"> body (曾曾祖父)
<div style="width:500px;">div (曾祖父)
    <ul>ul (祖父)
        <li>li (直接父)
            <span>span_val</span>
        </li>
    </ul>
</div>
</body>

</html>


<!--
    parent() ：返回被选元素的直接父元素
    parents()：返回被选元素的所有祖先元素，一路向上直到文档的根元素（<html>）
    parentsUntil()：返回结余两个给定元素之间的所有元素。
-->

<!--
    children()：返回被选元素的所有直接子元素
    例：$("#div_id").children()，返回的是id=div_id的所有直接子元素
    例：$("#div_id").children("p.1")，返回的是id=div_id的所有直接子元素 && 类名为1 && <p>元素

    find()：返回被选元素的后代元素，一路直到最后一个后代
    例：$("#div_id").find("span")，返回id=div_id后代中所有<span>元素
    例：$("#div_id").find("*")，返回id=div_id所有后代
-->