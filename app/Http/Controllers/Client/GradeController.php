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
            $coming = Grade::where("status", "=", 0)->orderBy("created_at", "DESC")->get();
            $grade = Grade::where("code", "=", $code)->first();
            $id = $grade->name;
            return view("clients.grade", ['grade' => $grade, 'categories' => $categories, 'coming' => $coming]);
        } catch (\Exception $exception) {
            return view("errors.404");
        }
    }

    public function showCourses($slug = null): Factory|View|Application
    {
        try {
            $data = null;
            $courses = Grade::orderBy("created_at", "DESC")->get();
            $categories = Category::all();
            foreach ($courses as $course) {
                if ($course->type == 0)
                    $data .= view("components.grade", ["course" => $course]);
            }
            if ($slug == null) {
                return view("clients.courses", ['data' => $data, 'categories' => $categories]);
            }
            $data = null;
            $category = Category::where("slug", "=", $slug)->first();
            $courses = Grade::where("category_id", "=", $category->id)->orderBy("created_at", "DESC")->get();
            foreach ($courses as $course) {
                if ($course->type == 0)
                    $data .= view("components.grade", ["course" => $course]);
            }
            return view("clients.courses", ['data' => $data, 'categories' => $categories, 'category' => $category]);
        } catch (\Exception $exception) {
            var_dump($exception->getMessage());
            return view("errors.404");
        }
    }

    public function filterCourses(Request $request): ?string
    {
        try {
            $data = null;
            $slug = $request->slug ?? null;
            $page = $request->page ?? 1;
            $sort = $request->sort ?? null;
            if ($slug != null) {
                $category = Category::where("slug", "=", $slug)->first();
                $courses = $category->Grades();
                if ($sort != null) {
                    if ($sort == "newest") {
                        $courses = $courses->orderBy("created_at", "DESC");
                    }
                    if ($sort == "oldest") {
                        $courses = $courses->orderBy("created_at", "ASC");
                    }
                }
                $courses = $courses->get();
            } else {
                if ($sort != null) {
                    if ($sort == "newest") {
                        $courses = Grade::orderBy("created_at", "DESC")->get();
                    }
                    if ($sort == "oldest") {
                        $courses = Grade::orderBy("created_at", "ASC")->get();
                    }
                } else {
                    $courses = Grade::all();
                }

            }

            foreach ($courses as $course) {
                if ($course->type == 0)
                    $data .= view("components.grade", ["course" => $course]);
            }
            return $data;
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}
