# ICSA - International Institute of Computer Science and Administration
## Official Website Frontend

This is the complete frontend for ICSA Kuwait's official website. Built with pure HTML, CSS, and JavaScript - ready to be converted to Laravel later.

---

## ðŸ“ Project Structure

```
ICSA-website/
â”œâ”€â”€ index.html                 # Homepage
â”œâ”€â”€ about.html                 # About Us page
â”œâ”€â”€ courses.html               # All courses listing with filters
â”œâ”€â”€ contact.html               # Contact page with inquiry form
â”œâ”€â”€ css/
â”‚   â””â”€â”€ style.css             # All styles (corporate blue/gold theme)
â”œâ”€â”€ js/
â”‚   â””â”€â”€ main.js               # Interactivity and animations
â”œâ”€â”€ courses/
â”‚   â””â”€â”€ programming-web-development.html  # Course detail template
â””â”€â”€ README.md
```

---

## ðŸŽ¨ Design Features

### Color Scheme (Corporate Professional)
- **Primary**: Deep Blue (#1e3a5f) - Trust, professionalism
- **Accent**: Gold (#c9a227) - Premium, excellence
- **Background**: Clean white with light gray sections

### Pages Included

#### 1. **Homepage** (`index.html`)
- Top bar with contact info and social links
- Professional header with logo
- Hero section with stats
- Course categories (3 cards)
- Featured courses (6 cards)
- Why Choose Us section
- Testimonials
- Call-to-action
- Footer with contact info
- WhatsApp floating button

#### 2. **Courses Page** (`courses.html`)
- Filter buttons (All / IT & Technical / UK Diploma / Language)
- All 22 courses displayed in grid
- Each course card has:
  - Image placeholder
  - Category badge
  - Title
  - Description
  - Duration & Level
  - View Details button

#### 3. **Course Detail Page** (`courses/programming-web-development.html`)
- Hero with course info
- Price card with features
- Tab navigation:
  - Overview
  - Curriculum
  - Learning Outcomes
  - Career Opportunities
- Inquiry form
- Related courses

#### 4. **About Us** (`about.html`)
- Company story and mission
- Stats section
- Why Choose Us features
- Team section
- Testimonials

#### 5. **Contact** (`contact.html`)
- Contact info card
- Full inquiry form with course dropdown
- Google Maps embed
- Quick contact options (WhatsApp, Call, Email)
- FAQ section

---

## ðŸš€ How to Use

### Option 1: Open Directly
1. Navigate to the `ICSA-website` folder
2. Double-click `index.html`

### Option 2: Live Server (Recommended)
1. Install VS Code extension "Live Server"
2. Right-click `index.html` â†’ "Open with Live Server"
3. Auto-reloads when you save

---

## ðŸ“‹ All 22 Courses Listed

### IT & Technical (11 courses)
1. Computer Secretarial
2. Office Management
3. Graphics Designing
4. Multimedia & Motion Graphics
5. Web Designing
6. Programming & Web Development
7. PC, Laptop Maintenance & Networking
8. AutoCAD 2D & 3D
9. 3D Studio Max
10. Revit
11. SketchUp

### UK Diploma Programs (7 courses)
12. UK Diploma in Strategic Management & Leadership
13. UK Diploma in Health & Social Care
14. UK Diploma in Information Technology
15. UK Diploma in Accounting & Finance
16. UK Diploma in Hospitality & Tourism Management
17. UK Diploma in Business Management
18. UK Diploma in Business Innovation & Entrepreneurship

### Language & Professional (4 courses)
19. IELTS Preparation
20. English Enhancement
21. Arabic Learning
22. Airline Ticketing & Travel Agent

---

## ðŸ› ï¸ Creating New Course Pages

To create a new course detail page:

1. **Copy the template:**
   ```
   Copy: courses/programming-web-development.html
   To: courses/YOUR-COURSE-NAME.html
   ```

2. **Update the content:**
   - Change the `<title>`
   - Update the course name in `<h1>`
   - Modify the description
   - Update the curriculum section
   - Change learning outcomes
   - Update career opportunities
   - Change the course image URL

3. **Link from courses.html:**
   Find your course card in `courses.html` and update the link:
   ```html
   <a href="courses/YOUR-COURSE-NAME.html" class="btn btn-secondary btn-sm">View Details</a>
   ```

---

## ðŸ“ Customization Guide

### Change Colors
Edit `css/style.css` - look for `:root`:
```css
:root {
    --primary: #1e3a5f;        /* Main blue */
    --accent: #c9a227;         /* Gold accent */
    /* ... more variables */
}
```

### Update Contact Information
Search and replace in all HTML files:
- `+965 XXXX XXXX` â†’ Your phone number
- `info@icsakuwait.com` â†’ Your email
- `Kuwait City, Kuwait` â†’ Your address

### Add Your Images
Replace Unsplash URLs with your own images:
```html
<!-- Current -->
<img src="https://images.unsplash.com/photo-...">

<!-- Replace with -->
<img src="images/your-image.jpg">
```

### Update WhatsApp Number
Find and replace: `965XXXXXXXX` with your actual WhatsApp number

---

## ðŸ“± Features

### Responsive Design
- Desktop: Full layout
- Tablet: Adjusted grids
- Mobile: Single column, hamburger menu

### Interactive Elements
- Course filter buttons
- Tab navigation on course pages
- Smooth scroll animations
- Counter animations
- Mobile menu toggle
- Form validation

### SEO Ready
- Meta descriptions on all pages
- Semantic HTML structure
- Proper heading hierarchy
- Alt tags on images

---

## ðŸ”„ Converting to Laravel

When you're ready to move to Laravel:

1. **Create Blade Templates:**
   - `resources/views/layouts/app.blade.php` (main layout)
   - `resources/views/home.blade.php`
   - `resources/views/about.blade.php`
   - `resources/views/courses/index.blade.php`
   - `resources/views/courses/show.blade.php`
   - `resources/views/contact.blade.php`

2. **Create Database Tables:**
   ```sql
   courses (id, name, slug, category, description, duration, level, image, ...)
   inquiries (id, name, email, phone, course_id, message, ...)
   ```

3. **Create Models & Controllers:**
   - `Course` model
   - `Inquiry` model
   - `PageController`
   - `CourseController`
   - `ContactController`

4. **Routes:**
   ```php
   Route::get('/', [PageController::class, 'home']);
   Route::get('/about', [PageController::class, 'about']);
   Route::get('/courses', [CourseController::class, 'index']);
   Route::get('/courses/{slug}', [CourseController::class, 'show']);
   Route::get('/contact', [ContactController::class, 'index']);
   Route::post('/contact', [ContactController::class, 'store']);
   ```

---

## âš¡ Quick Tips

1. **Test on mobile** - Resize browser to see responsive design
2. **Replace placeholder images** - Use actual ICSA photos
3. **Update all contact info** - Phone, email, address, WhatsApp
4. **Add real testimonials** - Get quotes from actual students
5. **Customize course content** - Add real curriculum details

---

## ðŸ“ž Need Help?

This is a complete, production-ready frontend. When you're ready for Laravel backend integration, the structure is already planned for easy conversion.

**Good luck with the ICSA website! ðŸŽ“**

