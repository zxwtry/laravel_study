<!DOCTYPE html>


<html>

<head>
    <script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#btn1").click(function () {
                $("#text").load('../../txt/welcome.txt');
            });
            $("#btn2").click(function () {
                $("#text2").load('../../txt/welcome.txt #p1', function (responseTxt, statusTxt, xhr) {
                    console.log(responseTxt);
                    console.log(statusTxt);
                    console.log(xhr);
                });
            });
        });
    </script>
</head>


<body>

<p id="text">预加载数据</p>
<button id="btn1">ajax</button>
<p id="text2">预加载数据</p>
<button id="btn2">ajax</button>
</body>

</html>


<!--
    AJAX：Asynchronous JavaScript and XML

    load()方法：从服务器加载数据，并把数据放入被选元素中
    $("#div1").load("demo_test.txt");

    $(selector).load(URL, data, callback);
    必需参数：URL
    可选参数：data  与请求一同发送的查询字符串键/值对集合。
    可选参数：callback  load()方法完成后所执行的函数名称

    把"demo_test.txt"文件中id="p1"的元素内容，加载到指定的<div>元素中
    $("#div1").load("demo_test.txt #p1");


    可选的callback参数：当load()方法完成后调用
    callback函数可以设置不同的参数：
        responseTxt   包含调用成功时的结果内容
        statusTxt     包含调用的状态
        xhr           包含XMLHtppRequest对象
-->