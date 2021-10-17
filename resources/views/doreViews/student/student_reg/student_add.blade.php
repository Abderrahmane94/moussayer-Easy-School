@extends('doreViews.admin.adminBase')

@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <div class="col-12">
        <h5 class="mb-4">{{__('Add Student')}}</h5>

        <div class="card mb-4">
            <div class="card-body">
                <form class="needs-validation tooltip-label-right" novalidate="novalidate" method="post"
                      action="{{ route('store.student.registration') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row"> <!-- 1st Row -->

                        <div class="col-md-4">

                            <div class="form-group">
                                <h5>Student Name <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="name" class="form-control" required="">
                                </div>
                            </div>

                        </div> <!-- End Col md 4 -->


                        <div class="col-md-4">

                            <div class="form-group">
                                <h5>Father's Name <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="fname" class="form-control" required="">
                                </div>
                            </div>

                        </div> <!-- End Col md 4 -->


                        <div class="col-md-4">

                            <div class="form-group">
                                <h5>Mother's Name <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="mname" class="form-control" required="">
                                </div>
                            </div>

                        </div> <!-- End Col md 4 -->


                    </div> <!-- End 1stRow -->


                    <div class="row"> <!-- 2nd Row -->

                        <div class="col-md-4">

                            <div class="form-group">
                                <h5>Mobile Number <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="mobile" class="form-control" required="">
                                </div>
                            </div>

                        </div> <!-- End Col md 4 -->


                        <div class="col-md-4">

                            <div class="form-group">
                                <h5>Address <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="address" class="form-control" required="">
                                </div>
                            </div>

                        </div> <!-- End Col md 4 -->


                        <div class="col-md-4">

                            <div class="form-group">
                                <h5>Gender <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="gender" id="gender" required="" class="form-control">
                                        <option value="" selected="" disabled="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>

                                    </select>
                                </div>
                            </div>

                        </div> <!-- End Col md 4 -->


                    </div> <!-- End 2nd Row -->


                    <div class="row"> <!-- 3rd Row -->


                        <div class="col-md-4">

                            <div class="form-group">
                                <h5>Shift <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="shift_id" required="" class="form-control">
                                        <option value="" selected="" disabled="">Select Shift</option>
                                        @foreach($shifts as $shift)
                                            <option value="{{ $shift->id }}">{{ $shift->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                        </div> <!-- End Col md 4 -->


                        <div class="col-md-4">

                            <div class="form-group">
                                <h5>Date of Birth <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="date" name="dob" class="form-control" required="">

                                </div>
                            </div>

                        </div> <!-- End Col md 4 -->


                        <div class="col-md-4">

                            <div class="form-group">
                                <h5>Discount <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="discount" class="form-control" required="">
                                </div>
                            </div>

                        </div> <!-- End Col md 4 -->


                    </div> <!-- End 3rd Row -->


                    <div class="row"> <!-- 4TH Row -->


                        <div class="col-md-4">

                            <div class="form-group">
                                <h5>Year <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="year_id" required="" class="form-control">
                                        <option value="" selected="" disabled="">Select Year</option>
                                        @foreach($years as $year)
                                            <option value="{{ $year->id }}">{{ $year->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                        </div> <!-- End Col md 4 -->


                        <div class="col-md-4">

                            <div class="form-group">
                                <h5>Class <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="class_id" required="" class="form-control">
                                        <option value="" selected="" disabled="">Select Class</option>
                                        @foreach($classes as $class)
                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                        </div> <!-- End Col md 4 -->


                        <div class="col-md-4">

                            <div class="form-group">
                                <h5>Group <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="group_id" required="" class="form-control">
                                        <option value="" selected="" disabled="">Select Group</option>
                                        @foreach($groups as $group)
                                            <option value="{{ $group->id }}">{{ $group->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                        </div> <!-- End Col md 4 -->


                    </div> <!-- End 4TH Row -->


                    <div class="row"> <!-- 5TH Row -->


                        <div class="col-md-4">

                            <div class="form-group">
                                <h5>Profile Image <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="file" name="image" class="form-control" id="image"></div>
                            </div>

                        </div> <!-- End Col md 4 -->


                        <div class="col-md-4">

                            <div class="form-group">
                                <div class="controls">
                                    <img id="showImage" src="{{ url('img/profiles/no image.png') }}"
                                         style="width: 100px; width: 100px; border: 1px solid #000000;">

                                </div>
                            </div>

                        </div> <!-- End Col md 4 -->


                    </div> <!-- End 5TH Row -->


                    <input type="submit" class="btn btn-primary mb-0" value="{{__('Submit')}}">

                </form>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#image').change(function (e) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>





@endsection
