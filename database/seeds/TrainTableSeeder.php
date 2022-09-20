<?php
use App\Models\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 10; $i++){
            $new_train = new Train();
            $new_train->id = $faker->ean8();
            $new_train->company = $faker->word();
            $new_train->from = $faker->city();
            $new_train->to = $faker->city();
            $new_train->start = $faker->time();
            $new_train->arrive = $faker->time();
            $new_train->pnr = $faker->randomNumber(5, true);
            $new_train->carriages = $faker->randomNumber(2, true);
            $new_train->intime = $faker->boolean();
            $new_train->delayed = $faker->boolean();
            $new_train->save();
        }
    }
}
