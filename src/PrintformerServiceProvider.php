<?php
/**
 * Luca Perna - Webdeveloper
 * Team Dementia
 * luc@rissc.com
 *
 * Date: 18.04.22
 */

namespace Rissc\Printformer\Laravel;

use Illuminate\Support\ServiceProvider;
use Rissc\Printformer\Printformer;

class PrintformerServiceProvider extends ServiceProvider
{
  public function register()
  {
    $this->mergeConfigFrom(
      __DIR__ . '/../config/printformer.php', 'printformer'
    );
  }

  public function boot(): void
  {
    $this->publishes([
      __DIR__ . '/../config/printformer.php' => $this->app->configPath('printformer.php'),
    ]);

    $this->app->instance(Printformer::class, new Printformer($this->app->get('config')->get('printformer')));
  }
}
