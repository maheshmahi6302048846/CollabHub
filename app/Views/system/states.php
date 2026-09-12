<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="py-5 bg-light">
  <div class="container py-2">
    <div class="mb-4">
      <span class="badge badge-primary mb-2">DESIGN SYSTEM GALLERY</span>
      <h1 class="display-6 fw-bold mb-1">Empty, Loading &amp; System States</h1>
      <p class="text-secondary mb-0">Production state representations for zero-data, skeleton loaders, and confirmation modals.</p>
    </div>

    <!-- EMPTY STATES SECTION -->
    <h2 class="h4 fw-bold mb-3 text-dark">1. Empty States</h2>
    <div class="row g-4 mb-5">
      
      <!-- EMPTY CAMPAIGNS -->
      <div class="col-12 col-md-6">
        <div class="card h-100 text-center p-4 p-md-5 border-0 shadow-sm rounded-4">
          <div class="d-flex align-items-center justify-content-center bg-primary-subtle text-primary rounded-circle mx-auto mb-3 fs-2" style="width:64px; height:64px;">
            📢
          </div>
          <h3 class="h5 fw-bold mb-2">No Active Campaigns</h3>
          <p class="small text-secondary mx-auto mb-4" style="max-width:340px;">
            You haven't published any influencer campaigns yet. Create your first campaign to connect with top creators.
          </p>
          <div class="mt-auto">
            <a href="<?= base_url('brand/campaigns/create') ?>" class="btn btn-primary px-4 py-2">+ Create First Campaign</a>
          </div>
        </div>
      </div>

      <!-- EMPTY REQUESTS -->
      <div class="col-12 col-md-6">
        <div class="card h-100 text-center p-4 p-md-5 border-0 shadow-sm rounded-4">
          <div class="d-flex align-items-center justify-content-center bg-warning-subtle text-warning rounded-circle mx-auto mb-3 fs-2" style="width:64px; height:64px;">
            📬
          </div>
          <h3 class="h5 fw-bold mb-2">No Collaboration Requests</h3>
          <p class="small text-secondary mx-auto mb-4" style="max-width:340px;">
            Your request inbox is empty. Explore active brand deals or update your creator media kit.
          </p>
          <div class="mt-auto">
            <a href="<?= base_url('creator/discover') ?>" class="btn btn-outline px-4 py-2">Explore Marketplace &rarr;</a>
          </div>
        </div>
      </div>

    </div>

    <!-- SKELETON LOADING STATES -->
    <h2 class="h4 fw-bold mb-3 text-dark">2. Loading Skeleton States</h2>
    <div class="card p-4 border-0 shadow-sm rounded-4 mb-4">
      <div class="d-flex align-items-center gap-3 mb-3">
        <div class="rounded-circle bg-secondary-subtle" style="width:54px; height:54px; animation:pulse 1.5s infinite;"></div>
        <div class="flex-grow-1">
          <div class="bg-secondary-subtle rounded mb-2" style="width:40%; height:16px; animation:pulse 1.5s infinite;"></div>
          <div class="bg-secondary-subtle rounded" style="width:25%; height:12px; animation:pulse 1.5s infinite;"></div>
        </div>
      </div>
      <div class="bg-secondary-subtle rounded mb-2" style="width:100%; height:14px; animation:pulse 1.5s infinite;"></div>
      <div class="bg-secondary-subtle rounded" style="width:75%; height:14px; animation:pulse 1.5s infinite;"></div>
    </div>

  </div>
</section>

<style>
@keyframes pulse {
  0% { opacity: 0.6; }
  50% { opacity: 1; }
  100% { opacity: 0.6; }
}
</style>

<?= $this->endSection() ?>
