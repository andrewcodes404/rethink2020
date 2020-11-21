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
const menu = document.querySelector('#nav__menu')

hamburger.addEventListener('click', () => {
  menu.classList.remove('nav__menu--hide')
  menu.classList.add('nav__menu--show')

  hamburger.classList.remove('nav__button--show')
  hamburger.classList.add('nav__button--hide')
  closeBtn.classList.remove('nav__button--hide')
  closeBtn.classList.add('nav__button--show')
})


closeBtn.addEventListener('click', () => {
  menu.classList.remove('nav__menu--show')
  menu.classList.add('nav__menu--hide')

  closeBtn.classList.remove('nav__button--show')
  closeBtn.classList.add('nav__button--hide')
  hamburger.classList.remove('nav__button--hide')
  hamburger.classList.add('nav__button--show')
})




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
