<?php
$autoload = join(DIRECTORY_SEPARATOR, [__DIR__, 'vendor', 'autoload.php']);
require $autoload;
use Rych\Random\Random;
echo (new Random())->getRandomInteger(1,5);
