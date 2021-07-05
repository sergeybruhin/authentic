#!/usr/bin/env bash

ROOT_FOLDER="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"
cd "${ROOT_FOLDER}/../.." || exit

php artisan cache:clear; \
php artisan config:clear; \
php artisan view:clear; \
php artisan route:clear; \
