# FYZICAL Website Sections for GHL Code Boxes

This directory contains individual HTML sections extracted from the main Fyzical website pages. Each section is designed to work independently and can be easily added to GoHighLevel (GHL) code boxes.

## 📁 Available Sections

### Home Page Sections (index.html)
1. **`01-hero-section.html`** - Main hero section with call-to-action buttons
2. **`02-services-section.html`** - Overview of physical therapy services
3. **`03-stats-section.html`** - Statistics and achievements
4. **`04-about-section.html`** - Company overview and mission

### About Page Sections (about.html)
5. **`05-about-page-header.html`** - About page title and description
6. **`06-about-hero-section.html`** - Detailed company information
7. **`07-mission-values-section.html`** - Company mission and core values
8. **`08-direct-access-section.html`** - Direct access to physical therapy information
9. **`09-team-section.html`** - Leadership team profiles
10. **`10-cta-section.html`** - Call-to-action section

### Services Page Sections (services.html)
11. **`11-services-page-header.html`** - Services page title and description
12. **`12-services-navigation.html`** - Services navigation menu
13. **`13-orthopedic-service-section.html`** - Orthopedic rehabilitation service details

## 🎯 How to Use in GHL

### For Code Boxes:
1. **Copy the entire HTML content** from any section file
2. **Paste directly into GHL code boxes** - each section is self-contained
3. **Customize as needed** - modify text, links, or styling
4. **Test responsiveness** - all sections are mobile-optimized

### For Page Builders:
1. **Use individual sections** to build custom page layouts
2. **Combine multiple sections** to create complete pages
3. **Maintain consistent branding** - all sections use the same color scheme and fonts

## 🎨 Design Features

### Consistent Styling:
- **Color Scheme**: Blue (#0066cc), Orange (#ff6600), White, Gray variations
- **Typography**: Inter font family (Google Fonts)
- **Icons**: Font Awesome 6.4.0
- **Responsive**: Mobile-first design with breakpoints at 768px and 480px

### Interactive Elements:
- **Hover Effects**: Smooth transitions and animations
- **Fade-in Animations**: Intersection Observer for scroll-triggered animations
- **Smooth Scrolling**: CSS-based smooth scroll behavior

### Layout Features:
- **Grid Systems**: CSS Grid for responsive layouts
- **Flexbox**: For alignment and spacing
- **Container**: Max-width 1200px with responsive padding

## 📱 Responsive Breakpoints

- **Desktop**: 1200px+ (full layout)
- **Tablet**: 768px - 1199px (stacked columns)
- **Mobile**: 480px - 767px (single column, adjusted spacing)
- **Small Mobile**: <480px (optimized for small screens)

## 🔧 Customization Tips

### Colors:
```css
:root {
    --primary-blue: #0066cc;      /* Main brand color */
    --secondary-blue: #004499;    /* Darker blue */
    --accent-orange: #ff6600;     /* Accent color */
    --light-blue: #e6f3ff;        /* Light background */
    --dark-blue: #003366;         /* Dark background */
}
```

### Fonts:
- **Primary**: Inter (300-800 weights)
- **Fallback**: Sans-serif
- **Icon Font**: Font Awesome 6.4.0

### Animations:
- **Duration**: 0.6s ease-out
- **Trigger**: Intersection Observer (scroll-based)
- **Effect**: Fade in from bottom with transform

## 📋 Section Dependencies

### Required External Resources:
- Google Fonts (Inter)
- Font Awesome CDN
- No additional JavaScript libraries needed

### Self-Contained:
- All CSS is included in each file
- JavaScript animations are self-contained
- No external dependencies beyond fonts and icons

## 🚀 Performance Features

- **Optimized CSS**: Minimal, efficient stylesheets
- **Lazy Animations**: Only animate when visible
- **Responsive Images**: CSS-based placeholder images
- **Minimal JavaScript**: Lightweight intersection observer

## 💡 Best Practices for GHL

1. **Test Each Section** individually before implementing
2. **Customize Links** to point to your specific pages
3. **Adjust Colors** to match your brand if needed
4. **Optimize Images** for your specific use case
5. **Test Mobile** responsiveness in GHL preview

## 🔗 Navigation Integration

When using multiple sections, consider:
- **Consistent Navigation**: Use the same navigation structure
- **Smooth Scrolling**: Maintain smooth transitions between sections
- **Active States**: Highlight current section in navigation
- **Mobile Menu**: Ensure mobile navigation works properly

---

**Note**: Each section is designed to work independently. You can mix and match sections from different pages to create custom layouts that suit your specific needs in GHL.
