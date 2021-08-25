@extends('main')

@section('content')
<div class="row justify-content-center">
  <div class="col-8">
    
    <div class="container">
      
      @if(session()->has('success'))
      
      <div class="alert alert-success alert-dismissible mt-2" role="alert" id="liveAlert">
        <strong>Nice!</strong> {{ session('success') }}.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

      @endif
      <h1 class="row justify-content-center">Tires List</h1>
          <div class="d-flex justify-content-end"><a href="/tires/create"><button class="btn btn-success btn-submit">+Add New Tire</button></a></div>
      <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Tire Code</th>
              <th scope="col">Tire Type</th>
              <th scope="col">Created at</th>
            </tr>
          </thead>
          <tbody>

           
        
       
            @forelse ($tire_codes as $item)

           <tr>
              <td scope="row">{{$tire_codes->firstItem() + $loop->index }}</td>
              
              <td>{{ $item->name }}</td>
              <td>{{ $item->type->name}}</td>
              <td>{{ $item->created_at->format('d-m-Y')}}</td>

                          
            </tr>

            @empty
            <tr><td class="text justify-content-center"colspan="4">No Data Available</td></tr>
              
            @endforelse
            
          </tbody>
        </table> 
      
      
      
  </div>
      <div class="d-flex justify-content-end success">{{ $tire_codes->links() }}</div>
     
    </div>
  </div>
</div>

  
@endsection