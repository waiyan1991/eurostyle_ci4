@extends('layouts.master')
@section('content')
<!-- test start -->

<section id="careers" class="section-padding" style="background-color: #f9f9f9; padding: 80px 0;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 style="font-size: 2.5rem; font-weight: bold; color: #333;">Career Opportunities</h2>
            <p style="color: #777;">ကျွန်ုပ်တို့နှင့်အတူ လက်တွဲလုပ်ကိုင်ရန် ဖိတ်ခေါ်အပ်ပါသည်။</p>
            <div style="width: 60px; height: 3px; background-color: #b08d4a; margin: 20px auto;"></div>
        </div>

        {{-- <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 15px; transition: 0.3s;">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge" style="background-color: #f8f4eb; color: #b08d4a; padding: 8px 15px;">Full-time</span>
                            <small class="text-muted">2 days ago</small>
                        </div>
                        <h4 class="fw-bold mb-2">Senior Web Developer</h4>
                        <p class="text-muted mb-3"><i class="bi bi-geo-alt"></i> Yangon, Myanmar</p>
                        <p class="card-text text-muted" style="font-size: 0.95rem;">
                            PHP (CodeIgniter 4) နှင့် Frontend ပိုင်းတွင် ကျွမ်းကျင်သူများ လျှောက်ထားနိုင်ပါသည်။
                        </p>
                        <hr class="my-4">
                        <div class="d-grid">
                            <a href="#" class="btn" style="background-color: #b08d4a; color: white; font-weight: 500; padding: 10px;">View Details & Apply</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 15px;">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge" style="background-color: #eef2ff; color: #4338ca; padding: 8px 15px;">Remote</span>
                            <small class="text-muted">5 days ago</small>
                        </div>
                        <h4 class="fw-bold mb-2">Graphic Designer</h4>
                        <p class="text-muted mb-3"><i class="bi bi-geo-alt"></i> Anywhere</p>
                        <p class="card-text text-muted" style="font-size: 0.95rem;">
                            Branding နှင့် UI/UX ပိုင်းတွင် စိတ်ကူးစိတ်သန်း ကောင်းမွန်သူများကို အလိုရှိပါသည်။
                        </p>
                        <hr class="my-4">
                        <div class="d-grid">
                            <a href="#" class="btn" style="background-color: #b08d4a; color: white; font-weight: 500; padding: 10px;">View Details & Apply</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 15px;">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge" style="background-color: #f0fdf4; color: #15803d; padding: 8px 15px;">Contract</span>
                            <small class="text-muted">Just now</small>
                        </div>
                        <h4 class="fw-bold mb-2">Sales & Marketing</h4>
                        <p class="text-muted mb-3"><i class="bi bi-geo-alt"></i> Mandalay</p>
                        <p class="card-text text-muted" style="font-size: 0.95rem;">
                            Communication skill ကောင်းမွန်ပြီး နယ်ခရီးသွားနိုင်သူများကို ဦးစားပေးပါမည်။
                        </p>
                        <hr class="my-4">
                        <div class="d-grid">
                            <a href="#" class="btn" style="background-color: #b08d4a; color: white; font-weight: 500; padding: 10px;">View Details & Apply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-sm" style="border-radius: 10px;">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between">
                            <h4 class="fw-bold" style="color: #b08d4a;">Web Developer</h4>
                            <span class="text-muted small">Full-time</span>
                        </div>
                        <p class="text-muted mt-2">Requirement: PHP, CodeIgniter 4, MySQL, Bootstrap</p>
                        
                        <div class="mt-4">
                            <a href="#apply-form" class="btn" style="background-color: #b08d4a; color: white; padding: 10px 30px;">
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-sm" style="border-radius: 10px;">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between">
                            <h4 class="fw-bold" style="color: #b08d4a;">Sales Executive</h4>
                            <span class="text-muted small">Full-time</span>
                        </div>
                        <p class="text-muted mt-2">Requirement: Good communication skill and sales experience.</p>
                        
                        <div class="mt-4">
                            <a href="#apply-form" class="btn" style="background-color: #b08d4a; color: white; padding: 10px 30px;">
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="apply-form" class="mt-5 p-5 bg-white shadow-sm rounded">
            <h3 class="text-center fw-bold mb-4">Job Application Form</h3>
            <form action="<?= site_url('apply-job') ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="row mb-3">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Applying Position</label>
                    <select name="position" class="form-select">
                        <option value="Web Developer">Web Developer</option>
                        <option value="Sales Executive">Sales Executive</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="form-label">Upload CV (PDF only)</label>
                    <input type="file" name="cv_file" class="form-control" accept=".pdf" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn px-5" style="background-color: #333; color: white; padding: 12px;">Submit Application</button>
                </div>
            </form>
        </div>
    </div>
</section> --}}
{{-- <div class="row">
    @foreach($jobs as $job)
    <div class="col-md-6 mb-4">
        <div class="card border-0 shadow-sm p-4" style="border-radius: 10px;">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <h4 class="fw-bold" style="color: #b08d4a;">{{ $job['job_title'] }}</h4>
                    <p class="text-muted mb-2">{{ $job['job_type'] }}</p>
                </div>
            </div>
            <p class="text-muted mt-2">
                <strong>Requirements:</strong> {{ $job['requirements'] }}
            </p>
            <div class="mt-4">
                <a href="#apply-form" class="btn" style="background-color: #b08d4a; color: white; padding: 10px 30px;">
                    APPLY NOW
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div> --}}

<!-- test end -->
@endsection
