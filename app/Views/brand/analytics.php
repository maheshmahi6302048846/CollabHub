<?= $this->extend('layouts/app_brand') ?>

<?= $this->section('content') ?>

<div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3 mb-4">
  <div>
    <h1 class="h2 fw-bold mb-1 text-dark">Analytics &amp; Performance Reports</h1>
    <p class="text-secondary mb-0">Track total reach, impressions, audience engagement rates, and ROI.</p>
  </div>

  <div class="d-flex gap-2 text-nowrap">
    <button onclick="showToast('CSV report exported to downloads!')" class="btn btn-outline btn-sm px-3">Export CSV</button>
    <button onclick="showToast('PDF analytics report generated!')" class="btn btn-primary btn-sm px-3">Download PDF</button>
  </div>
</div>

<!-- METRICS ROW BOOTSTRAP 5 GRID -->
<div class="row g-3 mb-4">
  <div class="col-6 col-md-3">
    <div class="card border-0 shadow-sm rounded-4 p-3 h-100">
      <div class="small text-muted fw-semibold mb-1">Total Reach</div>
      <div class="h3 fw-bold text-dark mb-0">2.4M</div>
      <span class="small text-success fw-semibold">+34% this month</span>
    </div>
  </div>

  <div class="col-6 col-md-3">
    <div class="card border-0 shadow-sm rounded-4 p-3 h-100">
      <div class="small text-muted fw-semibold mb-1">Avg Engagement Rate</div>
      <div class="h3 fw-bold text-dark mb-0">7.8%</div>
      <span class="small text-success fw-semibold">Industry avg 3.2%</span>
    </div>
  </div>

  <div class="col-6 col-md-3">
    <div class="card border-0 shadow-sm rounded-4 p-3 h-100">
      <div class="small text-muted fw-semibold mb-1">Link Clicks</div>
      <div class="h3 fw-bold text-dark mb-0">48.2K</div>
      <span class="small text-muted">Direct website traffic</span>
    </div>
  </div>

  <div class="col-6 col-md-3">
    <div class="card border-0 shadow-sm rounded-4 p-3 h-100">
      <div class="small text-muted fw-semibold mb-1">Estimated ROI</div>
      <div class="h3 fw-bold text-dark mb-0">3.8x</div>
      <span class="small text-success fw-semibold">High performance</span>
    </div>
  </div>
</div>

<!-- ANALYTICS CHART & DEMOGRAPHICS GRID -->
<div class="row g-4">
  <div class="col-12 col-lg-8">
    <div class="card border-0 shadow-sm rounded-4 p-4">
      <h3 class="h6 fw-bold mb-3">Reach &amp; Engagement Over Time</h3>
      <div class="position-relative w-100" style="height:260px;">
        <canvas id="analyticsChart"></canvas>
      </div>
    </div>
  </div>

  <div class="col-12 col-lg-4">
    <div class="card border-0 shadow-sm rounded-4 p-4">
      <h3 class="h6 fw-bold mb-3">Audience Demographics</h3>
      <div class="d-flex flex-column gap-3 small">
        <div>
          <div class="d-flex justify-content-between mb-1">
            <span>Female (18-34)</span>
            <span class="fw-bold">68%</span>
          </div>
          <div class="progress" style="height:8px;">
            <div class="progress-bar bg-primary" style="width:68%;"></div>
          </div>
        </div>

        <div>
          <div class="d-flex justify-content-between mb-1">
            <span>Male (18-34)</span>
            <span class="fw-bold">24%</span>
          </div>
          <div class="progress" style="height:8px;">
            <div class="progress-bar bg-info" style="width:24%;"></div>
          </div>
        </div>

        <div>
          <div class="d-flex justify-content-between mb-1">
            <span>Other</span>
            <span class="fw-bold">8%</span>
          </div>
          <div class="progress" style="height:8px;">
            <div class="progress-bar bg-secondary" style="width:8%;"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
