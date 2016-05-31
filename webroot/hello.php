<?php
/**
 * This is a Snoopy pagecontroller.
 *
 */
// Include the essential config-file which also creates the $snoopy variable with its defaults.
include(__DIR__.'/config.php');


// Do it and store it all in variables in the Snoopy container.
$snoopy['title'] = "Snoopy-exempel";

$snoopy['main'] = <<<EOD
<h1>Snoopy-exempel</h1>
<p>Detta är en exempelsida gjord med Snoopy.</p>
<img src='img.php?src=snoopy.png&width=500' alt='snoopy stor'>
<p>Bilden ovan är ändrad med img.php</p>
EOD;

// Finally, leave it all to the rendering phase of Snoopy.
include(SNOOPY_THEME_PATH);
