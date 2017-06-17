<?php namespace Foodsharing\Data\Repositories;

use Foodsharing\Data\Repository;

class FoodsaverRepo extends Repository {

    public function model() {
        return 'Foodsharing\Data\Models\Foodsaver';
    }
}