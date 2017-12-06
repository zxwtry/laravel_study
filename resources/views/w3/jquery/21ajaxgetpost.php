<!DOCTYPE html>

<html>

<head>
    <script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#btn_get").click(function () {
                $.get("../jquery_http/get", function (data, status) {
                    console.log(data);
                    console.log(status);
                    /*
                        get_val
                        success
                     */
                });
            });
            $("#btn_post").click(function () {
                $.post("../jquery_http/post", {},
                function (data, status) {
                    console.log(data);
                    console.log(status);
                    /*
                        post_val
                        success
                     */
                })
            });
        });
    </script>
</head>

<body>
<button id="btn_get">get</button>
<button id="btn_post">post</button>
</body>

</html>


<!--
    $.get()方法：
        $.get(URL, callback)
        常见：
        $.get("../search", function(data, status){

        });

    $.post()方法：
        $.post(URL, data, callback)
        常见：
        $.post("../search",
        {
            name:"zxwtry",
            hometome:"china"
        },
        function(data, status) {

        });
-->