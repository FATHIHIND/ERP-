@extends('layouts.app')
@section('page-title')
ERP Σ
@endsection
@section('content')
<div class="container">
<div class="row">
  <div class="col-md-10 col-md-offset-1">
<img src="../uploads/avatars/{{ $user->avatar}}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;" alt="">
<h2>{{ $user->name}}'s Profile</h2>
<form enctype="multipart/form-data" action="/profiles" method="POST">
<label>Modifier Image De Profile</label>  
<input type="file" name="avatar">
<input type="hidden" name="_token" value="{{ csrf_token()}}">
<input type="submit" class="pull-right btn btn-sm btn-primary">
</form>
<table>
<tr>
  <td>Name:{{ $user->name}}</td>
  <br>

</tr>
<tr>
  
  <td>Email:{{ $user->email}}</td>
</tr>
</table>
</div>
</div>
</div>
@endsection
