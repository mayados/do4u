/* Display nav links on mobiles and pads */

function displayNavList() {
    const navList = document.querySelector('.na__list');
    const burger = document.querySelector('.na__burger-menu');
    console.log(burger);
  
    burger.addEventListener('click', (event) => {    
      navList.classList.toggle('show-list');
    });    
  } 
  
 displayNavList();

 /* Display accordeon menu responsive annonces */
 function displayAnnonces() {
  const categories = document.querySelector('.na__list');
  const linkAnnonces = document.querySelector('.na__dropdown_annonces');
  console.log(burger);

  burger.addEventListener('click', (event) => {    
    categories.classList.toggle('show-categories');
  });    
} 

displayAnnonces();