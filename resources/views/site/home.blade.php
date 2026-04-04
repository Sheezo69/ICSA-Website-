@extends('layouts.site')

@section('title', 'ICSA - International Institute of Computer Science and Administration | Kuwait')
@section('description', 'ICSA offers professional courses in IT, UK Diploma Programs, and Language Training in Kuwait. Enroll now for Computer Secretarial, Graphics Design, Web Development, and more.')
@php($showHeaderLogin = true)

@section('content')
<!-- Hero Section -->
    <section class="hero">
        <div class="hero-pattern"></div>
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">Build Your Future with <span>Professional Education</span></h1>
                    <p class="hero-description">Join Kuwait's leading institute for Computer Science, Administration, and Professional Development. Over 20 specialized courses designed to launch your career.</p>
                    <div class="hero-buttons">
                        <a href="{{ route('site.courses') }}" class="btn btn-primary btn-lg">Explore Courses</a>
                        <a href="{{ route('site.contact') }}" class="btn btn-white btn-lg">Contact Us</a>
                    </div>
                    <div class="hero-stats">
                        <div class="hero-stat">
                            <span class="hero-stat-value">20+</span>
                            <span class="hero-stat-label">Professional Courses</span>
                        </div>
                        <div class="hero-stat">
                            <span class="hero-stat-value">18000+</span>
                            <span class="hero-stat-label">Graduates</span>
                        </div>
                        <div class="hero-stat">
                            <span class="hero-stat-value">24+</span>
                            <span class="hero-stat-label">Years Experience</span>
                        </div>
                    </div>
                </div>          
                <div class="hero-image">
                    <img src="{{ asset('images/hero-icsa-campus.jpg') }}" alt="ICSA Students Learning">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Bar -->
    <section class="stats-bar">
        <div class="container">
            <div class="stats-bar-content">
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <div class="stat-content">
                        <h4>11</h4>
                        <p>IT & Technical Courses</p>
                    </div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div class="stat-content">
                        <h4>7</h4>
                        <p>UK Diploma Programs</p>
                    </div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fas fa-language"></i>
                    </div>
                    <div class="stat-content">
                        <h4>3</h4>
                        <p>Language Courses</p>
                    </div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-content">
                        <h4>100%</h4>
                        <p>Student Satisfaction</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Accreditation Partners -->
    <section class="partners-strip">
        <div class="container">
            <div class="partners-strip-content">
                <p class="partners-strip-label">Accredited &amp; Recognized By</p>
                <div class="partners-marquee">
                    <div class="partners-marquee-track">
                        <div class="partners-marquee-group">
                            <img src="{{ asset('images/athe.png') }}" alt="ATHE">
                            <img src="{{ asset('images/athe white.png') }}" alt="ATHE">
                            <img src="{{ asset('images/pearson.png') }}" alt="Pearson">
                            <img src="{{ asset('images/ielts.png') }}" alt="IELTS">
                            <img src="{{ asset('images/qualifi.png') }}" alt="Qualifi">
                            <img src="{{ asset('images/wes.png') }}" alt="WES">
                            <img src="{{ asset('images/amca.png') }}" alt="AMCA">
                            <img src="{{ asset('images/cpd.png') }}" alt="CPD">
                            <img src="{{ asset('images/british-council.png') }}" alt="British Council">
                            <img src="{{ asset('images/visaync.png') }}" alt="Visaync">
                            <img src="{{ asset('images/icsa-London.png') }}" alt="ICSA International College of London">
                            <img src="{{ asset('images/Layer2.png') }}" alt="CAP College Association">
                        </div>
                        <div class="partners-marquee-group" aria-hidden="true">
                            <img src="{{ asset('images/athe.png') }}" alt="">
                            <img src="{{ asset('images/athe white.png') }}" alt="">
                            <img src="{{ asset('images/pearson.png') }}" alt="">
                            <img src="{{ asset('images/ielts.png') }}" alt="">
                            <img src="{{ asset('images/qualifi.png') }}" alt="">
                            <img src="{{ asset('images/wes.png') }}" alt="">
                            <img src="{{ asset('images/amca.png') }}" alt="">
                            <img src="{{ asset('images/cpd.png') }}" alt="">
                            <img src="{{ asset('images/british-council.png') }}" alt="">
                            <img src="{{ asset('images/visaync.png') }}" alt="">
                            <img src="{{ asset('images/icsa-London.png') }}" alt="">
                            <img src="{{ asset('images/Layer2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Course Categories -->
    <section class="section home-categories">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Our Programs</span>
                <h2 class="section-title">Explore Our Course Categories</h2>
                <p class="section-subtitle">Choose from our wide range of professional courses designed to help you succeed in your career</p>
            </div>

            <div class="categories-grid">
                <a href="{{ route('site.courses', ['category' => 'it']) }}" class="category-card">
                    <img class="category-photo" src="{{ asset('images/category-it.jpg') }}" alt="Laptop with code on screen">
                    <h3>IT & Technical</h3>
                    <p>Master modern technology with courses in programming, design, networking, and software development.</p>
                    <span class="category-courses">11 Courses</span>
                </a>

                <a href="{{ route('site.courses', ['category' => 'diploma']) }}" class="category-card">
                    <img class="category-photo" src="{{ asset('images/category-uk.jpg') }}" alt="United Kingdom flag and Big Ben">
                    <h3>UK Diploma Programs</h3>
                    <p>Internationally recognized qualifications in business, management, IT, healthcare, and more.</p>
                    <span class="category-courses">7 Programs</span>
                </a>

                <a href="{{ route('site.courses', ['category' => 'language']) }}" class="category-card">
                    <img class="category-photo" src="{{ asset('images/category-language.jpg') }}" alt="Student studying in a classroom">
                    <h3>Language & Professional</h3>
                    <p>Enhance your communication skills with two English courses and one Arabic course.</p>
                    <span class="category-courses">3 Courses</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Courses -->
    <section class="section featured-courses">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Popular Courses</span>
                <h2 class="section-title">Featured Programs</h2>
                <p class="section-subtitle">Our most in-demand courses that have helped thousands of students build successful careers</p>
            </div>

            <div class="courses-grid">
                <!-- Course 1 -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/course-programming-web-development.jpg') }}" alt="Programming & Web Development">
                        <span class="course-badge">Popular</span>
                    </div>
                    <div class="course-content">
                        <span class="course-category">IT & Technical</span>
                        <h3 class="course-title">Programming & Web Development</h3>
                        <p class="course-description">Learn to build dynamic websites and web applications with hands-on training in frontend and backend technologies.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 3 Months</span>
                            <span class="course-meta-item"><i class="fas fa-signal"></i> All Levels</span>
                        </div>
                        <div class="course-footer">
                            <span class="course-price">Contact for Price</span>
                            <a href="{{ route('site.course', 'programming-web-development') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course 2 -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/course-graphics-designing.jpg') }}" alt="Graphics Designing">
                        <span class="course-badge">Trending</span>
                    </div>
                    <div class="course-content">
                        <span class="course-category">IT & Technical</span>
                        <h3 class="course-title">Graphics Designing</h3>
                        <p class="course-description">Master Adobe Photoshop and Illustrator to create stunning visual content for branding, marketing, and digital media.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 2 Months</span>
                            <span class="course-meta-item"><i class="fas fa-signal"></i> Beginner</span>
                        </div>
                        <div class="course-footer">
                            <span class="course-price">Contact for Price</span>
                            <a href="{{ route('site.course', 'graphics-designing') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course 3 -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/course-uk-diploma-business-management.jpg') }}" alt="UK Diploma in Business Management">
                        <span class="course-badge">Premium</span>
                    </div>
                    <div class="course-content">
                        <span class="course-category">UK Diploma</span>
                        <h3 class="course-title">UK Diploma in Business Management</h3>
                        <p class="course-description">Internationally recognized qualification covering business operations, marketing, HR, and strategic planning.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 12 Months</span>
                            <span class="course-meta-item"><i class="fas fa-award"></i> Certified</span>
                        </div>
                        <div class="course-footer">
                            <span class="course-price">Contact for Price</span>
                            <a href="{{ route('site.course', 'uk-diploma-business-management') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course 4 -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/course-computer-secretarial.jpg') }}" alt="Computer Secretarial">
                    </div>
                    <div class="course-content">
                        <span class="course-category">IT & Technical</span>
                        <h3 class="course-title">Computer Secretarial</h3>
                        <p class="course-description">Comprehensive training in Microsoft Office, business correspondence, and modern office administration.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 2 Months</span>
                            <span class="course-meta-item"><i class="fas fa-signal"></i> Beginner</span>
                        </div>
                        <div class="course-footer">
                            <span class="course-price">Contact for Price</span>
                            <a href="{{ route('site.course', 'computer-secretarial') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course 5 -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/course-autocad-2d-3d.jpg') }}" alt="AutoCAD 2D & 3D">
                    </div>
                    <div class="course-content">
                        <span class="course-category">IT & Technical</span>
                        <h3 class="course-title">AutoCAD 2D & 3D</h3>
                        <p class="course-description">Professional drafting and design training using AutoCAD for engineering and architectural applications.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 2 Months</span>
                            <span class="course-meta-item"><i class="fas fa-signal"></i> All Levels</span>
                        </div>
                        <div class="course-footer">
                            <span class="course-price">Contact for Price</span>
                            <a href="{{ route('site.course', 'autocad-2d-3d') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course 6 -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/course-ielts-preparation.jpg') }}" alt="IELTS Preparation">
                        <span class="course-badge">High Demand</span>
                    </div>
                    <div class="course-content">
                        <span class="course-category">Language</span>
                        <h3 class="course-title">IELTS Preparation</h3>
                        <p class="course-description">Comprehensive preparation course designed to help you achieve high band scores in all four IELTS modules.</p>
                        <div class="course-meta">
                            <span class="course-meta-item"><i class="fas fa-clock"></i> 6 Weeks</span>
                            <span class="course-meta-item"><i class="fas fa-signal"></i> All Levels</span>
                        </div>
                        <div class="course-footer">
                            <span class="course-price">Contact for Price</span>
                            <a href="{{ route('site.course', 'ielts-preparation') }}" class="btn btn-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="{{ route('site.courses') }}" class="btn btn-primary btn-lg">View All Courses</a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="section why-choose">
        <div class="container">
            <div class="why-choose-grid">
                <div class="why-choose-image">
                    <img src="{{ asset('images/section-learning-environment.jpg') }}" alt="ICSA Learning Environment">
                </div>
                <div class="why-choose-content">
                    <span class="section-label">Why Choose ICSA</span>
                    <h2>Your Success is Our Priority</h2>
                    <p>At ICSA, we are committed to providing quality education that prepares you for the real world. Our experienced instructors, modern facilities, and industry-relevant curriculum ensure you get the best learning experience.</p>
                    
                    <div class="features-list">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Expert Instructors</h4>
                                <p>Learn from industry professionals with years of real-world experience.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-laptop"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Modern Facilities</h4>
                                <p>State-of-the-art computer labs and learning environments.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Career Guidance</h4>
                                <p>Get practical guidance on building your professional profile and planning your career path.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Recognized Certificates</h4>
                                <p>Earn certificates that are widely recognized for academic and professional growth.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="section testimonials">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Testimonials</span>
                <h2 class="section-title">What Our Students Say</h2>
                <p class="section-subtitle">Hear from our graduates who have transformed their careers with ICSA</p>
            </div>

            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">"This is Randy, finally after 8 months of study hard at ICSA Kuwait, I finished my short course which is &quot;ComSec.&quot; Thanks to Sir &quot;Ryan Guese&quot; for sharing your knowledge to us especially on me. You are so kind, great leader and very professional instructor. I highly recommend ICSA because all the instructors there are very professional and good. Keep up the good work, guys."</p>
                    <div class="testimonial-author">
                        <img src="{{ asset('images/Mr. Randy Paguia.png') }}" alt="Mr. Randy Paguia" class="testimonial-avatar">
                        <div class="testimonial-info">
                            <h4>Mr. Randy Paguia</h4>
                            <p>Computer Secretarial Graduate</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">"I have learned so much from this institute! It provides a wide variety of short courses to choose from that can help build skills for more job opportunities. Other than that, the work-study balance is manageable here! Attendance is flexible and easy to work with, so there isn't much to worry about in terms of schedules."</p>
                    <div class="testimonial-author">
                        <img src="{{ asset('images/Ms. Millen Glow.png') }}" alt="Ms. Millen Glow" class="testimonial-avatar">
                        <div class="testimonial-info">
                            <h4>Ms. Millen Glow</h4>
                            <p>AutoCAD 2D &amp; 3D Course Graduate</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">"I really appreciate the flexibility of this course. It works well with my busy schedule, and the expectations were clear and upfront. The training materials, video exercises, and format were presented effectively. Homework, assignments, and quizzes are reasonable, and the instructors are approachable too. Thank you, ICSA."</p>
                    <div class="testimonial-author">
                        <img src="{{ asset('images/Ms. Katherine Regner.png') }}" alt="Ms. Katherine Regner" class="testimonial-avatar testimonial-avatar-katherine">
                        <div class="testimonial-info">
                            <h4>Ms. Katherine Regner</h4>
                            <p>Graphics Designing Course Graduate</p>
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
                <h2>Ready to Start Your Learning Journey?</h2>
                <p>Join thousands of successful graduates who have transformed their careers with ICSA. Enroll today and take the first step towards a brighter future.</p>
                <div class="cta-buttons">
                    <a href="{{ route('site.courses') }}" class="btn btn-secondary btn-lg">Browse Courses</a>
                    <a href="{{ route('site.contact') }}" class="btn btn-outline btn-lg" style="border-color: var(--primary-dark); color: var(--primary-dark);">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
@endsection
