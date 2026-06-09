<?php
/**
 * Temporary deploy diagnostic — delete after fixing the site.
 * Open: https://ptintandayamandiri.co.id/idmnew/diagnose.php
 */
header('Content-Type: text/plain; charset=utf-8');

echo "=== idmnew diagnose ===\n\n";
echo 'PHP: ' . PHP_VERSION . "\n";
echo 'Dir: ' . __DIR__ . "\n\n";

$sessions = __DIR__ . '/application/cache/sessions';
echo "Sessions folder writable: " . (is_writable($sessions) ? 'yes' : 'NO — chmod 755') . "\n";
echo "Sessions path: $sessions\n\n";

if (!is_file(__DIR__ . '/application/config/database.php')) {
    echo "ERROR: database.php missing\n";
    exit;
}

require __DIR__ . '/application/config/database.php';

if (!isset($db['default'])) {
    echo "ERROR: \$db['default'] not defined\n";
    exit;
}

$c = $db['default'];
$host = $c['hostname'] ?? 'localhost';
$port = (int) ($c['port'] ?? 3306);
$user = $c['username'] ?? '';
$pass = $c['password'] ?? '';
$name = $c['database'] ?? '';

echo "DB host: $host\n";
echo "DB port: $port\n";
echo "DB user: $user\n";
echo "DB name: $name\n\n";

if ($port === 3307) {
    echo "WARNING: port 3307 is for local Docker — cPanel MySQL uses 3306\n\n";
}

$mysqli = @new mysqli($host, $user, $pass, $name, $port);

if ($mysqli->connect_errno) {
    echo "DB connection: FAILED\n";
    echo "Error: " . $mysqli->connect_error . "\n\n";
    echo "Fix application/config/database.php:\n";
    echo "  hostname => localhost\n";
    echo "  port     => 3306\n";
    echo "  username => kxjbjfvr_xxxxx  (full cPanel user)\n";
    echo "  database => kxjbjfvr_xxxxx  (full cPanel DB name)\n";
    exit;
}

echo "DB connection: OK\n";

$tables = $mysqli->query('SHOW TABLES');
$count = $tables ? $tables->num_rows : 0;
echo "Tables in database: $count\n";

if ($count === 0) {
    echo "WARNING: database is empty — import your .sql backup in phpMyAdmin\n";
}

$mysqli->close();

echo "\nIf DB is OK but index.php still 500, check application/logs/ or set CI_ENV=development in .htaccess briefly.\n";
