/**
 * Template Name: iPortfolio
 * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
 * Updated: Jun 29 2024 with Bootstrap v5.3.3
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */

(function () {
  "use strict";

  /**
   * Header toggle
   */
  const headerToggleBtn = document.querySelector('.header-toggle');

  function headerToggle() {
    const header = document.querySelector('#header');
    if (!header || !headerToggleBtn) return;

    header.classList.toggle('header-show');
    headerToggleBtn.classList.toggle('bi-list');
    headerToggleBtn.classList.toggle('bi-x');
  }

  if (headerToggleBtn) {
    headerToggleBtn.addEventListener('click', headerToggle);
  }

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.header-show')) {
        headerToggle();
      }
    });
  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function (e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  const scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (!scrollTop) return;
    window.scrollY > 100
      ? scrollTop.classList.add('active')
      : scrollTop.classList.remove('active');
  }

  if (scrollTop) {
    scrollTop.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Animation on scroll
   */
  function aosInit() {
    if (typeof AOS === 'undefined') return;
    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  /**
   * Typed.js
   */
  const selectTyped = document.querySelector('.typed');
  if (selectTyped && typeof Typed !== 'undefined') {
    let typed_strings = selectTyped.getAttribute('data-typed-items');
    typed_strings = typed_strings.split(',');
    new Typed('.typed', {
      strings: typed_strings,
      loop: true,
      typeSpeed: 100,
      backSpeed: 50,
      backDelay: 2000
    });
  }

  /**
   * Pure Counter
   */
  if (typeof PureCounter !== 'undefined') {
    new PureCounter();
  }

  /**
   * Skills animation
   */
  document.querySelectorAll('.skills-animation').forEach(item => {
    if (typeof Waypoint === 'undefined') return;

    new Waypoint({
      element: item,
      offset: '80%',
      handler: function () {
        item.querySelectorAll('.progress .progress-bar').forEach(el => {
          el.style.width = el.getAttribute('aria-valuenow') + '%';
        });
      }
    });
  });

  /**
   * GLightbox
   */
  if (typeof GLightbox !== 'undefined') {
    GLightbox({ selector: '.glightbox' });
  }

  /**
   * Isotope
   */
  document.querySelectorAll('.isotope-layout').forEach(isotopeItem => {
    const layout = isotopeItem.getAttribute('data-layout') ?? 'masonry';
    const filter = isotopeItem.getAttribute('data-default-filter') ?? '*';
    const sort = isotopeItem.getAttribute('data-sort') ?? 'original-order';

    if (
      typeof Isotope === 'undefined' ||
      typeof imagesLoaded === 'undefined'
    ) return;

    imagesLoaded(isotopeItem.querySelector('.isotope-container'), function () {
      const initIsotope = new Isotope(
        isotopeItem.querySelector('.isotope-container'),
        {
          itemSelector: '.isotope-item',
          layoutMode: layout,
          filter: filter,
          sortBy: sort
        }
      );

      isotopeItem.querySelectorAll('.isotope-filters li').forEach(filters => {
        filters.addEventListener('click', function () {
          isotopeItem
            .querySelector('.isotope-filters .filter-active')
            ?.classList.remove('filter-active');
          this.classList.add('filter-active');
          initIsotope.arrange({
            filter: this.getAttribute('data-filter')
          });
          aosInit();
        });
      });
    });
  });

  /**
   * Swiper
   */
  function initSwiper() {
    if (typeof Swiper === 'undefined') return;

    document.querySelectorAll('.init-swiper').forEach(swiperElement => {
      const configEl = swiperElement.querySelector('.swiper-config');
      if (!configEl) return;

      const config = JSON.parse(configEl.innerHTML.trim());
      new Swiper(swiperElement, config);
    });
  }

  window.addEventListener('load', initSwiper);

  /**
   * Hash scroll fix
   */
  window.addEventListener('load', () => {
    if (!window.location.hash) return;

    const section = document.querySelector(window.location.hash);
    if (!section) return;

    setTimeout(() => {
      const scrollMarginTop = getComputedStyle(section).scrollMarginTop;
      window.scrollTo({
        top: section.offsetTop - parseInt(scrollMarginTop),
        behavior: 'smooth'
      });
    }, 100);
  });

  /**
   * Navmenu scrollspy
   */
  const navmenulinks = document.querySelectorAll('.navmenu a');

  function navmenuScrollspy() {
    navmenulinks.forEach(link => {
      if (!link.hash) return;

      const section = document.querySelector(link.hash);
      if (!section) return;

      const position = window.scrollY + 200;
      if (
        position >= section.offsetTop &&
        position <= section.offsetTop + section.offsetHeight
      ) {
        document
          .querySelectorAll('.navmenu a.active')
          .forEach(el => el.classList.remove('active'));
        link.classList.add('active');
      } else {
        link.classList.remove('active');
      }
    });
  }

  window.addEventListener('load', navmenuScrollspy);
  document.addEventListener('scroll', navmenuScrollspy);

})();
