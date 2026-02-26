{{-- @extends('layouts.master')

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
@endsection --}}

{{-- @extends('layouts.master')

@section('content')
<div class="container mt-5 mb-5 py-5">
    <h1 class="mt-4 mb-5">{{ $activity['activity_name'] }}</h1>

    <div class="row g-4 align-items-start"> <div class="col-md-4">
        <div class="image-wrapper">
                <img src="{{ $activity['image_1_url'] }}" class="img-fluid rounded shadow detail-img" alt="Image 1">
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="image-wrapper">
                <img src="{{ $activity['image_2_url'] }}" class="img-fluid rounded shadow detail-img" alt="Image 2">
            </div>
        </div>

        <div class="image-wrapper">
                <img src="{{ $activity['image_3_url'] }}" class="img-fluid rounded shadow detail-img" alt="Image 3">
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="image-wrapper">
                <img src="{{ $activity['image_4_url'] }}" class="img-fluid rounded shadow detail-img" alt="Image 4">
            </div>
        </div>

        <div class="col-md-4">
            <div class="description-content">
               <p> {!! $activity['activity_description'] !!}</p>
            </div>
        </div>

    </div>
</div>
@endsection --}}
 {{-- @extends('layouts.master')

 @section('content')
<div class="container mt-5 mb-5 py-5">
    <h1 class="mt-4 mb-5">{{ $activity['activity_name'] }}</h1>

    <div class="row g-4"> 
        <div class="col-lg-8">
            <div class="row g-3">
                <div class="col-6">
                    <div class="image-wrapper">
                        <img src="{{ $activity['image_1_url'] }}" class="img-fluid rounded shadow detail-img" alt="Image 1">
                    </div>
                </div>
                <div class="col-6">
                    <div class="image-wrapper">
                        <img src="{{ $activity['image_2_url'] }}" class="img-fluid rounded shadow detail-img" alt="Image 2">
                    </div>
                </div>
                <div class="col-6">
                    <div class="image-wrapper">
                        <img src="{{ $activity['image_3_url'] }}" class="img-fluid rounded shadow detail-img" alt="Image 3">
                    </div>
                </div>
                <div class="col-6">
                    <div class="image-wrapper">
                        <img src="{{ $activity['image_4_url'] }}" class="img-fluid rounded shadow detail-img" alt="Image 4">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="description-content">
               <p> {!! $activity['activity_description'] !!}</p>
            </div>
        </div>
    </div>
</div>
<style>
    .detail-img {
     width: 100%;
     height: 400px;
     object-fit: cover;
     border-radius: 10px;
     transition: transform 0.3s ease;
 }

 .detail-img:hover {
     transform: scale(1.02);
 }


 .description-content {
     margin-top: 30px;
     font-size: 1.1rem;
     line-height: 1.8;
     color: #444;
     text-align: justify;
 }

 .description-content p {
     position: relative;
     padding-left: 25px;
     margin-bottom: 20px;
     text-indent: 40px;
 }

</style>


@endsection  --}}

{{-- @extends('layouts.master')

@section('content')
<div class="container mt-5 mb-5 py-5">
    <h1 class="mt-4 mb-5 text-center text-md-start">{{ $activity['activity_name'] }}</h1>

    <div class="row g-4"> 
       
        <div class="col-lg-8 col-md-8 col-12">
            <div class="row g-3">
              
                <div class="col-12 col-sm-6">
                    <div class="image-wrapper">
                        <img src="{{ $activity['image_1_url'] }}" class="img-fluid rounded shadow detail-img" alt="Image 1">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="image-wrapper">
                        <img src="{{ $activity['image_2_url'] }}" class="img-fluid rounded shadow detail-img" alt="Image 2">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="image-wrapper">
                        <img src="{{ $activity['image_3_url'] }}" class="img-fluid rounded shadow detail-img" alt="Image 3">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="image-wrapper">
                        <img src="{{ $activity['image_4_url'] }}" class="img-fluid rounded shadow detail-img" alt="Image 4">
                    </div>
                </div>
            </div>
        </div>

        
        <div class="col-lg-4 col-md-4 col-12">
            <div class="description-content">
               <p> {!! $activity['activity_description'] !!}</p>
            </div>
        </div>
    </div>
</div>

<style>
    .detail-img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 10px;
        transition: transform 0.3s ease;
    }

    @media (min-width: 768px) {
        .detail-img {
            height: 400px;
        }
    }

    .description-content {
        font-size: 1.1rem;
        line-height: 1.6; 
        color: #444;
        margin-top: 20px;
    }

   
    @media (max-width: 767px) {
        .description-content {
            text-align: justify; 
            padding: 0 10px;  
        }
        .description-content p {
            text-indent: 0 !important; 
            padding-left: 0 !important;
            margin-bottom: 15px;
        }
    }

    
    @media (min-width: 768px) {
        .description-content {
            margin-top: 0;
            text-align: justify;
        }
        .description-content p {
            position: relative;
            padding-left: 25px; 
            text-indent: 40px;
        }
    }
</style>
@endsection --}}


 {{-- section start  --}}

@extends('layouts.master')

@section('content')
{{-- DEBUG SECTION --}}
<div style="background: #ffc107; padding: 20px; margin: 20px; border: 3px solid #000; border-radius: 10px;">
    <h3 style="color: #000;">🔍 LANGUAGE DEBUG INFO</h3>
    <table style="width: 100%; border-collapse: collapse;">
        <tr style="background: #fff;">
            <th style="padding: 10px; border: 1px solid #000;">Variable</th>
            <th style="padding: 10px; border: 1px solid #000;">Value</th>
        </tr>
        <tr style="background: #fff;">
            <td style="padding: 10px; border: 1px solid #000;">Session Language</td>
            <td style="padding: 10px; border: 1px solid #000; font-weight: bold; color: {{ session('language') == 'my' ? 'blue' : 'red' }};">
                {{ session('language') ?? 'NOT SET' }}
            </td>
        </tr>
        <tr style="background: #fff;">
            <td style="padding: 10px; border: 1px solid #000;">Current Locale (from controller)</td>
            <td style="padding: 10px; border: 1px solid #000; font-weight: bold; color: {{ $current_locale == 'my' ? 'blue' : 'red' }};">
                {{ $current_locale ?? 'NOT SET' }}
            </td>
        </tr>
        <tr style="background: #fff;">
            <td style="padding: 10px; border: 1px solid #000;">Current URL</td>
            <td style="padding: 10px; border: 1px solid #000;">{{ current_url() }}</td>
        </tr>
        <tr style="background: #fff;">
            <td style="padding: 10px; border: 1px solid #000;">URI Segments</td>
            <td style="padding: 10px; border: 1px solid #000;">
                @php $segments = service('uri')->getSegments(); @endphp
                @foreach($segments as $i => $seg)
                    <div>[{{ $i }}] = <strong>{{ $seg }}</strong></div>
                @endforeach
            </td>
        </tr>
        <tr style="background: #fff;">
            <td style="padding: 10px; border: 1px solid #000;">First Segment (Language)</td>
            <td style="padding: 10px; border: 1px solid #000; font-weight: bold;">
                {{ $segments[0] ?? 'none' }}
            </td>
        </tr>
        <tr style="background: #fff;">
            <td style="padding: 10px; border: 1px solid #000;">Should be Myanmar?</td>
            <td style="padding: 10px; border: 1px solid #000; font-weight: bold;">
                {{ ($current_locale == 'my' || session('language') == 'my') ? '✅ YES - Should be Myanmar' : '❌ NO - Should be English' }}
            </td>
        </tr>
    </table>
</div>

{{-- Normal Content --}}
<div class="container mt-5 mb-5 py-5">
    <!-- Language Switcher -->
    <div class="text-end mb-4">
        @php
            $currentUri = service('uri');
            $segments = $currentUri->getSegments();
            if (!empty($segments) && in_array($segments[0], ['en', 'my'])) {
                array_shift($segments);
            }
            $path = implode('/', $segments);
        @endphp
        <div class="btn-group">
            <a href="{{ base_url('en/' . $path) }}" class="btn btn-sm {{ ($current_locale ?? 'en') == 'en' ? 'btn-primary' : 'btn-outline-primary' }}">English</a>
            <a href="{{ base_url('my/' . $path) }}" class="btn btn-sm {{ ($current_locale ?? 'en') == 'my' ? 'btn-primary' : 'btn-outline-primary' }}">မြန်မာ</a>
        </div>
    </div>

    {{-- Title --}}
    <h1 class="activity-title mb-5">{{ $activity['activity_name'] }}</h1>
    
    {{-- Images --}}
    <div class="row g-3 mb-4">
        @for($i = 1; $i <= 4; $i++)
            @if(!empty($activity['image_' . $i . '_url']))
            <div class="col-12 col-md-6">
                <img src="{{ $activity['image_' . $i . '_url'] }}" class="img-fluid rounded shadow-sm" alt="Image {{ $i }}">
            </div>
            @endif
        @endfor
    </div>

    {{-- Description --}}
    <div class="row">
        <div class="col-12">
            <div class="description-full-width">
               {!! $activity['activity_description'] !!}
            </div>
        </div>
    </div>

    {{-- Back Button --}}
    <div class="mt-5 text-center">
        <a href="{{ base_url(($current_locale ?? 'en') . '/blog') }}" class="btn btn-primary">
            {{ ($current_locale ?? 'en') == 'my' ? 'နောက်သို့ပြန်သွားမည်' : 'Back to Blog' }}
        </a>
    </div>
</div>
@endsection