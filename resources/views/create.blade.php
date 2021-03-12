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
    Add User
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
      <form method="post" action="{{ route('heroes.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="year">Year of creation</label>
              <input type="email" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="related_cartoon">Cartoon</label>
              <input type="tel" class="form-control" name="phone"/>
          </div>
          <div class="form-group">
              <label for="drawer">Drawer</label>
              <input type="text" class="form-control" name="password"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">New Heroe</button>
      </form>
  </div>
</div>
@endsection