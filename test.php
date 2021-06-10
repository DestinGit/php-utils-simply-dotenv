<?php
require __DIR__ . '/SimplyDotEnv.php';
// use Dotenv\SimplyDotEnv;     (if you use composer or auto-loading)

(new Dotenv\SimplyDotEnv(__DIR__))->load();

echo getenv('APP_ENV');
echo "\n";
echo "\n";
echo getenv('DATABASE_DNS');