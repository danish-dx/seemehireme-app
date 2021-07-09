@extends('layout.main')

@section('title', 'SeeMeHireMe | Index')

@section('content')
@include('template.header')
<div class="flex-container-hero-section mt-3">
	<div class="container"> 
			<div class="d-flex justify-content-center align-content-center pt-5">
				{{-- left div --}}
				<div class="d-flex flex-column w-50 hero-left p-3">
					<div>
						<strong class="fs-3 fw-bolder">SeeMeHireMe</strong> is a web based human resource
                		innovator whose integrated platform provides all the
                		tools and technology necessary for an enhanced
						experience for job seekers and employers.
					</div>
					<div class="mt-3">					
						<a id="btn">                    
							<div class="how-its-work">how it works <i class="fa fa-play"></i></div>
						</a>
					</div>
					
				</div>
				{{-- left div --}}
				
				{{-- right div --}}
				<div class="p-3">
					
					<img src="{{ asset('assets/images/video-monitor.png') }}" class="monitor-size">
					
										
						{{-- <video controls="true" disablePictureInPicture controlsList="nodownload" src="{{ asset('assets/videos/main_landing_page.mp4') }}" id="video1"></video> --}}
						{{-- <img src="{{ asset('assets/images/candidate-video-play-btn.png') }}" alt="" class="candidate-video-play-btn-for-home"> --}}
						{{-- <i class="fas fa-play-circle fa-3x play-btn" id="candidate-video-play-btn-for-home"></i> --}}
					
				</div>
				{{-- right div --}}
				
            </div>
	</div>		
</div>
@endsection