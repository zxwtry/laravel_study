<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
<!--<input id="input" onchange="change()" type="file"></input>-->
{{--<img id="img" src="../../img/Jellyfish.jpg" width="50px" height="50px" />--}}
{{--<img id="img" src="http://udm-test.oss.aliyuncs.com/image/2017/1122/20171122115429586.jpg" width="50px" height="50px" />--}}
<img id="img" src="http://www.zxwtry.com/1.jpg" width="150px" height="150px" />

{{--<img id="img" src="" width="50px" height="50px" />--}}
<output id="result"></output>
</body>
</html>

<script>
    var img = document.getElementById("img");
    var result1 = document.getElementById("result");

    window.onload = function() {
        load();
    }

//    var src = "http://www.zxwtry.com/1.jpg";

    function load(){
        loadImageToBlob(img.src, function(blobFile) {//这里的img.src改地址

            if(!blobFile) return false;

//          var fileReader = new FileReader();
//
//          fileReader.readAsDataURL(blobFile);
//
//          fileReader.onload = function() {
//
//              console.log(this.result);//这里输出的数据放到url里能生成图片
//
//          };

            result1.innerHTML = '<a download href="' + window.URL.createObjectURL(blobFile) + '" target="_blank">文件下载</a>';



//            img.src =  window.URL.createObjectURL(blobFile);
        });
    }

    var loadImageToBlob  = function(url, callback) {

        if(!url || !callback) return false;

        var xhr = new XMLHttpRequest();

//        xhr.crossDomain
//        xhr.crossDomain = "anonymous";
//
//        xhr.referrer = " ";


        xhr.open('get', url, true);

//        xhr.setRequestHeader("Referer", " ");
//
        xhr.responseType = 'blob';

        xhr.onload = function() {

            // 注意这里的this.response 是一个blob对象 就是文件对象

            callback(this.status == 200 ? this.response : false);

        }

        xhr.send();

        return true;

    }

</script>