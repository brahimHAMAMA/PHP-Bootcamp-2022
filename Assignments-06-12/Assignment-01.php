<?php

use function PHPSTORM_META\type;

echo (int)15.2 + (int)14.7 + (int)(10.5 + 10.5) . '<br>'; // 50
echo gettype((int)15.2 + (int)14.7 + (int)(10.5 + 10.5)); // Integer