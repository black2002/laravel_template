<?php

use Illuminate\Database\Seeder;
use App\Article;
use App\Country;
use App\Role;
use App\User;



class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::unguard();
        Country::unguard();
        Role::unguard();
        User::unguard();

        $this->call(UserFactory::class);
        $this->call(CountryFactory::class);
        $this->call(RoleFactory::class);
        $this->call(ArticleFactory::class);

        Article::reguard();
        Country::reguard();
        Role::reguard();
        User::reguard();
    }
}
