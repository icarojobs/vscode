<?php

class DotEnv
{
    public function execute(): string|int
    {
        $envFilePath = __DIR__ . '/../../.env';

        copy(__DIR__ . '/../dotfiles/bladeformatterrc', __DIR__ . '/../../.bladeformatterrc');
        copy(__DIR__ . '/../dotfiles/phpstan.neon', __DIR__ . '/../../phpstan.neon');
        copy(__DIR__ . '/../dotfiles/pint.json', __DIR__ . '/../../pint.json');

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
            echo "Environment variable on .env file was changed successfully!" . PHP_EOL;
            return 0;
        }

        echo "Error when trying to change the environment variables on .env file." . PHP_EOL;
        return 1;
    }
}

$dotEnv = new DotEnv;
$dotEnv->execute();
