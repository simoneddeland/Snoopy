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
  <div id='wrapper'>
    <div id='header'><?=$header?></div>
    <?php echo CNavigation::GenerateMenu($snoopy['menuItems']) ?>
    <div id='main'><?=$main?></div>
    <div id='footer'><?=$footer?></div>
  </div>
</body>
</html>
