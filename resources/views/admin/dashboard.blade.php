@extends('admin.master')
@section('content')
    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                Dashboard
            </h1>
        </div>
    </section>

    <section class="section main-section">
        <div class="grid gap-6 grid-cols-1 md:grid-cols-2 mb-6">
            <div class="card">
                <div class="card-content">
                    <div class="flex items-center justify-between">
                        <div class="widget-label">
                            <h3>
                                Users
                            </h3>
                            <h1>
                                512
                            </h1>
                        </div>
                        <span class="icon widget-icon text-green-500"><i
                                class="mdi mdi-account-multiple mdi-48px"></i></span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="flex items-center justify-between">
                        <div class="widget-label">
                            <h3>
                                Blogs
                            </h3>
                            <h1>
                                7,770
                            </h1>
                        </div>
                        <span class="icon widget-icon text-blue-500"><i
                                class="mdi mdi-note-multiple-outline mdi-48px"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-6">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><i class="mdi mdi-finance"></i></span>
                    Blogs
                </p>
                <a href="#" class="card-header-icon">
                    <span class="icon"><i class="mdi mdi-reload"></i></span>
                </a>
            </header>
            <div class="card-content">
                <div class="chart-area">
                    <div class="h-full">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div>
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div></div>
                            </div>
                        </div>
                        <canvas id="blogs" style="width:100%;max-width:700px; margin:0px auto; "></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('title')
    Dashboard
@endsection

@section('page_styles')
@endsection
@section('page_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script>
        var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
        var yValues = [55, 49, 44, 24, 15];
        var barColors = ["#f4a261", "#d5bdaf", "#8d99ae", "#588157", "#003566"];

        const blogs = new Chart("blogs", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                legend: {
                    display: false
                },
            }
        });
    </script>
@endsection
