@extends('layout')

@section('content')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Name</td>
          <td>Year</td>
          <td>Cartoon</td>
          <td>Drawer</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($heroes as $heroes)
        <tr>
            <td>{{$heroes->id}}</td>
            <td>{{$heroes->name}}</td>
            <td>{{$heroes->year}}</td>
            <td>{{$heroes->related_cartoon}}</td>
            <td>{{$heroes->drawer}}</td>
            <td class="text-center">
                <a href="{{ route('heroes.edit', $heroes->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('heroes.destroy', $heroes->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection