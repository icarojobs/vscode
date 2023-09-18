<?php

class DotEnv
{
    public function execute(): string
    {
        $envFilePath = __DIR__ . '/../../.env';

        if (!file_exists($envFilePath)) {
            return "Error: The .env file does not exists on your root folder." . PHP_EOL;
        }

        $envContents = file_get_contents($envFilePath);

        $find = [
            'APP_URL=http://localhost',
            'DB_HOST=127.0.0.1',
            'DB_USERNAME=root',
            'DB_PASSWORD=',
            'REDIS_HOST=127.0.0.1',
        ];

        $replacements = [
            'APP_URL=http://laravel.test',
            'DB_HOST=mariadb',
            'DB_USERNAME=sail',
            'DB_PASSWORD=password',
            'REDIS_HOST=redis',
        ];

        $newEnv = str_replace($find, $replacements, $envContents);

        if (file_put_contents($envFilePath, $newEnv)) {
            return "Environment variable on .env file was changed successfully!" . PHP_EOL;
        }

        return "Error when trying to change the environment variables on .env file." . PHP_EOL;
    }
}

$dotEnv = new DotEnv;
$dotEnv->execute();