<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Grade;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function showByCode($code): Factory|View|Application
    {
        try {
            $categories = Category::orderBy("name", "ASC")->get();
            $coming = Grade::where("status", "=", 0)->orderBy("created_at", "ASC")->get();
            $grade = Grade::where("code", "=", $code)->first();
            $id = $grade->name;
            return view("clients.grade", ['grade' => $grade, 'categories' => $categories, 'coming' => $coming]);
        } catch (\Exception $exception) {
            return view("errors.404");
        }
    }
}
