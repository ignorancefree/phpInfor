<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <form method="post" action="__URL__/insert">
                <input type="text" name="title"><br/>
                <textarea name="content" rows="5" cols="45"></textarea><br/>
                <input type="submit" value="提交">
            </form>
        </div>
    </body>
</html>