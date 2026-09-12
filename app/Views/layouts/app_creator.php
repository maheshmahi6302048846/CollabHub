<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?? 'Creator Portal | CollabHub' ?></title>
  <!-- Bootstrap 5.3.3 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/css/collabhub.css?v=' . time()) ?>">
</head>
<body>

  <div class="app-shell">
    <!-- CREATOR LEFT SIDEBAR -->
    <aside class="app-sidebar">
      <div class="sidebar-header d-flex align-items-center justify-content-between p-3 border-bottom">
        <a href="<?= base_url('/') ?>" class="brand-logo text-decoration-none d-flex align-items-center gap-2" style="font-size:1.2rem;">
          <div class="brand-logo-icon" style="width:28px;height:28px;flex-shrink:0;">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
          </div>
          <span class="sidebar-text fw-bold">Collab<span style="color:var(--primary-600);">Hub</span></span>
        </a>
        <div class="d-flex align-items-center gap-2">
          <span class="sidebar-role-badge">Creator</span>
          <button type="button" class="btn btn-icon btn-sm btn-light sidebar-close-btn d-lg-none rounded-circle" onclick="closeMobileSidebar(event)" aria-label="Close sidebar" title="Close Menu">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
          </button>
        </div>
      </div>

      <ul class="sidebar-menu">
        <li class="sidebar-item">
          <a href="<?= base_url('creator/dashboard') ?>" class="sidebar-link <?= uri_string() == 'creator/dashboard' ? 'active' : '' ?>">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
            <span class="sidebar-text">Dashboard</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="<?= base_url('creator/discover') ?>" class="sidebar-link <?= uri_string() == 'creator/discover' ? 'active' : '' ?>">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            <span class="sidebar-text">Discover</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="<?= base_url('creator/requests') ?>" class="sidebar-link <?= uri_string() == 'creator/requests' ? 'active' : '' ?>">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
            <span class="sidebar-text">My Requests</span>
            <span class="badge-count">12</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="<?= base_url('creator/campaigns') ?>" class="sidebar-link <?= uri_string() == 'creator/campaigns' ? 'active' : '' ?>">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
            <span class="sidebar-text">Campaigns</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="<?= base_url('creator/messages') ?>" class="sidebar-link <?= uri_string() == 'creator/messages' ? 'active' : '' ?>">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
            <span class="sidebar-text">Messages</span>
            <span class="badge-count">5</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="<?= base_url('creator/earnings') ?>" class="sidebar-link <?= uri_string() == 'creator/earnings' ? 'active' : '' ?>">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
            <span class="sidebar-text">Earnings</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="<?= base_url('creator/profile') ?>" class="sidebar-link <?= uri_string() == 'creator/profile' ? 'active' : '' ?>">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
            <span class="sidebar-text">Profile</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="<?= base_url('creator/settings') ?>" class="sidebar-link <?= uri_string() == 'creator/settings' ? 'active' : '' ?>">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
            <span class="sidebar-text">Settings</span>
          </a>
        </li>
      </ul>

      <div style="padding:1.5rem 1rem; border-top:1px solid var(--gray-100);">
        <div class="card card-gradient" style="padding:1rem; text-align:center;">
          <div style="font-weight:700; font-size:0.85rem; color:var(--primary-900); margin-bottom:0.25rem;">Create. Collaborate. Grow.</div>
          <p style="font-size:0.75rem; color:var(--gray-600); margin-bottom:0.75rem;">Unlock pro features & top brands</p>
          <a href="<?= base_url('creator/discover') ?>" class="btn btn-primary btn-sm" style="width:100%;">Explore Deals</a>
        </div>
      </div>
    </aside>

    <!-- CREATOR MAIN AREA -->
    <div class="app-main">
      <header class="app-topbar">
        <div class="d-flex align-items-center gap-2">
          <button type="button" class="btn btn-icon btn-outline sidebar-toggle-btn d-lg-none" onclick="openMobileSidebar(event)" title="Toggle Side Menu">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
          </button>
          <div class="topbar-search">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            <input type="text" placeholder="Search campaigns, brands..." onclick="openModal('globalSearchModal')" readonly>
          </div>
        </div>

        <div class="topbar-right">
          <!-- Notification Bell -->
          <div style="position:relative;">
            <button class="btn btn-icon btn-outline" data-toggle="dropdown" data-target="creatorNotificationsMenu" style="position:relative;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
              <span style="position:absolute; top:4px; right:4px; width:8px; height:8px; background:var(--danger-main); border-radius:50%;"></span>
            </button>

            <div id="creatorNotificationsMenu" class="dropdown-menu" style="position:absolute; right:0; top:48px; width:340px; background:white; border-radius:12px; border:1px solid var(--gray-200); box-shadow:var(--shadow-xl); display:none; z-index:150; overflow:hidden;">
              <div style="padding:1rem; border-bottom:1px solid var(--gray-100); display:flex; justify-content:space-between; align-items:center;">
                <span style="font-weight:700; font-size:0.9rem;">Notifications</span>
                <span style="font-size:0.75rem; color:var(--primary-600); cursor:pointer;">Mark all read</span>
              </div>
              <div style="max-height:280px; overflow-y:auto;">
                <div style="padding:0.85rem 1rem; border-bottom:1px solid var(--gray-50); font-size:0.85rem;">
                  <div style="font-weight:600; color:var(--gray-900);">New Request from Reshe Clinic</div>
                  <div style="color:var(--gray-500); font-size:0.75rem;">Weight Loss Awareness Campaign &bull; 10m ago</div>
                </div>
                <div style="padding:0.85rem 1rem; border-bottom:1px solid var(--gray-50); font-size:0.85rem;">
                  <div style="font-weight:600; color:var(--gray-900);">Payment Received: ₹15,000</div>
                  <div style="color:var(--gray-500); font-size:0.75rem;">FitLife Nutrition &bull; 2h ago</div>
                </div>
              </div>
            </div>
          </div>

          <!-- User Avatar Menu & Session Controls -->
          <?php 
            $userName  = session()->get('name') ?? 'Creator';
            $userEmail = session()->get('email') ?? 'creator@collabhub.com';
            $initial   = strtoupper(substr($userName, 0, 1));
          ?>
          <div class="d-flex align-items-center gap-3">
            <div class="user-profile-menu d-flex align-items-center gap-2" onclick="window.location.href='<?= base_url('creator/profile') ?>'">
              <div class="avatar bg-primary text-white fw-bold d-flex align-items-center justify-content-center rounded-circle" style="width:36px;height:36px;font-size:0.95rem;background:var(--gradient-hero) !important;">
                <?= esc($initial) ?>
              </div>
              <div>
                <div style="font-weight:700; font-size:0.875rem; color:var(--gray-900);"><?= esc($userName) ?></div>
                <div style="font-size:0.75rem; color:var(--gray-500);"><?= esc($userEmail) ?></div>
              </div>
            </div>
            <a href="<?= base_url('logout') ?>" class="btn btn-outline-danger btn-sm px-2 py-1" title="Log Out">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
            </a>
          </div>
        </div>
      </header>

      <div class="app-content">
        <?= $this->renderSection('content') ?>
      </div>

      <footer class="py-3 px-4 mt-auto border-top bg-white small text-muted">
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2">
          <div>&copy; <?= date('Y') ?> <strong>CollabHub</strong> Technologies Inc. All rights reserved.</div>
          <div class="d-flex gap-3">
            <a href="<?= base_url('faq') ?>" class="text-muted text-decoration-none">Help Center</a>
            <a href="<?= base_url('contact') ?>" class="text-muted text-decoration-none">Support</a>
            <a href="<?= base_url('system/states') ?>" class="text-muted text-decoration-none">System Gallery</a>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!-- MOBILE BOTTOM NAV -->
  <nav class="mobile-bottom-nav">
    <a href="<?= base_url('creator/dashboard') ?>" class="mobile-nav-item <?= uri_string() == 'creator/dashboard' ? 'active' : '' ?>">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
      <span>Dashboard</span>
    </a>
    <a href="<?= base_url('creator/discover') ?>" class="mobile-nav-item <?= uri_string() == 'creator/discover' ? 'active' : '' ?>">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
      <span>Discover</span>
    </a>
    <a href="<?= base_url('creator/messages') ?>" class="mobile-nav-item <?= uri_string() == 'creator/messages' ? 'active' : '' ?>">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
      <span>Chat</span>
    </a>
    <a href="<?= base_url('creator/earnings') ?>" class="mobile-nav-item <?= uri_string() == 'creator/earnings' ? 'active' : '' ?>">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
      <span>Earnings</span>
    </a>
    <a href="<?= base_url('creator/profile') ?>" class="mobile-nav-item <?= uri_string() == 'creator/profile' ? 'active' : '' ?>">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
      <span>Profile</span>
    </a>
  <!-- GLOBAL SEARCH MODAL -->
  <div id="globalSearchModal" class="modal-overlay">
    <div class="modal-card" style="max-width:600px;">
      <div class="modal-header">
        <div class="d-flex align-items-center gap-2 w-100 me-3">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
          <input type="text" class="form-control border-0 shadow-none ps-0" placeholder="Type to search opportunities, brands, earnings..." style="font-size:1.05rem;" autofocus>
        </div>
        <button type="button" onclick="closeModal('globalSearchModal')" style="background:none;border:none;cursor:pointer;font-size:1.25rem;">&times;</button>
      </div>
      <div class="modal-body p-3">
        <div class="small text-muted mb-2 fw-semibold">Quick Suggestions</div>
        <div class="list-group list-group-flush">
          <a href="<?= base_url('creator/discover') ?>" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between py-2 border-0 rounded-3">
            <span>🔍 Discover High Payout Campaigns</span>
            <span class="badge badge-primary">Browse</span>
          </a>
          <a href="<?= base_url('creator/requests') ?>" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between py-2 border-0 rounded-3">
            <span>📩 Active Pitches &amp; Invitations</span>
            <span class="badge badge-success">View</span>
          </a>
          <a href="<?= base_url('creator/earnings') ?>" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between py-2 border-0 rounded-3">
            <span>💰 Earnings &amp; Withdrawal History</span>
            <span class="badge badge-info">Payouts</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <script src="<?= base_url('assets/js/collabhub.js?v=' . time()) ?>"></script>
</body>
</html>
