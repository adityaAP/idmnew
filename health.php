<?php
// Quick check: open https://your-subdomain/health.php
// Delete this file after deploy is confirmed working.
header('Content-Type: text/plain; charset=utf-8');
echo "OK\n";
echo 'PHP: ' . PHP_VERSION . "\n";
echo 'Dir: ' . __DIR__ . "\n";
echo 'index.php: ' . (is_file(__DIR__ . '/index.php') ? 'yes' : 'NO') . "\n";
