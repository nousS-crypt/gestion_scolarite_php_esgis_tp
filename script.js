// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
  
        form.classList.add('was-validated')
      }, false)
    })
  })()

  let item = document.querySelectorAll('.slider .it');
  let next = document.getElementById("next");
  let prev = document.getElementById('previous');
  let active = 2;

  function loadshow(){
    let stt=0;
    item[active].style.transform = 'none';      
    item[active].style.zIndex = 1;    
    for (var i = active + 1; i < item.length; i++) {
        stt++;
        item[i].style.transform = `translateX(${120*stt}px) scale(${1 - 0.2*stt}) perspective(50px) rotateY(-0.6deg)`;      
        item[i].style.zIndex = -stt;      
    }
    stt=0
    for (var i = active - 1; i >= 0; i--) {
      stt++;
      item[i].style.transform = `translateX(${-120*stt}px) scale(${1 - 0.2*stt}) perspective(16px) rotateY(1deg)`;      
      item[i].style.zIndex = -stt;    
    }
  }
  loadshow();

  next.onclick= function() {
    active = active + 1 < item.length ? active + 1 : active;
    loadshow();
  }
  prev.onclick= function() {
    active = active - 1 >= 0 ? active - 1 : active;
    loadshow();
  }

   const ratio = .1
   const options ={
    root: null ,
    rootMargin : '0px',
    threshold: ratio
   }

   const handleIntersect= function(entries,observer){
    entries.forEach(function(entry) {
      if(entry.intersectionRatio > ratio){
        entry.target.classList.add('reveal-visible')
        observer.unobserve(entry.target)
      }
    })
   }
   
 const observer = new IntersectionObserver(handleIntersect, options)
  document.querySelectorAll('.reveal').forEach(function(r){
    observer.observe(r)
  })
 
 