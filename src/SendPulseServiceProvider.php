<?php

namespace Zlodey\SendPulse;


use Illuminate\Support\ServiceProvider;
use Sendpulse\RestApi\ApiClient;
use Sendpulse\RestApi\Storage\SessionStorage;


class SendPulseServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     * @throws \Exception
     */
    public function register()
    {
        $this->setUpConfig();
        $this->app->bind('SendPulse', function () {
            return new ApiClient(\config('sendpulse.api_user_id'), \config('sendpulse.api_secret'), new SessionStorage());
        });
    }

    protected function setUpConfig()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/sendpulse.php', 'sendpulse');
    }
}
