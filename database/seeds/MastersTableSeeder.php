<?php

use Illuminate\Database\Seeder;

class MastersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('masters')->insert([
            [
              'tags_id' => '1',
              'image_file' => '',
              'name' => '落合博満',
              'career' => '秋田県南秋田郡若美町（現：男鹿市）出身[注 1]の元プロ野球選手（内野手、右投右打）・監督、野球解説者。',
            ],
            [
                'tags_id' => '7',
                'image_file' => '',
                'name' => '西村博之',
                'career' => '日本の実業家。匿名掲示板「2ちゃんねる」開設者、英語圏最大の匿名掲示板「4chan」管理人[3]。東京プラス代表取締役[4]、未来検索ブラジル取締役[5]。東京都在住[6]ののち、2015年頃[7]にフランス・パリへ移住[8]。愛称はひろゆき。',
              ],
              [
                'tags_id' => '5',
                'image_file' => '',
                'name' => '三井高利',
                'career' => '江戸時代の商人。通称は八郎兵衛。三井家（のちの三井財閥）の基礎を築いた。三井中興の祖といわれる。',
              ],
        ]);
    }
}
