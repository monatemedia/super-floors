# Super Floors Website

A professional landing page website for Super Floors, a Cape Town-based dustless floor sanding and sealing specialist.

## Features

- Fully responsive design
- SEO-friendly structure
- Contact form with validation
- Email functionality
- Privacy policy page
- Modern UI with animations
- Mobile-first approach

## Requirements

- PHP 7.4 or higher
- Web server (Apache/Nginx)
- Composer (for dependency management)

## Installation

1. Clone the repository:

```bash
git clone [repository-url]
cd super-floors
```

2. Install dependencies:

```bash
composer require vlucas/phpdotenv
```

3. Configure environment variables:

   - Copy `.env.example` to `.env`
   - Update the values in `.env` with your configuration

4. Set up your web server:

   - Point your web server to the project root directory
   - Ensure PHP is properly configured
   - Make sure the `assets/images` directory is writable

5. Configure email:
   - Update SMTP settings in `.env` if using PHPMailer
   - Or ensure PHP's `mail()` function is properly configured

## Directory Structure

```
super-floors/
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── js/
│   │   └── main.js
│   └── images/
│       ├── logo.png
│       ├── favicon.png
│       ├── hero-bg.jpg
│       └── about-image.jpg
├── vendor/
├── .env
├── index.php
├── privacy-policy.php
├── process-contact.php
└── README.md
```

## Customization

### Images

- Replace images in the `assets/images` directory
- Recommended image sizes:
  - Logo: 200x50px
  - Hero background: 1920x1080px
  - About image: 800x600px

### Colors

- Edit the CSS variables in `assets/css/style.css`:

```css
:root {
  --primary-color: #2c3e50;
  --secondary-color: #e74c3c;
  --accent-color: #3498db;
  --text-color: #333;
  --light-bg: #f8f9fa;
}
```

### Content

- Update text content in `index.php` and `privacy-policy.php`
- Modify contact form fields in `index.php` if needed

## Security

- Keep `.env` file secure and never commit it to version control
- Regularly update dependencies
- Use HTTPS for production
- Implement proper input validation and sanitization

## Support

For support, please contact:

- Email: luke@super-floors.co.za
- Phone: 083 633 8268

## License

This project is proprietary and confidential. All rights reserved.
