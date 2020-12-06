<?php

namespace Database\Seeders;

use App\ModelsModelVestibular;
use Illuminate\Database\Seeder;

class VestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelVestibular $vest)
    {
        $vest->create([
    'inst'=>$request->inst,
               'site'=>
                'ano'=>
                 'mat'=>
                  'gram'=>
                   'lit'=>
                    'texto'=>
                     'ing'=>
                      'bio'=>
                       'quim'=>
                        'fis'=>
                         'hist'=>
                          'geo'=>
                           'socio'=>

        ]);
        
    }
}
