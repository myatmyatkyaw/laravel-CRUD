

  @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <div class="card-body shadow">
                <div class="mb-3">
                  <a href="{{ route('product.create') }}" class="btn btn-outline-success">
                    <i class="fas fa-plus"></i>
                  </a>
                </div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Size</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($products as $product)
                      <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->size }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td >
                            
                                    <a href="{{ route('product.edit',$product->id) }}" class="btn btn-outline-warning" >
                                      <i class="fas fa-pencil-alt"> </i>  
                                    </a>

                                    <a href="{{ route('product.show',$product->id) }}" class="btn btn-outline-info" >
                                      <i class="fas fa-info"> </i>  
                                    </a>
                                
                                    <form action="{{ route('product.destroy',$product->id) }}" method="post" class="d-inline-block">
                                      @method('delete')
                                      @csrf
                                     
                                       <button class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                                          
                                   
                                    </form>
                               
                        </td>
                      </tr>
                      @endforeach
                     
                    </tbody>
                  </table>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
