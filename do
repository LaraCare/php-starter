#!/usr/bin/env php
<?php

require_once __DIR__ . '/utils/autoload.php';

use Commands\ViewCommand;
use Commands\ControllerCommand;
use Commands\MigrationCommand;
require_once __DIR__ . '/utils/autoload.php';

$args = $argv;
array_shift($args); // remove script name

if (count($args) === 0) {
    echo <<<HELP
Usage:
  php do view:ViewName
  php do controller:ControllerName
  php do migration:CreateUsers --type=create

Available commands:
  view:<name>         Create a view
  controller:<name>   Create a controller
  migration:<name>    Create an SQL file in database/migrations/

HELP;
    exit;
}

$rawCommand = $args[0];
[$command, $name] = explode(':', $rawCommand);

// Parse options (e.g., --type=create)
function parseOptions($args)
{
    $opts = [];
    foreach ($args as $arg) {
        if (str_starts_with($arg, '--')) {
            [$key, $value] = explode('=', ltrim($arg, '-'), 2);
            $opts[$key] = $value ?? true;
        }
    }
    return $opts;
}

$options = parseOptions($args);

switch ($command) {
    case 'view':
        ViewCommand::handle($name);
        break;
    case 'controller':
        ControllerCommand::handle($name);
        break;
    case 'migration':
        MigrationCommand::handle($name, $options);
        break;
    default:
        echo "\n    ❌ Unknown command: {$command}\n\n";
        break;
}
