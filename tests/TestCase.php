<?php

namespace Tests;

use Illuminate\Foundation\Testing\DatabaseMigrations;

abstract class TestCase extends \Illuminate\Foundation\Testing\TestCase
{
    use CreatesApplication;

    /**
     * @return class-string[]
     */
    protected function setUpTraits(): array
    {
        $uses = parent::setUpTraits();

        if (isset($uses[DatabaseMigrations::class])) {
            $this->runDatabaseMigrations();
        }

        return $uses;
    }
}
