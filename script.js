
const form = document.getElementById('iletisimForm');
if(form){
  const feedback = document.getElementById('feedback');
  form.addEventListener('submit', e=>{
    e.preventDefault();
    feedback.textContent="Mesajınız başarıyla gönderildi!";
    form.reset();
  });
}
document.querySelectorAll('a[href^="/avrupablogu/index.php#"]').forEach(link=>{
  link.addEventListener('click', e=>{
    e.preventDefault();
    const id = link.getAttribute('href').split('#')[1];
    const target = document.getElementById(id);
    if(target){
      target.scrollIntoView({behavior:'smooth'});
    }
    window.location.href = '/avrupablogu/index.php#' + id; 
  });
});