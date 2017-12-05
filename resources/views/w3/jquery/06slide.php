<html>

<head>
    <script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".flip").click(function () {
                $(".panel").slideDown("slow");
            });
            $(".slideUp").click(function () {
                $(".panel").slideUp("slow");
            });
            $(".slideToggle").click(function () {
                $(".panel").slideToggle("slow");
            });
        });
    </script>
    <style type="text/css">
        div.panel, p.flip, p.slideUp, p.slideToggle {
            margin:0px;
            padding:5px;
            text-align:center;
            background:#e5eecc;
            border:solid 1px $c3c3c3;
        }
        div.panel {
            height:120px;
            display:none;
        }
    </style>
</head>

<body>
    <div class="panel">
        <p>W3School</p>
        <p>W3School</p>
    </div>
    <p class="flip">请点击SlideDown展开</p>
    <p class="slideUp">请点击SlideUp收起</p>
    <p class="slideToggle">请点击SlideToggle</p>
</body>

</html>