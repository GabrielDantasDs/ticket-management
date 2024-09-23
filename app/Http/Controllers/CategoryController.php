<?php

namespace App\Http\Controllers;

use App\Classes\Category;
use App\Models\Category as ModelsCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller {
    public function index(Request $request) {
        return view('categories', ['categories' => ModelsCategory::all()]);
    }

    public function create(Request $request) {
        $category = new Category($request->name);
        $category->save(new ModelsCategory());

        return $this->index($request);
    }

    public function read(Request $request, $id) {
        $category = ModelsCategory::where('id', $id)->firstOrFail();

        return view('category-edit', ['category' => $category]);
    }

    public function update(Request $request, $id) {
        $category = new Category($request->name);

        $category->save(ModelsCategory::where('id', $id)->firstOrFail());

        return $this->index($request);
    }

    public function delete(Request $request, $id) {
        ModelsCategory::where('id', $id)->delete();

        return $this->index($request);
    }

    public function form(Request $request) {
        return view('category-create');
    }
}
