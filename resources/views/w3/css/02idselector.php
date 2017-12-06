<!DOCTYPE html>

<html>

<head>
    <style type="text/css">
        #red_id {
            color: red;
        }
        #green_id {
            color: green;
        }
        #div_id h3 {
            border: 1px dotted #338899;
        }
    </style>

</head>

<body>
    <p id="red_id">这段是red</p>
    <p id="green_id">这段是green</p>
    <div id="div_id">
        <p>这个是p</p>
        <h3>这个是h3</h3>
        <ul>这个是ul</ul>
    </div>
</body>

</html>

<!--
    id选择器和派生选择器
    id选择器常常用于建立派生选择器

    #sidebar p {
        font-style: italic;
        text-align: right;
        margin-top: 0.5em;
    }
    上面样式只会出现在 id是sidebar的元素内的段落。


    一个选择器，多种用法：
    即使被标注为sidebar的元素只能在文档中出现一次。
    这个id选择器作为派生选择器也可以被使用很多次

    #sidebar p {
        font-style: italic;
        text-align: right;
        margin-top: 0.5em;
    }

    #sidebar h2 {
        font-size: 1em;
        font-weight: normal;
        font-style: italic;
        margin: 0;
        line-height: 1.5;
        text-align: right;
    }
-->