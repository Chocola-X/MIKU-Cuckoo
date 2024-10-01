<?php
/**
 * .______    __    __       ___        ______
 * |   _  \  |  |  |  |     /   \      /  __  \
 * |  |_)  | |  |__|  |    /  ^  \    |  |  |  |
 * |   _  <  |   __   |   /  /_\  \   |  |  |  |
 * |  |_)  | |  |  |  |  /  _____  \  |  `--'  |
 * |______/  |__|  |__| /__/     \__\  \______/
 *
 * Footer
 *
 * @author Bhao
 * @link https://dwd.moe/
 * @date 2023-08-02
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
</div>
<div onclick="tocOverlay()" class="toc-overlay"></div>
<button class="mdui-fab mdui-fab-fixed mdui-ripple top mdui-color-theme-accent"><i class="mdui-icon material-icons">arrow_upward</i></button>
<footer>
  <?php Footer() ?>
</footer>
<script src="<?php staticFiles('js/mdui.min.js') ?>"></script>
<script src="<?php staticFiles('js/highlight.min.js') ?>"></script>
<script src="<?php staticFiles('js/katex.min.js') ?>"></script>
<script src="<?php staticFiles('js/katex-auto-render.min.js') ?>"></script>
<script src="<?php staticFiles('js/lazyload.min.js') ?>"></script>
<script src="<?php staticFiles('js/fancybox.umd.min.js') ?>"></script>
<script src="<?php staticFiles('js/qrcode.min.js') ?>"></script>
<script src="<?php staticFiles('js/clipboard.min.js') ?>"></script>
<script src="<?php staticFiles('js/smoothscroll.min.js') ?>"></script>
<script src="<?php staticFiles('js/infinite-scroll.pkgd.min.js') ?>"></script>
<script src="<?php staticFiles('js/pjax.min.js') ?>"></script>
<script src="<?php staticFiles('js/cuckoo.min.js') ?>"></script>
<script src="<?php staticFiles('js/comments.min.js') ?>"></script>
<script src="<?php staticFiles('js/jquery.min.js') ?>"></script>
<script src="<?php staticFiles('js/snowfall.jquery.js') ?>"></script>


<!-- snowfall.js setting-->
<script type="text/javascript">
$('#snowwrap').snowfall({
  image : [
"<?php staticFiles('images/flake01_a.png') ?>",
"<?php staticFiles('images/flake02_c.png') ?>",
"<?php staticFiles('images/flake03_c.png') ?>",
"<?php staticFiles('images/flake04_a.png') ?>",
"<?php staticFiles('images/flake05_a.png') ?>",
"<?php staticFiles('images/flake06_b.png') ?>"
  ],
flakeColor:"#000",
shadow:false,
minSize:20,
maxSize:60,
flakeCount:20,
minspeed:0.2,
maxSpeed:2,
});
</script>
<!-- /snowfall.js setting -->




<script>hljs.highlightAll();</script>
<?php otherJs();$this->footer();otherPjax(); ?>
</body>
</html>
