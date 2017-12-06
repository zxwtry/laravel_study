<!DOCTYPE html>

<html>

<head>
    <script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

        });
    </script>
    <style type="text/css">
        li strong {
            font-style: italic;
            font-weight: normal;
            color: red
        }

        p {
            color: red;
        }

        h1 {
            color: blue;
        }

        p h1 {
            color: green;
        }
    </style>
</head>
    <p><strong>我是粗体字，不是斜体字</strong></p>
    <li><strong>我是斜体字</strong></li>
    <li>我是字</li>

    <p>我是p</p>  <!-- red -->
    <h2>我是p</h2>  <!-- 默认 -->
    <p><h1>我是p</h1></p>  <!-- blue -->
    <h1><p>我是p</p></h1>  <!-- red -->
</html>


<!--
CSS概述：
    CSS指：层叠样式表（Cascading Style Sheets）
    解决：内容与表现分离的问题

HTML元素被不止一个样式定义时，
1，浏览器默认设置
2，外部样式表
3，内部样式表（位于<head>标签内部）
4，内联样式（在HTML元素内部）
-->

<!--
CSS语法：
CSS规则由两个主要的部分构成：选择器、一条或多条声明
selector {declaration1; declaration2; declaration3; declaration4; }

属性：selector {property: value}

例子：
h1 {color:red; font-size:14px;}
其中：h1是选择器，color和font-size是属性，red和14px是值

颜色的三种写法：
p {color: #ff0000;}
p {color: #f00;}
p {color: red;}
p {color: rgb(255, 0, 0);}
p {color: rgb(100%, 0%, 0%);}


如果值是若干单词，一定要加上引号。
p {font-family: "sans serif";}


是否包含空格不会影响CSS在浏览器的工作效果。
CSS对大小写不敏感
如果涉及到和HTML文档一起工作，class和id对名称大小写敏感。
-->


<!--
    选择器的分组：
    h1,h2,h3,h4,h5,h6 {
        color: green;
    }

    继承及其问题：
    根据CSS，子元素从父元素继承属性，但是它并不是总是按此方式工作。

    body {
        font-family: Verdana, san-serif;
    }
    通过CSS继承，子元素将继承高级元素所拥有的属性
-->


<!--
    CSS派生选择器
    通过根据元素在其位置的上下文关系来定义样式
    上下文选择器（contextual selectors）

    派生选择器：允许你根据文档的上下文关系来确定某个标签的样式。

    例如：希望列表中的strong元素变为斜体字，而不是通常的粗体字，可以这样定义一个派生选择器
    li strong {
        font-style: italic;
        font-weight: normal;
    }


-->