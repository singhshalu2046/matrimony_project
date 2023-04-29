@extends('admin.layouts.master')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card" id="customerList">
                <div class="card-header border-bottom-dashed">

                    <div class="row g-4 align-items-center">
                        <div class="col-sm">
                            <div>
                                <h5 class="card-title mb-0">{{ trans('cruds.state.title_singular') }}  Add</h5>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="card-body">

                {{-- {{ dd($country) }} --}}
                  <form method="POST" action="{{ route("admin.state.store") }}" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                          <label class="required" for="name">{{ trans('cruds.state.fields.name') }}</label>
                          <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" step="1" required>
                          @if($errors->has('name'))
                              <span class="text-danger">{{ $errors->first('name') }}</span>
                          @endif
                          <span class="help-block">{{ trans('cruds.state.fields.name_helper') }}</span>
                      </div>

                      <div class="form-group">
                        <label class="required" for="country_id">{{ trans('cruds.state.fields.country') }}</label>
                        {{-- <div style="padding-bottom: 4px">
                            <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                            <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                        </div> --}}
                        <select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country_id" id="country_id"  required>
                            <option value="">Select Country</option>

                            @foreach($countries as $id => $country)
                                <option value="{{ $id }}" {{ in_array($id, old('country', [])) ? 'selected' : '' }}>{{ $country }}</option>
                            @endforeach
                        </select>

                        @if($errors->has('country'))
                            <span class="text-danger">{{ $errors->first('country') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.state.fields.country_helper') }}</span>
                    </div>


                      <div class="form-group mt-2">
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
