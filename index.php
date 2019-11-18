<?php
require_once("./ClassTable.class.php");
$columnTitle = ["星期一","星期二","星期三","星期四","星期五","星期六","星期日"];
$rowTitle = ["第一节","第二节","第三节","第四节","第五节","第六节","第七节","第八节"];
$courseTable = new ClassTable($columnTitle,$rowTitle);
count($courseTable->rowTitle);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>lmy的主页</title>
        <link rel="stylesheet" href="/style.css" />
    </head>

    <body>
        <script>
            $('#backUp').click(function () { $('html,body').animate({ scrollTop: '0px' }, 2000); return false; });
        </script>
        <?php require_once("./header.php");?>
        <div class="row">
            <div class="leftcolumn">
                <div class="card">
                <h2>关于我</h2>
                <div style="height:520px;"><img src="./imgs/myphoto.jpg" width="310" height="520"></div>
                <p><b>简介：</b><br>毕业于天津大学，智能与计算学部软件工程专业，认真钻研，理性思考，是大家眼中的可靠同事。</p>
                </div>
                <div class="card">
                <h3>照骗墙</h3>
                <div class="fakeimg"><img src="./imgs/pic1.jpg" width="100%" height="100%"></div>
                <div class="fakeimg"><img src="./imgs/pic4.jpg" width="100%" height="100%"></div>
                <div class="fakeimg"><img src="./imgs/pic3.jpg" width="100%" height="100%"></div>
                </div>
                <div class="card">
                <h3>关注我</h3>
                <p>QQ：842047150</p>
                </div>
            </div>
            <div class="rightcolumn">
            <div class="card">
                    <h2 style="text-align: center;">2017级软件工程2019-2020年度第一学期课表</h2>
                    <h5 style="text-align: center;">2019 年 11 月 18日</h5>
                    <p>这是我的课表</p>
                    <p style="text-align: center;">
                        <?php $courseTable->showTable(); ?>
                    </p>
                </div>
                <div class="card">
                <h2>从网上随便找的几张图片</h2>
                <h5>2019 年 4 月 17日</h5>
                <div class="fakeimg" style="height:600px;"><img src="./imgs/pic2.jpg" width="100%" height="100%"></div>
                <p><b>简介:</b>这是一颗树</p>
                <p>这是一颗很好看的树，不信你看，我将为这棵树写一篇200字的文章，敬请关注！</p>
                </div>
            </div>
        </div>
        <?php require_once("./footer.php");?>
    </body>
</html>