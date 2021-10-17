@extends('doreViews.admin.adminBase')
@section('admin')


    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Student Shift List</h1>

                <div class="top-right-button-container">
                    <div class="btn-group">

                        <div class="text-zero top-right-button-container">
                            <a type="button" href="{{ route('student.shift.add') }}"
                               class="btn btn-primary btn-lg top-right-button mr-1">{{__('Add Student Shift')}}</a>
                        </div>

                    </div>
                </div>

                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Library</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
                <div class="mb-2">
                    <a class="btn pt-0 pl-0 d-inline-block d-md-none" data-toggle="collapse" href="#displayOptions"
                       role="button" aria-expanded="true" aria-controls="displayOptions">
                        Display Options
                        <i class="simple-icon-arrow-down align-middle"></i>
                    </a>
                    <div class="collapse dont-collapse-sm" id="displayOptions">
                        <div class="d-block d-md-inline-block">
                            <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                                <input class="form-control" placeholder="Search Table" id="searchDatatable">
                            </div>
                        </div>
                        <div class="float-md-right dropdown-as-select" id="pageCountDatatable">
                            <span class="text-muted text-small">Displaying 1-10 of 40 items </span>
                            <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                10
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">5</a>
                                <a class="dropdown-item active" href="#">10</a>
                                <a class="dropdown-item" href="#">20</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="separator"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-4 data-table-rows data-tables-hide-filter">
                <table id="datatableRows" class="data-table responsive nowrap"
                       data-order="[[ 1, &quot;desc&quot; ]]">
                    <thead>
                    <tr>
                        <th style="text-align: center">SL</th>
                        <th style="text-align: center">Name</th>
                        <th style="text-align: center">Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($allData as $key => $shift )
                        <tr>
                            <td style="text-align: center">{{ $key+1 }}</td>
                            <td style="text-align: center"> {{ $shift->name }}</td>
                            <td style="text-align: center">
                                <a href="{{ route('student.shift.edit',$shift->id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('student.shift.delete',$shift->id) }}" class="btn btn-danger" id="delete">Delete</a>

                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>




@endsection
