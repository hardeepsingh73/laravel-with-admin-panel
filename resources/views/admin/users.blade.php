@extends('admin.master')
@section('content')
    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                Users
            </h1>
        </div>
    </section>
    <section class="section main-section">

        <div class="card has-table">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                    Clients
                </p>
                <a href="#" class="card-header-icon">
                    <span class="icon"><i class="mdi mdi-reload"></i></span>
                </a>
            </header>
            <div class="card-content">
                <table>
                    <thead>
                        <tr>
                            <th>Sr no.</th>
                            <th>Name</th>
                            <th>Company</th>
                            <th>City</th>
                            <th>Progress</th>
                            <th>Created</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="srno">1</td>
                            <td data-label="Name">Rebecca Bauch</td>
                            <td data-label="Company">Daugherty-Daniel</td>
                            <td data-label="City">South Cory</td>
                            <td data-label="Progress" class="progress-cell">
                                <progress max="100" value="79">79</progress>
                            </td>
                            <td data-label="Created">
                                <small class="text-gray-500" title="Oct 25, 2021">Oct 25, 2021</small>
                            </td>
                            <td class="actions-cell">
                                <div class="buttons right nowrap">
                                    <button class="button small green --jb-modal" data-target="sample-modal-2"
                                        type="button">
                                        <span class="icon"><i class="mdi mdi-eye"></i></span>
                                    </button>
                                    <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                                        <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="srno">2</td>
                            <td data-label="Name">Felicita Yundt</td>
                            <td data-label="Company">Johns-Weissnat</td>
                            <td data-label="City">East Ariel</td>
                            <td data-label="Progress" class="progress-cell">
                                <progress max="100" value="67">67</progress>
                            </td>
                            <td data-label="Created">
                                <small class="text-gray-500" title="Jan 8, 2021">Jan 8, 2021</small>
                            </td>
                            <td class="actions-cell">
                                <div class="buttons right nowrap">
                                    <button class="button small green --jb-modal" data-target="sample-modal-2"
                                        type="button">
                                        <span class="icon"><i class="mdi mdi-eye"></i></span>
                                    </button>
                                    <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                                        <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="srno">3</td>
                            <td data-label="Name">Mr. Larry Satterfield V</td>
                            <td data-label="Company">Hyatt Ltd</td>
                            <td data-label="City">Windlerburgh</td>
                            <td data-label="Progress" class="progress-cell">
                                <progress max="100" value="16">16</progress>
                            </td>
                            <td data-label="Created">
                                <small class="text-gray-500" title="Dec 18, 2021">Dec 18, 2021</small>
                            </td>
                            <td class="actions-cell">
                                <div class="buttons right nowrap">
                                    <button class="button small green --jb-modal" data-target="sample-modal-2"
                                        type="button">
                                        <span class="icon"><i class="mdi mdi-eye"></i></span>
                                    </button>
                                    <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                                        <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
@section('title')
    Users
@endsection

@section('page_styles')
@endsection
@section('page_scripts')
@endsection
