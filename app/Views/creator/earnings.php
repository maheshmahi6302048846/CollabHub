<?= $this->extend('layouts/app_creator') ?>

<?= $this->section('content') ?>

<div class="mb-4">
  <h1 class="h3 fw-bold text-dark mb-1">Earnings & Payouts</h1>
  <p class="text-muted mb-0">Monitor your income, pending campaign escrow funds, and bank payout settings.</p>
</div>

<!-- METRICS ROW -->
<div class="row g-3 mb-4">
  <div class="col-12 col-sm-6 col-lg-3">
    <div class="stat-card h-100">
      <div>
        <div class="stat-label">Total Lifetime Earnings</div>
        <div class="stat-value">₹1,45,000</div>
        <span class="small text-success fw-bold">+22% this month</span>
      </div>
    </div>
  </div>

  <div class="col-12 col-sm-6 col-lg-3">
    <div class="stat-card h-100">
      <div>
        <div class="stat-label">Paid Out</div>
        <div class="stat-value">₹1,20,000</div>
        <span class="small text-muted">Direct bank transfer</span>
      </div>
    </div>
  </div>

  <div class="col-12 col-sm-6 col-lg-3">
    <div class="stat-card h-100">
      <div>
        <div class="stat-label">Pending Escrow</div>
        <div class="stat-value">₹25,000</div>
        <span class="small text-warning fw-bold">Release in 3 days</span>
      </div>
    </div>
  </div>

  <div class="col-12 col-sm-6 col-lg-3">
    <div class="stat-card h-100">
      <div>
        <div class="stat-label">March Earnings</div>
        <div class="stat-value">₹25,000</div>
        <button onclick="showToast('Withdrawal request submitted for ₹25,000!')" class="btn btn-primary btn-sm mt-2">Withdraw Now</button>
      </div>
    </div>
  </div>
</div>

<!-- PAYOUT HISTORY TABLE -->
<div class="card border-0 shadow-sm rounded-4 p-4">
  <h3 class="h5 fw-bold text-dark mb-3">Recent Payout History</h3>
  <div class="table-responsive">
    <table class="table align-middle mb-0 text-nowrap">
      <thead class="table-light">
        <tr>
          <th>Brand & Campaign</th>
          <th>Platform / Content</th>
          <th>Amount</th>
          <th>Status</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="fw-bold">UrbanStyle &bull; Summer Showcase</td>
          <td>Instagram Reel</td>
          <td class="fw-bold text-success">₹20,000</td>
          <td><span class="badge badge-success">Paid</span></td>
          <td class="text-muted">05 Mar 2026</td>
        </tr>
        <tr>
          <td class="fw-bold">Mamaearth &bull; Glow Serum</td>
          <td>YouTube Short</td>
          <td class="fw-bold text-success">₹15,000</td>
          <td><span class="badge badge-success">Paid</span></td>
          <td class="text-muted">24 Feb 2026</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?= $this->endSection() ?>
