<?php

namespace JoeDixon\Translation\Tests;

use JoeDixon\Translation\TranslationServiceProvider;
use Orchestra\Testbench\TestCase;

class PackageIsLoadedTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            TranslationServiceProvider::class,
        ];
    }

    /** @test */
    public function the_translation_pacakage_is_loaded()
    {
        $this->assertArrayHasKey(TranslationServiceProvider::class, app()->getLoadedProviders());
    }
}
