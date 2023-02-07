@extends('layouts.master')
@section('css')
<!-- Internal Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm">
					<!-- Col -->
					<div class="col-lg-4">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="pl-0">
									<div class="main-profile-overview">
										<div class="main-img-user profile-user">
											<img alt="" src="{{URL::asset('assets/img/faces/6.jpg')}}"><a class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>
										</div>
										<div class="d-flex justify-content-between mg-b-20">
											<div>
												<h5 class="main-profile-name">Petey Cruiser</h5>
												<p class="main-profile-name-text">Web Designer</p>
											</div>
										</div>
										<h6>Bio</h6>
										<div class="main-profile-bio">
											pleasure rationally encounter but because pursue consequences that are extremely painful.occur in which toil and pain can procure him some great pleasure.. <a href="">More</a>
										</div><!-- main-profile-bio -->
									
										<hr class="mg-y-30">
										<label class="main-content-label tx-13 mg-b-20">Social</label>
										<div class="main-profile-social-list">
											<div class="media">
												<div class="media-icon bg-primary-transparent text-primary">
													<i class="icon ion-logo-github"></i>
												</div>
												<div class="media-body">
													<span>Github</span> <a href="">github.com/spruko</a>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-success-transparent text-success">
													<i class="icon ion-logo-twitter"></i>
												</div>
												<div class="media-body">
													<span>Twitter</span> <a href="">twitter.com/spruko.me</a>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-info-transparent text-info">
													<i class="icon ion-logo-linkedin"></i>
												</div>
												<div class="media-body">
													<span>Linkedin</span> <a href="">linkedin.com/in/spruko</a>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-danger-transparent text-danger">
													<i class="icon ion-md-link"></i>
												</div>
												<div class="media-body">
													<span>My Portfolio</span> <a href="">spruko.com/</a>
												</div>
											</div>
										</div>
										<hr class="mg-y-30">
									
										
									
										<!--skill bar-->
									</div><!-- main-profile-overview -->
								</div>
							</div>
						</div>
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label tx-13 mg-b-25">
									Conatct
								</div>
								<div class="main-profile-contact-list">
									<div class="media">
										<div class="media-icon bg-primary-transparent text-primary">
											<i class="icon ion-md-phone-portrait"></i>
										</div>
										<div class="media-body">
											<span>Mobile</span>
											<div>
												+245 354 654
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-icon bg-success-transparent text-success">
											<i class="icon ion-logo-slack"></i>
										</div>
										<div class="media-body">
											<span>Slack</span>
											<div>
												@spruko.w
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-icon bg-info-transparent text-info">
											<i class="icon ion-md-locate"></i>
										</div>
										<div class="media-body">
											<span>Current Address</span>
											<div>
												San Francisco, CA
											</div>
										</div>
									</div>
								</div><!-- main-profile-contact-list -->
							</div>
						</div>
					</div>

					<!-- Col -->
					<div class="col-lg-8">
						<div class="card">
							<div class="card-body">
								
								<form class="form-horizontal">
									
									<div class="mb-4 main-content-label">Name</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">اسم الشركه</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="User Name" value="Petey Cruiser">
											</div>
										</div>
									</div>
									{{-- <div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">First Name</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="First Name" value="Petey">
											</div>
										</div>
									</div> --}}
									{{-- <div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">last Name</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="Last Name" value="Pechon">
											</div>
										</div>
									</div> --}}
									<div class="mb-4 main-content-label">معلومات الاتصال</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">البريد الاكتروني<i>(required)</i></label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="Email" value="info@Valex.in">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">رابط الموقع</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="Website" value="@spruko.w">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">هاتف الشركه</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="phone number" value="+245 354 654">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">عنوان الشركه</label>
											</div>
											<div class="col-md-9">
												<textarea class="form-control" name="example-textarea-input" rows="2"  placeholder="Address">San Francisco, CA</textarea>
											</div>
										</div>
									</div>
									<div class="mb-4 main-content-label">المعلومات التواصل الاجتماعي</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">تويتر</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="twitter" value="twitter.com/spruko.me">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">فيسبوك</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="facebook" value="https://www.facebook.com/Redash">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">جوجل</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="google" value="spruko.com">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">لينكدن</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="linkedin" value="linkedin.com/in/spruko">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">جيتهاب</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control" placeholder="github" value="github.com/sprukos">
											</div>
										</div>
									</div>
									<div class="mb-4 main-content-label">معلومات اضافيه عن الشركه</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">معلومات السيرة الذاتية</label>
											</div>
											<div class="col-md-9">
												<textarea class="form-control" name="example-textarea-input" rows="4" placeholder="">pleasure rationally encounter but because pursue consequences that are extremely painful.occur in which toil and pain can procure him some great pleasure..</textarea>
											</div>
										</div>
									</div>
								
								
								</form>
							</div>
							<div class="card-footer text-left">
								<button type="submit" class="btn btn-primary waves-effect waves-light">تحديث البروفيل</button>
							</div>
						</div>
					</div>
					<!-- /Col -->
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Internal Select2.min js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection