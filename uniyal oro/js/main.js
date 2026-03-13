document.addEventListener('DOMContentLoaded', () => {
    // Current Year for Footer
    const yearEl = document.getElementById('year');
    if(yearEl) {
        yearEl.textContent = new Date().getFullYear();
    }

    // Sticky Header
    const header = document.getElementById('header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 30) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // Mobile Menu Toggle
    const mobileBtn = document.querySelector('.mobile-menu-btn');
    const nav = document.querySelector('.main-nav');
    
    if(mobileBtn) {
        mobileBtn.addEventListener('click', () => {
            nav.classList.toggle('active');
            const icon = mobileBtn.querySelector('i');
            if(nav.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    }

    // Accordion Logic
    const accordionHeaders = document.querySelectorAll('.accordion-header');
    
    accordionHeaders.forEach(header => {
        header.addEventListener('click', () => {
            const content = header.nextElementSibling;
            const isActive = header.classList.contains('active');
            
            // Close all
            document.querySelectorAll('.accordion-content').forEach(item => {
                item.style.maxHeight = null;
            });
            document.querySelectorAll('.accordion-header').forEach(item => {
                item.classList.remove('active');
            });

            // If not active before, open it
            if (!isActive) {
                header.classList.add('active');
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    });

    // Smooth Scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if(targetId === '#') return;
            
            const target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                // close mobile menu if open
                if (nav.classList.contains('active')) {
                    nav.classList.remove('active');
                    const icon = mobileBtn.querySelector('i');
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
                
                const headerOffset = 80;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: "smooth"
                });
            }
        });
    });
});
