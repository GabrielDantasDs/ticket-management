<?php

namespace App\Classes;

use App\Models\Ticket as ModelsTicket;
use Carbon\Carbon;

class Ticket {

    private $id;
    private $title;
    private $category_id;
    private $description;
    private $resolve_date_dead_line;
    private $situation_id;
    private $resolve_date;

    public function __construct($title, $category_id, $situation_id, $description, $id = null) {
        $this->id = $id;
        $this->title = $title;
        $this->category_id = $category_id;
        $this->situation_id = $situation_id;
        $this->description = $description;
    }

    public function save(ModelsTicket $model) {
        $model->title = $this->title;
        $model->category_id = $this->category_id;
        $model->situation_id = $this->situation_id;
        $model->description = $this->description;
        $model->resolve_date = $this->resolve_date ?? null;

        $model->save();
    }

    public function resolve() {
        $this->resolve_date = Carbon::parse(Carbon::now())->format('Y-m-d');
    }
}
