
@extends('dashboard::auth.layouts.master')
@section('title', 'Loked Screen')
@section('content')
     <div class="d-flex flex-column h-100 p-3">
          <div class="d-flex flex-column flex-grow-1">
               <div class="row h-100">
                    <div class="col-xxl-12">
                         <div class="row justify-content-center h-100">
                              <div class="col-lg-6 py-lg-5">
                                   <div class="d-flex flex-column h-100 justify-content-center">
                                        <div class="auth-logo mb-4">
                                             <a href="index.html" class="logo-dark">
                                                  <img src="assets/images/logo-dark.png" height="24" alt="logo dark">
                                             </a>

                                             <a href="index.html" class="logo-light">
                                                  <img src="assets/images/logo-light.png" height="24" alt="logo light">
                                             </a>
                                        </div>

                                        <h2 class="fw-bold fs-24">Hi ! Gaston</h2>

                                        <p class="text-muted mt-1 mb-4">Enter your password to access the admin.</p>

                                        <div class="mb-5">
                                             <form action="https://techzaa.in/larkon/admin/index.html" class="authentication-form">
                                                  <div class="mb-3">
                                                       <label class="form-label visually-hidden" for="example-password">Password</label>
                                                       <input type="text" id="example-password" class="form-control" placeholder="Enter your password">
                                                  </div>
                                                  <div class="mb-1 text-center d-grid">
                                                       <button class="btn btn-primary" type="submit">Sign In</button>
                                                  </div>
                                             </form>
                                        </div>

                                        <p class="text-danger text-center">Not you? return<a href="auth-signup.html" class="text-dark fw-bold ms-1">Sign Up</a></p>
                                   </div>
                              </div>
                         </div>
                    </div>

                    
               </div>
          </div>
     </div>
@endsection