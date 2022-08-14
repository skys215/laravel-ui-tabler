<?php

namespace Skys215\TablerPreset;

use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;

class TablerPresetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        UiCommand::macro('tabler', function (UiCommand $command) {
            $adminLTEPreset = new TablerPreset($command);
            $adminLTEPreset->install();

            $command->info('Tabler scaffolding installed successfully.');

            if ($command->option('auth')) {
                $adminLTEPreset->installAuth();
                $command->info('Tabler CSS auth scaffolding installed successfully.');
            }

            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });

        UiCommand::macro('tabler-localized', function (UiCommand $command) {
            $adminLTEPreset = new TablerLocalizedPreset($command);
            $adminLTEPreset->install();

            $command->info('Tabler scaffolding installed successfully with localization.');

            if ($command->option('auth')) {
                $adminLTEPreset->installAuth();
                $command->info('Tabler CSS auth scaffolding installed successfully with localization.');
            }

            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });

        UiCommand::macro('tabler-fortify', function (UiCommand $command) {
            $fortifyTablerPreset = new TablerPreset($command, true);
            $fortifyTablerPreset->install();

            $command->info('Tabler scaffolding installed successfully for Laravel Fortify.');

            if ($command->option('auth')) {
                $fortifyTablerPreset->installAuth();
                $command->info('Tabler CSS auth scaffolding installed successfully for Laravel Fortify.');
            }

            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });

        if (class_exists(Fortify::class)) {
            Fortify::loginView(function () {
                return view('auth.login');
            });

            Fortify::registerView(function () {
                return view('auth.register');
            });

            Fortify::confirmPasswordView(function () {
                return view('auth.passwords.confirm');
            });

            Fortify::requestPasswordResetLinkView(function () {
                return view('auth.passwords.email');
            });

            Fortify::resetPasswordView(function () {
                return view('auth.passwords.reset');
            });

            Fortify::verifyEmailView(function () {
                return view('auth.verify');
            });
        }
    }
}
