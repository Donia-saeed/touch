{{-- @extends('layouts.dashboard')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Budget</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">{{ auth()->user()->name }}</li>

                </ol>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        @foreach ($operations as $operation)
                            <li class="breadcrumb-item">
                                {{ $operation->first()->budget->name }}
                            </li>
                        @endforeach


                    </ol>
                </nav>
                <div class="row">

                    <div class="col col-md-4 col-sm-4">
                        <div class="card bg-primary text-white mb-4 text-center">
                            <div class="card-body fs-5">Balance</div>
                            <div class="card-footer fs-5 d-flex align-items-center justify-content-center">
                                <div>{{ '$3000' }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-4">
                        <div class="card bg-primary text-white mb-4 text-center">
                            <div class="card-body fs-5">Total Income</div>
                            <div class="card-footer fs-5 d-flex align-items-center justify-content-center">
                                <div>{{ '$4000' }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-4">
                        <div class="card bg-primary text-white mb-4 text-center">
                            <div class="card-body fs-5">Total Outcome</div>
                            <div class="card-footer fs-5 d-flex align-items-center justify-content-center">
                                <div>{{ '$1000' }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="your-action-url" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-xl-3 col-md-4 col-sm-4">
                            <button type="submit" class="btn btn-warning text-white mb-4 w-100 fs-5">
                                Create New-Operation
                            </button>
                        </div>
                    </div>
                </form>


                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Financial operations
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($operations as $operation)
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                @endforeach




                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

    </div>
@endsection --}}
