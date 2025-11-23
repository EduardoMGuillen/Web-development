# CreativeIQ WordPress Theme - Installation Guide

## Quick Start

### Step 1: Install the Theme

1. **Zip the theme folder**:
   - Right-click on the `creativeiq-theme` folder
   - Select "Compress" or "Send to → Compressed folder"
   - This creates `creativeiq-theme.zip`

2. **Upload to WordPress**:
   - Log into your WordPress admin panel
   - Navigate to **Appearance → Themes**
   - Click **Add New**
   - Click **Upload Theme**
   - Click **Choose File** and select `creativeiq-theme.zip`
   - Click **Install Now**
   - Once installed, click **Activate**

### Step 2: Basic Configuration

#### Set Homepage

1. Go to **Settings → Reading**
2. Select **A static page**
3. Create a new page called "Home" (leave content blank)
4. Set it as your homepage
5. The theme template will automatically be used

#### Add Navigation Menu

1. Go to **Appearance → Menus**
2. Click **Create a new menu**
3. Name it "Main Menu"
4. Add menu items (Home, Services, About, etc.)
5. Check **Primary Menu** location
6. Click **Save Menu**

#### Upload Logo

1. Go to **Appearance → Customize → Site Identity**
2. Click **Select Logo**
3. Upload your CreativeIQ logo image
4. Click **Publish**

### Step 3: Add Content

#### Add Services

1. Go to **Services → Add New**
2. Enter your service details:
   - **Title**: Service name (e.g., "Search Engine Optimization")
   - **Content**: Service description
   - **Featured Image**: Service icon/image
3. Click **Publish**

Repeat for all your services.

#### Add Testimonials

1. Go to **Testimonials → Add New**
2. Enter testimonial details:
   - **Content**: Client testimonial text
   - **Featured Image**: Client photo (optional)
3. Fill in the meta box fields:
   - **Author Name**: Client's name
   - **Author Title/Company**: Their title or company
   - **Rating**: 1-5 stars
4. Click **Publish**

Repeat for all testimonials.

### Step 4: Customize Contact Information

1. Go to **Appearance → Customize → Contact Information**
2. Update:
   - Phone Number: (804) 651-2531
   - Email: hello@creativeiq.marketing
   - Address: Your business address
3. Click **Publish**

### Step 5: Set Up Contact Form (Optional but Recommended)

#### Option A: Contact Form 7

1. Install **Contact Form 7** plugin
2. Create a new form with fields:
   - First Name (text, required)
   - Last Name (text, required)
   - Email (email, required)
   - Phone (tel, required)
   - Company (text)
   - Service (select)
   - Budget (select)
   - Message (textarea)
3. Copy the form shortcode (e.g., `[contact-form-7 id="123"]`)
4. Go to **Appearance → Customize → Contact Information**
5. Paste the form shortcode or form ID
6. The theme will automatically display the form

#### Option B: Default Form

The theme includes a basic contact form that will submit to WordPress. You can customize the form handler in `functions.php` to send emails or integrate with your CRM.

### Step 6: Customize Colors & Styling (Optional)

1. Go to **Appearance → Customize → Additional CSS**
2. Add custom CSS to override theme colors:

```css
:root {
    --primary-color: #YOUR_COLOR;
    --primary-dark: #YOUR_DARK_COLOR;
}
```

### Step 7: Add Widgets to Footer (Optional)

1. Go to **Appearance → Widgets**
2. Add widgets to:
   - Footer Column 1
   - Footer Column 2
   - Footer Column 3

## Theme File Structure

```
creativeiq-theme/
├── style.css              # Main stylesheet with theme info
├── functions.php          # Theme functions and setup
├── index.php             # Main template file
├── header.php            # Header template
├── footer.php            # Footer template
├── README.md             # Theme documentation
├── INSTALLATION.md       # This file
├── js/
│   └── theme.js          # Theme JavaScript
└── template-parts/
    ├── section-hero.php
    ├── section-stats.php
    ├── section-services.php
    ├── section-about.php
    ├── section-testimonials.php
    ├── section-contact.php
    └── contact-form-default.php
```

## Troubleshooting

### Theme doesn't look right?

1. **Clear your cache** if you're using a caching plugin
2. **Regenerate permalinks**: Go to Settings → Permalinks and click Save
3. **Check PHP version**: Theme requires PHP 7.4+

### Services/Testimonials not showing?

1. Make sure you've published at least one Service and Testimonial
2. Check that they're set to "Published" status
3. Clear any caching plugins

### Menu not appearing?

1. Go to Appearance → Menus
2. Create a menu and assign it to "Primary Menu" location
3. Make sure menu has items added

### Contact form not working?

1. If using Contact Form 7, make sure the plugin is activated
2. Check the form ID is correct in Customizer
3. For default form, check that your hosting supports PHP mail or configure SMTP

## Need Help?

Refer to the main README.md file or contact CreativeIQ for support.

## Next Steps

1. ✅ Install and activate the theme
2. ✅ Set up navigation menu
3. ✅ Add your logo
4. ✅ Add services content
5. ✅ Add testimonials
6. ✅ Configure contact information
7. ✅ Set up contact form
8. ✅ Customize colors/styling if needed
9. ✅ Test on mobile devices
10. ✅ Launch your site!

