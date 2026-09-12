<?= $this->extend('layouts/app_brand') ?>

<?= $this->section('content') ?>

<div class="mb-4">
  <h1 class="h3 fw-bold text-dark mb-1">Billing & Subscription</h1>
  <p class="text-muted mb-0">Manage your SaaS tier plan, payment methods, and invoice history.</p>
</div>

<div class="card card-gradient border-0 shadow-sm rounded-4 p-4 mb-4 d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
  <div>
    <span class="badge badge-primary mb-2">CURRENT PLAN</span>
    <h2 class="h3 fw-bold text-dark mb-1">Brand Growth &bull; ₹4,999/mo</h2>
    <p class="text-muted small mb-0">Includes up to 10 active campaigns & unlimited creator applicants.</p>
  </div>
  <button onclick="showToast('Plan upgraded to Enterprise Tier!')" class="btn btn-primary btn-lg flex-shrink-0">Upgrade Plan</button>
</div>

<div class="card border-0 shadow-sm rounded-4 p-4">
  <h3 class="h5 fw-bold text-dark mb-3">Payment Invoice History</h3>
  <div class="table-responsive">
    <table class="table align-middle mb-0 text-nowrap">
      <thead class="table-light">
        <tr>
          <th>Invoice ID</th>
          <th>Billing Date</th>
          <th>Amount</th>
          <th>Status</th>
          <th class="text-end">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="fw-bold">#INV-2026-0891</td>
          <td class="text-muted">01 Mar 2026</td>
          <td class="fw-bold">₹4,999</td>
          <td><span class="badge badge-success">Paid</span></td>
          <td class="text-end"><button onclick="showToast('PDF invoice downloaded!')" class="btn btn-outline btn-sm">Download PDF</button></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?= $this->endSection() ?>
