<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Felix',
            'email' => 'felix.prima@binus.ac.id',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Udin',
            'email' => 'udin.prima@binus.ac.id',
            'password' => bcrypt('12345')
        ]);


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);


        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo alias veritatis corporis et aspernatur officia, aliquid illo minus magnam nam, porro reprehenderit.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo alias veritatis corporis et aspernatur officia, aliquid illo minus magnam nam, porro reprehenderit corrupti inventore fugit? Ea, sapiente aliquam labore sint est ab velit soluta praesentium temporibus unde blanditiis sequi! Voluptatem, numquam dicta animi magni reprehenderit consequuntur nulla tempore suscipit voluptate, laboriosam voluptas sequi quod quaerat doloremque molestiae sunt commodi aut fugiat accusamus delectus eum? Cum ut reprehenderit laudantium accusamus necessitatibus at magnam doloremque, aspernatur perspiciatis odit quis a, explicabo fugit quaerat quidem fuga repellat iure maiores repudiandae, nulla voluptatum quod. Hic qui iste magni enim amet, reiciendis officiis illum tenetur quis placeat, voluptatum veniam distinctio quod deleniti maiores aut aliquam expedita, vitae earum blanditiis quo delectus ut. Quasi voluptatibus hic odit repudiandae eum aliquid fuga obcaecati quae beatae, nulla distinctio corporis amet tempore debitis aspernatur asperiores consequuntur cumque minus eligendi maxime rerum labore. </p><p?>Reiciendis vero a magnam deserunt, ut minus architecto dicta voluptatum id animi nesciunt minima odio eligendi quis harum, omnis alias! Iste, optio! Doloremque molestias eveniet tempora similique esse amet odit eius dolores, saepe magni autem pariatur, ad culpa dignissimos! Ab necessitatibus dolor, dolorum reiciendis eaque eveniet tempora tenetur cumque nulla sunt, debitis quis ullam sed ea mollitia! Vero unde temporibus quasi cum perspiciatis ab adipisci facere quaerat delectus. Aut magnam aspernatur, voluptatem architecto voluptas laudantium nulla possimus ullam dolore dignissimos quidem quaerat dolorum. Vero aspernatur consequatur cumque illum autem veritatis fuga asperiores, ad dignissimos, ratione in dicta voluptate cum exercitationem eaque voluptas. Asperiores quisquam maiores corrupti excepturi aut fuga voluptatem praesentium omnis eveniet reprehenderit esse unde eius iste quae quo, amet hic veniam, aliquam totam blanditiis nihil, eaque molestias possimus in! Dolorem iure, expedita harum omnis odit delectus eligendi ratione aperiam, laboriosam beatae, ex tempora maiores placeat vitae eos enim. Facere, voluptates labore nisi magni vero accusantium!</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo alias veritatis corporis et aspernatur officia, aliquid illo minus magnam nam, porro reprehenderit.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo alias veritatis corporis et aspernatur officia, aliquid illo minus magnam nam, porro reprehenderit corrupti inventore fugit? Ea, sapiente aliquam labore sint est ab velit soluta praesentium temporibus unde blanditiis sequi! Voluptatem, numquam dicta animi magni reprehenderit consequuntur nulla tempore suscipit voluptate, laboriosam voluptas sequi quod quaerat doloremque molestiae sunt commodi aut fugiat accusamus delectus eum? Cum ut reprehenderit laudantium accusamus necessitatibus at magnam doloremque, aspernatur perspiciatis odit quis a, explicabo fugit quaerat quidem fuga repellat iure maiores repudiandae, nulla voluptatum quod. Hic qui iste magni enim amet, reiciendis officiis illum tenetur quis placeat, voluptatum veniam distinctio quod deleniti maiores aut aliquam expedita, vitae earum blanditiis quo delectus ut. Quasi voluptatibus hic odit repudiandae eum aliquid fuga obcaecati quae beatae, nulla distinctio corporis amet tempore debitis aspernatur asperiores consequuntur cumque minus eligendi maxime rerum labore. </p><p?>Reiciendis vero a magnam deserunt, ut minus architecto dicta voluptatum id animi nesciunt minima odio eligendi quis harum, omnis alias! Iste, optio! Doloremque molestias eveniet tempora similique esse amet odit eius dolores, saepe magni autem pariatur, ad culpa dignissimos! Ab necessitatibus dolor, dolorum reiciendis eaque eveniet tempora tenetur cumque nulla sunt, debitis quis ullam sed ea mollitia! Vero unde temporibus quasi cum perspiciatis ab adipisci facere quaerat delectus. Aut magnam aspernatur, voluptatem architecto voluptas laudantium nulla possimus ullam dolore dignissimos quidem quaerat dolorum. Vero aspernatur consequatur cumque illum autem veritatis fuga asperiores, ad dignissimos, ratione in dicta voluptate cum exercitationem eaque voluptas. Asperiores quisquam maiores corrupti excepturi aut fuga voluptatem praesentium omnis eveniet reprehenderit esse unde eius iste quae quo, amet hic veniam, aliquam totam blanditiis nihil, eaque molestias possimus in! Dolorem iure, expedita harum omnis odit delectus eligendi ratione aperiam, laboriosam beatae, ex tempora maiores placeat vitae eos enim. Facere, voluptates labore nisi magni vero accusantium!</p>',
            'category_id' => 2,
            'user_id' => 2
        ]);


        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo alias veritatis corporis et aspernatur officia, aliquid illo minus magnam nam, porro reprehenderit.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo alias veritatis corporis et aspernatur officia, aliquid illo minus magnam nam, porro reprehenderit corrupti inventore fugit? Ea, sapiente aliquam labore sint est ab velit soluta praesentium temporibus unde blanditiis sequi! Voluptatem, numquam dicta animi magni reprehenderit consequuntur nulla tempore suscipit voluptate, laboriosam voluptas sequi quod quaerat doloremque molestiae sunt commodi aut fugiat accusamus delectus eum? Cum ut reprehenderit laudantium accusamus necessitatibus at magnam doloremque, aspernatur perspiciatis odit quis a, explicabo fugit quaerat quidem fuga repellat iure maiores repudiandae, nulla voluptatum quod. Hic qui iste magni enim amet, reiciendis officiis illum tenetur quis placeat, voluptatum veniam distinctio quod deleniti maiores aut aliquam expedita, vitae earum blanditiis quo delectus ut. Quasi voluptatibus hic odit repudiandae eum aliquid fuga obcaecati quae beatae, nulla distinctio corporis amet tempore debitis aspernatur asperiores consequuntur cumque minus eligendi maxime rerum labore. </p><p?>Reiciendis vero a magnam deserunt, ut minus architecto dicta voluptatum id animi nesciunt minima odio eligendi quis harum, omnis alias! Iste, optio! Doloremque molestias eveniet tempora similique esse amet odit eius dolores, saepe magni autem pariatur, ad culpa dignissimos! Ab necessitatibus dolor, dolorum reiciendis eaque eveniet tempora tenetur cumque nulla sunt, debitis quis ullam sed ea mollitia! Vero unde temporibus quasi cum perspiciatis ab adipisci facere quaerat delectus. Aut magnam aspernatur, voluptatem architecto voluptas laudantium nulla possimus ullam dolore dignissimos quidem quaerat dolorum. Vero aspernatur consequatur cumque illum autem veritatis fuga asperiores, ad dignissimos, ratione in dicta voluptate cum exercitationem eaque voluptas. Asperiores quisquam maiores corrupti excepturi aut fuga voluptatem praesentium omnis eveniet reprehenderit esse unde eius iste quae quo, amet hic veniam, aliquam totam blanditiis nihil, eaque molestias possimus in! Dolorem iure, expedita harum omnis odit delectus eligendi ratione aperiam, laboriosam beatae, ex tempora maiores placeat vitae eos enim. Facere, voluptates labore nisi magni vero accusantium!</p>',
            'category_id' => 1,
            'user_id' => 2
        ]);

    }
}

