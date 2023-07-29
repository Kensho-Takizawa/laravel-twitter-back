<?php

namespace Tests\Feature\Users\User\Tweets;

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
        $this->get('/api/users/1/tweets')
            ->assertStatus(200)
            ->assertSimilarJson([
                'data' => [
                    0 => [
                        'content' => 'Architecto et id soluta placeat ea. Rerum dolorum consequatur velit consequuntur rem ut ad. Consequatur voluptatem iusto veniam quia. Quia qui consectetur temporibus voluptatibus qui.',
                        'id' => 3,
                    ],
                    1 => [
                        'content' => 'Distinctio fuga debitis odit culpa modi velit quisquam. Optio id harum tempora adipisci.',
                        'id' => 2,
                    ],
                    2 => [
                        'content' => 'Harum qui sint minima non dolorum. Voluptas consequatur non fugit et porro nisi quasi. Dolore vel vitae est quia enim ut. Et adipisci laudantium enim omnis possimus. Nulla ad ut sit placeat.',
                        'id' => 1,
                    ],
                    3 => [
                        'content' => 'Soluta et error nam et culpa voluptatem optio. Eius eius excepturi non explicabo sit praesentium. Assumenda neque corporis repudiandae deserunt. Enim sed maxime eligendi maxime sint.',
                        'id' => 5,
                    ],
                    4 => [
                        'content' => 'Vitae velit debitis alias laudantium mollitia. Soluta in consequatur vel qui velit non dolores. Eaque et quisquam repellat eligendi molestias soluta.',
                        'id' => 4,
                    ],
                ],
            ]);
    }
}
