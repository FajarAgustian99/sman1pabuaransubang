/**
 * Template Name: Mentor
 * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
 * Updated: Aug 07 2024 with Bootstrap v5.3.3
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */

(function () {
  "use strict";

  /**
   * Apply .scrolled class to body
   */
  function toggleScrolled() {
    const selectBody = document.querySelector("body");
    const selectHeader = document.querySelector("#header");

    if (!selectHeader) return;

    if (
      !selectHeader.classList.contains("scroll-up-sticky") &&
      !selectHeader.classList.contains("sticky-top") &&
      !selectHeader.classList.contains("fixed-top")
    ) {
      return;
    }

    if (window.scrollY > 100) {
      selectBody.classList.add("scrolled");
    } else {
      selectBody.classList.remove("scrolled");
    }
  }

  document.addEventListener("scroll", toggleScrolled);
  window.addEventListener("load", toggleScrolled);

  /**
   * Mobile Navigation Toggle
   */
 const mobileNavToggleBtn = document.querySelector(".mobile-nav-toggle");

console.log('Tombol ditemukan:', mobileNavToggleBtn);

if (mobileNavToggleBtn) {

  console.log('Event hamburger dipasang');

  mobileNavToggleBtn.addEventListener('click', function () {

    console.log('Hamburger diklik');

    document.body.classList.toggle('mobile-nav-active');

    console.log(document.body.className);

    this.classList.toggle('bi-list');
    this.classList.toggle('bi-x');
  });

}

  /**
   * Close mobile nav when menu clicked
   */
  document.querySelectorAll("#navmenu a").forEach((navLink) => {
    navLink.addEventListener("click", () => {
      if (document.body.classList.contains("mobile-nav-active")) {
        document.body.classList.remove("mobile-nav-active");
        if (mobileNavToggleBtn) {
          mobileNavToggleBtn.classList.remove("bi-x");
          mobileNavToggleBtn.classList.add("bi-list");
        }
      }
    });
  });

  /**
   * Mobile dropdown menu (Sudah Diperbaiki & Duplikasi Dihapus)
   */
  document.querySelectorAll(".navmenu .toggle-dropdown").forEach((dropdown) => {
    dropdown.addEventListener("click", function (e) {
      e.preventDefault();

      // Naik ke tag <a> lalu cari tag <ul> yang tepat berada setelahnya
      const parentLink = this.closest('a');
      const submenu = parentLink ? parentLink.nextElementSibling : null;

      if (parentLink) {
        parentLink.classList.toggle("active");
      }

      if (submenu && submenu.tagName === 'UL') {
        submenu.classList.toggle("dropdown-active");
      }

      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector("#preloader");

  if (preloader) {
    window.addEventListener("load", () => {
      preloader.remove();
    });
  }

  /**
   * Scroll Top Button
   */
  const scrollTop = document.querySelector(".scroll-top");

  function toggleScrollTop() {
    if (!scrollTop) return;

    if (window.scrollY > 100) {
      scrollTop.classList.add("active");
    } else {
      scrollTop.classList.remove("active");
    }
  }

  if (scrollTop) {
    scrollTop.addEventListener("click", (e) => {
      e.preventDefault();

      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });

    window.addEventListener("load", toggleScrollTop);
    document.addEventListener("scroll", toggleScrollTop);
  }

  /**
   * AOS Animation
   */
  function aosInit() {
    if (typeof AOS !== "undefined") {
      AOS.init({
        duration: 600,
        easing: "ease-in-out",
        once: true,
        mirror: false,
      });
    }
  }

  window.addEventListener("load", aosInit);

  /**
   * GLightbox
   */
  if (typeof GLightbox !== "undefined") {
    GLightbox({
      selector: ".glightbox",
    });
  }

  /**
   * PureCounter
   */
  if (typeof PureCounter !== "undefined") {
    new PureCounter();
  }

  /**
   * Swiper
   */
  function initSwiper() {
    if (typeof Swiper === "undefined") return;

    document.querySelectorAll(".init-swiper").forEach((swiperElement) => {
      const configElement =
        swiperElement.querySelector(".swiper-config");

      if (!configElement) return;

      let config = JSON.parse(
        configElement.innerHTML.trim()
      );

      new Swiper(swiperElement, config);
    });
  }

  window.addEventListener("load", initSwiper);
})();