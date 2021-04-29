# Laravel Toast

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

``` bash
$ composer require simonmarcellinden/toast
```
### Laravel <= 5.4

Add the service provider to `config/app.php`

```php
SimonMarcelLinden\Toast\ToastServiceProvider::class,
```
Optionally include the Facade in config/app.php if you'd like.

```php
'Toast'  => SimonMarcelLinden\Toast\Facades\Toast::class,
```

### Options

For publish the toast config file  use the follow command
Run:

``` php
php artisan vendor:publish
```

## Usage
### Basic

* Toast::info('message', 'title', ['options']);

Add a Toast message directly into your route or controller

```php
<?php
    /** Route Example **/
    Route::get('/', function () {
        Toast::info('Messages in here', 'Title', ["positionClass" => "toast-top-right"]);
        return view('welcome');
    });
?>

<?php
    /** Controller Example **/
    class TesConroller extends Controller {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response     
         */
        public function index() {
            Toast::info('Messages in here', 'Title', ["positionClass" => "toast-top-right"]);
             return view('welcome');
        }
    }
?>
```

Then you should add `{!! Toast::message() !!}` at the end of your HTML.

```html
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel - Toast</title>
        <link   href="{{ asset('css/toast.css') }}" rel="stylesheet">
        <script src="{{ asset('js/toast.js') }}" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>
        {!! Toast::message() !!}
    </body>
</html>
```




## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email info@snerve.de instead of using the issue tracker.

## Credits

- [Simon Marcel Linden][link-author]
- [All Contributors][link-contributors]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/simonmarcellinden/toast.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/simonmarcellinden/toast.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/simonmarcellinden/toast/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/simonmarcellinden/toast
[link-downloads]: https://packagist.org/packages/simonmarcellinden/toast
[link-author]: https://github.com/simonmarcellinden
[link-contributors]: ../../contributors
