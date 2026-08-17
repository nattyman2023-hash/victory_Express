/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./includes/**/*.php', './main.php'],
  theme: {
    extend: {
      colors: {
        tertiary: '#5a5c5d',
        secondary: '#5d5e61',
        'on-secondary-fixed-variant': '#454749',
        'surface-container-high': '#dce9ff',
        outline: '#8f706b',
        'primary-container': '#d9362b',
        'on-primary-fixed': '#410001',
        'on-tertiary-fixed-variant': '#454748',
        'surface-variant': '#d3e4fe',
        'inverse-surface': '#213145',
        'surface-container-highest': '#d3e4fe',
        'surface-dim': '#cbdbf5',
        'surface-container': '#e5eeff',
        'secondary-fixed-dim': '#c6c6c9',
        'tertiary-container': '#737576',
        'on-tertiary-fixed': '#191c1d',
        'on-tertiary': '#ffffff',
        'on-primary-fixed-variant': '#930004',
        'on-background': '#0b1c30',
        'secondary-container': '#e2e2e5',
        'on-error': '#ffffff',
        'outline-variant': '#e4beb8',
        'on-tertiary-container': '#fcfdfe',
        'primary-fixed': '#ffdad5',
        'on-surface-variant': '#5b403c',
        'on-surface': '#0b1c30',
        'on-secondary-fixed': '#1a1c1e',
        error: '#ba1a1a',
        'error-container': '#ffdad6',
        background: '#f8f9ff',
        surface: '#f8f9ff',
        'secondary-fixed': '#e2e2e5',
        'primary-fixed-dim': '#ffb4a9',
        'on-error-container': '#93000a',
        'on-secondary': '#ffffff',
        'surface-container-low': '#eff4ff',
        'tertiary-fixed': '#e1e3e4',
        'surface-bright': '#f8f9ff',
        primary: '#b51b15',
        'surface-container-lowest': '#ffffff',
        'tertiary-fixed-dim': '#c5c7c8',
        'on-primary': '#ffffff',
        'on-secondary-container': '#636467',
        'surface-tint': '#b91e17',
        'on-primary-container': '#fffbff',
        'inverse-on-surface': '#eaf1ff',
        'inverse-primary': '#ffb4a9'
      },
      borderRadius: {
        DEFAULT: '0.125rem',
        lg: '0.25rem',
        xl: '0.5rem',
        full: '0.75rem'
      },
      spacing: {
        'grid-margin': '40px',
        'section-gap-mobile': '64px',
        gutter: '24px',
        'section-gap-desktop': '120px',
        base: '8px'
      },
      fontFamily: {
        'body-md': ['Inter', 'sans-serif'],
        'body-lg': ['Inter', 'sans-serif'],
        'display-lg': ['Montserrat', 'sans-serif'],
        'headline-lg': ['Montserrat', 'sans-serif'],
        'headline-xl': ['Montserrat', 'sans-serif'],
        'display-lg-mobile': ['Montserrat', 'sans-serif'],
        'label-bold': ['IBM Plex Sans', 'sans-serif']
      },
      fontSize: {
        'body-md': ['16px', { lineHeight: '1.6', fontWeight: '400' }],
        'body-lg': ['18px', { lineHeight: '1.6', fontWeight: '400' }],
        'display-lg': ['64px', { lineHeight: '1.1', letterSpacing: '-0.02em', fontWeight: '700' }],
        'headline-lg': ['32px', { lineHeight: '1.3', fontWeight: '600' }],
        'headline-xl': ['48px', { lineHeight: '1.2', fontWeight: '700' }],
        'display-lg-mobile': ['40px', { lineHeight: '1.2', letterSpacing: '-0.01em', fontWeight: '700' }],
        'label-bold': ['14px', { lineHeight: '1.2', letterSpacing: '0.05em', fontWeight: '600' }]
      }
    }
  },
  plugins: []
};
