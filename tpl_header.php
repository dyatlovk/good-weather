<?php
/**
 * Template header, included in the main and detail files
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
?>

<!-- ********** HEADER ********** -->
<div class="header">
    <div class="wrapper">
        <div class="logo"><a href="/">Wiki</a></div>
        <div class="search-box">
            <?php tpl_searchform(); ?>
        </div>
        <div class="user-space">
            <?php if ($conf['useacl']): ?>
                <div id="dokuwiki__usertools">
                    <h3 class="a11y"><?php echo $lang['user_tools']; ?></h3>
                    <ul>
                        <?php
                        if (!empty($_SERVER['REMOTE_USER'])) {
                            echo '<li class="user">';
                            tpl_userinfo(); /* 'Logged in as ...' */
                            echo '</li>';
                        }
                        tpl_toolsevent('usertools', array(
                            tpl_action('admin', true, 'li', true),
                            tpl_action('profile', true, 'li', true),
                            tpl_action('register', true, 'li', true),
                            tpl_action('login', true, 'li', true)
                        ));
                        ?>
                    </ul>
                </div>
            <?php endif ?>
        </div>
    </div>
</div>

