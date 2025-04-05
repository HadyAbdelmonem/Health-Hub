@extends('dashboard::auth.layouts.master')
@section('title', 'Register')
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
                                                  <img src="{{asset('dashboard/assets/images/logo-dark.png')}}" height="24" alt="logo dark">
                                             </a>

                                             <a href="index.html" class="logo-light">
                                                  <img src="{{asset('dashboard/assets/images/logo-light.png')}}" height="24" alt="logo light">
                                             </a>
                                        </div>

                                        <h2 class="fw-bold fs-24">Sign Up</h2>

                                        <p class="text-muted mt-1 mb-4">New to our platform? Sign up now! It only takes a minute</p>

                                        <div>
                                             <form action="https://techzaa.in/larkon/admin/index.html" class="authentication-form">
                                                  <div class="mb-3">
                                                       <label class="form-label" for="example-name">Name</label>
                                                       <input type="name" id="example-name" name="example-name" class="form-control" placeholder="Enter your name">
                                                  </div>
                                                  <div class="mb-3">
                                                       <label class="form-label" for="example-email">Email</label>
                                                       <input type="email" id="example-email" name="example-email" class="form-control bg-" placeholder="Enter your email">
                                                  </div>
                                                  <div class="mb-3">                                                      
                                                       <label class="form-label" for="example-password">Password</label>
                                                       <input type="text" id="example-password" class="form-control" placeholder="Enter your password">
                                                  </div>
                                                  <div class="mb-3">
                                                       <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                                            <label class="form-check-label" for="checkbox-signin">I accept Terms and Condition</label>
                                                       </div>
                                                  </div>

                                                  <div class="mb-1 text-center d-grid">
                                                       <button class="btn btn-soft-primary" type="submit">Sign Up</button>
                                                  </div>
                                             </form>

                                        </div>

                                        <p class="mt-auto text-danger text-center">I already have an account  <a href="auth-signin.html" class="text-dark fw-bold ms-1">Sign In</a></p>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
@endsection