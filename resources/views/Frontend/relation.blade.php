@extends('Frontend.index')

@section('main')
<div class="container" style="text-align: center;">
{{-- <br><h1>RelationShip</h1><br> --}}
{{-- <table class="table">
    <h2>One to One Relationship</h2>
  <thead>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user )
    <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->phone->name }}</td>
    </tr>
    @endforeach


  </tbody>
</table> --}}
<br><br>

<table class="table">
    <h2>One to Many Relationship</h2>
  <thead>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($comments as $data )
    <tr>
      <td>{{ $data->post_id }}</td>
      <td>{{ $data->comment->message }}</td>
      {{-- <td>{{ $data->phone->name }}</td> --}}
    </tr>
    @endforeach


  </tbody>
</table>
</div>
@endsection
