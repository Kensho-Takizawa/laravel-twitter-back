<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\TweetFactory;
use Illuminate\Database\Seeder;

class TweetSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            for ($i = 0; $i < 5; $i++) {
                assert($user instanceof User);

                $user->tweets()->create([
                    'content' => fake()->text(),
                ]);
            }
        }
    }
}
