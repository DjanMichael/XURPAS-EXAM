<!-- Footer: Start -->
<footer class="landing-footer">
  <div class="footer-top">
    <div class="container">
      <div class="row gx-0 gy-4 g-md-5">
        <div class="col-lg-5">
          <a href="javascript:;" class="app-brand-link mb-4">
            <span class="app-brand-logo demo me-2"> @include('_partials.macros',['height'=>20])</span>
            <span class="app-brand-text demo footer-link fw-semibold ms-1">{{ config('variables.templateName') }}</span>
          </a>
          <p class="footer-text footer-logo-description mb-4">
            Most Powerful & Comprehensive 🤩 React NextJS Admin Template with Elegant Material Design & Unique
            Layouts.
          </p>
          <form>
            <div class="d-flex mt-2 gap-3">
              <div class="form-floating form-floating-outline w-px-250">
                <input type="text" class="form-control bg-transparent" id="newsletter-1" placeholder="Your email" />
                <label for="newsletter-1">Subscribe to newsletter</label>
              </div>
              <button type="submit" class="btn btn-primary">Subscribe</button>
            </div>
          </form>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <h6 class="footer-title mb-4">Demos</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-3">
              <a href="javascript:;" class="footer-link">Vertical Layout</a>
            </li>
            <li class="mb-3">
              <a href="javascript:;" class="footer-link">Horizontal Layout</a>
            </li>
            <li class="mb-3">
              <a href="javascript:;" class="footer-link">Bordered Layout</a>
            </li>
            <li class="mb-3">
              <a href="javascript:;" class="footer-link">Semi Dark Layout</a>
            </li>
            <li>
              <a href="javascript:;" class="footer-link">Dark Layout</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <h6 class="footer-title mb-4">Pages</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-3">
              <a href="javascript:;" class="footer-link">Pricing</a>
            </li>
            <li class="mb-3">
              <a href="javascript:;" class="footer-link">Payment<span class="badge rounded-pill bg-primary ms-2">New</span></a>
            </li>
            <li class="mb-3">
              <a href="javascript:;" class="footer-link">Checkout</a>
            </li>
            <li class="mb-3">
              <a href="javascript:;" class="footer-link">Help Center</a>
            </li>
            <li>
              <a href="javascript:;" target="_blank" class="footer-link">Login/Register</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-4">
          <h6 class="footer-title mb-4">Download our app</h6>
          <a href="javascript:void(0);" class="d-block footer-link mb-3 pb-2"><img src="{{ asset('assets/img/front-pages/landing-page/apple-icon.png')}}" alt="apple icon" /></a>
          <a href="javascript:void(0);" class="d-block footer-link"><img src="{{ asset('assets/img/front-pages/landing-page/google-play-icon.png')}}" alt="google play icon" /></a>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom py-3">
    <div class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
      <div class="mb-2 mb-md-0">
        <span class="footer-text">©
          <script>document.write(new Date().getFullYear());</script>, Made with <i class="tf-icons mdi mdi-heart text-danger"></i> by
        </span>
      </div>
      <div>

      </div>
    </div>
  </div>
</footer>
<!-- Footer: End -->
