@extends('layouts.master')

@section('content')
<div class="container mt-5 mb-5 py-5">
    <h1 class="mt-4">{{ $activity['activity_name'] }}</h1>

    <div class="row">
        <div class="col-md-6 mb-3">
            <img src="{{ $activity['image_1_url'] }}" class="img-fluid rounded shadow detail-img" alt="Main Image">
        </div>
        
        <div class="col-md-6 mb-3">
            <img src="{{ $activity['image_2_url'] }}" class="img-fluid rounded shadow detail-img" alt="Secondary Image">
        </div>
    </div>

    <div class="description-content mt-4">
        {!! $activity['activity_description'] !!}
    </div>
</div>
@endsection