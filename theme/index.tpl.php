<!doctype html>
<html lang='<?=$lang?>'>
<head>
<meta charset='utf-8'/>
<title><?=get_title($title)?></title>
<?php if(isset($favicon)): ?><link rel='shortcut icon' href='<?=$favicon?>'/><?php endif; ?>
<?php foreach($stylesheets as $val): ?>
<link rel='stylesheet' type='text/css' href='<?=$val?>'/>
<?php endforeach; ?>
<link rel='shortcut icon' href='favicon.ico'/>
</head>
<body>
    <div id='header-wrapper'>
        <div id='header'><?=$header?></div>
    </div>
    <div id='navbar-wrapper'>
        <?php echo CNavigation::GenerateMenu($snoopy['menuItems']) ?>
    </div>
    <div id='main-wrapper'>
        <div id='main'><?=$main?></div>
    </div>
    <div id='footer-wrapper'>
        <div id='footer'><?=$footer?></div>
    </div>
</body>
</html>
