@extends('layouts.app')

@section('content')
    <section class="page-intro"><div class="eyebrow">About the project</div><h1>Four pages, one clear foundation.</h1><p>This IT0049 activity is a compact Laravel application that demonstrates routes, controllers, static PHP arrays, and Blade templates working together in a POS-themed interface.</p></section>
    <div class="about-grid">
        <div class="card"><strong>Routes</strong><h3>Four destinations</h3><p>Each page has a named route so navigation stays readable and easy to maintain.</p></div>
        <div class="card"><strong>Views</strong><h3>Shared presentation</h3><p>A shared layout keeps the navigation, typography, spacing, and responsive styling consistent.</p></div>
        <div class="card"><strong>Data</strong><h3>Static and simple</h3><p>Customer and user records are PHP arrays passed directly from their controllers to the Blade views.</p></div>
    </div>
@endsection
