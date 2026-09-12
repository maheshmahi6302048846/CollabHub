<?= $this->extend('layouts/app_creator') ?>

<?= $this->section('content') ?>

<div class="mb-4">
  <h1 class="h2 fw-bold mb-1 text-dark">My Collaboration Requests</h1>
  <p class="text-secondary mb-0">Track your submitted pitches and incoming brand invitations.</p>
</div>

<!-- REQUEST TABS -->
<div class="card border-0 shadow-sm rounded-4 p-3 p-md-4 tab-container">
  <div class="d-flex flex-wrap gap-2 border-bottom pb-3 mb-4">
    <a href="#" class="btn btn-primary btn-sm tab-link active" data-tab="tabAllRequests">All (12)</a>
    <a href="#" class="btn btn-outline btn-sm tab-link" data-tab="tabPendingRequests">Pending (4)</a>
    <a href="#" class="btn btn-outline btn-sm tab-link" data-tab="tabAcceptedRequests">Accepted (6)</a>
    <a href="#" class="btn btn-outline btn-sm tab-link" data-tab="tabRejectedRequests">Rejected (2)</a>
  </div>

  <!-- ALL REQUESTS TAB -->
  <div id="tabAllRequests" class="tab-pane active">
    <div class="table-responsive">
      <table class="table align-middle mb-0">
        <thead>
          <tr class="text-secondary small">
            <th>Brand &amp; Campaign</th>
            <th>Type</th>
            <th>Date Sent</th>
            <th>Status</th>
            <th class="text-end">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <div class="d-flex align-items-center gap-2">
                <img src="https://images.unsplash.com/photo-1572021335469-31706a17aaef?auto=format&fit=crop&w=80&q=80" class="avatar avatar-sm rounded-circle" style="width:36px;height:36px;object-fit:cover;" alt="Brand">
                <div>
                  <div class="fw-bold small text-dark mb-0">Reshe Clinic</div>
                  <div class="small text-muted" style="font-size:0.75rem;">Weight Loss Awareness</div>
                </div>
              </div>
            </td>
            <td><span class="badge badge-success">Free Service</span></td>
            <td class="small text-secondary">10 Mar 2026</td>
            <td><span class="badge badge-pending">Under Review</span></td>
            <td class="text-end">
              <div class="d-flex justify-content-end gap-1">
                <button onclick="openModal('timelineModal')" class="btn btn-outline btn-sm">Timeline</button>
                <button onclick="showToast('Request withdrawn successfully')" class="btn btn-light btn-sm text-danger">Withdraw</button>
              </div>
            </td>
          </tr>

          <tr>
            <td>
              <div class="d-flex align-items-center gap-2">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=80&q=80" class="avatar avatar-sm rounded-circle" style="width:36px;height:36px;object-fit:cover;" alt="Brand">
                <div>
                  <div class="fw-bold small text-dark mb-0">FitLife Nutrition</div>
                  <div class="small text-muted" style="font-size:0.75rem;">Protein Supplement</div>
                </div>
              </div>
            </td>
            <td><span class="badge badge-info">Free Product</span></td>
            <td class="small text-secondary">08 Mar 2026</td>
            <td><span class="badge badge-success">Accepted</span></td>
            <td class="text-end">
              <a href="<?= base_url('creator/messages') ?>" class="btn btn-primary btn-sm px-3">Open Chat</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- PENDING REQUESTS TAB -->
  <div id="tabPendingRequests" class="tab-pane">
    <div class="table-responsive">
      <table class="table align-middle mb-0">
        <thead>
          <tr class="text-secondary small">
            <th>Brand &amp; Campaign</th>
            <th>Type</th>
            <th>Date Sent</th>
            <th>Status</th>
            <th class="text-end">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <div class="d-flex align-items-center gap-2">
                <img src="https://images.unsplash.com/photo-1572021335469-31706a17aaef?auto=format&fit=crop&w=80&q=80" class="avatar avatar-sm rounded-circle" style="width:36px;height:36px;object-fit:cover;" alt="Brand">
                <div>
                  <div class="fw-bold small text-dark mb-0">Reshe Clinic</div>
                  <div class="small text-muted" style="font-size:0.75rem;">Weight Loss Awareness</div>
                </div>
              </div>
            </td>
            <td><span class="badge badge-success">Free Service</span></td>
            <td class="small text-secondary">10 Mar 2026</td>
            <td><span class="badge badge-pending">Under Review</span></td>
            <td class="text-end">
              <div class="d-flex justify-content-end gap-1">
                <button onclick="openModal('timelineModal')" class="btn btn-outline btn-sm">Timeline</button>
                <button onclick="showToast('Request withdrawn successfully')" class="btn btn-light btn-sm text-danger">Withdraw</button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- ACCEPTED REQUESTS TAB -->
  <div id="tabAcceptedRequests" class="tab-pane">
    <div class="table-responsive">
      <table class="table align-middle mb-0">
        <thead>
          <tr class="text-secondary small">
            <th>Brand &amp; Campaign</th>
            <th>Type</th>
            <th>Date Sent</th>
            <th>Status</th>
            <th class="text-end">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <div class="d-flex align-items-center gap-2">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=80&q=80" class="avatar avatar-sm rounded-circle" style="width:36px;height:36px;object-fit:cover;" alt="Brand">
                <div>
                  <div class="fw-bold small text-dark mb-0">FitLife Nutrition</div>
                  <div class="small text-muted" style="font-size:0.75rem;">Protein Supplement</div>
                </div>
              </div>
            </td>
            <td><span class="badge badge-info">Free Product</span></td>
            <td class="small text-secondary">08 Mar 2026</td>
            <td><span class="badge badge-success">Accepted</span></td>
            <td class="text-end">
              <a href="<?= base_url('creator/messages') ?>" class="btn btn-primary btn-sm px-3">Open Chat</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- REJECTED REQUESTS TAB -->
  <div id="tabRejectedRequests" class="tab-pane">
    <div class="p-4 text-center text-muted small">
      No declined applications found.
    </div>
  </div>
</div>

<!-- VISUAL TIMELINE MODAL -->
<div id="timelineModal" class="modal-overlay">
  <div class="modal-card">
    <div class="modal-header">
      <h4 class="h5 fw-bold mb-0">Request Status Timeline</h4>
      <button onclick="closeModal('timelineModal')" style="background:none;border:none;cursor:pointer;font-size:1.2rem;">&times;</button>
    </div>
    <div class="modal-body">
      <div class="timeline">
        <div class="timeline-item completed">
          <div class="timeline-marker"></div>
          <div class="fw-bold small">Request Sent</div>
          <div class="small text-muted">10 Mar 2026, 10:30 AM</div>
          <div class="small text-secondary mt-1">Application proposal submitted to Reshe Clinic.</div>
        </div>

        <div class="timeline-item completed">
          <div class="timeline-marker"></div>
          <div class="fw-bold small">Under Review</div>
          <div class="small text-muted">10 Mar 2026, 02:15 PM</div>
          <div class="small text-secondary mt-1">Brand marketing manager viewed your media kit.</div>
        </div>

        <div class="timeline-item">
          <div class="timeline-marker"></div>
          <div class="fw-bold small text-muted">Response Pending</div>
          <div class="small text-muted mt-1">You will get a notification once the brand accepts or responds.</div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
