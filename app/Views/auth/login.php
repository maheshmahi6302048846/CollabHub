<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="py-5 bg-app d-flex align-items-center" style="min-height: calc(100vh - 180px);">
  <div class="container container-sm">
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
      <div class="row g-0">
        
        <!-- LEFT BRAND VISUAL PANEL -->
        <div class="col-12 col-lg-5 p-4 p-md-5 d-flex flex-column justify-content-between text-white" style="background:var(--gradient-hero);">
          <div>
            <div class="brand-logo text-white mb-4">
              <div class="brand-logo-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
              </div>
              <span>Collab<span style="color:var(--primary-400);">Hub</span></span>
            </div>

            <h2 class="h2 text-white fw-bold mb-2">Welcome Back!</h2>
            <p class="text-white-50 small mb-4">
              Sign in to access your collaboration requests, campaign deliverables, and messages.
            </p>
          </div>

          <div class="p-3 rounded-3 mt-4" style="background:rgba(255,255,255,0.1); backdrop-filter:blur(8px); border:1px solid rgba(255,255,255,0.2);">
            <div class="fst-italic small mb-1 text-white">"CollabHub made managing 30 creator campaigns effortless for our D2C brand!"</div>
            <div class="fw-bold extra-small" style="color:var(--primary-300);">&mdash; Reshe Clinic Marketing Team</div>
          </div>
        </div>

        <!-- RIGHT FORM PANEL -->
        <div class="col-12 col-lg-7 p-4 p-md-5 bg-white">
          <h3 class="h4 fw-bold text-dark mb-1">Login to your account</h3>
          <p class="text-muted small mb-4">Select your role credentials below</p>

          <form action="<?= base_url('creator/dashboard') ?>" method="get">
            <div class="mb-3">
              <label class="form-label fw-bold small text-dark">Email Address</label>
              <input type="email" class="form-control" value="priya@collabhub.com" required placeholder="you@example.com">
            </div>

            <div class="mb-3">
              <div class="d-flex justify-content-between align-items-center mb-1">
                <label class="form-label fw-bold small text-dark mb-0">Password</label>
                <a href="<?= base_url('forgot-password') ?>" class="small text-primary text-decoration-none">Forgot Password?</a>
              </div>
              <input type="password" class="form-control" value="password123" required placeholder="••••••••">
            </div>

            <div class="row g-2 mb-4">
              <div class="col-6">
                <a href="<?= base_url('creator/dashboard') ?>" class="btn btn-primary w-100">Login as Creator</a>
              </div>
              <div class="col-6">
                <a href="<?= base_url('brand/dashboard') ?>" class="btn btn-outline w-100">Login as Brand</a>
              </div>
            </div>

            <div class="text-center text-muted small position-relative my-3">
              <span class="bg-white px-2 position-relative z-2">OR SOCIAL LOGIN</span>
              <div class="position-absolute top-50 start-0 end-0 border-bottom z-1"></div>
            </div>

            <div class="d-flex flex-column gap-2 mb-4">
              <button type="button" onclick="window.location.href='<?= base_url('creator/dashboard') ?>'" class="btn btn-outline w-100 justify-content-center">
                Continue with Google
              </button>
              <button type="button" onclick="window.location.href='<?= base_url('brand/dashboard') ?>'" class="btn btn-outline w-100 justify-content-center">
                Continue with Apple
              </button>
            </div>

            <div class="text-center small text-muted">
              Don't have an account? <a href="<?= base_url('register') ?>" class="fw-bold text-primary text-decoration-none">Sign Up</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
