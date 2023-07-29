<?php

namespace Tests\Feature\Users\User;

use Faker\Generator;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetControllerTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    public function setUp(): void
    {
//         TestCase::markTestSkipped();

        parent::setUp();

        $this->app->bind(Generator::class, function () {
            $this->faker->seed(12345);

            return $this->faker;
        });

        $this->seed();
    }

    public function testInvoke(): void
    {
        $this->get('/api/users/1')
            ->assertStatus(200)
            ->assertSimilarJson([
                'data' => [
                    'id' => 1,
                    'email' => 'ydeckow@example.com',
                    'name' => 'Brock Parker',
                ],
            ]);
    }
}
