<?php

namespace Commands;

class ServiceCommand
{
    public static function handle($name)
    {
        if (!$name) {
            echo "\n    ❌ Missing service name.\n\n";
            return;
        }

        $className = ucfirst($name);
        $filePath = __DIR__ . '/../app/services/' . $className . '.php';

        if (file_exists($filePath)) {
            echo "\n    ⚠️ Service '{$className}' already exists.\n\n";
            return;
        }

        $template = <<<PHP
<?php

namespace App\Services;

class {$className}
{
    public function example()
    {
        // Add your service logic here
    }
}
PHP;

        file_put_contents($filePath, $template);
        echo "✅ Service '{$className}' created at app/services/{$className}.php\n";
    }
}
