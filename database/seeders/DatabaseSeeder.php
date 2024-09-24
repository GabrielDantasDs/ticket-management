<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Situation;
use App\Models\Ticket;
use App\Models\User;
use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void {

        $situations = [["name" => "Novo"], ["name" => "Pendente"], ["name" => "Resolvido"]];

        $categories = [["name" => "Teste"]];

        // $tickets = [["title" => "Ticket 1", "description" => "Descrição", "category_id" => 1, "situation_id" => 1]];

        foreach ($situations as $situation) {
            Situation::factory()->create($situation);
        }

        // foreach ($categories as $category) {
        //     Category::factory()->create($category);
        // }

        // foreach ($tickets as $ticket) {
        //     Ticket::factory()->create($ticket);
        // }
    }
}


// $table->string('title');
// $table->string('description');
// $table->date('resolve_date_deadline')->default(DB::raw('DATE_ADD(CURRENT_DATE, INTERVAL 3 DAY)'));
// $table->date('resolve_date')->nullable();