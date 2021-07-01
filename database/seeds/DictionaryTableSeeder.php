<?php

use App\Models\Dictionary;
use Illuminate\Database\Seeder;

class DictionaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userStatus = ['Pending' => 'warning', 'Active' => 'success', 'Block' => 'danger'];
        $index = 0;
        foreach ($userStatus as $key => $value) {
            Dictionary::create([
                'entity' => 'GENERAL',
                'key' => 'STATUS',
                'value' => $key,
                'sort' => $index++,
                'meta' => ['color' => $value]
            ]);
        }

        $gender = ['male','female','other'];
        foreach ($gender as $key => $value) {
            Dictionary::create([
                'entity' => 'GENERAL',
                'key' => 'GENDER',
                'value' => $value,
                'sort' => $key
            ]);
        }

    }
}
