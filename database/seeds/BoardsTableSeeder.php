<?php

use Illuminate\Database\Seeder;

class BoardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boards')->insert(
            [
              [
                'title'=>'bbb',
                'body'=>'bbbbbbb',
                'created_at'=>now(),
                'updated_at'=>now(),
              ],

              [
                'title'=>'bbb',
                'body'=>'bbbbbbb',
                'created_at'=>now(),
                'updated_at'=>now(),
              ],

              [
                'title'=>'bbb',
                'body'=>'bbbbbbb',
                'created_at'=>now(),
                'updated_at'=>now(),
              ],
              [
                'title'=>'bbb',
                'body'=>'bbbbbbb',
                'created_at'=>now(),
                'updated_at'=>now(),
              ],
              ]
        );
    }
}
