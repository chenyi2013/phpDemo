<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>忆夏集团留言板</title>
        <style type="text/css">

            body{
                text-align: center;
            }

            table{
                width: 900px;
                margin: auto;
            }

            input.text,textarea{ width:99%;}

            td.title{
                text-align: center;
            }

            img.face{
                width: 50px;
                height: 50px;
            }
            td.right{
                text-align: left;
                padding-top: 10px;
                padding-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <h1>忆夏集团留言板</h1>
        <form action="doAction.php" method="post">
            <table width='100%' border='1' cellpadding='0' cellspacing='0' >
                <tr>
                    <td class="title" width="10%">留言者</td>
                    <td  width="90%">
                        <input class="text" name="username" type="text" placeholder="请输入用户名">
                    </td>
                </tr>
                <tr>
                    <td class="title" width="10%">标&nbsp;&nbsp;题</td>
                    <td width="90%">
                        <input class="text" name="title" type="text" placeholder="请输入标题">
                    </td>
                </tr>
                <tr>
                    <td class="title" width="10%">内&nbsp;&nbsp;容</td>
                    <td width="90%">
                        <textarea  name="content" cols="80" rows="8" placeholder="请输入内容" ></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="title" width="10%">头&nbsp;&nbsp;像</td>
                    <td class="right">
                        <input  type="radio" name="face"/>
                        <img class="face" src="images/8b13632762d0f703fe831bff0bfa513d2697c5e4.jpg">
                        <input type="radio" name="face"/>
                        <img class="face" src="images/mxzbz-11795110960[1].jpg">
                        <input type="radio" name="face"/>
                        <img class="face" src="images/b64543a98226cffcdb9cb2a0ba014a90f603ea6a.jpg">
                        <input type="radio" name="face"/>
                        <img class="face" src="images/a8014c086e061d959eb8883879f40ad162d9ca30.jpg">
                    </td>
                </tr>
                <tr>
                    <td class="title" width="10%">验证码</td>
                    <td class="right" width="90%">
                        <input  name="verify" type="text" placeholder="请输入内容" >xxxx
                        <input name="verify1" type="hidden" value="xxxx"/>
                    </td>
                </tr>
                <tr>

                    <td colspan="2">
                        <input  name="submit" type="submit" value="发表留言" />
                    </td>
                </tr>
            </table>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
