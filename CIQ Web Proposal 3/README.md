# CIQ Web Proposal 3

This folder contains a modified version of the CIQ Web Proposal 3 without the navigation menu, designed for use with Go High Level.

## Files Included:

### 1. `proposal-3-no-nav.html`
- **Main website file** without the navigation menu
- Uses a gradient background image instead of CSS gradients
- Ready to be integrated into Go High Level
- All original content and functionality preserved

### 2. `gradient-generator.html`
- **Tool to generate the gradient background image**
- Open this file in a web browser
- Click "Generate Gradient" to create the background
- Click "Download Image" to save as `gradient-background.png`
- The generated image matches the original CSS gradient colors

### 3. `CIQ_logo-1-2048x1939.png`
- **Logo file** copied from the original proposal
- Used in the website design

### 4. `generate_gradient.py`
- **Python script** alternative for generating the gradient
- Requires PIL and numpy libraries
- Creates the same gradient background image

## How to Use:

1. **Generate the gradient background:**
   - Open `gradient-generator.html` in your web browser
   - Click "Download Image" to save `gradient-background.png`
   - Place the downloaded image in this folder

2. **Use the website:**
   - Open `proposal-3-no-nav.html` in a web browser to preview
   - The background will use the gradient image if available, or fall back to CSS gradients

3. **For Go High Level integration:**
   - Upload `proposal-3-no-nav.html` to your Go High Level page
   - Upload `gradient-background.png` as a background image
   - The HTML is designed to work with transparent backgrounds

## Background Colors Used:
- `#0c0c0c` (Dark gray)
- `#1a1a2e` (Dark blue-gray)
- `#16213e` (Medium blue)
- `#0f3460` (Deep blue)

The gradient creates a diagonal transition between these colors, matching the original design. 