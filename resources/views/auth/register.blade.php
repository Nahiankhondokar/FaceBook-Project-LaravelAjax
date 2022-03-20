@extends('layouts.doccure.app')

@section('content')

		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="{{ URL::to('') }}/backend/assets/img/facebook.png" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Register</h1>
								<p class="account-subtitle">Access to our dashboard</p>
								
								<!-- Form -->
								<form action="{{ route('register') }}" method="POST">
                                    @csrf
									<div class="form-group">
										<input name="name" class="form-control" type="text" placeholder="Name">
									</div>
									<div class="form-group">
										<input name="email" class="form-control" type="text" placeholder="Email">
									</div>
									<div class="form-group">
										<input name="password" class="form-control" type="text" placeholder="Password">
									</div>
									<div class="form-group">
										<input name="password_confirmation" class="form-control" type="text" placeholder="Confirm Password">
									</div>

									<div class="form-group">
										<label for="">Birth</label><br>
										<select name="birth" id="">
											<option value="">Month</option>
											<option value="Januery">Januery</option>
											<option value="Februery">Februery</option>
											<option value="March">March</option>
											<option value="April">April</option>
											<option value="May">May</option>
										</select>

										<select name="birth" id="">
											<option value="">Day</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>

										<select name="birth" id="">
											<option value="">Year</option>
											<option value="2001">2001</option>
											<option value="2002">2002</option>
											<option value="2003">2003</option>
											<option value="2004">2004</option>
											<option value="2005">2005</option>
										</select>
									</div>

									<div class="form-group">
										<label for="">Gender</label><br>
										<input name="gender" type="radio" value="male" id="male"> <label for="male">Male</label>
										<input name="gender" type="radio" value="female" id="female"> <label for="female">Female</label>
									</div>

									<div class="form-group">
										<label for="">Hobbies</label><br>
										<input name="hobbies[]" value="travel" type="checkbox" id="travel"> <label for="travel">Travel</label>
										<input name="hobbies[]" value="reading" type="checkbox" id="reading"> <label for="reading">Reading</label>
										<input name="hobbies[]" value="eating" type="checkbox" id="eating"> <label for="eating">Eating</label>
										<input name="hobbies[]" value="playing" type="checkbox" id="playing"> <label for="playing">Playing</label>
										<input name="hobbies[]" value="coding" type="checkbox" id="coding"> <label for="coding">Coding</label>
									</div>
									
									<div class="form-group mb-0">
										<button class="btn btn-primary btn-block" type="submit">Register</button>
									</div>
								</form>
								<!-- /Form -->
								
								
								
								<div class="text-center dont-have">Already have an account? <a href="{{ route('login') }}">Login</a></div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->

@endsection



	

		

