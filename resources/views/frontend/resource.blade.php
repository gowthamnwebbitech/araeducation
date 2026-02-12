@extends('frontend.layout.app')
@section('title', "Resource" )
@section('description', "Best Coaching classes in coimbatore Ara Education" )
@section('keyword', "Ara education blogs,Best Coaching classes in coimbatore,Best Coaching classes in tamilnadu" )
@section('content')



<section class="page-banner">
    <div class="banner-content">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                <span class="banner-title">Resource</span>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Resource</li>
                </ol>
            </nav>
                </div>
                <div class="col-lg-6">
                    <div class="img-box">
                        <img src="<?php echo url(''); ?>/public/frontend/assets/images/page-banner-img1.webp" alt="ARA Law Academy is the best coaching for SLAT ">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="blog-section-inner">
    <div class="container">
        <h5 class="blog-subtitle">Resource</h5>
        <h1 class="blog-title">Blogs & Resource</h1>
        <div class="blog-list mt-5">
            <div class="row gy-4">
                @php $resource = App\Models\Resource::latest()->get(); @endphp
                @if($resource)
                    @foreach($resource as $key=>$value)
                        <div class="col-lg-4 col-md-6">
                            <div class="card blog-card">
                                <div class="img-box">
                                    <img src="<?php echo url(''); ?>/public/resource_images/{{ $value->image }}" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="{{ route('frontend.resource_details',$value->slug) }}">{{ $value->title }}</a></h5>
                                    <p class="card-text">{{ $value->short_description }}</p>
                                    <p class="mt-2 mb-0"><a href="{{ route('frontend.resource_details',$value->slug) }}" class="text-link">Read More</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                
            </div>
        </div>
    </div>
</section>


@include('frontend.newsletter')


@endsection