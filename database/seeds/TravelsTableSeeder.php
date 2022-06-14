<?php

use App\Travel;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travels = [
            [
                'destination' => 'Japan',
                'itinerary' => 'Osaka, Tokyo, Nara, Hiroshima',
                'duration' => '12 days',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore, voluptatem.',
                'price' => 169.00,
                'image' => 'https://www.viaggigiovani.it/images/destinazioni/giappone/tour_giappone_original.jpg'

            ],
            [
                'destination' => 'Australia',
                'itinerary' => 'Melbourne, Sidney, Perth',
                'duration' => '15 days',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore, voluptatem.',
                'price' => 199.00,
                'image' => 'https://www.viaggigiovani.it/images/destinazioni/australia/australia_citta_e_natura.jpg'

            ],
            [
                'destination' => 'Islanda',
                'itinerary' => 'ReyKjavik, Thingvellir, Gulfoss',
                'duration' => '12 days',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore, voluptatem.',
                'price' => 229.00,
                'image' => 'https://www.viaggigiovani.it/images/destinazioni/islanda/aurora_boreale_islanda.jpg'

            ],
            [
                'destination' => 'China',
                'itinerary' => 'Shangai, Beijing, Guilin',
                'duration' => '10 days',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore, voluptatem.',
                'price' => 249.00,
                'image' => 'https://www.viaggigiovani.it/images/destinazioni/cina/tour_cina_special.jpg'

            ],
            [
                'destination' => 'Madagascar',
                'itinerary' => 'Antananarivo, Fianarantsoa, Anakao',
                'duration' => '14 days',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore, voluptatem.',
                'price' => 340.00,
                'image' => 'https://www.viaggigiovani.it/images/destinazioni/madagascar/tour_madagascar_essential.jpg'

            ],



        ];

        foreach ($travels as $travel) {
            $new_travel = new Travel();
            $new_travel->destination = $travel['destination'];
            $new_travel->itinerary = $travel['itinerary'];
            $new_travel->duration = $travel['duration'];
            $new_travel->description = $travel['description'];
            $new_travel->price = $travel['price'];
            $new_travel->image = $travel['image'];
            $new_travel->save();
        }
    }
}
