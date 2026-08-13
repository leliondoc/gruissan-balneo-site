(function () {
  'use strict';

  // Mobile nav toggle
  const navToggle = document.querySelector('.nav-toggle');
  const mainNav = document.querySelector('.main-nav');

  if (navToggle && mainNav) {
    navToggle.addEventListener('click', function () {
      mainNav.classList.toggle('open');
      navToggle.classList.toggle('active');
      var isOpen = mainNav.classList.contains('open');
      navToggle.setAttribute('aria-expanded', String(isOpen));
      navToggle.setAttribute('aria-label', isOpen ? 'Fermer le menu' : 'Ouvrir le menu');
      document.body.classList.toggle('menu-open', isOpen);
    });
  }

  // Mobile dropdown toggles
  document.querySelectorAll('.has-dropdown > .nav-link').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      if (window.innerWidth <= 900) {
        e.preventDefault();
        var parent = btn.parentElement;
        document.querySelectorAll('.has-dropdown.open').forEach(function (item) {
          if (item !== parent) {
            item.classList.remove('open');
            var otherButton = item.querySelector(':scope > .nav-link');
            if (otherButton) otherButton.setAttribute('aria-expanded', 'false');
          }
        });
        parent.classList.toggle('open');
        btn.setAttribute('aria-expanded', String(parent.classList.contains('open')));
      }
    });
  });

  document.querySelectorAll('.main-nav a').forEach(function (link) {
    link.addEventListener('click', function () {
      if (window.innerWidth <= 1080 && mainNav && navToggle) {
        mainNav.classList.remove('open');
        navToggle.classList.remove('active');
        navToggle.setAttribute('aria-expanded', 'false');
        navToggle.setAttribute('aria-label', 'Ouvrir le menu');
        document.body.classList.remove('menu-open');
      }
    });
  });

  // Close info banner
  var bannerClose = document.querySelector('.info-banner__close');
  var infoBanner = document.querySelector('.info-banner');
  if (bannerClose && infoBanner) {
    bannerClose.addEventListener('click', function () {
      infoBanner.classList.add('hidden');
      try { sessionStorage.setItem('banner-closed', '1'); } catch (e) {}
    });
    try {
      if (sessionStorage.getItem('banner-closed') === '1') {
        infoBanner.classList.add('hidden');
      }
    } catch (e) {}
  }

  // Fade-in on scroll
  var fadeEls = document.querySelectorAll('.fade-in');
  if (fadeEls.length && 'IntersectionObserver' in window) {
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    fadeEls.forEach(function (el) { observer.observe(el); });
  } else {
    fadeEls.forEach(function (el) { el.classList.add('visible'); });
  }

  // Form handling (front-only)
  document.querySelectorAll('[data-form]').forEach(function (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var success = form.parentElement.querySelector('.form-success');
      if (success) {
        success.classList.add('visible');
        form.reset();
        setTimeout(function () { success.classList.remove('visible'); }, 5000);
      }
    });
  });

  // Header on scroll
  var header = document.querySelector('.site-header');
  if (header) {
    var onScroll = function () {
      header.classList.toggle('is-scrolled', window.scrollY > 40);
      document.body.classList.toggle('is-scrolled', window.scrollY > 40);
    };
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
  }
  var currentPath = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.main-nav a').forEach(function (link) {
    var href = link.getAttribute('href');
    if (!href) return;
    var linkPath = href.split('/').pop();
    if (linkPath === currentPath || (currentPath === '' && linkPath === 'index.html')) {
      link.classList.add('active');
    }
  });
})();
