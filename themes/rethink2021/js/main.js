// Blocks --- Blocks --- Blocks --- 
// Blocks --- Blocks --- Blocks --- 
// Blocks --- Blocks --- Blocks --- 

// function addListBlockClassName(settings, name) {
//   if (name !== 'core/list') {
//     return settings;
//   }
//   return lodash.assign({}, settings, {
//     supports: lodash.assign({}, settings.supports, {
//       className: true
//     }),
//   });
// }

// wp.hooks.addFilter(
//   'blocks.registerBlockType',
//   'my-plugin/class-names/list-block',
//   addListBlockClassName
// );


// Navigation --- Navigation --- Navigation --- 
// Navigation --- Navigation --- Navigation --- 
// Navigation --- Navigation --- Navigation --- 


const hamburger = document.querySelector('#hamburger')
const closeBtn = document.querySelector('#closeBtn')
const menu = document.querySelector('#nav__menu-mobile')

hamburger.addEventListener('click', () => {
  console.log(' 🎈');
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
