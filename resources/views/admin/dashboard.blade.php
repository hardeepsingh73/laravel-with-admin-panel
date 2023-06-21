@extends('admin.master')
@section('content')
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Admin</li>
                <li>Dashboard</li>
            </ul>
        </div>
    </section>

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
    </section>
@endsection
@section('title')
    Dashboard
@endsection

@section('page_styles')
@endsection
@section('page_scripts')
@endsection
