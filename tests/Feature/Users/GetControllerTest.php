<?php


namespace Tests\Feature\Users;


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
        $this->get('/api/users')
            ->assertStatus(200)
            ->assertSimilarJson([
                'data' => [
                    0 => [
                        'email' => 'adelbert45@example.org',
                        'id' => 48,
                        'name' => 'Ms. Nettie Waelchi DDS',
                    ],
                    1 => [
                        'email' => 'agustin.moore@example.net',
                        'id' => 15,
                        'name' => 'Freeda Crist',
                    ],
                    2 => [
                        'email' => 'aleen.wilderman@example.org',
                        'id' => 17,
                        'name' => 'Cathy Wolf',
                    ],
                    3 => [
                        'email' => 'ali53@example.org',
                        'id' => 2,
                        'name' => 'Kamryn Koepp',
                    ],
                    4 => [
                        'email' => 'ariel49@example.com',
                        'id' => 21,
                        'name' => 'Lora Goldner',
                    ],
                    5 => [
                        'email' => 'astokes@example.com',
                        'id' => 44,
                        'name' => 'Barbara Cummings',
                    ],
                    6 => [
                        'email' => 'beatty.janie@example.org',
                        'id' => 20,
                        'name' => 'Ivy Bode',
                    ],
                    7 => [
                        'email' => 'beer.sydney@example.net',
                        'id' => 16,
                        'name' => 'Dr. Hilbert Durgan',
                    ],
                    8 => [
                        'email' => 'boconner@example.net',
                        'id' => 22,
                        'name' => 'Billy Nitzsche',
                    ],
                    9 => [
                        'email' => 'boyle.america@example.net',
                        'id' => 25,
                        'name' => 'Dr. Skyla Feest',
                    ],
                    10 => [
                        'email' => 'caitlyn83@example.com',
                        'id' => 13,
                        'name' => 'Rebeca Bosco',
                    ],
                    11 => [
                        'email' => 'corwin.josephine@example.net',
                        'id' => 14,
                        'name' => 'Toni Price V',
                    ],
                    12 => [
                        'email' => 'cory.okon@example.org',
                        'id' => 4,
                        'name' => 'Eldred Treutel',
                    ],
                    13 => [
                        'email' => 'cpouros@example.net',
                        'id' => 37,
                        'name' => 'Prof. Khalid Prosacco Sr.',
                    ],
                    14 => [
                        'email' => 'crooks.ally@example.org',
                        'id' => 5,
                        'name' => 'Prof. Bernadine Luettgen',
                    ],
                    15 => [
                        'email' => 'dangelo37@example.net',
                        'id' => 49,
                        'name' => 'Rhoda Mante',
                    ],
                    16 => [
                        'email' => 'darrin47@example.org',
                        'id' => 26,
                        'name' => 'Dr. Keeley Upton',
                    ],
                    17 => [
                        'email' => 'donnelly.arno@example.com',
                        'id' => 30,
                        'name' => 'Karianne Abbott',
                    ],
                    18 => [
                        'email' => 'durgan.melvin@example.net',
                        'id' => 8,
                        'name' => 'Miss Rhianna Hettinger',
                    ],
                    19 => [
                        'email' => 'flowe@example.com',
                        'id' => 34,
                        'name' => 'Sheldon Armstrong II',
                    ],
                    20 => [
                        'email' => 'gaetano16@example.com',
                        'id' => 35,
                        'name' => 'Prof. Elody Von',
                    ],
                    21 => [
                        'email' => 'gfisher@example.com',
                        'id' => 42,
                        'name' => 'Christiana Renner',
                    ],
                    22 => [
                        'email' => 'gutkowski.jody@example.net',
                        'id' => 11,
                        'name' => 'June Mueller',
                    ],
                    23 => [
                        'email' => 'ihalvorson@example.net',
                        'id' => 7,
                        'name' => 'Myrl Sipes',
                    ],
                    24 => [
                        'email' => 'jane82@example.org',
                        'id' => 45,
                        'name' => 'Prof. Eloisa Larson DVM',
                    ],
                    25 => [
                        'email' => 'jaskolski.gretchen@example.org',
                        'id' => 41,
                        'name' => 'Ryann Harris Jr.',
                    ],
                    26 => [
                        'email' => 'joe.bogisich@example.org',
                        'id' => 9,
                        'name' => 'Waylon Boyer',
                    ],
                    27 => [
                        'email' => 'joseph.luettgen@example.net',
                        'id' => 12,
                        'name' => 'Dejah Nikolaus',
                    ],
                    28 => [
                        'email' => 'joy88@example.com',
                        'id' => 29,
                        'name' => 'Alison Beahan',
                    ],
                    29 => [
                        'email' => 'julio41@example.net',
                        'id' => 31,
                        'name' => 'Kamron Jacobson V',
                    ],
                    30 => [
                        'email' => 'karlie26@example.net',
                        'id' => 33,
                        'name' => 'Terrill Hackett',
                    ],
                    31 => [
                        'email' => 'kirlin.laurine@example.com',
                        'id' => 28,
                        'name' => 'Nicholas Weissnat',
                    ],
                    32 => [
                        'email' => 'lawson.koepp@example.net',
                        'id' => 32,
                        'name' => 'Leda Boyle',
                    ],
                    33 => [
                        'email' => 'leilani.schroeder@example.net',
                        'id' => 27,
                        'name' => 'Mr. Russell Bernier',
                    ],
                    34 => [
                        'email' => 'mariane30@example.org',
                        'id' => 6,
                        'name' => 'Monserrat Waters',
                    ],
                    35 => [
                        'email' => 'murphy.haleigh@example.net',
                        'id' => 40,
                        'name' => 'Claudine Wuckert',
                    ],
                    36 => [
                        'email' => 'orlo71@example.org',
                        'id' => 18,
                        'name' => 'Audreanne McGlynn IV',
                    ],
                    37 => [
                        'email' => 'pparker@example.org',
                        'id' => 39,
                        'name' => 'Mrs. Vergie Bode',
                    ],
                    38 => [
                        'email' => 'purdy.jocelyn@example.com',
                        'id' => 46,
                        'name' => 'Erik Bernhard',
                    ],
                    39 => [
                        'email' => 'quigley.herminia@example.net',
                        'id' => 36,
                        'name' => 'Carlee Ziemann Sr.',
                    ],
                    40 => [
                        'email' => 'rogahn.vickie@example.com',
                        'id' => 3,
                        'name' => 'Myrtis Murphy II',
                    ],
                    41 => [
                        'email' => 'rohan.chasity@example.net',
                        'id' => 19,
                        'name' => 'Taya Fadel',
                    ],
                    42 => [
                        'email' => 'schulist.brain@example.com',
                        'id' => 10,
                        'name' => 'Arch Heidenreich',
                    ],
                    43 => [
                        'email' => 'shermann@example.com',
                        'id' => 43,
                        'name' => 'Mrs. Roxanne Buckridge II',
                    ],
                    44 => [
                        'email' => 'sidney33@example.com',
                        'id' => 24,
                        'name' => 'Dino Treutel',
                    ],
                    45 => [
                        'email' => 'theodore84@example.net',
                        'id' => 47,
                        'name' => 'Osvaldo Erdman',
                    ],
                    46 => [
                        'email' => 'umurray@example.net',
                        'id' => 50,
                        'name' => 'Lysanne Sipes',
                    ],
                    47 => [
                        'email' => 'wparisian@example.net',
                        'id' => 23,
                        'name' => 'Deangelo Sporer',
                    ],
                    48 => [
                        'email' => 'ydeckow@example.com',
                        'id' => 1,
                        'name' => 'Brock Parker',
                    ],
                    49 => [
                        'email' => 'ysipes@example.net',
                        'id' => 38,
                        'name' => 'Art Johnston',
                    ],
                ],
            ]);
    }
}
