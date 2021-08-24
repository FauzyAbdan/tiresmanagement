@extends('main')

@section('content')
<div class="row justify-content-center">
<div class="col-4">
  <div class="container">
    <h2>Add New Tire Code</h2>
   
       <form action="{{url('tires/store')}}"  method="POST">

        @csrf

        {{-- <div class="form-group row justify-content-center">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Add new tire type">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div> --}}

        <div class="form-group row justify-content-center">
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
          placeholder="Add new tire code    " required value="{{ old('name') }}">
          @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
          {{-- <div class="invalid-feedback">Please create a unique tire type name</div> --}}
          @enderror
        
        
          <select class="form-select mt-2" name="tire_type_id" aria-label="Default select example">
            <option value="" selected="" disabled="">Choose the proper tire type...</option>
            @foreach ($tire_types as $type)
                
            <option value="{{$type->id}}">{{ $type->name }}</option>
                
            @endforeach
            
          </select>
       
          
        </div>
          
    
        <div class="form-group row justify-content-center mt-2">
            <button class="btn btn-success btn-submit">Save</button>
        </div>
    </form>
</div>
</div>
</div>
</div>

 
  
@endsection