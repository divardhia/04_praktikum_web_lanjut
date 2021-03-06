<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = ['Johnny William', 'Karry Pitcher', 'Michael Soft', 'Mary Cool', 'George Walker', 'Kate Town'];
        $job = ['CO-Founder', 'Product Expert', 'Chief Marketing', 'Product Specialist', 'Product Photographer', 'General Manager'];
        $info = ['Johnny William bukan Johnny nct', 'Karry Pitcher Product Expert', 'Michael Soft Chief Marketing', 'Mary Cool bukan Merry Riana', 
            'George Walker bukan Alan Walker', 'Kate Town bukan Kate melodylan'];
        $image = ['assets/images/team_01.jpg', 'assets/images/team_02.jpg', 'assets/images/team_03.jpg', 'assets/images/team_04.jpg',
            'assets/images/team_05.jpg', 'assets/images/team_06.jpg'];

        for($i=0; $i<6; $i++){
            DB::table('members')->insert([
                'name'=> $name[$i],
                'job' => $job[$i],
                'info' => $info[$i],
                'image' => $image[$i]
            ]);
        }
    }
}
