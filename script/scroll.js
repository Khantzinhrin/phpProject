class NavbarToggle {
    constructor(hamburgerId, navLinksId) {
        this.hamburger = document.getElementById(hamburgerId);
        this.navLinks = document.getElementById(navLinksId);
    }

    init() {
        this.hamburger.addEventListener('click', () => {
            this.navLinks.classList.toggle('show');
        });
    }
}

class ScrollHandler {
    constructor(navbarSelector) {
        this.navbar = document.querySelector(navbarSelector);
        this.scrollTimeout = null;
    }

    init() {
        window.addEventListener('scroll', () => {
            document.body.classList.add('scrolling');

            if (window.scrollY > 50) {
                this.navbar.classList.add('scrolled');
            } else {
                this.navbar.classList.remove('scrolled');
            }

            clearTimeout(this.scrollTimeout);
            this.scrollTimeout = setTimeout(() => {
                document.body.classList.remove('scrolling');
            }, 1000);
        });
    }
}

// Initialize the classes
document.addEventListener("DOMContentLoaded", () => {
    const navToggle = new NavbarToggle('hamburger', 'navbar-links');
    navToggle.init();

    const scrollEffect = new ScrollHandler('.navbar');
    scrollEffect.init();
});
