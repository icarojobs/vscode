<?php

$filename = __DIR__ . '/vs_code_extensions_list.txt';
$lines = [];

$f = fopen($filename, 'r');

if (!$f) {
    return;
}

while (!feof($f)) {
    if (mb_strlen(fgets($f)) < 3) {
        continue;
    }

    $lines[] = fgets($f);
}

fclose($f);

foreach ($lines as $extension) {
    $extension = trim($extension);

    echo PHP_EOL;
    $output = shell_exec('code --install-extension ' . $extension . ' --force');
    echo $output . PHP_EOL;
}

echo "-----------------------------------------------------------" . PHP_EOL;
echo "All vscode extensions was installed!" . PHP_EOL;
echo "-----------------------------------------------------------" . PHP_EOL;
