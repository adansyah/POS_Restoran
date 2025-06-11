@extends('admin.component.app')
@section('content')
    <div class="container-fluid">

        <!-- *************************************************************** -->
        <!-- End Location and Earnings Charts Section -->
        <!-- *************************************************************** -->
        <!-- *************************************************************** -->
        <!-- Start Top Leader Table -->
        <!-- *************************************************************** -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4">
                            <h4 class="card-title">Category List</h4>
                            <div class="ms-auto">
                                <div class="dropdown sub-dropdown">

                                    <a href="" class="btn btn-outline-primary" style="min-width: 100px;">
                                        Insert
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table no-wrap v-middle mb-0">
                                <thead>
                                    <tr class="border-0">
                                        <th class="border-0 font-14 font-weight-medium text-muted">No
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted px-2">Name
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted">Description</th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                            Status
                                        </th>
                                        {{-- <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                            Weeks
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted">Budget</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border-top-0 px-2 py-4">
                                            <div class="d-flex no-block align-items-center">

                                                <div class="">
                                                    <h5 class="text-dark mb-0 font-16 font-weight-medium">Hanna
                                                        Gover</h5>
                                                    <span class="text-muted font-14">hgover@gmail.com</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14">Elite Admin</td>
                                        <td class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                                            35
                                        </td>
                                        <td class="border-top-0 text-center px-2 py-4">
                                            <a href=""
                                                class="btn btn-outline-warning rounded-circle btn-circle font-12">
                                                <i data-feather="edit"></i>
                                            </a>
                                            <a href=""
                                                class="btn btn-outline-danger rounded-circle btn-circle font-12">
                                                <i data-feather="trash-2"></i>
                                            </a>
                                        </td>


                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- *************************************************************** -->
        <!-- End Top Leader Table -->
        <!-- *************************************************************** -->
    </div>
@endsection
