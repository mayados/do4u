if (window.innerWidth < 769){
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
  const categories = document.querySelector('.na__dropdown_annonces');
  const linkAnnonces = document.querySelector('.link-annonces');
  console.log(linkAnnonces);

  linkAnnonces.addEventListener('click', (event) => {    
    console.log("click");
    categories.classList.toggle('na__dropdown_annonces--active');
  });    
} 

displayAnnonces();

 /* Display accordeon menu responsive user parameters */
 function displayUserParameters() {
  const user = document.querySelector('.user-link');
  const dropdownUser = document.querySelector('.na__dropdown_user');
  console.log(dropdownUser);

  user.addEventListener('click', (event) => {    
    console.log("click");
    dropdownUser.classList.toggle('na__dropdown_user--active');
  });    
} 

displayUserParameters(); 

}



