/* ============================================================
   Radius Net — Landing Page JS
   ============================================================ */


document.addEventListener('DOMContentLoaded', () => {

  // ── Navbar scroll ─────────────────────────────────────────
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', () => {
    navbar?.classList.toggle('scrolled', window.scrollY > 30);
  }, { passive: true });

  // ── Hamburger menu ────────────────────────────────────────
  const hamburger  = document.querySelector('.hamburger');
  const mobileNav  = document.querySelector('.mobile-nav');
  const overlay    = document.querySelector('.nav-overlay');
  const mobileClose = document.querySelector('.mobile-close');

  const toggleNav = (open) => {
    mobileNav?.classList.toggle('open', open);
    overlay?.classList.toggle('open', open);
    hamburger?.classList.toggle('open', open);
    hamburger?.setAttribute('aria-expanded', open);
    mobileNav?.setAttribute('aria-hidden', !open);
    document.body.style.overflow = open ? 'hidden' : '';
  };
  hamburger?.addEventListener('click', () => toggleNav(!mobileNav?.classList.contains('open')));
  mobileClose?.addEventListener('click', () => toggleNav(false));
  overlay?.addEventListener('click', () => toggleNav(false));
  document.querySelectorAll('.mobile-link').forEach(a => a.addEventListener('click', () => toggleNav(false)));

  // ── Active nav link on scroll ─────────────────────────────
  const sections = document.querySelectorAll('section[id]');
  const navLinks  = document.querySelectorAll('.nav-links a, .mobile-link');
  if (sections.length && navLinks.length) {
    const activeObs = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          navLinks.forEach(a => {
            const href = a.getAttribute('href');
            a.classList.toggle('active', href === '#' + entry.target.id);
          });
        }
      });
    }, { rootMargin: '-30% 0px -65% 0px' });
    sections.forEach(s => activeObs.observe(s));
  }

  // ── Smooth scroll ─────────────────────────────────────────
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const target = document.querySelector(a.getAttribute('href'));
      if (target) { e.preventDefault(); target.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
    });
  });

  // ── Scroll-reveal animations ──────────────────────────────
  const obs = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        setTimeout(() => entry.target.classList.add('visible'), i * 80);
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });
  document.querySelectorAll('.fade-up').forEach(el => obs.observe(el));

  // ── Counter animation ─────────────────────────────────────
  const countObs = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el     = entry.target;
        const target = parseInt(el.dataset.target, 10);
        const suffix = el.dataset.suffix || '';
        let start    = 0;
        const step   = (ts) => {
          if (!start) start = ts;
          const progress = Math.min((ts - start) / 1800, 1);
          const ease     = 1 - Math.pow(1 - progress, 3);
          el.textContent = Math.floor(ease * target).toLocaleString('id-ID') + suffix;
          if (progress < 1) requestAnimationFrame(step);
        };
        requestAnimationFrame(step);
        countObs.unobserve(el);
      }
    });
  }, { threshold: 0.5 });
  document.querySelectorAll('[data-target]').forEach(el => countObs.observe(el));

  // ── Pricing tabs — CSS class toggle only ─────────────────
  const pricingGrid = document.getElementById('pricing-grid');
  document.querySelectorAll('.pricing-tab').forEach((tab, idx, all) => {
    tab.addEventListener('click', () => {
      all.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      pricingGrid?.classList.toggle('yearly', idx === 1);
    });
  });

  // ── FAQ accordion ─────────────────────────────────────────
  document.querySelectorAll('.faq-q').forEach(q => {
    q.addEventListener('click', () => {
      const item   = q.closest('.faq-item');
      const isOpen = item.classList.contains('open');
      document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
      if (!isOpen) item.classList.add('open');
      // Smooth scroll into view if below fold
      if (!isOpen) setTimeout(() => item.scrollIntoView({ behavior:'smooth', block:'nearest' }), 50);
    });
  });

  // ── API demo tab buttons ──────────────────────────────────
  document.querySelectorAll('.demo-tab-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const panelId = btn.dataset.panel;
      const wrap    = btn.closest('.api-demo-wrap');
      if (!wrap) return;
      wrap.querySelectorAll('.demo-tab-btn').forEach(b => b.classList.remove('active'));
      wrap.querySelectorAll('.demo-panel-wrap').forEach(p => p.classList.remove('active'));
      btn.classList.add('active');
      const panel = wrap.querySelector('#' + panelId);
      if (panel) panel.classList.add('active');
    });
  });

  // ── Copy to clipboard ─────────────────────────────────────
  document.querySelectorAll('.copy-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const codeEl = document.getElementById(btn.dataset.target);
      if (!codeEl) return;
      navigator.clipboard.writeText(codeEl.textContent).then(() => {
        const orig = btn.innerHTML;
        btn.innerHTML = '✓ Copied!';
        btn.classList.add('copied');
        setTimeout(() => { btn.innerHTML = orig; btn.classList.remove('copied'); }, 2000);
      });
    });
  });

  // ── Load plans from API ───────────────────────────────────
  loadPlans(obs);
});

// ── Helpers: pricing formula mirrors backend logic ────────
// Backend: amount = price * duration; if duration==12: amount = amount * 80 / 100
function yearlyOrig(price)   { return price * 12; }
function yearlyDisc(price)   { return Math.floor(price * 12 * 80 / 100); }
function monthlyEquiv(price) { return Math.floor(yearlyDisc(price) / 12); }

function formatRp(n) {
  return 'Rp ' + n.toLocaleString('id-ID');
}

function limitLabel(n) {
  return (n <= 0 || n >= 99999) ? 'Unlimited' : n.toLocaleString('id-ID');
}

// ── "Cocok untuk" label based on plan tier ────────────────
function planForLabel(price, maxC) {
  if (price === 0) return 'Cocok untuk RT/RW Net yang baru mulai';
  const c = (maxC <= 0 || maxC >= 99999) ? Infinity : maxC;
  if (c <= 50)   return 'Cocok untuk RT/RW Net yang berkembang';
  if (c <= 200)  return 'Cocok untuk ISP Lokal aktif';
  if (c <= 1000) return 'Cocok untuk ISP skala menengah';
  return 'Cocok untuk ISP besar &amp; enterprise';
}

// ── Tier highlights shown below API features ───────────────
function tierHighlights(price, maxC) {
  const c = (maxC <= 0 || maxC >= 99999) ? Infinity : maxC;
  if (price === 0) return [
    'RADIUS PPPoE & DHCP',
    'Billing & invoice manual',
    'WhatsApp gateway (1 device)',
    'Portal pelanggan self-service',
    'Laporan dasar',
  ];
  if (c <= 50) return [
    'RADIUS PPPoE & DHCP',
    'Invoice & reminder otomatis',
    'WhatsApp blast ke pelanggan',
    'Tiket support prioritas',
    'Export laporan Excel',
  ];
  if (c <= 200) return [
    'Semua fitur Starter',
    'Multi-router MikroTik',
    'API akses dasar (read-only)',
    'Manajemen reseller',
    'Broadcast WA massal',
    'Laporan revenue real-time',
  ];
  if (c <= 1000) return [
    'Semua fitur Growth',
    'Full REST API access',
    'FTTH / OLT management',
    'Multi-reseller + komisi otomatis',
    'Integrasi payment gateway',
    'Notifikasi WA anti-ban',
    'Priority support SLA',
  ];
  return [
    'Semua fitur Professional',
    'Pelanggan unlimited',
    'Dedicated RADIUS cluster',
    'Custom domain & branding',
    'SLA 99.9% uptime',
    'Onboarding engineer',
    'Akses API penuh + webhook',
  ];
}

// ── Render one pricing card from plan object ──────────────
function renderPlanCard(plan, idx) {
  const isFree    = plan.price === 0;
  const isPopular = !!plan.is_popular;
  const price     = plan.price;
  const maxLabel  = limitLabel(plan.max_customers);
  const delay     = (idx * 0.08).toFixed(2);
  const forLabel  = planForLabel(price, plan.max_customers);

  const checkSvg  = `<svg viewBox="0 0 12 10" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="1,5 4,8 11,1"></polyline></svg>`;
  const usersIcon = `<svg viewBox="0 0 24 24" width="13" height="13" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>`;
  const arrowIcon = `<svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>`;

  // Price block
  let priceBlock = '';
  if (isFree) {
    priceBlock = `
      <div class="price-monthly-grp">
        <div class="plan-price-free">Gratis</div>
        <div class="plan-period">Selamanya</div>
      </div>
      <div class="price-yearly-grp">
        <div class="plan-price-free">Gratis</div>
        <div class="plan-period">Selamanya</div>
      </div>`;
  } else {
    priceBlock = `
      <div class="price-monthly-grp">
        <div class="plan-price">${formatRp(price)}</div>
        <div class="plan-period">per bulan</div>
      </div>
      <div class="price-yearly-grp">
        <div class="plan-price-orig">${formatRp(yearlyOrig(price))}/tahun</div>
        <div class="plan-price-disc">${formatRp(yearlyDisc(price))}</div>
        <div class="plan-period">per tahun <span class="savings-pill">Hemat 20%</span></div>
        <div class="plan-price-equiv">&#8776; ${formatRp(monthlyEquiv(price))}/bulan</div>
      </div>`;
  }

  // Use tier highlights (fallback jika API features kosong/sedikit)
  const apiFeats = (plan.features || []).filter(f => f && f.trim());
  const highlights = apiFeats.length >= 4
    ? apiFeats.map(f => escHtml(f))
    : tierHighlights(price, plan.max_customers);

  const featureRows = highlights
    .map(f => `<div class="plan-feature">${checkSvg}<span>${f}</span></div>`)
    .join('');

  const popularBadge = isPopular
    ? `<div class="popular-badge"><span class="popular-star">★</span> Paling Populer</div>`
    : '';
  const btnClass = isPopular ? 'btn-primary' : 'btn-outline';
  const btnText  = isFree ? 'Mulai Gratis' : `Pilih ${escHtml(plan.name)}`;
  const cardClass = ['pricing-card', isPopular ? 'popular' : '', 'fade-up'].filter(Boolean).join(' ');

  return `
    <div class="${cardClass}" style="transition-delay:${delay}s">
      ${popularBadge}
      <div class="plan-header">
        <div class="plan-name">${escHtml(plan.name)}</div>
        <div class="plan-for">${forLabel}</div>
      </div>
      <div class="plan-divider"></div>
      <div class="plan-price-wrap">${priceBlock}</div>
      <div class="plan-limit-chip">${usersIcon} Maks. ${maxLabel} Pelanggan</div>
      <div class="plan-features">${featureRows}</div>
      <div class="plan-spacer"></div>
      <div class="plan-btn">
        <a href="https://app.dradius.net/register" class="btn ${btnClass}">${btnText} ${arrowIcon}</a>
      </div>
    </div>`;
}

function escHtml(str) {
  return String(str)
    .replace(/&/g, '&amp;')
    .replace(/</g, '&lt;')
    .replace(/>/g, '&gt;')
    .replace(/"/g, '&quot;');
}

// ── Fetch plans from backend API and render ───────────────
async function loadPlans(obs) {
  const grid = document.getElementById('pricing-grid');
  if (!grid) return;

  try {
    const res   = await fetch('/api/v1/auth/plans', { cache: 'no-store' });
    if (!res.ok) throw new Error('HTTP ' + res.status);
    const json  = await res.json();
    const plans = json.data || [];

    if (!plans.length) throw new Error('Empty');

    grid.innerHTML = plans.map((p, i) => renderPlanCard(p, i)).join('');

    // Re-attach scroll observer to newly rendered cards
    grid.querySelectorAll('.fade-up').forEach(el => obs.observe(el));

    // Re-apply yearly class if tab was already switched before plans loaded
    if (grid.classList.contains('yearly')) {
      // class already there, CSS handles it
    }
  } catch (e) {
    grid.innerHTML = `
      <div class="plans-error">
        <p>&#9888; Gagal memuat paket. <button onclick="location.reload()" class="btn btn-outline" style="padding:8px 18px;font-size:13px">Refresh</button></p>
      </div>`;
    console.error('loadPlans error:', e);
  }
}

// ── WhatsApp Welcome Widget ───────────────────────────────
document.addEventListener('DOMContentLoaded', function () {
  const WA_NUMBER  = '6285121398354';
  const WA_MESSAGE = 'Halo, saya tertarik dengan D Radius! Boleh saya tahu lebih lanjut?';
  const DELAY_MS   = 5000;
  const BUBBLE_KEY = 'wa_bubble_dismissed'; // hanya kontrol bubble, bukan FAB

  const waURL = 'https://wa.me/' + WA_NUMBER + '?text=' + encodeURIComponent(WA_MESSAGE);

  const widget = document.createElement('div');
  widget.className = 'wa-widget';
  widget.innerHTML = `
    <div class="wa-bubble" id="wa-bubble">
      <button class="wa-bubble-close" id="wa-close" aria-label="Tutup">&#x2715;</button>
      <strong>👋 Halo! Ada yang bisa kami bantu?</strong>
      Kami siap membantu Anda mengelola ISP dengan lebih mudah dan efisien.
    </div>
    <a class="wa-fab" id="wa-fab" href="${waURL}" target="_blank" rel="noopener noreferrer" aria-label="Chat WhatsApp">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
        <path d="M12 0C5.373 0 0 5.373 0 12c0 2.127.558 4.122 1.532 5.85L.057 23.5a.5.5 0 0 0 .608.61l5.788-1.516A11.95 11.95 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.9a9.888 9.888 0 0 1-5.031-1.373l-.36-.214-3.733.979.997-3.645-.235-.374A9.86 9.86 0 0 1 2.1 12C2.1 6.534 6.534 2.1 12 2.1c5.466 0 9.9 4.434 9.9 9.9 0 5.466-4.434 9.9-9.9 9.9z"/>
      </svg>
      <span class="wa-fab-badge">1</span>
    </a>
  `;
  document.body.appendChild(widget);

  const bubble = document.getElementById('wa-bubble');
  const fab    = document.getElementById('wa-fab');
  const close  = document.getElementById('wa-close');
  const bubbleDismissed = sessionStorage.getItem(BUBBLE_KEY);

  // FAB selalu muncul setelah 5 detik
  setTimeout(function () {
    widget.classList.add('visible');
    fab.classList.add('show');
    // Bubble hanya muncul jika belum pernah di-dismiss di sesi ini
    if (!bubbleDismissed) {
      setTimeout(function () { bubble.classList.add('show'); }, 600);
    }
  }, DELAY_MS);

  // Dismiss hanya bubble saat tombol X diklik — FAB tetap ada
  close.addEventListener('click', function (e) {
    e.preventDefault();
    bubble.classList.remove('show');
    sessionStorage.setItem(BUBBLE_KEY, '1');
  });

  // Dismiss bubble saat FAB diklik, FAB tetap tampil
  fab.addEventListener('click', function () {
    bubble.classList.remove('show');
    sessionStorage.setItem(BUBBLE_KEY, '1');
  });
});
