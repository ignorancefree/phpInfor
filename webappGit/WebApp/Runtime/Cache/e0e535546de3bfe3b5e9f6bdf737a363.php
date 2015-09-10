<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
        <table>
            <tr>
                <td>id:</td>
                <td><?php echo ($data["id"]); ?></td>
            </tr>
            <tr>
                <td>标题：</td>
                <td><?php echo ($data["title"]); ?></td>
            </tr>
            <tr>
            <td>内容：</td>
            <td><?php echo ($data["content"]); ?></td>
            </tr>
            <tr>
                <td>额外标题</td>
                <td><?php echo ($titleI); ?></td>
            </tr>
        </table>
        </div>
    </body>
</html>