<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
              <FORM method="post" action="__URL__/update">
              <INPUT type="text" name="title" value="<?php echo ($vo["title"]); ?>"><br/>
              <TEXTAREA name="content" rows="5" cols="45"><?php echo ($vo["content"]); ?></TEXTAREA><br/>
              <INPUT type="hidden" name="id" value="<?php echo ($vo["id"]); ?>">
              <INPUT type="submit" value="提交">
  </FORM>
        </div>
    </body>
</html>