#!/bin/bash

git fetch --all && git reset --hard origin/master && git pull
COMPOSER_MEMORY_LIMIT=-1 php8.0 `which composer` update --no-dev --optimize-autoloader
/usr/local/bin/php8.0 artisan config:clear
/usr/local/bin/php8.0 artisan cache:clear
/usr/local/bin/php8.0 artisan migrate --force
