<?php

use Illuminate\Database\Seeder;

class BaseIngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/seederSources/baseIngredients.json");
        $ingredients json_decode($json);
        foreach ($ingredients as $ing) {
            Ingredient::create(array(
                'name' => $ing->name,
                'baseQuantity' => $ing->baseQuantity,
                'baseMeasurement' => $ing->baseMeasurement
            ));
        }
    }
}
