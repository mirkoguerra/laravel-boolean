@extends('layouts.general')

@section('title', 'contatti')

@section('user_main')

<main class="users-container">
  @foreach($users as $user)
  <div class="user-container">

    <div class="user-info">
      <p>{{ $user->first_name }} {{ $user->last_name }}</p>
      <p>{{ $user->email }}</p>
      <p>{{ $user->gender }}</p>
    </div>

    <div class="user-img">
      <img src="{{ $user->image }}" alt="user photo">
    </div>
    
  </div>
  @endforeach
</main>

@endsection
