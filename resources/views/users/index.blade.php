@extends('layouts.app')

@section('content')
    <section class="page-intro"><div class="eyebrow">Store users</div><h1>The team at the counter.</h1><p>Meet the sample team members who keep each store moving. Every card is rendered from a static PHP array with a Blade loop.</p></section>
    <div class="cards">
        @foreach ($users as $user)
            <article class="card">
                <div class="card-header"><div><h3>{{ $user['name'] }}</h3><div class="record-id">{{ $user['id'] }}</div></div><span class="badge {{ strtolower($user['status']) }}">{{ $user['status'] }}</span></div>
                <dl class="details"><div><dt>Role</dt><dd>{{ $user['role'] }}</dd></div><div><dt>Email</dt><dd>{{ $user['email'] }}</dd></div><div><dt>Location</dt><dd>{{ $user['location'] }}</dd></div></dl>
            </article>
        @endforeach
    </div>
@endsection
