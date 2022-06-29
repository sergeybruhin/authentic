#!/bin/bash

ln -s public public_html

COMPOSER_MEMORY_LIMIT=-1 php8.0 `which composer` install --no-dev --optimize-autoloader

find . -type f -exec chmod 644 {} \;
find . -type d -exec chmod 755 {} \;
chmod -R 777 ./storage \;
chmod -R 777 ./bootstrap/cache/

/usr/local/bin/php8.0 artisan key:generate
/usr/local/bin/php8.0 artisan storage:link
/usr/local/bin/php8.0 artisan migrate --force
/usr/local/bin/php8.0 artisan db:seed
