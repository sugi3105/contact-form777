@extends('layouts.app')

@section('content')
<div class="admin">
    <h2 class="admin__title">Admin</h2>

    <form action="{{ route('admin.index') }}" method="GET" class="admin__search">
       <input type="text" name="name"placeholder="名前" value="{{ request('name') }}">
       <input type="text" name="email"placeholder="メールアドレス" value="{{ request('email') }}">
       <button type="submit">検索</button>
    </form>
