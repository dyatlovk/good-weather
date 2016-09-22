<?php
/**
 * DokuWiki Default Template 2012
 *
 * @link     http://dokuwiki.org/template
 * @author   Anika Henke <anika@selfthinker.org>
 * @author   Clarence Lee <clarencedglee@gmail.com>
 * @license  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

include DOKU_TPLINC . "functions/main.php";

if (!defined('DOKU_INC')) die();
header('X-UA-Compatible: IE=edge,chrome=1');

$hasSidebar = page_findnearest($conf['sidebar']);
$showSidebar = $hasSidebar && ($ACT == 'show');
?>
<!DOCTYPE html>
<html lang="<?php echo $conf['lang'] ?>"
      dir="<?php echo $lang['direction'] ?>" class="no-js">
<head>
	<meta charset="utf-8"/>
	<title>
		<?php tpl_pagetitle() ?>
		[<?php echo strip_tags($conf['title']) ?>]
	</title>
	<?php tpl_metaheaders() ?>
	<meta name="viewport"
	      content="width=device-width,initial-scale=1"/>
	<?php echo tpl_favicon(['favicon', 'mobile']) ?>
	<?php tpl_includeFile('meta.html') ?>
</head>

<body<?php echo getRootNamespace($INFO); ?>>
<?php include('tpl_header.php') ?>

<div class="main-content">
	<div class="wrapper">
		<?php include('tpl_sidebar.php')?>
		<div id="content">
			<div class="message-area">
				<?php html_msgarea() ?>
			</div>
			<div class="content-page">
				<div class="article">
					<?php tpl_flush() ?>
					<?php tpl_includeFile('pageheader.html') ?>
					<!-- wikipage start -->
					<?php tpl_content(false) ?>
					<!-- wikipage stop -->
					<?php tpl_includeFile('pagefooter.html') ?>
				</div>
				<div class="article-sidebar">
					<?php tpl_toc()?>
				</div>
			</div>
		</div>
		<div class="docInfo"><?php tpl_pageinfo() ?></div>
	</div>
</div>

<?php include('tpl_footer.php') ?>

</body>
</html>
