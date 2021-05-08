// Navigation --- Navigation --- Navigation --- 
// Navigation --- Navigation --- Navigation --- 
// Navigation --- Navigation --- Navigation --- 


const hamburger = document.querySelector('#hamburger')
const closeBtn = document.querySelector('#closeBtn')
const menu = document.querySelector('#nav__menu-mobile')

hamburger.addEventListener('click', () => {

  menu.classList.remove('nav__menu-mobile--hide')
  menu.classList.add('nav__menu-mobile--show')

  hamburger.classList.remove('nav__button--show')
  hamburger.classList.add('nav__button--hide')
  closeBtn.classList.remove('nav__button--hide')
  closeBtn.classList.add('nav__button--show')
})


closeBtn.addEventListener('click', () => {
  menu.classList.remove('nav__menu-mobile--show')
  menu.classList.add('nav__menu-mobile--hide')

  closeBtn.classList.remove('nav__button--show')
  closeBtn.classList.add('nav__button--hide')
  hamburger.classList.remove('nav__button--hide')
  hamburger.classList.add('nav__button--show')
})


// desktop dropdown --- desktop dropdown --- desktop dropdown --- 
// desktop dropdown --- desktop dropdown --- desktop dropdown --- 
// desktop dropdown --- desktop dropdown --- desktop dropdown --- 


const navDesktop = document.querySelector('#nav__menu-desktop')

const menusWithSubMenu = navDesktop.querySelectorAll('.menu-item-has-children')

menusWithSubMenu.forEach(menuWithSubMenu => {
  menuWithSubMenu.addEventListener('mouseover', function () {
    const link = this.firstElementChild
    const submenu = this.querySelector("ul")
    const submenuHeight = submenu.scrollHeight + "px"
    link.style.backgroundColor = "green"
    submenu.style.maxHeight = submenuHeight;
  })


  menuWithSubMenu.addEventListener('mouseout', function () {
    const link = this.firstElementChild
    const submenu = this.querySelector("ul")
    submenu.style.maxHeight = "0";
    link.style.backgroundColor = "transparent"
  })

});



// aos --- aos --- aos --- aos --- aos --- 
// aos --- aos --- aos --- aos --- aos --- 
// aos --- aos --- aos --- aos --- aos --- 

const h2s = document.querySelectorAll('h2')

if (h2s) {
  h2s.forEach(h2 => {

    h2.classList.add('b-h2')
    h2.setAttribute("data-aos", "h2-heading");

  });
}


// modals --- modals --- modals --- modals --- 
// modals --- modals --- modals --- modals --- 
// modals --- modals --- modals --- modals --- 

const logos = document.querySelectorAll('.s-card__logo')

logos.forEach(logo => {
  logo.addEventListener('click', function () {
    this.nextElementSibling.classList.add("s-modal-wrapper--show")
  })
});


const modalWrappers = document.querySelectorAll('.s-modal-wrapper')


modalWrappers.forEach(modalWrapper => {
  modalWrapper.addEventListener('click', function (event) {
    event.stopPropagation();
    this.classList.remove("s-modal-wrapper--show")
  })
});

const modals = document.querySelectorAll('.s-modal')

modals.forEach(modal => {
  modal.addEventListener('click', function (event) {
    event.stopPropagation();
    // this.classList.remove("s-modal-wrapper--show")
  })
});


const modalCloseBtns = document.querySelectorAll('.s-modal__close-btn')

modalCloseBtns.forEach(modalCloseBtn => {
  modalCloseBtn.addEventListener('click', function (event) {
    event.stopPropagation();
    this.parentElement.parentElement.classList.remove("s-modal-wrapper--show")
  })
});




//home-page pop-up
//home-page pop-up
//home-page pop-up
//home-page pop-up

const popUpWrapper = document.querySelector('#odoo-pop-wrapper')

if (popUpWrapper) {

  if (localStorage.getItem('popState') != 'shown') {
    setTimeout(() => {
      popUpWrapper.classList.add('odoo-pop-wrapper__show')
    }, 20000);
  }

  popUpWrapper.addEventListener('click', (e) => {
    e.stopPropagation()
    popUpWrapper.classList.remove('odoo-pop-wrapper__show')
  })

}


// oddo-form
// oddo-form
// oddo-form
// oddo-form
// oddo-form

function resizeIframe(obj) {
  obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
}

const oddoForms = document.querySelectorAll('.odoo-form')
if (oddoForms) {
  oddoForms.forEach(oddoForm => {
    oddoForm.style.height = oddoForm.scrollHeight + 'px';
  });

}

