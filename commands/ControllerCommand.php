<?php

namespace Commands;

class ControllerCommand
{
    public static function handle($name)
    {
        if (!$name) {
            echo "\n    ❌ Missing controller name.\n\n";
            return;
        }

        $className = ucfirst($name);
        $file = __DIR__ . "/../app/controllers/{$className}.php";

        if (!file_exists($file)) {
            $template = <<<PHP
<?php

namespace App\Controllers;

use App\Core\Controller;

class {$className} extends Controller
{
    public function index()
    {
        echo "Welcome from {$className}";
    }
}
PHP;
            file_put_contents($file, $template);
            echo "\n    ✅ Controller '{$className}' created at app/controllers/{$className}.php\n\n";
        } else {
            echo "\n    ⚠️ Controller '{$className}' already exists.\n\n";
        }
    }
}
