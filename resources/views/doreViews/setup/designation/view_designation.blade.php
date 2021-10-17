@extends('doreViews.admin.adminBase')

@section('admin')
    <div class="container-fluid disable-text-selection">
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <h1> {{ __('Designation List') }}</h1>
                    <div class="text-zero top-right-button-container">
                        <a type="button" href="{{ route('designation.add') }}"
                           class="btn btn-primary btn-lg top-right-button mr-1">{{__('Add Designation')}}</a>
                    </div>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="#">الكل</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">الدعم الدراسي</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">التحضيري</li>
                        </ol>
                    </nav>

                </div>

                <div class="mb-2">
                    <a class="btn pt-0 pl-0 d-inline-block d-md-none" data-toggle="collapse" href="#displayOptions"
                       role="button" aria-expanded="true" aria-controls="displayOptions">
                        Display Options
                        <i class="simple-icon-arrow-down align-middle"></i>
                    </a>
                    <div class="collapse d-md-block" id="displayOptions">

                        <div class="d-block d-md-inline-block">
                            <div class="btn-group float-md-left mr-1 mb-1">
                                <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    ترتيب حسب
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </div>
                            </div>
                            <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                                <input placeholder="بحث...">
                            </div>
                        </div>
                        <div class="float-md-right">
                            <span class="text-muted text-small">Displaying 1-10 of 210 items </span>
                            <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                20
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">10</a>
                                <a class="dropdown-item active" href="#">20</a>
                                <a class="dropdown-item" href="#">30</a>
                                <a class="dropdown-item" href="#">50</a>
                                <a class="dropdown-item" href="#">100</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="separator mb-5"></div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12 mb-4">
                <div class="card">
                    <div class="card-body">

                        <table class="data-table data-table-feature">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>created_at</th>
                                <th>edit</th>
                                <th>delete</th>

                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($allData as $key => $designation)
                            <tr>
                                <td>{{$designation->name}}</td>
                                <td>{{$designation->created_at}}</td>
                                <td><a href="{{ route('designation.edit',$designation->id) }}"
                                       class="btn btn-outline-info icon-button">

                                        <i class="fa fa-pencil-square-o"></i></a></td>
                                <td>
                                    <a href="{{ route('designation.delete',$designation->id) }}"
                                       class="btn btn-outline-danger icon-button" id="delete">
                                        <i class="fa fa-trash-o"></i></a></td>


                            </tr>
                            @empty
                                <p style="text-align: center">{{ __('Empty List') }}</p>
                            @endforelse

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        {{--        End row--}}


    </div>

@endsection
