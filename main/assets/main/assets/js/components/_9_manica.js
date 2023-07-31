
// Sub Menu

const subMenuLink = document.querySelector('.menu-item-has-children a');
const subMenu = document.querySelector('.menu-item-has-children .sub-menu');
const subMenuLi = document.querySelectorAll('.menu-item-has-children .sub-menu li');
var subMenuHeight = 30;

// const icon = document.createElement('i');
// icon.setAttribute('class', 'uil uil-angle-down');

// subMenuLink.appendChild(icon);

if(subMenu){

  subMenuLi.forEach(li => {
    subMenuHeight += li.offsetHeight;
  });

  subMenuLink.addEventListener('mouseenter', (e) => {
    e.preventDefault();
    subMenu.style.height = `${subMenuHeight}px`;
  })
  subMenuLink.addEventListener('click', (e) => {
    e.preventDefault();
    subMenu.style.height = `${subMenuHeight}px`;
  })
  document.querySelector('body').addEventListener('click', () => {
    if(subMenu.offsetHeight > 0){
      subMenu.style.height = 0;
    }
  })
  subMenu.addEventListener('mouseleave', () => {
    subMenu.style.height = 0;
  })
}

// Testimonial file

const inputTestimonial = document.querySelector('.testimonial-form #photo');
if(inputTestimonial){
  inputTestimonial.addEventListener('change', e => {
    let newText = e.target.value;
    newText = newText.replace("C:\\fakepath\\", '');
    if(newText.length > 20){
      let type = newText.split(".").pop();
      newText = newText.substring(0, 20);
      newText = newText + '...' + type;
    }
    newText = newText + ' (mudar foto)';
    document.querySelector('.testimonial-form #testimonial-file-label')
    .textContent = newText;
  })
}

// Jobs file

const inputJobs = document.querySelector('.jobs-form #curriculum');
if(inputJobs){
  inputJobs.addEventListener('change', e => {
    let newText = e.target.value;
    newText = newText.replace("C:\\fakepath\\", '');
    if(newText.length > 20){
      let type = newText.split(".").pop();
      newText = newText.substring(0, 20);
      newText = newText + '...' + type;
    }
    newText = newText + ' (mudar arquivo)';
    document.querySelector('.jobs-form #testimonial-file-label')
    .textContent = newText;
  })
}

// timeline

const timelineItem = document.querySelectorAll('.v-timeline__section');
const timelineShowBtn = document.querySelector('#timelime-show-btn');

if(timelineItem.length > 0){
  timelineShowBtn.addEventListener('click', () => {
    timelineItem.forEach(item => {
      item.style.display = 'flex';
    });
    timelineShowBtn.style.display = 'none';
  })
}

// vagas

function setJobInfo(itSelf){
  let local = document.querySelector('.jobs-form #job-local');
  let jobInfo = document.querySelector('.jobs-form #job-info');

  local.value = itSelf.dataset.local;
  jobInfo.value = itSelf.dataset.job;
  console.log('Job infos setted')
}

// events
const btnIntern = document.querySelector('#btn-interno');
const btnExtern = document.querySelector('#btn-externo');
const eventIntern = document.querySelector('#evento-interno');
const eventExtern = document.querySelector('#evento-externo');

function eventShow(type){
  if(type == 'interno'){
    console.log('interno')
    btnIntern.classList.remove('btn--fake');
    btnIntern.classList.add('pointer-none');
    btnIntern.classList.add('btn--subtle-full');
    btnExtern.classList.remove('pointer-none');
    btnExtern.classList.remove('btn--subtle-full');
    btnExtern.classList.add('btn--fake');
    eventExtern.hidden = true;
    eventIntern.hidden = false;
  }
  if(type == 'externo'){
    btnExtern.classList.remove('btn--fake');
    btnExtern.classList.add('pointer-none');
    btnExtern.classList.add('btn--subtle-full');
    btnIntern.classList.remove('pointer-none');
    btnIntern.classList.remove('btn--subtle-full');
    btnIntern.classList.add('btn--fake');
    eventIntern.hidden = true;
    eventExtern.hidden = false;
  }
}

// filter

const filterItems = document.querySelectorAll('.filter-item');
const filterBtn = document.querySelectorAll('.filter-button');

if(filterItems.length > 0){
  filterBtn.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtn.forEach(btn => {
        btn.classList.remove('selected');
      });
      btn.classList.add('selected');

      filterItems.forEach(item => {
        if(item.dataset.filter === btn.dataset.filter){
          item.style.display= 'flex';
        }else{
          item.style.display= 'none';
        }
      })
    })
  })

}

// sticky nav

const stickColNav = document.querySelector('.col-sticky-element');

if(stickColNav){
  stickColNav.style.height = stickColNav.parentElement.parentElement.offsetHeight + 'px'
}

// menu

const menuBtn = document.querySelector('#menu-btn');
const mainMenu = document.querySelector('#menu');

menuBtn.addEventListener('click', () => {
  if(menuBtn.dataset.state == 'opened'){
    menuBtn.classList.remove('open');
    menuBtn.dataset.state = 'closed';
    mainMenu.style.height = '0';
    mainMenu.style.opacity = '0';
  }else{
    menuBtn.classList.add('open');
    menuBtn.dataset.state = 'opened';
    mainMenu.style.height = '110vh';
    mainMenu.style.opacity = '1';
  }
})

// premios carousel

var newHeight = 0;
const carouselItems = document.querySelectorAll('.premios-carousel .slick-slide');

if(carouselItems.length > 0){
  carouselItems.forEach(item => {
    if(item.offsetHeight > newHeight){
      newHeight = item.offsetHeight;
    }
  })
  carouselItems.forEach(item => {
    item.style.height = `${newHeight}px`
  });
}

// natal carousel

var newItemHeight = 0;
const carouselNatItems = document.querySelectorAll('.natal-item');

if(carouselNatItems.length > 0){
  carouselNatItems.forEach(item => {
    if(item.offsetHeight > newItemHeight){
      newItemHeight = item.offsetHeight;
    }
  })
  carouselNatItems.forEach(item => {
    item.style.height = `${newItemHeight}px`
  });
}

// depoimento feedback

const testimonialForm = document.querySelector('#wpcf7-f110-o2');
if(testimonialForm){
  // testimonialForm.addEventListener('wpcf7submit', () => {
  //   let feedback = document.querySelector('#btn-feedback-testimonial');
  //   feedback.click();
  // })
  
  testimonialForm.addEventListener('wpcf7invalid', () => {
    let feedback = document.querySelector('#btn-testimonial-validation-feedback');
    feedback.click();
  })
  
  testimonialForm.addEventListener('wpcf7mailsent', (event) => {
    let closeModalBtn = document.querySelector('#modal-send-testimonial .modal__close-btn');
    closeModalBtn.click();
    let feedback = document.querySelector('#btn-feedback-testimonial');
    feedback.click();
  })

  
  // testimonialForm.addEventListener('wpcf7submit', (event) => {
  //   console.log(event)
  // })
}