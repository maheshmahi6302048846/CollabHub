<?= $this->extend('layouts/app_creator') ?>

<?= $this->section('content') ?>

<!-- COVER BANNER & PROFILE CARD -->
<div class="card border-0 shadow-sm rounded-4 p-0 overflow-hidden mb-4">
  <div style="height:180px; background:var(--gradient-primary); position:relative;"></div>
  
  <div class="p-4 bg-white position-relative rounded-top-4 d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3" style="margin-top:-60px;">
    <div class="d-flex flex-column flex-sm-row gap-3 align-items-sm-end">
      <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=160&q=80" class="avatar shadow-md" style="width:110px; height:110px; border:4px solid white;">
      <div>
        <div class="d-flex align-items-center gap-2 flex-wrap">
          <h1 class="h3 fw-bold text-dark mb-0">Priya Sharma</h1>
          <span class="badge badge-primary">✓ Verified Creator</span>
        </div>
        <div class="text-muted small mt-1">@priyasharma_fit &bull; Fitness & Health Creator &bull; Mumbai, India</div>
      </div>
    </div>

    <a href="<?= base_url('creator/settings') ?>" class="btn btn-outline">Edit Media Kit</a>
  </div>
</div>

<!-- AUDIENCE METRICS ROW -->
<div class="row g-3 mb-4">
  <div class="col-12 col-md-4">
    <div class="card border-0 shadow-sm rounded-4 p-4 text-center h-100">
      <div class="small text-muted fw-bold text-uppercase mb-1">Instagram Followers</div>
      <div class="h2 fw-extrabold text-primary mb-1">185K</div>
      <div class="small text-success">+4.2% this month</div>
    </div>
  </div>

  <div class="col-12 col-md-4">
    <div class="card border-0 shadow-sm rounded-4 p-4 text-center h-100">
      <div class="small text-muted fw-bold text-uppercase mb-1">Avg Likes per Reel</div>
      <div class="h2 fw-extrabold text-primary mb-1">14.2K</div>
      <div class="small text-muted">Consistent reach</div>
    </div>
  </div>

  <div class="col-12 col-md-4">
    <div class="card border-0 shadow-sm rounded-4 p-4 text-center h-100">
      <div class="small text-muted fw-bold text-uppercase mb-1">Engagement Rate</div>
      <div class="h2 fw-extrabold text-success mb-1">8.4%</div>
      <div class="small text-muted">Top 5% in category</div>
    </div>
  </div>
</div>

<!-- RECENT CONTENT PORTFOLIO -->
<div class="card border-0 shadow-sm rounded-4 p-4">
  <h3 class="h5 fw-bold text-dark mb-3">Recent Collaboration Content</h3>
  <div class="row g-3">
    <div class="col-6 col-md-3">
      <div class="position-relative rounded-3 overflow-hidden shadow-sm" style="height:200px;">
        <img src="https://images.unsplash.com/photo-1517838277536-f5f99be501cd?auto=format&fit=crop&w=400&q=80" class="w-100 h-100 object-fit-cover">
        <span class="badge badge-primary position-absolute bottom-0 start-0 m-2">FitLife Reel</span>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="position-relative rounded-3 overflow-hidden shadow-sm" style="height:200px;">
        <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?auto=format&fit=crop&w=400&q=80" class="w-100 h-100 object-fit-cover">
        <span class="badge badge-primary position-absolute bottom-0 start-0 m-2">UrbanStyle</span>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="position-relative rounded-3 overflow-hidden shadow-sm" style="height:200px;">
        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=400&q=80" class="w-100 h-100 object-fit-cover">
        <span class="badge badge-primary position-absolute bottom-0 start-0 m-2">Mamaearth</span>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="position-relative rounded-3 overflow-hidden shadow-sm" style="height:200px;">
        <img src="https://images.unsplash.com/photo-1579722821273-0f6c7d44362f?auto=format&fit=crop&w=400&q=80" class="w-100 h-100 object-fit-cover">
        <span class="badge badge-primary position-absolute bottom-0 start-0 m-2">Gymwear</span>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
