<!DOCTYPE html>

<html>

<head>
    <style>
        .center {
            text-align: center;
        }

        .fa {
            color: red;
            background: green;
        }

        .fb {
            color: green;
            /*background: red;*/
        }
    </style>
</head>

<body>

    <h1 class="center">
        我要在中间
    </h1>

    <p class="center">
        我也是要在中间
    </p>


    <div class="fa">
        <p>这是一个p</p>
        <td>这是一个td1</td>
    </div>

    <td>这是一个td2</td>
    <td class="fb">这是一个td3</td>
    <td class="fa">这是一个td3</td>

</body>

</html>


<!--
    .center {
        text-align: center
    }


    和id一样，class也可被用作派生选择器
    .fancy td {
        color: #f60;
        background: #666;
    }
-->