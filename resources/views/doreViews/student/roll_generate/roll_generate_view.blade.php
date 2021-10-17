@extends('doreViews.admin.adminBase')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="container-fluid disable-text-selection">
        <div class="row">

            <div class="col-12">
                <div class="mb-3">
                    <h1> {{ __('Student Roll Generator') }}</h1>

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

                    <div class="collapse d-md-block" id="displayOptions">

                        <div class="d-block d-md-inline-block">
                            <form method="post" action="{{ route('roll.generate.store') }}">
                                @csrf
                                <div class="row">

                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <h5>Year <span class="text-danger"> </span></h5>
                                            <div class="controls">
                                                <select name="year_id" id="year_id" required="" class="form-control">
                                                    <option value="" selected="" disabled="">Select Year</option>
                                                    @foreach($years as $year)
                                                        <option value="{{ $year->id }}">{{ $year->name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>

                                    </div> <!-- End Col md 4 -->


                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <h5>Class <span class="text-danger"> </span></h5>
                                            <div class="controls">
                                                <select name="class_id" id="class_id" required="" class="form-control">
                                                    <option value="" selected="" disabled="">Select Class</option>
                                                    @foreach($classes as $class)
                                                        <option value="{{ $class->id }}">{{ $class->name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>

                                    </div> <!-- End Col md 4 -->


                                    <div class="col-md-2" style="padding-top: 25px;">

                                        <a id="search" class="btn btn-info mt-1" name="search" style="color: white"> {{__('Search')}}</a>


                                    </div> <!-- End Col md 4 -->


                                </div><!--  end row -->

                                <!--  ////////////////// Roll generate table /////////////  -->


                                <div class="row d-none" id="roll-generate">
                                    <div class="col-md-12">
                                        <table class="table table-bordered table-striped" style="width: 100%">
                                            <thead>
                                            <tr>
                                                <th>ID No</th>
                                                <th>Student Name</th>
                                                <th>Father Name</th>
                                                <th>Gender</th>
                                                <th>Roll</th>
                                            </tr>
                                            </thead>
                                            <tbody id="roll-generate-tr">

                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                                <input type="submit" class="btn btn-info" value="Roll Generator" style="color: white">

                            </form>

                        </div>

                    </div>
                </div>
                <div class="separator mb-5"></div>
            </div>
        </div>


    </div>






    <script type="text/javascript">
        $(document).on('click', '#search', function () {
            var year_id = $('#year_id').val();
            var class_id = $('#class_id').val();
            $.ajax({
                url: "{{ route('student.registration.getstudents')}}",
                type: "GET",
                data: {'year_id': year_id, 'class_id': class_id},
                success: function (data) {
                    $('#roll-generate').removeClass('d-none');
                    var html = '';
                    $.each(data, function (key, v) {
                        html +=
                            '<tr>' +
                            '<td>' + v.student.id_no + '<input type="hidden" name="student_id[]" value="' + v.student_id + '"></td>' +
                            '<td>' + v.student.name + '</td>' +
                            '<td>' + v.student.fname + '</td>' +
                            '<td>' + v.student.gender + '</td>' +
                            '<td><input type="text" class="form-control form-control-sm" name="roll[]" value="' + v.roll + '"></td>' +
                            '</tr>';
                    });
                    html = $('#roll-generate-tr').html(html);
                }
            });
        });

    </script>





@endsection
