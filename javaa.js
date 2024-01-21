const darkModeToggle = document.getElementById('darkModeToggle');
const body = document.body;
const lightModeIcon = document.getElementById('lightModeIcon');
const darkModeIcon = document.getElementById('darkModeIcon');

const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');
const currentTheme = localStorage.getItem('theme');

if (currentTheme === 'dark' || (prefersDarkScheme.matches && !currentTheme)) {
  body.classList.add('dark-mode');
  toggleIcons(); // Show dark mode icon
}

darkModeToggle.addEventListener('click', () => {
  if (body.classList.contains('dark-mode')) {
    body.classList.remove('dark-mode');
    localStorage.setItem('theme', 'light');
  } else {
    body.classList.add('dark-mode');
    localStorage.setItem('theme', 'dark');
  }
  toggleIcons(); // Toggle between light and dark mode icons
});

function toggleIcons() {
  lightModeIcon.classList.toggle('d-none');
  darkModeIcon.classList.toggle('d-none');
}
