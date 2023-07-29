<?php

namespace Tests\Feature\Users\User\Tweets;

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
        $this->post('/api/users/1/tweets', [
            'content' => 'テストの投稿です。',
        ])
            ->assertStatus(201)
            ->assertSimilarJson([
                'data' => [
                    'id' => 251,
                    'content' => 'テストの投稿です。',
                ],
            ]);
    }
}
