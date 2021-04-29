<?php


namespace SimonMarcelLinden\Toast;

use Illuminate\Console\Command;

class ToastCommand extends Command {
    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'toast
                    { install }';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install VanillaJS toast script on your local js folder.';

    /**
     * Execute the console command.
     *
     * @return void
     *
     * @throws \InvalidArgumentException
     */
    public function handle() {
        $this->info('Copy necessary files');
        $this->copyFiles();
        $this->info('Update webmix configuration file ');
        $this->updateWebpackConfiguration();
        $this->comment('Please run "npm run install && npm run watch or npm run dev" to compile your fresh scaffolding.');
    }

    private function updateWebpackConfiguration() {
        copy(__DIR__.'/../stubs/webpack.mix.js.stub', base_path('webpack.mix.js'));
    }
    private function copyFiles() {
        if (! is_dir($directory = resource_path('js/'))) {
            mkdir($directory, 0755, true);
        }
        copy(__DIR__.'/../stubs/toast.js.stub', resource_path('js/toast.js'));

        if (! is_dir($directory = resource_path('css/'))) {
            mkdir($directory, 0755, true);
        }
        copy(__DIR__.'/../stubs/toast.css.stub', resource_path('css/toast.css'));

        if (! is_dir($directory = resource_path('sass/'))) {
            mkdir($directory, 0755, true);
        }
        copy(__DIR__.'/../stubs/toast.scss.stub', resource_path('sass/toast.scss'));
        copy(__DIR__.'/../stubs/toast-variables.scss.stub', resource_path('sass/toast-variables.scss'));

        $this->copyFonts();
    }

    private function copyFonts() {

        if (! is_dir($directory = resource_path('sass/fonts/'))) {
            mkdir($directory, 0755, true);
        }

        copy(__DIR__.'/../stubs/fonts/laravel-toast.eot', resource_path('sass/fonts/laravel-toast.eot'));
        copy(__DIR__.'/../stubs/fonts/laravel-toast.svg', resource_path('sass/fonts/laravel-toast.svg'));
        copy(__DIR__.'/../stubs/fonts/laravel-toast.ttf', resource_path('sass/fonts/laravel-toast.ttf'));
        copy(__DIR__.'/../stubs/fonts/laravel-toast.woff', resource_path('sass/fonts/laravel-toast.woff'));
    }
}
