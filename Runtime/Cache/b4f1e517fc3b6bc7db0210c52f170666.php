<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="__URL__/insert">
    标题：<input type="text" name="title"><br>
    内容：<textarea name="content" rows="5" cols="45"></textarea><br>
    <input type="submit" value="提交">
</form>
</body>
</html>