@extends('main')

@section('content')
<div class="row justify-content-center">
<div class="col-4">
  <div class="container">
    <h2>Create New Type of Tires</h2>
   
       <form action="{{url('tiretypes/store')}}"  method="POST">

        @csrf

        {{-- <div class="form-group row justify-content-center">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Add new tire type">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div> --}}

        <div class="form-group row justify-content-center">
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
          placeholder="Add new tire type" required value="{{ old('name') }}">
          @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
          {{-- <div class="invalid-feedback">Please create a unique tire type name</div> --}}
          @enderror
              
          
      </div>

 
        <div class="form-group row justify-content-center mt-2">
            <button class="btn btn-success btn-submit">Save</button>
        </div>
    </form>
</div>
</div>
</div>

  
@endsection