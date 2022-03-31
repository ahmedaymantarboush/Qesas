<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \Book::class;

    public function definition()
    {
        // $cat = ['قصص','متسلسلات'];
        $type = [
            "اثاره",
            "اكشن",
            "تاريخ",
            "جريمه",
            "حرب",
            "رومانسي",
            "رياضي",
            "سيره ذاتيه",
            "عائلي",
            "غريبه",
            "غموض",
            "كوميديا",
            "مغامره",
            "موسيقي",
            "وثائقي"
        ];
        // $category = $cat[random_int(0,1)];
        // $season = $category == 'متسلسلات'?rand(1,10):0;
        // return [
        //     'title' => $this->faker->word.' '.$this->faker->word,
        //     'slug' => $this->faker->slug,
        //     'category' => $category,
        //     'season' => $season,
        //     'type' => $type[random_int(0,count($type)-1)],
        //     'image' => 'images\\images1.jpg',
        //     'file' => 'images\\images1.jpg',
        //     'description' => $this->faker->text.' '.$this->faker->text.' '.$this->faker->text.' '.$this->faker->text.' '.$this->faker->text.' '.$this->faker->text.' '.$this->faker->text.' '.$this->faker->text,
        //     'downloads_count' => rand(0,100),
        //     'views' => rand(0,500),
        //     'rate' => rand(0,5),
        // ];
        return [
            'title' => "qessa tanya",
            'slug' => 'qessa-tanya',
            'category' => 'قصص',
            'season' => 0,
            'type' => $type[random_int(0,count($type)-1)],
            'image' => 'images\\images1.jpg',
            'file' => 'images\\images1.jpg',
            'description' => $this->faker->text.' '.$this->faker->text.' '.$this->faker->text.' '.$this->faker->text.' '.$this->faker->text.' '.$this->faker->text.' '.$this->faker->text.' '.$this->faker->text,
            'downloads_count' => rand(0,100),
            'views' => rand(0,500),
            'rate' => rand(0,5),
        ];
    }
}
