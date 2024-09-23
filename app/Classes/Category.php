<?php

namespace App\Classes;

use App\Models\Category as ModelsCategory;

class Category {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function save(ModelsCategory $model) {
        $model->name = $this->name;

        $model->save();
    }
}