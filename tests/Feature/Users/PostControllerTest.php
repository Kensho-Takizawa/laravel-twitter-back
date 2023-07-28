<?php

namespace Tests\Feature\Users;


use App\Models\User;
use Faker\Generator;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostControllerTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    public function setUp(): void
    {
        // $this->markTestSkipped();

        parent::setUp();

        $this->app->bind(Generator::class, function () {
            $this->faker->seed(12345);

            return $this->faker;
        });

        $this->seed();
    }

    public function testInvoke(): void
    {
        $this->post('/api/users',  [
                'email' => 'user3@example.com',
                'password' => 'password',
                'name' => 'user3',
            ])
            ->assertStatus(201)
            ->assertSimilarJson([
                'data' => [
                    'id' => 51,
                    'email' => 'user3@example.com',
                    'name' => 'user3',
                ],
            ]);
    }
}
