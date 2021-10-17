@extends('doreViews.admin.adminBase')

@section('admin')


    <div class="col-12">
        <h5 class="mb-4">{{__('Information Utilisateur')}}</h5>

        <div class="card mb-4">
            <div class="card-body">
                <h5 class="mb-4">Basic</h5>
                <form class="needs-validation tooltip-label-right" novalidate="novalidate" method="post"
                      action="{{ route('users.store') }}">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <h5>{{__('User Role')}} <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="role" id="role" required="" class="form-control">
                                        <option value="" selected="" disabled="">Select Role</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Operator">Operator</option>

                                    </select>
                                    <div class="invalid-tooltip">
                                        State is required
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End Col Md-6 -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <h5>User Name <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="name" class="form-control" required="">
                                    <div class="invalid-tooltip">
                                        Name is required
                                    </div>
                                </div>

                            </div>

                        </div><!-- End Col Md-6 -->


                    </div> <!-- End Row -->

                    <div class="form-group position-relative error-l-50">
                        <label>E-mail</label><span class="text-danger">*</span>
                        <input type="email" name="email" class="form-control" required="">
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-tooltip">
                            {{__('email is required')}}
                        </div>
                    </div>


                    <input type="submit" class="btn btn-primary mb-0" value="{{__('Submit')}}">
                </form>
            </div>
        </div>
    </div>






@endsection
