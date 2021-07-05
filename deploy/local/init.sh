#!/usr/bin/env bash

ROOT_FOLDER="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"
cd "${ROOT_FOLDER}/../.." || exit

composer install
php artisan key:generate
php artisan storage:link
php artisan migrate:fresh --seed
composer du
