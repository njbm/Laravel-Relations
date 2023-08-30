@extends('Backend.master')

@section('nav-header')

    <div class="col-sm-6">
        <h1 class="m-0">Slider Dashboard </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <a href="slider/create"><button class="btn btn-outline-success ">Create New Slider</button></a>
        </ol>
    </div><!-- /.col -->

@endsection

@section('main')

<table class="table" style="text-align:center;">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Details</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($sliders as $slider )
    <tr>
      <th scope="row">{{ $loop->index+1 }}</th>
      <td>{{ $slider->name }}</td>
      <td>
        <img src="{{ asset('Backend/product/images/'.$slider->image) }}" alt="dd" width="70" height="70" class="rounded-circle"> </td>
      <td>{{ $slider->description }}</td>
      <td>
        <a href="product/{{ $slider->id }}/edit" class="btn btn-dark ">Edit</a>
        {{-- <a href="product/{{ $product->id }}/delete" class="btn btn-danger ">Delete</a> --}}
        <form action="product/{{ $slider->id }}/delete" class="d-inline" >
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

