<?php

use App\User;
use Carbon\Carbon;
use App\Models\Post;
use App\Models\Comentario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 9)->create();
        factory(Post::class, 25)->create();
        factory(Comentario::class, 40)->create();

        $data = [];
        for($i=0; $i<60; $i++) {
            $data[] = [
                'post_id'    => rand(1, 25),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ];
        }
    }
}
