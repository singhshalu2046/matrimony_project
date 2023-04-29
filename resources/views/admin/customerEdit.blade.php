@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card" id="customerList">
            <div class="card-header border-bottom-dashed">

                <div class="row g-4 align-items-center">
                    <div class="col-sm">
                        <div>
                            <h5 class="card-title mb-0">User List</h5>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="card-body">

            {{-- {{ dd($user) }} --}}
                <form method="POST" action="{{ route("admin.customer.update", [$user->id]) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <div class="form-group">
                        <label class="required" for="user_name">{{ trans('cruds.user.fields.user_name') }}</label>
                        <input class="form-control {{ $errors->has('user_name') ? 'is-invalid' : '' }}" type="text" name="user_name" id="user_name" value="{{ old('user_name', $user->user_name) }}" step="1" required>
                        @if($errors->has('user_name'))
                            <span class="text-danger">{{ $errors->first('user_name') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.user.fields.user_name_helper') }}</span>
                    </div>


                    <div class="form-group">
                    <label class="required" for="email">{{ trans('cruds.user.fields.email') }}</label>
                    <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $user->email) }}" step="1" required>
                    @if($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.user.fields.email_helper') }}</span>
                </div>


                <div class="form-group">
                    <label class="required" for="contact_number">{{ trans('cruds.user.fields.contact_number') }}</label>
                    <input class="form-control {{ $errors->has('contact_number') ? 'is-invalid' : '' }}" type="number" name="contact_number" id="contact_number" value="{{ old('contact_number', $user->contact_number) }}" step="1" required>
                    @if($errors->has('contact_number'))
                        <span class="text-danger">{{ $errors->first('contact_number') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.user.fields.contact_number_helper') }}</span>
                </div>
                    <div class="form-group">
                        <button class="btn btn-danger" type="submit">
                        Save
                        </button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    <!--end col-->
</div>
    <!--end row-->
@endsection
