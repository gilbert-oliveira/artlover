<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'Gilbert',
            'email' => 'contato@gilbert.dev.br',
            'password' => bcrypt('12345678')
        ]);

        $team = Team::factory()->hasAttached($user, ['role' => 'admin'])->create([
            'user_id' => $user,
            'name' => "$user->name's Teams"
        ]);

        $user->switchTeam($team);
    }
}
