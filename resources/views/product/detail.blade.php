

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <div class="card-body shadow">
               
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Size</th>
                        <th scope="col">Quantity</th>
                       
                        
                      </tr>
                    </thead>
                    <tbody>
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
                     
                    </tbody>
                  </table>
                  <a href="{{ route('product.index') }}" class="btn btn-lg btn-outline-dark">Back</a>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
