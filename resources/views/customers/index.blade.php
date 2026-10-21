@extends('layouts.app')

@section('content')
    <section class="page-intro"><div class="eyebrow">Customer accounts</div><h1>People behind every purchase.</h1><p>These sample accounts show how a controller can pass static PHP array data to a Blade view.</p></section>
    <div class="cards">
        @foreach ($customers as $customer)
            <article class="card">
                <div class="card-header"><div><h3>{{ $customer['name'] }}</h3><div class="record-id">{{ $customer['id'] }}</div></div><span class="badge {{ strtolower($customer['status']) }}">{{ $customer['status'] }}</span></div>
                <dl class="details"><div><dt>Company</dt><dd>{{ $customer['company'] }}</dd></div><div><dt>Email</dt><dd>{{ $customer['email'] }}</dd></div><div><dt>Phone</dt><dd>{{ $customer['phone'] }}</dd></div></dl>
            </article>
        @endforeach
    </div>
@endsection
