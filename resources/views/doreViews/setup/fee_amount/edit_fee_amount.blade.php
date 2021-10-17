@extends('doreViews.admin.adminBase')

@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <div class="col-12">
        <h5 class="mb-4">{{__('Edit Fee Amount')}}</h5>

        <div class="card mb-4">
            <div class="card-body">
                <form class="needs-validation tooltip-label-right" novalidate="novalidate" method="post"
                      action="{{ route('update.fee.amount',$editData[0]->fee_category_id) }}">
                    @csrf

                    <div class="add_item">
                        <div class="form-group ">

                            <h5 class="mb-2">Fee category<span class="text-danger">*</span></h5>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                </div>
                                <select class="custom-select" name="fee_category_id" required="">
                                    <option selected="" disabled="">Choose...</option>
                                    @foreach($fee_categories as $category)
                                        <option
                                            value="{{ $category->id }}" {{ ($editData['0']->fee_category_id == $category->id)? "selected":"" }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            @foreach($editData as $edit)
                                <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                                    <div class="form-row">
                                        <div class="col-md-5">
                                            <h5 class="mb-2">Students Class <span
                                                    class="text-danger">*</span></h5>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text"
                                                           for="inputGroupSelect01">Options</label>
                                                </div>
                                                <select class="custom-select" name="class_id[]">
                                                    <option selected="" disabled="">Choose...</option>
                                                    @foreach($classes as $class)
                                                        <option value="{{ $class->id }}" {{ ($edit->class_id == $class->id)? "selected": ""  }}  >{{ $class->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <h5> {{ __('Amount') }} <span class="text-danger">*</span></h5>
                                            <div class="controls mb-4">
                                                <input type="text" name="amount[]" class="form-control" value="{{ $edit->amount }}">
                                                @error('amount')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding-top: 30px;">
                                            <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span>
                                            <span class="btn btn-danger removeeventmore"><i
                                                    class="fa fa-minus-circle"></i> </span>

                                        </div>
                                    </div>
                                </div>
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
                                    <h5 class="mb-2">Students Class List<span class="text-danger">*</span></h5>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                        </div>
                                        <select class="custom-select" name="class_id[]">
                                            <option selected="" disabled="">Choose...</option>
                                            @forelse($classes as $classe )
                                                <option value="{{$classe->id}}">{{$classe->name}}</option>
                                            @empty
                                                <option disabled="">Empty Class List</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <h5> {{ __('Amount') }} <span class="text-danger">*</span></h5>
                                    <div class="controls mb-4">
                                        <input type="text" name="amount[]" class="form-control">
                                        @error('amount')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-2" style="padding-top: 30px;">
                                    <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span>
                                    <span class="btn btn-danger removeeventmore"><i
                                            class="fa fa-minus-circle"></i> </span>

                                </div>


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
