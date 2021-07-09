<div class="container"> 
{{-- header1 --}}
<div class="d-flex flex-row align-items-center pt-3">
	{{-- logo --}}
	<div>
		<a href="#">			
			<img src="{{ asset('assets/images/seemehireme_logo_new_beta.png') }}" alt="">
		</a>
	</div>
	{{-- menu --}}
	<div class="d-flex flex-column w-100" >
		{{-- row1 --}}
		<div class="d-flex justify-content-end align-items-center">
			<div style="margin-right: 15px">
				<img src="{{ asset('assets/images/signup_icon_new.png') }}" class="signup-icon"/>
				<span class="text-uppercase span-text-header">signup</span> 
			</div>
			<div style="margin-right: 15px">
				<img src="{{ asset('assets/images/login_icon_new.png') }}" class="signup-icon"/>
				<span class="text-uppercase span-text-header">login</span> 
			</div>
			<div class="d-flex">
				<input class="form-control search-input-header" name="helpsearch" required>
				<button class="input-group-text bg-transparent search-input-header-icon" style="margin-left: -1px;" type="submit"><i class="fa fa-search p-0"></i></button>
	        </div>			
		</div>
		{{-- row1 --}}		
	</div>
	
	
</div>
{{-- header1 --}}

{{-- header2 --}}
<div class="d-flex justify-content-end align-items-center">
	<div style="margin-right: 15px">
		<a href="https://calendly.com/seemehireme/" target="_blank" class="text-decoration-none">
			<div class="text-color-white mr-3 b-radius header-pill-btn">
				<i class="far fa-calendar-alt header-icons"></i>
				<span class="inline-block uppercase">book a demo</span>
			</div>	
		</a>   
	</div>
	<div style="margin-right: 15px">
		<a href="for_employers.php" class="text-decoration-none">			
			<div class="for-employer-btn">FOR EMPLOYERS</div>
		</a>	
	</div>
	<div>
		<a href="signup_candidate.php" class="text-decoration-none">			
			<div class="for-dream-job-btn">FIND YOUR DREAM JOB</div>		
		</a>
	</div>			
</div>
{{-- header2 --}}
</div>