<?php
if (!defined('DOKU_INC')) die(); ?>

<div class="sidebar-left">
	
	<div class="navigation portlet">
		<h3><?php echo $lang['sidebar'] ?></h3>
		<?php tpl_flush() ?>
		<?php tpl_includeFile('sidebarheader.html') ?>
		<?php tpl_include_page($conf['sidebar'], TRUE, TRUE) ?>
		<?php tpl_includeFile('sidebarfooter.html') ?>
	</div>
	
	<div class="tools portlet">
		<h3><?php echo $lang['page_tools']; ?></h3>
		<ul>
			<li><a href="/doku.php/wiki:navigation">Навигация</a></li>
			<li><a href="/doku.php/wiki:syntax">Синтаксис</a></li>
			<?php
			$data = array(
				'view'  => 'main',
				'items' => array(
					'edit'      => tpl_action('edit',      true, 'li', true, '<span>', '</span>'),
					'revert'    => tpl_action('revert',    true, 'li', true, '<span>', '</span>'),
					'revisions' => tpl_action('revisions', true, 'li', true, '<span>', '</span>'),
					'backlink'  => tpl_action('backlink',  true, 'li', true, '<span>', '</span>'),
					'subscribe' => tpl_action('subscribe', true, 'li', true, '<span>', '</span>'),
					'top'       => tpl_action('top',       true, 'li', true, '<span>', '</span>')
				)
			);
			
			// the page tools can be amended through a custom plugin hook
			$evt = new Doku_Event('TEMPLATE_PAGETOOLS_DISPLAY', $data);
			if($evt->advise_before()){
				foreach($evt->data['items'] as $k => $html) echo $html;
			}
			$evt->advise_after();
			unset($data);
			unset($evt);
			?>
		</ul>
	</div>
</div>
