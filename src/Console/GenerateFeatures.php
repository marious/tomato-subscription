<?php

namespace Queents\TomatoSubscription\Console;

use Illuminate\Console\Command;
use Queents\TomatoSubscription\Models\PlanFeature;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class GenerateFeatures extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'features:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'To Generate all features for plans';


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $features = [
            'frontend.profile.index'
        ];

        foreach ($features as $feature) {
            $newFeature = new PlanFeature();
            $newFeature->name = $feature;
            $newFeature->key = $feature;
            $newFeature->save();
        }
    }


}
