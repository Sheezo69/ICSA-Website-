// ICSA Website - Main JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Live footer year + short copyright format
    const currentYear = new Date().getFullYear();
    document.querySelectorAll('.footer-bottom p').forEach(p => {
        p.textContent = `© ${currentYear} ICSA. All rights reserved.`;
    });

    // Top scroll progress bar
    const progressBar = document.createElement('div');
    progressBar.className = 'scroll-progress';
    document.body.appendChild(progressBar);

    // Premium card tilt interaction (desktop only)
    const tiltableCards = document.querySelectorAll('.course-card, .category-card');
    const canTilt = window.matchMedia('(hover: hover) and (pointer: fine)').matches;
    if (canTilt) {
        tiltableCards.forEach(card => {
            card.classList.add('is-tiltable');

            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const rotateY = ((x / rect.width) - 0.5) * 8;
                const rotateX = (0.5 - (y / rect.height)) * 6;
                card.classList.add('interactive-glow');
                card.style.setProperty('--mx', `${x}px`);
                card.style.setProperty('--my', `${y}px`);
                card.style.transform = `perspective(900px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-6px)`;
            });

            card.addEventListener('mouseleave', () => {
                card.classList.remove('interactive-glow');
                card.style.transform = '';
            });
        });
    }

    // Mobile Menu Toggle
    const menuToggle = document.getElementById('menuToggle');
    const nav = document.querySelector('.nav');
    
    if (menuToggle && nav) {
        menuToggle.addEventListener('click', () => {
            nav.classList.toggle('active');
            menuToggle.innerHTML = nav.classList.contains('active') ? 
                '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
        });

        // Close menu when clicking on a link
        nav.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                nav.classList.remove('active');
                menuToggle.innerHTML = '<i class="fas fa-bars"></i>';
            });
        });
    }

    // Course Filter on Courses Page
    const filterBtns = document.querySelectorAll('.filter-btn');
    const courseCards = document.querySelectorAll('.course-card');

    if (filterBtns.length > 0) {
        const applyCourseFilter = (filter) => {
            // Remove active from all buttons
            filterBtns.forEach(b => b.classList.remove('active'));

            // Activate matching button if found
            const activeBtn = Array.from(filterBtns).find(b => b.dataset.filter === filter) || filterBtns[0];
            activeBtn.classList.add('active');

            const activeFilter = activeBtn.dataset.filter;

            courseCards.forEach(card => {
                if (activeFilter === 'all' || card.dataset.category === activeFilter) {
                    card.style.display = 'block';
                    card.style.animation = 'fadeInUp 0.5s ease-out';
                } else {
                    card.style.display = 'none';
                }
            });
        };

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                applyCourseFilter(btn.dataset.filter);
            });
        });

        // Support direct category links like courses.html?category=it
        const categoryFromUrl = new URLSearchParams(window.location.search).get('category');
        if (categoryFromUrl) {
            applyCourseFilter(categoryFromUrl);
        }
    }

    // Smooth Scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Header scroll effect
    const header = document.querySelector('.header');
    let lastScroll = 0;

    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;
        const totalHeight = document.documentElement.scrollHeight - window.innerHeight;
        const progress = totalHeight > 0 ? currentScroll / totalHeight : 0;
        progressBar.style.transform = `scaleX(${Math.max(0, Math.min(1, progress))})`;

        if (currentScroll > 100) {
            header.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.1)';
        } else {
            header.style.boxShadow = '0 1px 3px 0 rgb(0 0 0 / 0.1)';
        }

        lastScroll = currentScroll;
    });

    // Form validation helper
    window.validateForm = function(form) {
        const inputs = form.querySelectorAll('input[required], textarea[required], select[required]');
        let isValid = true;

        inputs.forEach(input => {
            if (!input.value.trim()) {
                isValid = false;
                input.style.borderColor = 'var(--danger)';
                
                // Remove error styling on input
                input.addEventListener('input', function() {
                    this.style.borderColor = '';
                }, { once: true });
            }
        });

        return isValid;
    };

    // Add animation classes on scroll
    const animateOnScroll = () => {
        const elements = document.querySelectorAll('.course-card, .category-card, .feature-item, .testimonial-card');
        
        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementVisible = 150;

            if (elementTop < window.innerHeight - elementVisible) {
                element.classList.add('fade-in-up');
            }
        });
    };

    window.addEventListener('scroll', animateOnScroll);
    animateOnScroll(); // Run once on load

    // Counter animation for stats
    const animateCounters = () => {
        const counters = document.querySelectorAll('.hero-stat-value, .stat-content h4');
        
        counters.forEach(counter => {
            const target = parseInt(counter.innerText);
            if (!isNaN(target) && target > 0) {
                const duration = 2000;
                const step = target / (duration / 16);
                let current = 0;

                const updateCounter = () => {
                    current += step;
                    if (current < target) {
                        counter.innerText = Math.floor(current) + (counter.innerText.includes('+') ? '+' : '');
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.innerText = target + (counter.innerText.includes('+') ? '+' : '');
                    }
                };

                // Only animate when in view
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            updateCounter();
                            observer.unobserve(entry.target);
                        }
                    });
                });

                observer.observe(counter);
            }
        });
    };

    animateCounters();

    // Pre-fill course in contact form if URL has course parameter
    const urlParams = new URLSearchParams(window.location.search);
    const courseParam = urlParams.get('course');
    if (courseParam) {
        const courseSelect = document.querySelector('select[name="course"]');
        if (courseSelect) {
            courseSelect.value = courseParam;
        }
    }

    console.log('ICSA Website loaded successfully! ðŸŽ“');

    // Course pages: move full detail blocks into hero space
    const courseDetailContent = document.querySelector('.course-detail-content');
    const courseBlocks = document.querySelectorAll('.course-content-grid .course-block');
    if (courseDetailContent && courseBlocks.length >= 4 && !document.querySelector('.course-hero-details')) {
        const heroDetails = document.createElement('div');
        heroDetails.className = 'course-hero-details';

        Array.from(courseBlocks).slice(0, 4).forEach(block => {
            const card = document.createElement('article');
            card.className = 'course-hero-detail-card';
            card.innerHTML = block.innerHTML;
            heroDetails.appendChild(card);
        });

        courseDetailContent.appendChild(heroDetails);
        const lowerDetailsSection = document.querySelector('.course-content-section');
        if (lowerDetailsSection) {
            lowerDetailsSection.remove();
        }
    }

    // Course pages: fill "Interested in" heading with current course title
    const courseTitle = document.querySelector('.course-detail-content h1');
    const inquiryHeading = document.querySelector('.inquiry-info h2');
    if (courseTitle && inquiryHeading) {
        const title = courseTitle.textContent.trim();
        if (title) {
            inquiryHeading.textContent = `Interested in ${title}?`;
        }
    }
});

// Toast notification function
window.showToast = function(message, type = 'success') {
    const toast = document.createElement('div');
    toast.style.cssText = `
        position: fixed;
        bottom: 100px;
        right: 20px;
        padding: 1rem 1.5rem;
        background: ${type === 'success' ? 'var(--success)' : 'var(--danger)'};
        color: white;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        z-index: 10000;
        font-weight: 500;
        animation: slideInRight 0.3s ease-out;
    `;
    toast.textContent = message;
    document.body.appendChild(toast);

    setTimeout(() => {
        toast.style.animation = 'slideOutRight 0.3s ease-out';
        setTimeout(() => toast.remove(), 300);
    }, 3000);
};

// Add CSS animations
const style = document.createElement('style');
style.textContent = `
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(100px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideOutRight {
        from {
            opacity: 1;
            transform: translateX(0);
        }
        to {
            opacity: 0;
            transform: translateX(100px);
        }
    }

    .nav.active {
        display: flex;
        flex-direction: column;
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: white;
        padding: 1rem;
        box-shadow: var(--shadow-lg);
        z-index: 1000;
    }

    .nav.active .nav-link {
        padding: 1rem;
        border-bottom: 1px solid var(--gray-100);
    }

    @media (max-width: 1024px) {
        .nav {
            display: none;
        }
    }
`;
document.head.appendChild(style);
