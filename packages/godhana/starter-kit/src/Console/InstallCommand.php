<?php

namespace Godhana\StarterKit\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class InstallCommand extends Command
{
    protected $signature = 'godhana:install';
    protected $description = 'Install the Godhana starter kit with Home, About, Contact pages and layout files';

    public function handle()
    {
        $fs = new Filesystem;

        $pagesPath = resource_path('views/pages');
        $layoutsPath = resource_path('views/layouts');
        $routesPath = base_path('routes/web.php');
        $stubBase = __DIR__ . '/../../stubs';

        // Ensure directories exist
        foreach ([$pagesPath, $layoutsPath] as $dir) {
            if (!$fs->isDirectory($dir)) {
                $fs->makeDirectory($dir, 0755, true);
                $this->line("📁 Created directory: $dir");
            }
        }

        // Pages
        $this->publishStub($fs, "$stubBase/home.blade.stub", "$pagesPath/home.blade.php", 'Home page');
        $this->publishStub($fs, "$stubBase/about.blade.stub", "$pagesPath/about.blade.php", 'About page');
        $this->publishStub($fs, "$stubBase/contact.blade.stub", "$pagesPath/contact.blade.php", 'Contact page');

        // Layouts
        $this->publishStub($fs, "$stubBase/nav.blade.stub", "$layoutsPath/nav.blade.php", 'Nav layout');
        $this->publishStub($fs, "$stubBase/footer.blade.stub", "$layoutsPath/footer.blade.php", 'Footer layout');

        // Routes
        $routesToAdd = [
            "Route::view('/', 'pages.home')->name('home');",
            "Route::view('/about', 'pages.about')->name('about');",
            "Route::view('/contact', 'pages.contact')->name('contact');"
        ];

        $routesContent = $fs->get($routesPath);
        foreach ($routesToAdd as $route) {
            if (!str_contains($routesContent, $route)) {
                $fs->append($routesPath, "\n" . $route);
                $this->line("➕ Added route: {$route}");
            } else {
                $this->warn("⚠️ Route already exists: {$route}");
            }
        }

        $this->info('✅ Godhana Starter Kit fully installed.');
    }

    protected function publishStub(Filesystem $fs, string $stubPath, string $destination, string $label)
    {
        if (!$fs->exists($stubPath)) {
            $this->error("❌ Missing stub: $stubPath");
            return;
        }

        if (!$fs->exists($destination)) {
            $fs->put($destination, file_get_contents($stubPath));
            $this->line("✔️ Published: $label");
        } else {
            $this->warn("⚠️ Skipped (already exists): $label");
        }
    }
}
