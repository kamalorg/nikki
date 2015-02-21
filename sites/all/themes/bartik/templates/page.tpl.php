<?php ?>
<div id="layout">
<?php if ($page['page_header']): ?>
        <div id="page_header">
            <div id="logo">SenPre</div>
            <div id="slider">
                <ul class="slides">
                    <li>Slide1</li>
                    <li>Slide2</li>
                    <li>Slide3</li>
                    <li>Slide4</li>
                    <li>Slide5</li>
                </ul>
            </div>
    <?php if ($main_menu): ?>
                <div id="main-menu" class="navigation">
                <?php
                print theme('links__system_main_menu', array(
                    'links' => $main_menu,
                    'attributes' => array(
                        'id' => 'main-menu-links',
                        'class' => array('links', 'clearfix'),
                    ),
                    'heading' => array(
                        'text' => t('Main menu'),
                        'level' => 'h2',
                        'class' => array('element-invisible'),
                    ),
                ));
                ?>
                </div> <!-- /#main-menu -->
            <?php endif; ?>

            <?php if ($secondary_menu): ?>
                <div id="secondary-menu" class="navigation">
                    <?php
                    print theme('links__system_secondary_menu', array(
                        'links' => $secondary_menu,
                        'attributes' => array(
                            'id' => 'secondary-menu-links',
                            'class' => array('links', 'inline', 'clearfix'),
                        ),
                        'heading' => array(
                            'text' => t('Secondary menu'),
                            'level' => 'h2',
                            'class' => array('element-invisible'),
                        ),
                    ));
                    ?>
                </div> <!-- /#secondary-menu -->
            <?php endif; ?>
            <?php print render($page['page_header']);
            ?>
        </div>
    <?php endif; ?>
        <?php if ($page['content_top']): ?>
        <div id="content_top">
        <?php print render($page['content_top']); ?>
        </div>
    <?php endif; ?>
        <?php if ($page['content']): ?>
        <div id ="content">
        <?php print render($page['content']); ?>
        </div>
        <?php endif; ?>
    <div id="middle_content">
            <?php if ($page['middle_left']): ?>
            <div id ="middle_left">
            <?php print render($page['middle_left']); ?>
            </div>
        <?php endif; ?>
            <?php if ($page['middle_right']): ?>
            <div id ="middle_right">
            <?php print render($page['middle_right']); ?>
            </div>
    <?php endif; ?>
    </div>
        <?php if ($page['pre_footer']): ?>
        <div id ="pre_footer">
        <?php print render($page['pre_footer']); ?>
        </div>
    <?php endif; ?>
        <?php if ($page['footer']): ?>
        <div id ="footer">
        <?php print render($page['footer']); ?>
        </div>
<?php endif; ?>

</div>