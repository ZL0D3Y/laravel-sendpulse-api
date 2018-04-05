<?php

namespace iHubGrid\FrameIntegrations;


use Illuminate\Support\ServiceProvider;

class SendpulseServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->setUpConfig();

    }

    protected function setUpConfig()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/sendpulse.php', 'sendpulse');
    }
}