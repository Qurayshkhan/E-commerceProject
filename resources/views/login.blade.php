@extends('master')
@section('content')


<div class="container mt-3 custom-login">
    <h3 class="text-center">Login</h3>
    <form action="login" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
          </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="password">
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Login</button>

    </form>
</div>


@endsection