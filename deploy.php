<?php

namespace Deployer;

use Illuminate\Support\Facades\Config;

require 'recipe/laravel.php';

// Project name
set('application', 'authentic');

// Project repository
set('repository', 'git@github.com:sergeybruhin/authentic.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);
set('allow_anonymous_stats', false);

// Hosts

host(Config::get('service.deploy.host'))
    ->set('deploy_path', Config::get('services.deploy.path'))
    ->set('http_user', Config::get('services.deploy.http_user'))
    ->set('branch', 'master');


// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

