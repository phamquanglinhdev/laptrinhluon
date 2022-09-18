@php
    $categories = \App\Models\Category::all();
    $courses = \App\Models\Grade::where("type",1)->count();
    $users = \App\Models\User::where("role","student")->count();
    $students = \App\Models\User::where("role", "student")->get(["name", "created_at"]);
    $count = [
        0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0
    ];
    $year = \Carbon\Carbon::now()->year;
    foreach ($students as $student) {
        $data = \Carbon\Carbon::create($student->created_at);
        if ($data->year == $year) {
            $count[$data->month-1]++;
        }
    }
@endphp
@extends(backpack_view('layouts.top_left'))
@section('content')
    <div class="row">

        <div class="col-sm-6 col-lg-3">
            <div class="card border-0 text-white bg-primary">
                <div class="card-body">
                    <div class="text-value">{{$courses}}</div>
                    <div class="progress progress-white progress-xs my-2">
                        <div class="progress-bar" role="progressbar" style="width: {{$courses/10*100}}%"
                             aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div>Khóa học đã triển khai</div>
                </div>

            </div>
        </div>


        <div class="col-sm-6 col-lg-3">
            <div class="card border-0 text-white bg-success">
                <div class="card-body">
                    <div class="text-value">{{$users}}</div>
                    <div class="progress progress-white progress-xs my-2">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div>Học viên</div>
                </div>
            </div>
        </div>


        <div class="col-sm-6 col-lg-3">
            <div class="card border-0 text-white bg-warning">
                <div class="card-body">
                    <div class="text-value">51 days</div>
                    <div class="progress progress-white progress-xs my-2">
                        <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div>Since last article.</div>
                </div>

            </div>
        </div>


        <div class="col-sm-6 col-lg-3">
            <div class="card border-0 text-white bg-dark">
                <div class="card-body">
                    <div class="text-value">210</div>
                    <div class="progress progress-white progress-xs my-2">
                        <div class="progress-bar" role="progressbar" style="width: 280%" aria-valuenow="280"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div>Products.</div>
                </div>

            </div>
        </div>
    </div>
    <div class="row py-5">
        <div class="col-md-4 col-12">
            <canvas id="category" aria-label="Hello ARIA World" role="img">
            </canvas>
        </div>
        <div class="col-md-8 col-12">
            <canvas id="teaching">
            </canvas>
        </div>
    </div>
@endsection

@section("after_scripts")
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <script>
        const ctx = document.getElementById('category').getContext('2d');
        const data = {
            labels: [@foreach($categories as $category)'{{$category->name}}',@endforeach],
            datasets: [{
                label: "Tỷ lệ triển khai các khóa học",
                data: [@foreach($categories as $category){{$category->Grades()->where("type",1)->count()}}, @endforeach],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)',
                    'rgb(0,62,255)',
                    'rgb(191,0,255)',
                    'rgb(94,0,255)',
                ],
                hoverOffset: 4
            }]
        };
        const config = {
            type: 'doughnut',
            data: data,
        };
        const myChart = new Chart(ctx, config)
    </script>
    <script>
        const teaching = document.getElementById('teaching').getContext('2d');
        const month = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        const teach_data = {
            labels: month,
            datasets: [{
                label: 'Tỷ lệ đăng ký học',
                data: [@foreach ($count as $month){{$month}},@endforeach],
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        };
        const teach_config = {
            type: 'line',
            data: teach_data,
        };
        const teachingChart = new Chart(teaching, teach_config)
    </script>
@endsection
