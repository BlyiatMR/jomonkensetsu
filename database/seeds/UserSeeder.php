<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Role;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // DB::table('role_user')->truncate();
        // DB::table('oauth_access_tokens')->truncate();

        // $adminRole = Role::where('name', 'admin')->first();
        // $userRole = Role::where('name', 'user')->first();

        // $time = Carbon::now()->toDateTimeString();

        // $admin = User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@admin.com',
        //     'email_verified_at' => $time,
        //     'password' => bcrypt('12345')
        // ]);

        // $user = User::create([
        //     'name' => 'Admin',
        //     'email' => 'user@user.com',
        //     'email_verified_at' => $time,
        //     'password' => bcrypt('12345')
        // ]);

        // $admin->roles()->attach($adminRole);
        // $admin->roles()->attach($userRole);
        // $user->roles()->attach($userRole);

        // 
        User::truncate();
        DB::table('role_user')->truncate();
        DB::table('oauth_access_tokens')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $userRole = Role::where('name', 'user')->first();

        $time = Carbon::now()->toDateTimeString();

        $admin1 = User::create([
            'name' => '森拓馬',
            'email' => 'info@japan-cg.com',
            'email_verified_at' => $time,
            'password' => bcrypt('pqgsjeL9')
        ]);

        $admin2 = User::create([
            'name' => 'Oniru',
            'email' => 'admin@japan-cg.com',
            'email_verified_at' => $time,
            'password' => bcrypt('d4SNF7Yp')
        ]);

        $admin1->roles()->attach($adminRole);
        $admin1->roles()->attach($userRole);
        $admin2->roles()->attach($adminRole);
        $admin2->roles()->attach($userRole);
    }
}
