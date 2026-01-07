<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing features to avoid duplicates if re-run
        Feature::truncate();

        $features = [
            [
                'icon' => 'bi bi-geo-alt-fill',
                'title' => [
                    'en' => 'Best Destinations',
                    'uz' => 'Eng yaxshi manzillar',
                    'ru' => 'Лучшие направления'
                ],
                'description' => [
                    'en' => 'We offer tours to the most beautiful and historical places in Namangan and beyond.',
                    'uz' => 'Biz Namangan va undan tashqaridagi eng go\'zal va tarixiy joylarga sayohatlarni taklif etamiz.',
                    'ru' => 'Мы предлагаем туры по самым красивым и историческим местам Намангана и за его пределами.'
                ],
                'order' => 1
            ],
            [
                'icon' => 'bi bi-currency-dollar',
                'title' => [
                    'en' => 'Affordable Prices',
                    'uz' => 'Hamyonbop narxlar',
                    'ru' => 'Доступные цены'
                ],
                'description' => [
                    'en' => 'High-quality services at competitive rates, ensuring great value for your money.',
                    'uz' => 'Raqobatbardosh narxlarda yuqori sifatli xizmatlar, pulingiz uchun ajoyib qiyatni ta\'minlaydi.',
                    'ru' => 'Высококачественные услуги по конкурентоспособным ценам, обеспечивающие отличное соотношение цены и качества.'
                ],
                'order' => 2
            ],
            [
                'icon' => 'bi bi-emoji-smile-fill',
                'title' => [
                    'en' => 'Satisfaction Guaranteed',
                    'uz' => 'Mamnuniyat kafolatlangan',
                    'ru' => 'Гарантия удовольствия'
                ],
                'description' => [
                    'en' => 'Our priority is your happiness. We strive to make every trip unforgettable.',
                    'uz' => 'Sizning baxtingiz bizning ustuvor vazifamizdir. Biz har bir sayohatni unutilmas qilishga harakat qilamiz.',
                    'ru' => 'Ваше счастье - наш приоритет. Мы стремимся сделать каждую поездку незабываемой.'
                ],
                'order' => 3
            ],
        ];

        foreach ($features as $feature) {
            Feature::create($feature);
        }
    }
}
