# CreativeIQ WordPress Theme

A modern, professional WordPress theme designed specifically for CreativeIQ Digital Marketing Agency. This theme matches the Figma design specifications and includes all the features needed for a digital marketing agency website.

## Features

- ✅ Fully responsive design (mobile, tablet, desktop)
- ✅ Modern, clean design with purple accent colors
- ✅ Custom post types for Services and Testimonials
- ✅ Customizer integration for easy customization
- ✅ SEO-friendly structure
- ✅ Fast loading and optimized
- ✅ Contact form integration ready
- ✅ Widget-ready footer areas
- ✅ Custom navigation menus

## Installation

### Method 1: Upload via WordPress Admin

1. **Zip the theme folder**:
   - Compress the `creativeiq-theme` folder into a zip file
   - Name it `creativeiq-theme.zip`

2. **Upload to WordPress**:
   - Go to **Appearance → Themes** in your WordPress admin
   - Click **Add New**
   - Click **Upload Theme**
   - Choose the `creativeiq-theme.zip` file
   - Click **Install Now**
   - Click **Activate**

### Method 2: Manual Installation via FTP

1. Upload the `creativeiq-theme` folder to `/wp-content/themes/` directory
2. Go to **Appearance → Themes** in WordPress admin
3. Find **CreativeIQ** theme and click **Activate**

## Setup Instructions

### 1. Configure Navigation Menu

1. Go to **Appearance → Menus**
2. Create a new menu (e.g., "Primary Menu")
3. Add pages/links to your menu
4. Select **Primary Menu** as the location
5. Click **Save Menu**

### 2. Customize Contact Information

1. Go to **Appearance → Customize**
2. Click on **Contact Information** section
3. Update:
   - Phone Number
   - Email Address
   - Office Address
4. Click **Publish**

### 3. Upload Logo

1. Go to **Appearance → Customize**
2. Click on **Site Identity**
3. Click **Select Logo**
4. Upload your CreativeIQ logo
5. Click **Publish**

### 4. Add Hero Section Image

1. Go to **Appearance → Customize**
2. Look for **Hero Section** or use a plugin to add customizer sections
3. Upload your hero image

### 5. Add Services

1. Go to **Services → Add New** in WordPress admin
2. Enter service title and description
3. Add a featured image (optional)
4. Add service features in custom fields (optional)
5. Publish the service

### 6. Add Testimonials

1. Go to **Testimonials → Add New** in WordPress admin
2. Enter the testimonial content
3. Fill in the testimonial details:
   - Author Name
   - Author Title/Company
   - Rating (1-5 stars)
4. Add author photo as featured image (optional)
5. Publish the testimonial

### 7. Set Up Contact Form

**Option A: Use Contact Form 7 (Recommended)**

1. Install **Contact Form 7** plugin
2. Create a new contact form
3. Go to **Appearance → Customize → Contact Information**
4. Enter the Contact Form 7 ID
5. The form will automatically replace the default form

**Option B: Use Default Form**

The theme includes a default contact form that submits to WordPress admin. You can customize the form handler in `functions.php` to send emails or integrate with your CRM.

### 8. Configure Homepage

1. Go to **Settings → Reading**
2. Select **A static page**
3. Create a new page called "Home" (or use existing)
4. Select it as your homepage
5. The theme will automatically use the `index.php` template

## Customization

### Colors

The theme uses CSS custom properties (variables) in `style.css`:

```css
:root {
    --primary-color: #8B5CF6;
    --primary-light: #A78BFA;
    --primary-dark: #7C3AED;
    --text-dark: #1F2937;
    --text-gray: #6B7280;
    --bg-white: #FFFFFF;
    --bg-light: #F9FAFB;
}
```

You can customize these colors by adding custom CSS in **Appearance → Customize → Additional CSS**.

### Typography

The theme uses the **Inter** font family from Google Fonts. To change the font:

1. Go to **Appearance → Customize → Additional CSS**
2. Add your font family override

### Template Structure

- `index.php` - Main homepage template
- `header.php` - Site header
- `footer.php` - Site footer
- `functions.php` - Theme functions and setup
- `style.css` - Main stylesheet
- `template-parts/` - Reusable section templates
  - `section-hero.php` - Hero section
  - `section-stats.php` - Statistics bar
  - `section-services.php` - Services grid
  - `section-about.php` - About section
  - `section-testimonials.php` - Testimonials grid
  - `section-contact.php` - Contact form section

## Custom Post Types

### Services

- **Slug**: `/services/`
- **Features**: Title, Description, Featured Image, Custom Features List
- **Usage**: Manage your service offerings

### Testimonials

- **Public**: No (only displayed in theme)
- **Features**: Content, Author Name, Author Title, Rating (1-5), Featured Image
- **Usage**: Display client testimonials

## Widget Areas

The theme includes three footer widget areas:

1. **Footer Column 1**
2. **Footer Column 2**
3. **Footer Column 3**

To add widgets:

1. Go to **Appearance → Widgets**
2. Add widgets to the footer columns

## Required Plugins (Optional but Recommended)

- **Contact Form 7** - For advanced contact forms
- **Yoast SEO** - For SEO optimization
- **WP Super Cache** or **W3 Total Cache** - For performance
- **Smush** - For image optimization

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Support

For theme support, please contact CreativeIQ or refer to the theme documentation.

## Changelog

### Version 1.0.0
- Initial release
- Full theme implementation
- Custom post types for Services and Testimonials
- Customizer integration
- Responsive design

## Credits

- Design: Based on Figma design specifications
- Font: Inter (Google Fonts)
- WordPress Version: 5.0+
- PHP Version: 7.4+

## License

This theme is licensed under the GNU General Public License v2 or later.

