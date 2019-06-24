@extends('layouts.default')
@section('title', '注冊')

@section('content')
<div class="offset-md-2 col-md-8">
<div class="card">
  <div class="card-haeader">
    <h5>註冊</h5>
  </div>{{-- card-haeader --}}

  <div class="card-body">
    @include('shared._errors')
    <form method="POST" action="{{ route('users.store') }}">
      {{ csrf_field() }}      
      <div class="form-group">
        <label for="name">名稱：</label>
        <input type="text" name="name"
                id="name" value="{{ old('name') }}" class="form-control" />
      </div>            

      <div class="form-group">
        <label for="email">郵箱：</label>
      <input type="text" name='email'
              id="email" value="{{ old('email') }}" class="form-control" />
      </div>

      <div class="form-group">
        <label for="password">密碼：</label>
      <input type="password" name="password"
              id="password" value="{{ old('password') }}" class="form-control" />
      </div>

      <div class="form-group">
        <label for="password_confirmation">確認密碼</label>
      <input type="password" name="password_confirmation" id="password_confirmation"
              value="{{ old('password_confirmation') }}" class="form-control" />
      </div>

      <button type="submit" class="btn btn-primary">註冊</button>
    </form>  
  </div>{{-- card-body --}}  
</div>{{-- card --}}  
</div>{{-- offset-md2 col-md-8 --}}
@stop