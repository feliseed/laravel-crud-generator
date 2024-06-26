<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sample>
 */
class SampleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            %%COLUMNS%%
            // ダミーデータの例（https://github.com/fzaninotto/Faker）
            // 'name' => $this->faker->name, // 氏名
            // 'name_kana' => $this->faker->kanaName, // 氏名（カナ）
            // 'zip_code' => $this->faker->postcode, // 郵便番号
            // 'prefecture' => $this->faker->prefecture, // 都道府県
            // 'city' => $this->faker->city, // 市区町村
            // 'random_string' => $this->faker->randomElement(['編集部', '企画部', '営業部']), // ランダムな値1つ
            // 'isbn' => $this->faker->numerify('###-####-#####-#'), // コード値
            // 'is_active' => $this->faker->boolean, // boolean
            // 'url' => $this->faker->url, // URL
            // 'image_url' => $this->faker->imageUrl(), // 画像URL
            // 'domain' => $this->faker->domainName, // ドメイン
            // 'email' => $this->faker->safeEmail, // メールアドレス
            // 'unique_word' => $faker->unique()->word; // 重複しないランダムな文字列
            // 'note' =>  $faker->text($maxNbChars = 300); // 備考（300文字）
            // 'published_at' => $this->faker->dateTimeBetween('-1 years', 'now'), // 1年前から現在までの日付
        ];
    }
}
