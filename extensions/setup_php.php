<?php

$phpVersion = shell_exec("php -v | grep ^PHP | cut -d' ' -f2"); // @phpVersion
$phpPath = shell_exec("which php"); // @phpPath
$settingsJson = __DIR__ . '/../settings.json';

$settings = file_get_contents($settingsJson);

$settings = str_replace('@phpVersion', trim($phpVersion), $settings);
$settings = str_replace('@phpPath', trim($phpPath), $settings);

echo "PHP configured on settings.json!" . PHP_EOL;