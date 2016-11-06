<?php
/**
 * e瞳网2016年招新网站，导出csv文件
 *
 * @author    Ganlv <ganlvtech@qq.com>
 * @copyright 2016 eeyes.net
 * @license   Apache-2.0
 */
require 'config.php';
if (isset($_POST['password']) && $_POST['password'] === PASSWORD) {
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . DATA_FILE);
    readfile(DATA_FILE);
} else {
    echo '<form action="export.php" method="post">password:<input type="password" name="password"><input type="submit"></form>';
}