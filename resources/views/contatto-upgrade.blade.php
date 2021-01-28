@extends('layouts.general')

@section('title', 'contatto-upgrade')

@section('user_main')

<main class="contatto">
  <div class="user-container">

    <div class="user-info">
      <p>{{ $user_special->first_name }} {{ $user_special->last_name }}</p>
      <p>{{ $user_special->email }}</p>
      <p>{{ $user_special->gender }}</p>
    </div>

    <div class="user-img">
      <img src="{{ $user_special->image }}" alt="user photo">
    </div>

  </div>
</main>

@endsection
