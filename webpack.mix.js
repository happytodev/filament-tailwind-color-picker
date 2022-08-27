const mix = require('laravel-mix')
 
mix.postCss('resources/css/ftcp.css', 'resources/dist', [
    require('tailwindcss'), 
])