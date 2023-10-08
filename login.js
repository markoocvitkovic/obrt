const korime = document.querySelector('#korime');
const korimelabel = document.querySelector('#korimelabel');

korime.addEventListener('focus', () => {
  korimelabel.style.fontSize = '1.2rem';
  korimelabel.style.transform = 'translateY(-3rem)';
});

korime.addEventListener('blur', () => {
  if (korime.value) {
    korimelabel.style.color = '#4b4b4b';
  } else {
    korimelabel.style.fontSize = '1.8rem';
    korimelabel.style.transform = 'none';
    korimelabel.style.color = '#4b4b4b';
  }
});

if (korime.value) {
  korimelabel.style.fontSize = '1.2rem';
  korimelabel.style.transform = 'translateY(-30%)';
}



const lozinka = document.querySelector('#lozinka');
const lozinkalabel = document.querySelector('#lozinkalabel');

lozinka.addEventListener('focus', () => {
  lozinkalabel.style.fontSize = '1.2rem';
  lozinkalabel.style.transform = 'translateY(-3rem)';
});

lozinka.addEventListener('blur', () => {
  if (lozinka.value) {
    lozinkalabel.style.color = '#4b4b4b';
  } else {
    lozinkalabel.style.fontSize = '1.8rem';
    lozinkalabel.style.transform = 'none';
    lozinkalabel.style.color = '#4b4b4b';
  }
});

if (lozinka.value) {
  lozinkalabel.style.fontSize = '1.2rem';
  lozinkalabel.style.transform = 'translateY(-30%)';
}