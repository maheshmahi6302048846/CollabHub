<?= $this->extend('layouts/app_brand') ?>

<?= $this->section('content') ?>

<div class="card border-0 shadow-sm rounded-4 p-0 overflow-hidden mb-4">
  <div style="height:180px; background:linear-gradient(135deg, #0F172A 0%, #1E1B4B 100%); position:relative;"></div>
  
  <div class="p-4 bg-white position-relative rounded-top-4 d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3" style="margin-top:-60px;">
    <div class="d-flex flex-column flex-sm-row gap-3 align-items-sm-end">
      <img src="https://images.unsplash.com/photo-1572021335469-31706a17aaef?auto=format&fit=crop&w=160&q=80" class="avatar shadow-md" style="width:110px; height:110px; border:4px solid white;">
      <div>
        <div class="d-flex align-items-center gap-2 flex-wrap">
          <h1 class="h3 fw-bold text-dark mb-0">Reshe Clinic</h1>
          <span class="badge badge-info">✓ Verified Business</span>
        </div>
        <div class="text-muted small mt-1">Fitness & Health Clinic &bull; https://resheclinic.com</div>
      </div>
    </div>

    <a href="<?= base_url('brand/settings') ?>" class="btn btn-outline">Edit Business Profile</a>
  </div>
</div>

<div class="card border-0 shadow-sm rounded-4 p-4">
  <h3 class="h5 fw-bold text-dark mb-2">About Reshe Clinic</h3>
  <p class="text-secondary mb-0 lh-base">
    Premium health and wellness clinic specializing in non-invasive weight loss treatments, metabolic health evaluation, and customized nutrition roadmaps.
  </p>
</div>

<?= $this->endSection() ?>
