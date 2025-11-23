/**
 * CreativeIQ Theme JavaScript
 *
 * @package CreativeIQ
 */

(function() {
    'use strict';

    // Mobile Menu Toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const mainNavigation = document.querySelector('.main-navigation');

    if (menuToggle && mainNavigation) {
        menuToggle.addEventListener('click', function() {
            mainNavigation.classList.toggle('toggled');
            const expanded = mainNavigation.classList.contains('toggled');
            menuToggle.setAttribute('aria-expanded', expanded);
        });
    }

    // Smooth Scroll for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#') return;
            
            e.preventDefault();
            const target = document.querySelector(href);
            
            if (target) {
                const headerOffset = 80;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });

                // Close mobile menu if open
                if (mainNavigation && mainNavigation.classList.contains('toggled')) {
                    mainNavigation.classList.remove('toggled');
                    menuToggle.setAttribute('aria-expanded', 'false');
                }
            }
        });
    });

    // Form Validation Enhancement
    const contactForm = document.querySelector('.contact-form-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            const requiredFields = contactForm.querySelectorAll('[required]');
            let isValid = true;

            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.style.borderColor = '#ef4444';
                } else {
                    field.style.borderColor = '';
                }
            });

            if (!isValid) {
                e.preventDefault();
                alert('Please fill in all required fields.');
            }
        });
    }

    // Scroll to Top Button (optional enhancement)
    let scrollTopBtn = document.createElement('button');
    scrollTopBtn.innerHTML = '↑';
    scrollTopBtn.className = 'scroll-to-top';
    scrollTopBtn.setAttribute('aria-label', 'Scroll to top');
    scrollTopBtn.style.cssText = `
        position: fixed;
        bottom: 2rem;
        right: 2rem;
        width: 48px;
        height: 48px;
        background: #8B5CF6;
        color: white;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        font-size: 1.5rem;
        display: none;
        z-index: 999;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        transition: all 0.3s;
    `;
    
    scrollTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            scrollTopBtn.style.display = 'flex';
            scrollTopBtn.style.alignItems = 'center';
            scrollTopBtn.style.justifyContent = 'center';
        } else {
            scrollTopBtn.style.display = 'none';
        }
    });

    document.body.appendChild(scrollTopBtn);

    // Add hover effect to scroll button
    scrollTopBtn.addEventListener('mouseenter', function() {
        this.style.background = '#7C3AED';
        this.style.transform = 'translateY(-2px)';
    });

    scrollTopBtn.addEventListener('mouseleave', function() {
        this.style.background = '#8B5CF6';
        this.style.transform = 'translateY(0)';
    });

})();

