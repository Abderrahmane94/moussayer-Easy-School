@extends('doreViews.admin.adminBase')

@section('admin')

    <div class="col-12">
        <h5 class="mb-4">{{__('Add Class Student')}}</h5>

        <div class="card mb-4">
            <div class="card-body">
                <form class="needs-validation tooltip-label-right" novalidate="novalidate" method="post"
                      action="{{ route('student.year.store') }}">
                    @csrf

                    <div class="form-group">
                        <h5> {{ __('Student Year Name') }} <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="name" class="form-control">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>

                    </div>

                    <input type="submit" class="btn btn-primary mb-0" value="{{__('Submit')}}">

                </form>
            </div>
        </div>
    </div>








@endsection
