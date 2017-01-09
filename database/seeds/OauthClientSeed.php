<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class OauthClientSeed extends Seeder {

    public function run()
    {
        for($i = 0; $i < 10; $i++) {
            DB::table('oauth_clients')->insert
            ([
                'id' => "id$i",
                'secret' => "secret$i",
                'name' => "client$i"
            ]);
        }

    }

}
