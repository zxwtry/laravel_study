<!DOCTYPE html>

<html>

<head>
    <style type="text/css">
        [title] {
            color: red;
        }
        [title="Hello World"] {
            border: 1px dotted;
        }
        [title~=Hello] {
            background: #999999;
        }
        [lang|=en] {
            color: green;
        }
        input[type="text"] {
            width: 150px;
            display: block;
            margin-bottom: 10px;
            background-color: #AAA;
            font-family: Verdana, Arial;
        }
        input[type="button"] {
            width: 120px;
            margin-left:35px;
            display: block;
            font-family: Verdana, Arial;
        }
    </style>
</head>

<body>

<h1>可以应用样式：</h1>
<h2 title="Hello World">Hello World</h2>
<a title="W3School" href="http://w3school.com.cn">W3school</a>
<hr />

<h1>无法应用样式：</h1>
<h2>Hello World</h2>
<a href="http://w3school.com.cn">W3school</a>
<hr />

<h1>我是语言</h1>
<p lang="en">英文</p>
<p lang="en-us">英文（美国）</p>
<p lang="zh">中文</p>
<hr />

<form name="input" action="" method="get">
    <input type="text" name="Name" value="Bill" size="20">
    <input type="text" name="Name" value="Gates" size="20">
    <input type="button" value="Example Button">
</form>

</body>

</html>


<!--

    [title] {
        color: red;
    }
    只有title属性，才能设置样式
-->