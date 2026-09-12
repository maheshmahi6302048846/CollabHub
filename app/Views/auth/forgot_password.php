<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="py-5 bg-app d-flex align-items-center" style="min-height: calc(100vh - 180px);">
  <div class="container container-sm" style="max-width:500px;">
    <div class="card border-0 shadow-lg rounded-4 p-4 p-md-5 text-center">
      
      <div class="rounded-4 bg-primary-subtle text-primary d-flex align-items-center justify-content-center mx-auto mb-3 fs-3" style="width:56px; height:56px;">
        🔐
      </div>

      <h2 class="h3 fw-bold text-dark mb-1">Forgot Password?</h2>
      <p class="text-muted small mb-4">
        Enter your registered email address and we'll send you a password reset link.
      </p>

      <form onsubmit="event.preventDefault(); showToast('Reset instructions sent to your email address!');">
        <div class="mb-3 text-start">
          <label class="form-label fw-bold small text-dark">Email Address</label>
          <input type="email" class="form-control" placeholder="you@example.com" required>
        </div>

        <button type="submit" class="btn btn-primary btn-lg w-100">Send Reset Instructions</button>

        <div class="mt-4 small">
          <a href="<?= base_url('login') ?>" class="text-muted fw-bold text-decoration-none">&larr; Back to Login</a>
        </div>
      </form>

    </div>
  </div>
</section>

<?= $this->endSection() ?>
