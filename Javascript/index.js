const navToggle = document.querySelector('.nav-toggle');
const navLinks = document.querySelectorAll('.nav__link');
const submitBtn = document.getElementById('sendmessage');

navToggle.addEventListener('click', () => {
  document.body.classList.toggle('nav-open');
});

navLinks.forEach(link => {
  link.addEventListener('click', () => {
    document.body.classList.remove('nav-open');
  });
});

document.querySelector('.contact-form').addEventListener('submit', e => {
  e.preventDefault();
  e.target.elements.name.value = '';
  e.target.elements.email.value = '';
  e.target.elements.message.value = '';
});

submitBtn.addEventListener('click', () => {
  alert('Email service is Temporary down, Apologies for the inconvenience');
});
