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
        <?php require_once("./header.php");?>
        <!--<div class="row">
            <div class="leftcolumn">

            </div>
            <div class="rightcolumn">
                <!--<div class="classtable">
                    <?php //$courseTable->showTable(); ?>
                </div>
            </div>
        </div>-->
        <div class="row">
            <div class="leftcolumn">
                <div class="card">
                <h2>关于我</h2>
                <div style="height:200px;"><img src="./imgs/myphoto.jpg" width="120" height="200"></div>
                <p>关于我的一些信息..</p>
                </div>
                <div class="card">
                <h3>热门文章</h3>
                <div class="fakeimg"><p>图片</p></div>
                <div class="fakeimg"><p>图片</p></div>
                <div class="fakeimg"><p>图片</p></div>
                </div>
                <div class="card">
                <h3>关注我</h3>
                <p>一些文本...</p>
                </div>
            </div>
            <div class="rightcolumn">
            <div class="card">
                    <h2 style="text-align: center;">课表</h2>
                    <h5 style="text-align: center;">2019 年 11 月 18日</h5>
                    <p>这是我的课表</p>
                    <p style="text-align: center;">
                        <?php $courseTable->showTable(); ?>
                    </p>
                </div>
                <div class="card">
                <h2>文章标题</h2>
                <h5>2019 年 4 月 17日</h5>
                <div class="fakeimg" style="height:200px;">图片</div>
                <p>一些文本...</p>
                <p>菜鸟教程 - 学的不仅是技术，更是梦想！菜鸟教程 - 学的不仅是技术，更是梦想！菜鸟教程 - 学的不仅是技术，更是梦想！菜鸟教程 - 学的不仅是技术，更是梦想！</p>
                </div>
            </div>
        </div>
        <?php require_once("./footer.php");?>
    </body>
</html>