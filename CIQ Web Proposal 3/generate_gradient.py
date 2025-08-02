from PIL import Image, ImageDraw
import numpy as np

# Create a 1920x1080 image
width, height = 1920, 1080
image = Image.new('RGBA', (width, height), (0, 0, 0, 0))

# Create gradient data
gradient_data = np.zeros((height, width, 4), dtype=np.uint8)

# Define gradient colors (matching the CSS gradient)
colors = [
    (12, 12, 12, 255),    # #0c0c0c
    (26, 26, 46, 255),    # #1a1a2e
    (22, 33, 62, 255),    # #16213e
    (15, 52, 96, 255)     # #0f3460
]

# Create the gradient
for y in range(height):
    for x in range(width):
        # Calculate position for diagonal gradient
        pos = (x + y) / (width + height)
        
        # Interpolate between colors
        if pos <= 0.33:
            t = pos / 0.33
            r = int(colors[0][0] * (1-t) + colors[1][0] * t)
            g = int(colors[0][1] * (1-t) + colors[1][1] * t)
            b = int(colors[0][2] * (1-t) + colors[1][2] * t)
        elif pos <= 0.66:
            t = (pos - 0.33) / 0.33
            r = int(colors[1][0] * (1-t) + colors[2][0] * t)
            g = int(colors[1][1] * (1-t) + colors[2][1] * t)
            b = int(colors[1][2] * (1-t) + colors[2][2] * t)
        else:
            t = (pos - 0.66) / 0.34
            r = int(colors[2][0] * (1-t) + colors[3][0] * t)
            g = int(colors[2][1] * (1-t) + colors[3][1] * t)
            b = int(colors[2][2] * (1-t) + colors[3][2] * t)
        
        gradient_data[y, x] = [r, g, b, 255]

# Convert to PIL Image
gradient_image = Image.fromarray(gradient_data, 'RGBA')

# Save the gradient
gradient_image.save('gradient-background.png')
print("Gradient background image created: gradient-background.png") 