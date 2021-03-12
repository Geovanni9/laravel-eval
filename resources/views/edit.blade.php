@extends('layout')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Edit & Update
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('heroes.update', $heroes->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="{{ $heroes->name }}"/>
          </div>
          <div class="form-group">
              <label for="email">Date of creation</label>
              <input type="text" class="form-control" name="year" value="{{ $heroes->year }}"/>
          </div>
          <div class="form-group">
              <label for="phone">Cartoon</label>
              <input type="text" class="form-control" name="related_cartoon" value="{{ $heroes->related_cartoon }}"/>
          </div>
          <div class="form-group">
              <label for="password">Drawer</label>
              <input type="text" class="form-control" name="drawer" value="{{ $heroes->drawer }}"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Update User</button>
      </form>
  </div>
</div>
@endsection