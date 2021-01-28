@extends('layouts.general')

@section('title', 'contatti-upgrade')

@section('user_main')

<main class="users-container">
  @foreach($users_special as $user_special)
  <div class="user-container">

    <div class="user-info">
      <p>{{ $user_special->first_name }} {{ $user_special->last_name }}</p>
      <p>{{ $user_special->email }}</p>
      <p>{{ $user_special->gender }}</p>
      <a href="/contatti-upgrade/{{ $user_special->id }}">Vedi dettagli</a>
    </div>

    <div class="user-img">
      <img src="{{ $user_special->image }}" alt="user photo">
    </div>

  </div>
  @endforeach
</main>

@endsection
