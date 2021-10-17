@extends('doreViews.admin.adminBase')

@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <div class="col-12">
        <h5 class="mb-4">{{__('Edit Assign Subject')}}</h5>

        <div class="card mb-4">
            <div class="card-body">
                <form class="needs-validation tooltip-label-right" novalidate="novalidate" method="post"
                      action="{{ route('update.assign.subject',$editData[0]->class_id) }}">
                    @csrf

                    <div class="add_item">
                        <div class="form-group ">

                            <h5 class="mb-2">Class Name<span class="text-danger">*</span></h5>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                </div>
                                <select class="custom-select" name="class_id" required="">
                                    <option selected="" disabled="">Select Class</option>
                                    @foreach($classes as $class)
                                        <option
                                            value="{{ $class->id }}" {{ ($editData['0']->class_id == $class->id)? "selected":"" }} >{{ $class->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            @foreach($editData as $edit)
                                <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                                    <div class="form-row">
                                        <div class="col-md-5">
                                            <h5 class="mb-2">Student Subject <span
                                                    class="text-danger">*</span></h5>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text"
                                                           for="inputGroupSelect01">Options</label>
                                                </div>
                                                <select class="custom-select" name="subject_id[]">
                                                    <option selected="" disabled="">Select Subject</option>
                                                    @foreach($subjects as $subject)
                                                        <option
                                                            value="{{ $subject->id }}" {{ ($edit->subject_id == $subject->id)? "selected": ""  }}>{{ $subject->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <h5>Full Mark <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="full_mark[]" value="{{ $edit->full_mark }}"
                                                           class="form-control">
                                                </div>
                                            </div>
                                        </div><!-- End col-md-5 -->

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <h5>Pass Mark <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="pass_mark[]" value="{{ $edit->pass_mark }}"
                                                           class="form-control">
                                                </div>
                                            </div>
                                        </div><!-- End col-md-5 -->

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <h5>Subjective Mark <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="subjective_mark[]"
                                                           value="{{ $edit->subjective_mark }}" class="form-control">
                                                </div>
                                            </div>
                                        </div><!-- End col-md-5 -->


                                        <div class="col-md-2" style="padding-top: 25px;">
                                            <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> </span>
                                            <span class="btn btn-danger removeeventmore"><i
                                                    class="fa fa-minus-circle"></i> </span>
                                        </div><!-- End col-md-5 -->

                                    </div> <!-- end Row -->
                                </div><!-- // End Remove Delete  -->
                            @endforeach
                        </div>
                    </div>

                    <input type="submit" class="btn btn-primary mb-0" value="{{__('Update')}}">

                </form>

                <div style="visibility: hidden;">
                    <div class="whole_extra_item_add" id="whole_extra_item_add">
                        <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                            <div class="form-row">
                                <div class="col-md-5">
                                    <h5 class="mb-2">Student Subject<span class="text-danger">*</span></h5>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                        </div>
                                        <select class="custom-select" name="subject_id[]">
                                            <option selected="" disabled="">Choose...</option>
                                            @foreach($subjects as $subject)
                                                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <h5>Full Mark <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="full_mark[]" class="form-control">
                                        </div>
                                    </div>
                                </div><!-- End col-md-5 -->

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <h5>Pass Mark <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="pass_mark[]" class="form-control">
                                        </div>
                                    </div>
                                </div><!-- End col-md-5 -->

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <h5>Subjective Mark <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="subjective_mark[]" class="form-control">
                                        </div>
                                    </div>
                                </div><!-- End col-md-5 -->

                                <div class="col-md-2" style="padding-top: 25px;">
                                    <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> </span>
                                    <span class="btn btn-danger removeeventmore"><i
                                            class="fa fa-minus-circle"></i> </span>
                                </div><!-- End col-md-2 -->


                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function () {
            var counter = 0;
            $(document).on("click", ".addeventmore", function () {
                var whole_extra_item_add = $('#whole_extra_item_add').html();
                $(this).closest(".add_item").append(whole_extra_item_add);
                counter++;
            });
            $(document).on("click", '.removeeventmore', function (event) {
                $(this).closest(".delete_whole_extra_item_add").remove();
                counter -= 1
            });

        });
    </script>





@endsection
