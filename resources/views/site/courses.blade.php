@extends('layouts.site')

@section('title', 'Our Courses | ICSA - International Institute of Computer Science and Administration')
@section('description', 'Explore 20+ professional courses at ICSA Kuwait. IT, UK Diploma Programs, and Language courses. Enroll now and build your career.')
@php($showHeaderLogin = false)

@section('content')
<!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Our Courses</h1>
            <p>Discover 20+ professional courses designed to help you build a successful career in IT, Business, and more.</p>
            <div class="breadcrumb">
                <a href="{{ route('site.home') }}">Home</a>
                <span>/</span>
                <span>Courses</span>
            </div>
        </div>
    </section>

    <!-- Course Filter -->
    <section class="course-filter">
        <div class="container">
            <div class="filter-buttons">
                <button class="filter-btn active" data-filter="all">All Courses</button>
                <button class="filter-btn" data-filter="it">IT & Technical</button>
                <button class="filter-btn" data-filter="diploma">UK Diploma Programs</button>
                <button class="filter-btn" data-filter="language">Language & Professional</button>
            </div>
        </div>
    </section>

    <!-- All Courses -->
    <section class="section featured-courses" style="padding-top: 3rem;">
        <div class="container">
            <div class="courses-grid" id="coursesGrid">
                <!-- IT & Technical Courses -->
                
                <!-- Course 1: Computer Secretarial -->
                <div class="course-card" data-category="it">
                    <div class="course-image">
                        <img src="{{ asset('images/course-computer-secretarial.jpg') }}" alt="Computer Secretarial">
                    </div>
                    <div class="course-content">
                        <span class="course-category">IT & Technical</span>
                        <h3 class="course-title">Computer Secretarial</h3>
                        <p class="course-description">Master Microsoft Office, business correspondence, and modern office administration skills for executive roles.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 72 Hours</span>
                            <span class="course-meta-item"><i class="fas fa-signal"></i> Beginner</span>
                        </div>
                        <div class="course-footer">
                            <a href="{{ route('site.course', 'computer-secretarial') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course 2: Office Management -->
                <div class="course-card" data-category="it">
                    <div class="course-image">
                        <img src="{{ asset('images/course-office-management.jpg') }}" alt="Office Management">
                    </div>
                    <div class="course-content">
                        <span class="course-category">IT & Technical</span>
                        <h3 class="course-title">Office Management</h3>
                        <p class="course-description">Develop managerial and supervisory skills to effectively manage office operations and lead teams.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 4 Months</span>
                            <span class="course-meta-item"><i class="fas fa-signal"></i> Intermediate</span>
                        </div>
                        <div class="course-footer">
                            <a href="{{ route('site.course', 'office-management') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course 3: Graphics Designing -->
                <div class="course-card" data-category="it">
                    <div class="course-image">
                        <img src="{{ asset('images/course-graphics-designing.jpg') }}" alt="Graphics Designing">
                        <span class="course-badge">Popular</span>
                    </div>
                    <div class="course-content">
                        <span class="course-category">IT & Technical</span>
                        <h3 class="course-title">Graphics Designing</h3>
                        <p class="course-description">Learn Adobe Photoshop & Illustrator to create professional visual content for branding and marketing.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 72 Hours</span>
                            <span class="course-meta-item"><i class="fas fa-signal"></i> Beginner</span>
                        </div>
                        <div class="course-footer">
                            <a href="{{ route('site.course', 'graphics-designing') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course 4: Multimedia & Motion Graphics -->
                <div class="course-card" data-category="it">
                    <div class="course-image">
                        <img src="{{ asset('images/course-multimedia-motion-graphics.jpg') }}" alt="Multimedia & Motion Graphics">
                    </div>
                    <div class="course-content">
                        <span class="course-category">IT & Technical</span>
                        <h3 class="course-title">Multimedia & Motion Graphics</h3>
                        <p class="course-description">Create engaging video content, animations, and motion graphics for digital platforms.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 72 Hours</span>
                            <span class="course-meta-item"><i class="fas fa-signal"></i> Intermediate</span>
                        </div>
                        <div class="course-footer">
                            <a href="{{ route('site.course', 'multimedia-motion-graphics') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course 5: Web Designing -->
                <div class="course-card" data-category="it">
                    <div class="course-image">
                        <img src="{{ asset('images/course-web-designing.jpg') }}" alt="Web Designing">
                    </div>
                    <div class="course-content">
                        <span class="course-category">IT & Technical</span>
                        <h3 class="course-title">Web Designing</h3>
                        <p class="course-description">Design modern, responsive websites with professional layouts and user-friendly interfaces.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 72 Hours</span>
                            <span class="course-meta-item"><i class="fas fa-signal"></i> Beginner</span>
                        </div>
                        <div class="course-footer">
                            <a href="{{ route('site.course', 'web-designing') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course 6: Programming & Web Development -->
                <div class="course-card" data-category="it">
                    <div class="course-image">
                        <img src="{{ asset('images/course-programming-web-development.jpg') }}" alt="Programming & Web Development">
                        <span class="course-badge">Popular</span>
                    </div>
                    <div class="course-content">
                        <span class="course-category">IT & Technical</span>
                        <h3 class="course-title">Programming & Web Development</h3>
                        <p class="course-description">Build dynamic websites and web applications with hands-on training in modern technologies.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 3 Months</span>
                            <span class="course-meta-item"><i class="fas fa-signal"></i> All Levels</span>
                        </div>
                        <div class="course-footer">
                            <a href="{{ route('site.course', 'programming-web-development') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course 7: PC, Laptop Maintenance & Networking -->
                <div class="course-card" data-category="it">
                    <div class="course-image">
                        <img src="{{ asset('images/course-pc-networking.jpg') }}" alt="PC & Networking">
                    </div>
                    <div class="course-content">
                        <span class="course-category">IT & Technical</span>
                        <h3 class="course-title">PC, Laptop Maintenance & Networking</h3>
                        <p class="course-description">Learn computer hardware, troubleshooting, OS installation, and networking essentials.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 4 Months</span>
                            <span class="course-meta-item"><i class="fas fa-signal"></i> Beginner</span>
                        </div>
                        <div class="course-footer">
                            <a href="{{ route('site.course', 'pc-networking') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course 8: AutoCAD 2D & 3D -->
                <div class="course-card" data-category="it">
                    <div class="course-image">
                        <img src="{{ asset('images/course-autocad-2d-3d.jpg') }}" alt="AutoCAD">
                    </div>
                    <div class="course-content">
                        <span class="course-category">IT & Technical</span>
                        <h3 class="course-title">AutoCAD 2D & 3D</h3>
                        <p class="course-description">Professional drafting and design training for engineering and architectural applications.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 72 Hours</span>
                            <span class="course-meta-item"><i class="fas fa-signal"></i> All Levels</span>
                        </div>
                        <div class="course-footer">
                            <a href="{{ route('site.course', 'autocad-2d-3d') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course 9: 3D Studio Max -->
                <div class="course-card" data-category="it">
                    <div class="course-image">
                        <img src="{{ asset('images/course-3d-studio-max.jpg') }}" alt="3D Studio Max">
                    </div>
                    <div class="course-content">
                        <span class="course-category">IT & Technical</span>
                        <h3 class="course-title">3D Studio Max</h3>
                        <p class="course-description">Master 3D modeling, rendering, and visualization for architecture and interior design.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 72 Hours</span>
                            <span class="course-meta-item"><i class="fas fa-signal"></i> Intermediate</span>
                        </div>
                        <div class="course-footer">
                            <a href="{{ route('site.course', '3d-studio-max') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course 10: Revit -->
                <div class="course-card" data-category="it">
                    <div class="course-image">
                        <img src="{{ asset('images/course-revit.jpg') }}" alt="Revit">
                    </div>
                    <div class="course-content">
                        <span class="course-category">IT & Technical</span>
                        <h3 class="course-title">Revit</h3>
                        <p class="course-description">Building Information Modeling (BIM) training for architectural and structural projects.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 72 Hours</span>
                            <span class="course-meta-item"><i class="fas fa-signal"></i> Intermediate</span>
                        </div>
                        <div class="course-footer">
                            <a href="{{ route('site.course', 'revit') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course 11: SketchUp -->
                <div class="course-card" data-category="it">
                    <div class="course-image">
                        <img src="{{ asset('images/course-sketchup.jpg') }}" alt="SketchUp">
                    </div>
                    <div class="course-content">
                        <span class="course-category">IT & Technical</span>
                        <h3 class="course-title">SketchUp</h3>
                        <p class="course-description">3D modeling software training for architecture and interior design visualization.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 72 Hours</span>
                            <span class="course-meta-item"><i class="fas fa-signal"></i> Beginner</span>
                        </div>
                        <div class="course-footer">
                            <a href="{{ route('site.course', 'sketchup') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- UK Diploma Programs -->

                <!-- Course 12: UK Diploma in Strategic Management & Leadership -->
                <div class="course-card" data-category="diploma">
                    <div class="course-image">
                        <img src="{{ asset('images/course-uk-diploma-business-management.jpg') }}" alt="Strategic Management">
                        <span class="course-badge">Premium</span>
                    </div>
                    <div class="course-content">
                        <span class="course-category">UK Diploma</span>
                        <h3 class="course-title">UK Diploma in Strategic Management & Leadership</h3>
                        <p class="course-description">Internationally recognized qualification in leadership strategies and organizational management.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 9-18 Months</span>
                            <span class="course-meta-item"><i class="fas fa-award"></i> Certified</span>
                        </div>
                        <div class="course-footer">
                            <a href="{{ route('site.course', 'uk-diploma-strategic-management') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course 13: UK Diploma in Health & Social Care -->
                <div class="course-card" data-category="diploma">
                    <div class="course-image">
                        <img src="{{ asset('images/course-uk-diploma-health-social-care.jpg') }}" alt="Health & Social Care">
                    </div>
                    <div class="course-content">
                        <span class="course-category">UK Diploma</span>
                        <h3 class="course-title">UK Diploma in Health & Social Care</h3>
                        <p class="course-description">Healthcare management, patient care standards, and social service systems training.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 9-18 Months</span>
                            <span class="course-meta-item"><i class="fas fa-award"></i> Certified</span>
                        </div>
                        <div class="course-footer">
                            <a href="{{ route('site.course', 'uk-diploma-health-social-care') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course 14: UK Diploma in Information Technology -->
                <div class="course-card" data-category="diploma">
                    <div class="course-image">
                        <img src="{{ asset('images/course-uk-diploma-information-technology.jpg') }}" alt="IT Diploma">
                    </div>
                    <div class="course-content">
                        <span class="course-category">UK Diploma</span>
                        <h3 class="course-title">UK Diploma in Information Technology</h3>
                        <p class="course-description">Advanced IT qualification covering systems, networking, and digital infrastructure.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 9-18 Months</span>
                            <span class="course-meta-item"><i class="fas fa-award"></i> Certified</span>
                        </div>
                        <div class="course-footer">
                            <a href="{{ route('site.course', 'uk-diploma-information-technology') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course 15: UK Diploma in Accounting & Finance -->
                <div class="course-card" data-category="diploma">
                    <div class="course-image">
                        <img src="{{ asset('images/course-uk-diploma-accounting-finance.jpg') }}" alt="Accounting & Finance">
                    </div>
                    <div class="course-content">
                        <span class="course-category">UK Diploma</span>
                        <h3 class="course-title">UK Diploma in Accounting & Finance</h3>
                        <p class="course-description">Accounting principles, financial reporting, taxation, and corporate finance.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 9-18 Months</span>
                            <span class="course-meta-item"><i class="fas fa-award"></i> Certified</span>
                        </div>
                        <div class="course-footer">
                            <a href="{{ route('site.course', 'uk-diploma-accounting-finance') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course 16: UK Diploma in Hospitality & Tourism -->
                <div class="course-card" data-category="diploma">
                    <div class="course-image">
                        <img src="{{ asset('images/course-uk-diploma-hospitality-tourism.jpg') }}" alt="Hospitality & Tourism">
                    </div>
                    <div class="course-content">
                        <span class="course-category">UK Diploma</span>
                        <h3 class="course-title">UK Diploma in Hospitality & Tourism Management</h3>
                        <p class="course-description">Hotel management, tourism operations, and customer service leadership.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 9-18 Months</span>
                            <span class="course-meta-item"><i class="fas fa-award"></i> Certified</span>
                        </div>
                        <div class="course-footer">
                            <a href="{{ route('site.course', 'uk-diploma-hospitality-tourism') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course 17: UK Diploma in Business Management -->
                <div class="course-card" data-category="diploma">
                    <div class="course-image">
                        <img src="{{ asset('images/course-uk-diploma-business-management.jpg') }}" alt="Business Management">
                        <span class="course-badge">Popular</span>
                    </div>
                    <div class="course-content">
                        <span class="course-category">UK Diploma</span>
                        <h3 class="course-title">UK Diploma in Business Management</h3>
                        <p class="course-description">Comprehensive training in business operations, marketing, HR, and strategic planning.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 9-18 Months</span>
                            <span class="course-meta-item"><i class="fas fa-award"></i> Certified</span>
                        </div>
                        <div class="course-footer">
                            <a href="{{ route('site.course', 'uk-diploma-business-management') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course 18: UK Diploma in Business Innovation & Entrepreneurship -->
                <div class="course-card" data-category="diploma">
                    <div class="course-image">
                        <img src="{{ asset('images/course-uk-diploma-entrepreneurship.jpg') }}" alt="Entrepreneurship">
                    </div>
                    <div class="course-content">
                        <span class="course-category">UK Diploma</span>
                        <h3 class="course-title">UK Diploma in Business Innovation & Entrepreneurship</h3>
                        <p class="course-description">Startup development, innovation strategies, and business creation.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 9-18 Months</span>
                            <span class="course-meta-item"><i class="fas fa-award"></i> Certified</span>
                        </div>
                        <div class="course-footer">
                            <a href="{{ route('site.course', 'uk-diploma-entrepreneurship') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Language & Professional Courses -->

                <!-- Course 19: IELTS Preparation -->
                <div class="course-card" data-category="language">
                    <div class="course-image">
                        <img src="{{ asset('images/course-ielts-preparation.jpg') }}" alt="IELTS Preparation">
                        <span class="course-badge">High Demand</span>
                    </div>
                    <div class="course-content">
                        <span class="course-category">Language</span>
                        <h3 class="course-title">IELTS Preparation</h3>
                        <p class="course-description">Comprehensive preparation to achieve high band scores in all four IELTS modules.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 30-60 Hours</span>
                            <span class="course-meta-item"><i class="fas fa-signal"></i> All Levels</span>
                        </div>
                        <div class="course-footer">
                            <a href="{{ route('site.course', 'ielts-preparation') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course 20: English Enhancement -->
                <div class="course-card" data-category="language">
                    <div class="course-image">
                        <img src="{{ asset('images/course-english-enhancement.jpg') }}" alt="English Enhancement">
                    </div>
                    <div class="course-content">
                        <span class="course-category">Language</span>
                        <h3 class="course-title">English Enhancement</h3>
                        <p class="course-description">Improve grammar, vocabulary, pronunciation, and communication skills.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 4 Months</span>
                            <span class="course-meta-item"><i class="fas fa-signal"></i> All Levels</span>
                        </div>
                        <div class="course-footer">
                            <a href="{{ route('site.course', 'english-enhancement') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course 21: Arabic Learning -->
                <div class="course-card" data-category="language">
                    <div class="course-image">
                        <img src="{{ asset('images/course-arabic-learning.png') }}" alt="Arabic Learning">
                    </div>
                    <div class="course-content">
                        <span class="course-category">Language</span>
                        <h3 class="course-title">Arabic Learning</h3>
                        <p class="course-description">Beginner to advanced Arabic language training covering reading, writing, and speaking.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 3 Months</span>
                            <span class="course-meta-item"><i class="fas fa-signal"></i> All Levels</span>
                        </div>
                        <div class="course-footer">
                            <a href="{{ route('site.course', 'arabic-learning') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course 22: Airline Ticketing & Travel Agent -->
                <div class="course-card" data-category="language">
                    <div class="course-image">
                        <img src="{{ asset('images/course-airline-ticketing.jpg') }}" alt="Airline Ticketing">
                    </div>
                    <div class="course-content">
                        <span class="course-category">Professional</span>
                        <h3 class="course-title">Airline Ticketing & Travel Agent</h3>
                        <p class="course-description">Professional training in airline reservation systems and travel agency operations.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 2 Months</span>
                            <span class="course-meta-item"><i class="fas fa-signal"></i> Beginner</span>
                        </div>
                        <div class="course-footer">
                            <a href="{{ route('site.course', 'airline-ticketing') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2>Can't Find What You're Looking For?</h2>
                <p>Contact us to learn more about our courses and find the perfect program for your career goals.</p>
                <div class="cta-buttons">
                    <a href="{{ route('site.contact') }}" class="btn btn-secondary btn-lg">Contact Us</a>
                    <a href="https://wa.me/96597674076" class="btn btn-outline btn-lg" style="border-color: var(--primary-dark); color: var(--primary-dark);" target="_blank" rel="noopener">
                        <i class="fab fa-whatsapp"></i> WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
@endsection
