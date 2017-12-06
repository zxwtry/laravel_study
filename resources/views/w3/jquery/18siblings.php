<!DOCTYPE html>

<html>

<head>
    <script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("h2").siblings().css({"color":"red","border":"2px solid red"});


//            console.log($("h2").siblings().text());
            // spanh3p

//            console.log($("h2").siblings("p").text());
            // pp

//            console.log($("h2").next().text());
            // h3

//            console.log($("h2").nextAll().text());
            // h3p

//            console.log($("h2").nextUntil("p").text());
            // h3
        });
    </script>
</head>

<body class="siblings">

<div>div (父)
    <p>p</p>
    <span>span</span>
    <h2>h2</h2>
    <h3>h3</h3>
    <p>p</p>
</div>

</body>

</html>


<!--
    DOM树中水平遍历：
    1， siblings()
    2， next()
    3， nextAll()
    4， nextUntil()
    5， prev()
    6， prevAll()
    7， prevUntil()
-->