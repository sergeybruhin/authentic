#!/usr/bin/env bash

ROOT_FOLDER="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"
cd "${ROOT_FOLDER}/../.." || exit

composer du; \
php artisan ide-helper:generate; \
php artisan ide-helper:models --nowrite; \
php artisan ide-helper:meta; \
