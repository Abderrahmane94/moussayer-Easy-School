@extends('doreViews.admin.adminBase')

@section('admin')
    <div class="container-fluid disable-text-selection">
        <div class="row">

            <div class="col-12">
                <div class="mb-3">
                    <h1> {{ __('Students List') }}</h1>
                    <div class="text-zero top-right-button-container">
                        <a type="button" href="{{ route('student.registration.add') }}"
                           class="btn btn-primary btn-lg top-right-button mr-1">{{__('Add Student')}}</a>
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
                            <form method="GET" action="{{ route('student.year.class.wise') }}">

                                <div class="row">

                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <h5>Year <span class="text-danger"> </span></h5>
                                            <div class="controls">
                                                <select name="year_id" required="" class="form-control">
                                                    <option value="" selected="" disabled="">Select Year</option>
                                                    @foreach($years as $year)
                                                        <option
                                                            value="{{ $year->id }}" {{ (@$year_id == $year->id)? "selected":"" }} >{{ $year->name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>

                                    </div> <!-- End Col md 4 -->


                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <h5>Class <span class="text-danger"> </span></h5>
                                            <div class="controls">
                                                <select name="class_id" required="" class="form-control">
                                                    <option value="" selected="" disabled="">Select Class</option>
                                                    @foreach($classes as $class)
                                                        <option
                                                            value="{{ $class->id }}" {{ (@$class_id == $class->id)? "selected":"" }}>{{ $class->name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>

                                    </div> <!-- End Col md 4 -->


                                    <div class="col-md-2" style="padding-top: 25px;">

                                        <input type="submit" class="btn btn-rounded btn-info mt-1 " name="search"
                                               value="Search">

                                    </div> <!-- End Col md 4 -->


                                </div><!--  end row -->

                            </form>

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
                                <th width="5%">SL</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">ID No</th>
                                <th class="text-center">Roll</th>
                                <th class="text-center">Year</th>
                                <th class="text-center">Class</th>
                                <th class="text-center">Image</th>
                                @if(Auth::user()->role == "Admin")
                                    <th>Code</th>
                                @endif
                                <th class="text-center">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($allData as $key => $value)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td> {{ $value['student']['name'] }}</td>
                                    <td> {{ $value['student']['id_no'] }}</td>
                                    <td> {{ $value->roll }}  </td>
                                    <td> {{ $value['student_year']['name'] }}</td>
                                    <td>  {{ $value['student_class']['name'] }}</td>
                                    <td>
                                        <img
                                            src="{{ (!empty($value['student']['profile_photo_path']))? url($value['student']['profile_photo_path']):url('img/profiles/no image.png') }}"
                                            style="width: 60px; width: 60px;">
                                    </td>
                                    <td> {{ $value->year_id }}</td>
                                    <td>
                                        <a title="Edit"
                                           href="{{ route('student.registration.edit',$value->student_id) }}"
                                           class="btn btn-outline-info icon-button">
                                            <i class="fa fa-pencil-square-o"></i>
                                        </a>
                                        <a title="Promotion"
                                           href="{{ route('student.registration.promotion',$value->student_id) }}"
                                           class="btn btn-outline-primary icon-button">
                                            <i class="fa fa-graduation-cap"></i>
                                        </a>
                                        <a target="_blank" title="Details"
                                           href="{{ route('student.registration.details',$value->student_id) }}"
                                           class="btn btn-outline-danger icon-button">
                                            <i class="fa fa-eye"></i>
                                        </a>


                                    </td>


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
