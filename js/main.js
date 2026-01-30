/**
 * Meldo Leonardo Maúnze Portfolio - JAVASCRIPT
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Dark Mode Logic
    const html = document.documentElement;
    const darkToggle = document.getElementById('dark-toggle');
    const darkToggleMobile = document.getElementById('dark-toggle-mobile');

    const setTheme = (isDark) => {
        if (isDark) {
            html.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        } else {
            html.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        }
        updateIcons();
    };

    const updateIcons = () => {
        const isDark = html.classList.contains('dark');
        const icons = [darkToggle, darkToggleMobile];
        icons.forEach(btn => {
            if (btn) {
                const icon = btn.querySelector('i');
                if (icon) {
                    icon.setAttribute('data-lucide', isDark ? 'sun' : 'moon');
                }
            }
        });
        if (window.lucide) {
            window.lucide.createIcons();
        }
    };

    // Initialize Theme
    const savedTheme = localStorage.getItem('theme');
    const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    
    if (savedTheme === 'dark' || (!savedTheme && systemPrefersDark)) {
        setTheme(true);
    } else {
        setTheme(false);
    }

    // Theme Toggle Events
    if (darkToggle) darkToggle.addEventListener('click', () => setTheme(!html.classList.contains('dark')));
    if (darkToggleMobile) darkToggleMobile.addEventListener('click', () => setTheme(!html.classList.contains('dark')));

    // 2. Mobile Menu Logic
    const openMenuBtn = document.getElementById('open-menu');
    const closeMenuBtn = document.getElementById('close-menu');
    const mobileMenu = document.getElementById('mobile-menu');

    if (openMenuBtn && mobileMenu) {
        openMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.add('active');
        });
    }

    if (closeMenuBtn && mobileMenu) {
        closeMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
        });
    }

    // Close menu on link click
    if (mobileMenu) {
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
            });
        });
    }

    // 3. Lucide Icons Initialization
    if (window.lucide) {
        window.lucide.createIcons();
    }

    console.log('✓ Portfolio Meldo Maúnze - Carregado');
});
