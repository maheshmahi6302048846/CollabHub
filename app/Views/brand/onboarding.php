<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="py-5 bg-app" style="min-height: calc(100vh - 120px);">
  <div class="container container-sm">
    <div class="card border-0 shadow-lg rounded-4 p-4 p-md-5">
      
      <div class="text-center mb-4">
        <span class="badge badge-info mb-2">BRAND ONBOARDING</span>
        <h2 class="h3 fw-bold text-dark mb-1">Setup Your Business Account</h2>
        <p class="text-muted small">Fill in your business details to start matching with verified content creators.</p>
      </div>

      <form action="<?= base_url('brand/dashboard') ?>" method="get">
        <div class="row g-3 mb-3">
          <div class="col-12 col-md-6">
            <label class="form-label fw-bold small text-dark">Company / Brand Name</label>
            <input type="text" class="form-control" value="Reshe Clinic" required>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label fw-bold small text-dark">Industry</label>
            <select class="form-select">
              <option selected>Fitness & Health Clinic</option>
              <option>Beauty & Skincare</option>
              <option>Fashion & Apparel</option>
              <option>Food & Beverage</option>
              <option>Technology & Software</option>
            </select>
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label fw-bold small text-dark">Website URL</label>
          <input type="url" class="form-control" value="https://resheclinic.com">
        </div>

        <div class="mb-4">
          <label class="form-label fw-bold small text-dark">Business Description</label>
          <textarea class="form-control" rows="3">Premium health and wellness clinic specializing in non-invasive weight loss treatments, metabolic health, and customized nutrition.</textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-lg w-100">Complete Business Profile &rarr;</button>
      </form>

    </div>
  </div>
</section>

<?= $this->endSection() ?>
