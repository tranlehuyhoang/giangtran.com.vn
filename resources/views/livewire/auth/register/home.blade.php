<div>
  <head>
    <title>Register</title>
  </head>
  <div class="container-fluid p-0"> 
    <div class="row m-0">
      <div class="col-12 p-0">    
        <div class="login-card login-dark">
          <div>
            <div><a class="logo" href="index.html"><img class="img-fluid for-light" src="/mofi/assets/images/logo/logo.png" alt="looginpage"><img class="img-fluid for-dark" src="/mofi/assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
            <div class="login-main"> 
              <form class="theme-form">
                <h4>Create your account</h4>
                <p>Enter your personal details to create account</p>
                <div class="form-group">
                  <label class="col-form-label pt-0">Your Name</label>
                  <div class="row g-2">
                    <div class="col-6">
                      <input class="form-control" type="text" required="" placeholder="First name">
                    </div>
                    <div class="col-6">
                      <input class="form-control" type="text" required="" placeholder="Last name">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-form-label">Email Address</label>
                  <input class="form-control" type="email" required="" placeholder="Test@gmail.com">
                </div>
                <div class="form-group">
                  <label class="col-form-label">Password</label>
                  <div class="form-input position-relative">
                    <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
                    <div class="show-hide"><span class="show"></span></div>
                  </div>
                </div>
                <div class="form-group mb-0">
                  <div class="checkbox p-0">
                    <input id="checkbox1" type="checkbox">
                    <label class="text-muted" for="checkbox1">Agree with<a class="ms-2" href="#">Privacy Policy</a></label>
                  </div>
                  <button class="btn btn-primary btn-block w-100" type="submit">Create Account</button>
                </div>
                <h6 class="text-muted mt-4 or">Or signup with</h6>
                <div class="social mt-4">
                  <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
                </div>
                <p class="mt-4 mb-0">Already have an account?
                  <a class="ms-2" href="{{ route('auth.login') }}" wire:navigate>Sign in</a>
              </p>
              
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
     
  </div>
</div>