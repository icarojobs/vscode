<?php

class Setup 
{
    public function execute(): string
    {
        $phpVersion = shell_exec("php -v | grep ^PHP | cut -d' ' -f2"); // @phpVersion
        $phpPath = shell_exec("which php"); // @phpPath
        $settingsJson = __DIR__ . '/../settings.json';

        $settings = file_get_contents($settingsJson);

        $settings = str_replace('@phpVersion', trim($phpVersion), $settings);
        $settings = str_replace('@phpPath', trim($phpPath), $settings);

        if (file_put_contents($settingsJson, $settings)) {
            return "PHP configured on settings.json!" . PHP_EOL;
        }

        return "Error when writing settings.json. Re-run setcode command" . PHP_EOL;
    }
}
