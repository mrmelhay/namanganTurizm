<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tour;

class TourSeeder extends Seeder
{
    public function run()
    {
        $tours = [
            [
                'title' => ['uz' => 'Namangan - Toshkent - Namangan', 'ru' => 'Наманган - Ташкент - Наманган', 'en' => 'Namangan - Tashkent - Namangan'],
                'description' => ['uz' => 'Tur paket ichida: Mehmonxona, ovqatlanish, transfer xizmatlari kiradi.', 'ru' => 'В тур пакет включено: Отель, питание, трансфер.', 'en' => 'Tour package includes: Hotel, meals, transfer services.'],
                'price' => 'Kelishilgan narxda', // User didn't specify price, so placeholder.
                'duration' => '2 kun 1 kecha',
                'transport_type' => 'Mikroavtobus',
                'route_list' => ['uz' => 'Namangan - Toshkent - Namangan', 'ru' => 'Наманган - Ташкент - Наманган', 'en' => 'Namangan - Tashkent - Namangan'],
            ],
            [
                'title' => ['uz' => 'Namangan - Zomin - Namangan', 'ru' => 'Наманган - Зомин - Наманган', 'en' => 'Namangan - Zaamin - Namangan'],
                'description' => ['uz' => 'Tur paket ichida: Mehmonxona, ovqatlanish, transfer xizmatlari kiradi.', 'ru' => 'В тур пакет включено: Отель, питание, трансфер.', 'en' => 'Tour package includes: Hotel, meals, transfer services.'],
                'price' => 'Kelishilgan narxda',
                'duration' => '2 kun 1 kecha',
                'transport_type' => 'Mikroavtobus',
                'route_list' => ['uz' => 'Namangan - Zomin - Namangan', 'ru' => 'Наманган - Зомин - Наманган', 'en' => 'Namangan - Zaamin - Namangan'],
            ],
            [
                'title' => ['uz' => 'Pop - Xiva - Buxoro - Samarqand - Pop', 'ru' => 'Пап - Хива - Бухара - Самарканд - Пап', 'en' => 'Pap - Khiva - Bukhara - Samarkand - Pap'],
                'description' => ['uz' => 'Tur paket ichida: Mehmonxona, ovqatlanish, transfer xizmatlari kiradi.', 'ru' => 'В тур пакет включено: Отель, питание, трансфер.', 'en' => 'Tour package includes: Hotel, meals, transfer services.'],
                'price' => 'Kelishilgan narxda',
                'duration' => '6 kun 5 kecha',
                'transport_type' => 'Pop - Xiva poyezd, Xiva - Buxoro - Samarqand mikroavtobus',
                'route_list' => ['uz' => 'Pop - Xiva - Buxoro - Samarqand - Pop', 'ru' => 'Пап - Хива - Бухара - Самарканд - Пап', 'en' => 'Pap - Khiva - Bukhara - Samarkand - Pap'],
            ],
            [
                'title' => ['uz' => 'Pop - Buxoro - Samarqand - Pop', 'ru' => 'Пап - Бухара - Самарканд - Пап', 'en' => 'Pap - Bukhara - Samarkand - Pap'],
                'description' => ['uz' => 'Tur paket ichida: Mehmonxona, ovqatlanish, transfer xizmatlari kiradi.', 'ru' => 'В тур пакет включено: Отель, питание, трансфер.', 'en' => 'Tour package includes: Hotel, meals, transfer services.'],
                'price' => 'Kelishilgan narxda',
                'duration' => '5 kun 4 kecha',
                'transport_type' => 'Pop - Samarqand poyezd, Buxoro - Samarqand mikroavtobus',
                'route_list' => ['uz' => 'Pop - Buxoro - Samarqand - Pop', 'ru' => 'Пап - Бухара - Самарканд - Пап', 'en' => 'Pap - Bukhara - Samarkand - Pap'],
            ],
            [
                'title' => ['uz' => 'Namangan - Samarqand - Namangan', 'ru' => 'Наманган - Самарканд - Наманган', 'en' => 'Namangan - Samarkand - Namangan'],
                'description' => ['uz' => 'Tur paket ichida: Mehmonxona, ovqatlanish, transfer xizmatlari kiradi.', 'ru' => 'В тур пакет включено: Отель, питание, трансфер.', 'en' => 'Tour package includes: Hotel, meals, transfer services.'],
                'price' => 'Kelishilgan narxda',
                'duration' => '3 kun 2 kecha',
                'transport_type' => 'Namangan - Oxangaron yengil mashina, Oxangaron - Samarqand mikroabtobus',
                'route_list' => ['uz' => 'Namangan - Samarqand - Namangan', 'ru' => 'Наманган - Самарканд - Наманган', 'en' => 'Namangan - Samarkand - Namangan'],
            ],
        ];

        foreach ($tours as $t) {
            Tour::create($t);
        }
    }
}
