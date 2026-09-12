<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?? 'CollabHub | Connect. Collaborate. Grow.' ?></title>
  <meta name="description" content="Where brands meet the right creators for real impact. The leading SaaS influencer marketing and collaboration marketplace.">
  <!-- Bootstrap 5.3.3 Latest Version -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/css/collabhub.css?v=' . time()) ?>">
</head>
<body>

  <!-- BOOTSTRAP 5.3 LATEST RESPONSIVE FIXED HEADER NAVBAR WITH DROPDOWNS -->
  <nav class="navbar navbar-expand-lg fixed-top bg-white border-bottom py-2 shadow-sm" style="z-index: 1030;">
    <div class="container-fluid px-lg-4 px-xl-5">
      <a href="<?= base_url('/') ?>" class="brand-logo text-decoration-none me-lg-4 me-xl-5">
        <div class="brand-logo-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
        </div>
        <span>Collab<span style="color:var(--primary-600);">Hub</span></span>
      </a>

      <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collabhubNavbar" aria-controls="collabhubNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="collabhubNavbar">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-lg-2 gap-xl-3">
          <!-- SOLUTIONS DROPDOWN -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-semibold px-2 <?= (uri_string() == 'for-influencers' || uri_string() == 'for-brands') ? 'active text-primary' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Solutions
            </a>
            <ul class="dropdown-menu border-0 shadow-lg rounded-3 py-2">
              <li><a class="dropdown-item py-2 fw-medium <?= uri_string() == 'for-influencers' ? 'active' : '' ?>" href="<?= base_url('for-influencers') ?>">✨ For Influencers &amp; Creators</a></li>
              <li><a class="dropdown-item py-2 fw-medium <?= uri_string() == 'for-brands' ? 'active' : '' ?>" href="<?= base_url('for-brands') ?>">🏢 For Brands &amp; Businesses</a></li>
            </ul>
          </li>

          <!-- HOW IT WORKS -->
          <li class="nav-item">
            <a class="nav-link fw-semibold px-2 text-nowrap <?= uri_string() == 'how-it-works' ? 'active text-primary' : '' ?>" href="<?= base_url('how-it-works') ?>">How It Works</a>
          </li>

          <!-- CAMPAIGNS -->
          <li class="nav-item">
            <a class="nav-link fw-semibold px-2 text-nowrap <?= uri_string() == 'campaigns' ? 'active text-primary' : '' ?>" href="<?= base_url('campaigns') ?>">Campaigns</a>
          </li>

          <!-- PRICING -->
          <li class="nav-item">
            <a class="nav-link fw-semibold px-2 text-nowrap <?= uri_string() == 'pricing' ? 'active text-primary' : '' ?>" href="<?= base_url('pricing') ?>">Pricing</a>
          </li>

          <!-- RESOURCES DROPDOWN -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-semibold px-2 <?= (uri_string() == 'success-stories' || uri_string() == 'blog' || uri_string() == 'faq') ? 'active text-primary' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Resources
            </a>
            <ul class="dropdown-menu border-0 shadow-lg rounded-3 py-2">
              <li><a class="dropdown-item py-2 fw-medium <?= uri_string() == 'success-stories' ? 'active' : '' ?>" href="<?= base_url('success-stories') ?>">📈 Success Stories</a></li>
              <li><a class="dropdown-item py-2 fw-medium <?= uri_string() == 'blog' ? 'active' : '' ?>" href="<?= base_url('blog') ?>">📝 Creator &amp; Brand Blog</a></li>
              <li><a class="dropdown-item py-2 fw-medium <?= uri_string() == 'faq' ? 'active' : '' ?>" href="<?= base_url('faq') ?>">❓ FAQ &amp; Help Center</a></li>
            </ul>
          </li>
        </ul>

        <div class="d-flex align-items-center gap-2 mt-3 mt-lg-0">
          <a href="javascript:void(0)" onclick="openModal('globalSearchModal')" class="btn btn-icon btn-outline me-1" title="Search">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
          </a>
          <?php if (session()->get('isLoggedIn')): ?>
            <?php $dashboardUrl = session()->get('role') === 'brand' ? 'brand/dashboard' : 'creator/dashboard'; ?>
            <a href="<?= base_url($dashboardUrl) ?>" class="btn btn-primary btn-sm px-3 fw-bold">Dashboard</a>
            <a href="<?= base_url('logout') ?>" class="btn btn-outline-danger btn-sm px-3">Logout</a>
          <?php else: ?>
            <a href="<?= base_url('login') ?>" class="btn btn-outline">Login</a>
            <a href="<?= base_url('register') ?>" class="btn btn-primary">Get Started</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </nav>

  <!-- MAIN PAGE CONTENT -->
  <main style="padding-top: 72px;">
    <?= $this->renderSection('content') ?>
  </main>

  <!-- GLOBAL SEARCH MODAL -->
  <div id="globalSearchModal" class="modal-overlay">
    <div class="modal-card">
      <div class="modal-header">
        <h4 style="display:flex;align-items:center;gap:8px;">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary-600)" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
          Search CollabHub Platform
        </h4>
        <button onclick="closeModal('globalSearchModal')" style="background:none;border:none;cursor:pointer;font-size:1.2rem;color:var(--gray-500);">&times;</button>
      </div>
      <div class="modal-body">
        <div class="form-group" style="position:relative;">
          <input type="text" id="globalSearchInput" class="form-control" placeholder="Search campaigns, brands, influencers..." style="padding-left:2.5rem;font-size:1.05rem;" onkeyup="handleGlobalSearch(this.value)">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="position:absolute;left:14px;top:14px;color:var(--gray-400);"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
        </div>

        <div id="searchResultsList" style="margin-top:1rem;">
          <div style="font-size:0.8rem; font-weight:700; color:var(--gray-400); text-transform:uppercase; margin-bottom:0.5rem;">Popular Searches</div>
          <div style="display:flex; flex-wrap:wrap; gap:0.5rem;">
            <a href="<?= base_url('campaigns?category=beauty') ?>" class="badge badge-primary" style="padding:0.4rem 0.8rem;">Beauty &amp; Fashion</a>
            <a href="<?= base_url('campaigns?category=tech') ?>" class="badge badge-primary" style="padding:0.4rem 0.8rem;">Tech &amp; Gadgets</a>
            <a href="<?= base_url('campaigns?type=paid') ?>" class="badge badge-success" style="padding:0.4rem 0.8rem;">Paid Collaborations</a>
            <a href="<?= base_url('brand/influencers') ?>" class="badge badge-info" style="padding:0.4rem 0.8rem;">Top Creators</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <footer style="background:var(--gray-900); color:white; padding:4rem 0 2rem; margin-top:5rem;">
    <div class="container">
      <div class="footer-grid">
        <div>
          <div class="brand-logo" style="color:white; margin-bottom:1rem;">
            <div class="brand-logo-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
            </div>
            <span>Collab<span style="color:var(--primary-400);">Hub</span></span>
          </div>
          <p style="color:var(--gray-400); font-size:0.9rem; margin-bottom:1.5rem; max-width:300px;">
            Connecting top content creators and forward-thinking brands for high-impact collaborations.
          </p>
          <div style="display:flex; gap:0.75rem; flex-wrap:wrap;">
            <a href="#" class="btn btn-icon btn-outline" style="border-color:var(--gray-700); color:var(--gray-300);">IG</a>
            <a href="#" class="btn btn-icon btn-outline" style="border-color:var(--gray-700); color:var(--gray-300);">YT</a>
            <a href="#" class="btn btn-icon btn-outline" style="border-color:var(--gray-700); color:var(--gray-300);">TK</a>
            <a href="#" class="btn btn-icon btn-outline" style="border-color:var(--gray-700); color:var(--gray-300);">LN</a>
          </div>
        </div>

        <div>
          <h4 style="color:white; font-size:1rem; margin-bottom:1.2rem;">For Influencers</h4>
          <ul style="list-style:none; line-height:2.2; font-size:0.9rem;">
            <li><a href="<?= base_url('for-influencers') ?>" style="color:var(--gray-400);">Find Campaigns</a></li>
            <li><a href="<?= base_url('register?type=creator') ?>" style="color:var(--gray-400);">Create Creator Profile</a></li>
            <li><a href="<?= base_url('how-it-works') ?>" style="color:var(--gray-400);">Monetization Guide</a></li>
            <li><a href="<?= base_url('success-stories') ?>" style="color:var(--gray-400);">Creator Stories</a></li>
          </ul>
        </div>

        <div>
          <h4 style="color:white; font-size:1rem; margin-bottom:1.2rem;">For Brands</h4>
          <ul style="list-style:none; line-height:2.2; font-size:0.9rem;">
            <li><a href="<?= base_url('for-brands') ?>" style="color:var(--gray-400);">Discover Influencers</a></li>
            <li><a href="<?= base_url('register?type=brand') ?>" style="color:var(--gray-400);">Launch Campaign</a></li>
            <li><a href="<?= base_url('pricing') ?>" style="color:var(--gray-400);">Brand Pricing</a></li>
            <li><a href="<?= base_url('how-it-works') ?>" style="color:var(--gray-400);">ROI &amp; Analytics</a></li>
          </ul>
        </div>

        <div>
          <h4 style="color:white; font-size:1rem; margin-bottom:1.2rem;">Resources</h4>
          <ul style="list-style:none; line-height:2.2; font-size:0.9rem;">
            <li><a href="<?= base_url('blog') ?>" style="color:var(--gray-400);">Marketing Blog</a></li>
            <li><a href="<?= base_url('faq') ?>" style="color:var(--gray-400);">Help &amp; FAQ</a></li>
            <li><a href="<?= base_url('contact') ?>" style="color:var(--gray-400);">Contact Support</a></li>
            <li><a href="<?= base_url('system/states') ?>" style="color:var(--gray-400);">System Gallery</a></li>
          </ul>
        </div>

        <div>
          <h4 style="color:white; font-size:1rem; margin-bottom:1.2rem;">Company</h4>
          <ul style="list-style:none; line-height:2.2; font-size:0.9rem;">
            <li><a href="#" style="color:var(--gray-400);">About CollabHub</a></li>
            <li><a href="#" style="color:var(--gray-400);">Careers</a></li>
            <li><a href="#" style="color:var(--gray-400);">Terms of Service</a></li>
            <li><a href="#" style="color:var(--gray-400);">Privacy Policy</a></li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom">
        <div>&copy; <?= date('Y') ?> CollabHub Technologies Inc. All rights reserved.</div>
        <div>Built for Creators &amp; Brands worldwide.</div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap 5.3.3 JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/js/collabhub.js?v=' . time()) ?>"></script>
</body>
</html>
