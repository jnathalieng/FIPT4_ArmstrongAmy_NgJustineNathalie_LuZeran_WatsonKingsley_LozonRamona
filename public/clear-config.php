<?php
\Artisan::call('config:cache');
\Artisan::call('cache:clear');
echo 'Config cleared!';
?>