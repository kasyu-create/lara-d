<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
              'tagname' => '野球',
            ],
            [
              'tagname' => 'その他アスリート',
            ],
            [
              'tagname' => '軍人',
            ],
            [
              'tagname' => '偉人',
            ],
            [
              'tagname' => '歴史人物',
            ],
            [
              'tagname' => '芸能人',
            ],
            [
              'tagname' => '実業家',
            ],
        ]);
    }
}
