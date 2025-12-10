# Namaste - Custom WordPress Travel Theme

A custom WordPress theme designed specifically for travel and tourism businesses. This theme features custom post types, WooCommerce integration, and enhanced functionality for managing tours, packages, and travel-related content.

## Overview

**Namaste** is a professional WordPress theme built on the Hello Elementor framework, customized to provide a complete solution for travel agencies and tourism companies. It includes advanced features like custom post types (sliders, partners, sponsors, images), WooCommerce product integration, and specialized templating for travel services.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [File Structure](#file-structure)
- [Custom Post Types](#custom-post-types)
- [WooCommerce Integration](#woocommerce-integration)
- [Functions & Hooks](#functions--hooks)
- [JavaScript Files](#javascript-files)
- [Styling](#styling)
- [Configuration](#configuration)
- [Support](#support)

## Features

### Core Features

- **Custom Post Types**: Manage sliders, partners, sponsors, and images with custom taxonomies
- **WooCommerce Ready**: Full integration with WooCommerce for selling tours and travel packages
- **Gutenberg Support**: All custom post types support the WordPress block editor
- **Responsive Design**: Bootstrap-based responsive grid system
- **Advanced Styling**: SASS-based stylesheet architecture for easy customization

### Travel-Specific Features

- Tour and package management with custom fields
- Travel guide profiles and testimonials
- Gallery management for travel imagery
- Budget request system with AJAX
- Custom product templates for tour packages
- Order management and PDF generation
- Activity and blog sections
- FAQ and service listings

## Installation

1. **Upload the theme folder** to your WordPress installation:
   ```
   /wp-content/themes/namaste/
   ```

2. **Activate the theme** in WordPress admin:
   - Go to Appearance > Themes
   - Click "Activate" on the Namaste theme

3. **Install required plugins**:
   - WooCommerce (for e-commerce functionality)
   - Any Elementor plugins for enhanced page building

4. **Configure custom post types**:
   - The custom post types are automatically registered on theme activation
   - Navigate to the WordPress admin to manage sliders, partners, sponsors, and images

## File Structure

```
namaste/
├── assets/
│   ├── css/                    # Stylesheets
│   │   ├── app.min.css
│   │   ├── bootstrap.min.css
│   │   ├── style.css           # Main theme styles
│   │   └── swiper-bundle.min.css
│   ├── fonts/                  # Font files and FontAwesome
│   ├── img/                    # Images and assets
│   │   ├── bg/                 # Background images
│   │   ├── blog/               # Blog post images
│   │   ├── destination/        # Travel destination images
│   │   ├── gallery/            # Gallery images
│   │   ├── hero/               # Hero section images
│   │   ├── team/               # Team member photos
│   │   └── testimonial/        # Testimonial images
│   ├── js/                     # JavaScript files
│   │   ├── main.js             # Main theme scripts
│   │   ├── solicitar-presupuesto.js  # Budget request form
│   │   ├── custom-slider.js    # Product slider
│   │   └── vendor/             # Third-party libraries
│   └── sass/                   # SASS source files
│       ├── style.scss
│       ├── base/               # Base styles and functions
│       ├── reset/              # Reset and grid styles
│       ├── spacing/            # Spacing utilities
│       └── template/           # Template-specific styles
├── woocommerce/                # WooCommerce customizations
│   ├── archive-product.php     # Product listing template
│   ├── content-product.php     # Single product item template
│   ├── single-product.php      # Product detail template
│   ├── js/
│   │   └── custom-slider.js    # Product image slider
│   └── part-template/
│       └── order-view.php      # Custom order view template
├── functions.php               # Main theme functions
├── header.php                  # Header template
├── footer.php                  # Footer template
├── index.php                   # Main template
├── style.css                   # Theme stylesheet
└── README.md                   # This file
```

## Custom Post Types

### Registered Post Types

The theme registers four custom post types, all with Gutenberg editor support:

#### 1. **Slider** (`slider`)
- **Purpose**: Manage website sliders and carousel content
- **Supports**: Title, featured image, custom fields
- **Archive**: `/slider/`
- **Icon**: Images icon in WordPress admin

#### 2. **Partner** (`partner`)
- **Purpose**: Manage business partners and associated brands
- **Supports**: Title, featured image
- **Archive**: `/partner/`
- **Icon**: Images icon in WordPress admin

#### 3. **Sponsor** (`sponsor`)
- **Purpose**: Manage event sponsors and sponsors logos
- **Supports**: Title, featured image
- **Archive**: `/sponsor/`
- **Icon**: Images icon in WordPress admin

#### 4. **Image** (`image`)
- **Purpose**: Manage custom image galleries
- **Supports**: Title, featured image, custom taxonomy
- **Custom Taxonomy**: `image_category` (hierarchical)
- **Archive**: `/image/`
- **Icon**: Images icon in WordPress admin

### Custom Taxonomy

**Image Category** (`image_category`)
- Hierarchical taxonomy similar to post categories
- Used to organize images in the gallery
- Supports unlimited depth of subcategories

## WooCommerce Integration

### Custom Templates

The theme includes customized WooCommerce templates for travel packages:

#### Archive Product Template (`woocommerce/archive-product.php`)
- Grid layout for displaying travel packages
- Includes departure dates and duration
- Custom pricing display
- Integrated sidebar with category filters

#### Product Content Template (`woocommerce/content-product.php`)
- Tour package card layout
- Displays:
  - Product thumbnail
  - Tour name and title
  - Departure dates
  - Price per person
  - Duration in days
  - "View Info" button

#### Single Product Template (`woocommerce/single-product.php`)
- Detailed product page for individual tours
- Full description and itinerary
- Image gallery with custom slider

### Custom Slider Script

**File**: `woocommerce/js/custom-slider.js`
- Implements custom image carousel for product galleries
- Lazy loads on product pages
- Touch-friendly interface

### Order Template

**File**: `woocommerce/part-template/order-view.php`
- Custom order view and confirmation page
- Displays order details:
  - Order ID and date
  - Order status
  - Product list with pricing
  - Total amount
- Supports PDF generation and email delivery
- Dynamic sending method display

## Functions & Hooks

### Main Functions (functions.php)

#### `custom_register_taxonomies()`
Registers the "Image Category" taxonomy with hierarchical support for organizing images in galleries.

#### `custom_register_post_type()`
Registers all four custom post types:
- Slider
- Partner
- Sponsor
- Image

#### `hello_elementor_child_enqueue_scripts()`
Enqueues the child theme stylesheet and ensures proper style cascade with Hello Elementor parent theme.

#### `my_enqueue_scripts()`
Loads jQuery and custom scripts with AJAX support:
- Registers AJAX nonce for security
- Enqueues custom JavaScript files
- Sets up localized script variables for AJAX calls

#### `enqueue_custom_slider_script()`
Conditionally loads the custom slider script only on product pages.

#### `custom_register_user()`
Handles custom user registration with:
- Email validation and confirmation
- Duplicate email checking
- Random password generation
- User profile field management (first name, last name)

### WooCommerce Hooks

#### Cart Hooks
- `woocommerce_cart_loaded_from_session`: Logs cart items when loaded
- `woocommerce_before_calculate_totals`: Logs cart data before calculations
- `woocommerce_cart_updated`: Logs successful cart updates

## JavaScript Files

### Main Scripts

#### `assets/js/main.js`
Core theme functionality and interactions:
- Navigation handling
- Scroll effects
- Form validations
- Interactive elements

#### `assets/js/solicitar-presupuesto.js`
Budget request form handler:
- AJAX form submission
- Nonce verification for security
- User feedback with alerts
- Redirect to thank you page on success
- Error handling with user-friendly messages

#### `woocommerce/js/custom-slider.js`
Product image gallery slider:
- Touch and mouse support
- Responsive image handling
- Keyboard navigation

### Third-Party Libraries

The theme includes several pre-compiled JavaScript libraries:

- **jQuery** (3.6.0 and 3.7.1): DOM manipulation and AJAX
- **Bootstrap**: Responsive UI components
- **Swiper Bundle**: Touch slider library
- **Isotope**: Filtering and sorting layouts
- **Magnific Popup**: Lightbox functionality
- **GSAP**: Animation library
- **Matter.js**: Physics engine for interactive elements
- **Panolens**: 360° image/video viewer
- **Circle Progress**: Circular progress indicators
- **jQuery UI**: UI enhancements
- **CounterUp**: Number animation

## Styling

### SASS Architecture

The theme uses SASS for maintainable CSS:

```
assets/sass/
├── style.scss                  # Main SCSS file
├── base/
│   ├── _variable.scss          # Color, font, spacing variables
│   ├── _mixin.scss             # Reusable mixins
│   ├── _function.scss          # SASS functions
│   ├── _typography.scss        # Typography styles
│   └── _extend.scss            # Extended classes
├── reset/
│   ├── _container.scss         # Container sizing
│   ├── _grid.scss              # Bootstrap grid
│   └── _input.scss             # Form input styles
├── spacing/                    # Margin and padding utilities
├── template/                   # Template-specific styles
└── utilities/                  # Utility classes
```

### Main Stylesheet

**File**: `assets/css/style.css`
- Compiled from SASS files
- Contains all theme styling
- Minified version available: `style.min.css`

## Configuration

### Custom Fields

The theme is designed to work with:
- **ACF (Advanced Custom Fields)**: For managing custom tour data
- **WooCommerce Product Meta**: For tour-specific information

Common custom fields used:
- `salidas`: Tour departure dates/schedule
- `dias`: Number of days for the tour

### Theme Supports

Add theme features with:
```php
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
add_post_type_support('slider', 'thumbnail');
```

### Recommended Plugins

- **WooCommerce**: E-commerce functionality
- **Advanced Custom Fields (ACF)**: Custom field management
- **Elementor**: Page builder
- **WPML**: Multi-language support (if needed)
- **Yoast SEO**: Search engine optimization

## Customization Tips

### Adding New Post Types

To add a new custom post type, add a function in `functions.php`:

```php
function register_new_post_type() {
    $args = array(
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true, // For Gutenberg support
    );
    register_post_type('custom_type', $args);
}
add_action('init', 'register_new_post_type');
```

### Modifying Styles

1. Edit SASS files in `assets/sass/`
2. Compile SASS to CSS
3. Update stylesheet references if needed

### Customizing Templates

Override WooCommerce templates by:
1. Copying from `woocommerce/` folder
2. Making your modifications
3. WooCommerce will automatically use your custom templates

## Support

For issues or customization requests:

1. **Check the code comments** - All functions are well documented
2. **WordPress.org documentation** - For WooCommerce and theme-related questions
3. **Theme development** - Review the File Structure section for guidance

## Version History

- **1.0.0** - Initial release with core features
  - Custom post types for travel content management
  - WooCommerce integration for tour packages
  - Budget request system with AJAX
  - Custom order management

## License

This custom theme is developed specifically for the Namaste project. All code is customized and extended from the Hello Elementor parent theme by Elementor.

## Credits

- **Parent Theme**: Hello Elementor by Elementor
- **Framework**: WordPress
- **UI Framework**: Bootstrap
- **Page Builder**: Elementor
- **E-commerce**: WooCommerce

---

**Last Updated**: December 2025
**Theme Name**: Namaste
**Theme Type**: Travel & Tourism WordPress Theme
