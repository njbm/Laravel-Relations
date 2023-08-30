@extends('Backend.master')

@section('nav-header')

    <div class="col-sm-6">
        <h1 class="m-0">Product Dashboard </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <a href="product/create"><button class="btn btn-outline-success ">Create New Product</button></a>
        </ol>
    </div><!-- /.col -->

@endsection

@section('main')

<table class="table" style="text-align:center;">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Desccription</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product )
    <tr>
      <th scope="row">{{ $loop->index+1 }}</th>
      <td>{{ $product->name }}</td>
      <td>{{ $product->price }}</td>
      <td>
        <img src="{{ asset('Backend/product/images/'.$product->image) }}" alt="dd" width="70" height="70" class="rounded-circle"> </td>
      <td>{{ $product->description }}</td>
      <td>
        <a href="product/{{ $product->id }}/edit" class="btn btn-dark ">Edit</a>
        {{-- <a href="product/{{ $product->id }}/delete" class="btn btn-danger ">Delete</a> --}}
        <form action="product/{{ $product->id }}/delete" class="d-inline" >
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection

