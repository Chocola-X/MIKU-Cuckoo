<?php
/**
 * .______    __    __       ___        ______
 * |   _  \  |  |  |  |     /   \      /  __  \
 * |  |_)  | |  |__|  |    /  ^  \    |  |  |  |
 * |   _  <  |   __   |   /  /_\  \   |  |  |  |
 * |  |_)  | |  |  |  |  /  _____  \  |  `--'  |
 * |______/  |__|  |__| /__/     \__\  \______/
 *
 * 404
 *
 * @author Bhao
 * @link https://dwd.moe/
 * @date 2023-07-19
 */

if(!defined('__TYPECHO_ROOT_DIR__')) exit;
$this -> need('includes/header.php');
?>
  <div class="index-container">
    <div class="mdui-col-md-8">
        <div class="mdui-card archive-card mdui-hoverable">
        <img src="<?php staticFiles('images/404.png') ?>" alt="404" style="width: 400px; height: auto; display: block; margin: auto;"></img>
          <div class="archive-title">
          <p style="font-size: 24px; font-weight: bold;">喵？！不要看这里喵！这里没有文章喵！！！</p>
          </div>
        </div>
    </div>
    <?php $this -> need('includes/sidebar.php'); ?>
  </div>
<?php $this -> need('includes/footer.php'); ?>