let navbar = document.getElementById('navbar-nav');
let navLinks = navbar.getElementsByClassName('nav-link');
for(let i = 0; i < navLinks.length; i++){
    navLinks[i].addEventListener('click', () => {
        let current = document.getElementsByClassName('active');
        current[0].className = current[0].className.replace(' active', '');
        this.className += 'active';
    });
}