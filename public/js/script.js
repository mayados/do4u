function displayMobileVue() {

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

}

// When the window is resized, we call the displayMobileVue function to have a functionnal burger menu etc on mobile version
window.onresize = displayMobileVue;



let etoilesLabel = document.querySelectorAll('.rating label');

if(etoilesLabel){
    // For each label element of class .rating, we add an eventlistener
    etoilesLabel.forEach(function(etoileLabel) {
        etoileLabel.addEventListener('click', function() {

        //We get the "for" attributes value, which indicates which star it is. We replace my suffix "star" with an empty string to only get the number
        let value = etoileLabel.getAttribute('for').replace('star', '');

            // We get the container of all the stars
            let ratingContainer = document.getElementById('rating');
            // Then, we select all the stars of this container
            let stars = ratingContainer.querySelectorAll('label i');

            // We loop on the number of stars
            for (let i = 0; i < stars.length; i++) {
            // In case the loop value is smaller than the value of the star, we fill the star matching the index [i]
                if (i < value) {
                    stars[i].style.color = '#FFD700';
                } else {
                // If i is greater than the star's value, we do not fill it
                    stars[i].style.color = ''; 
                }
            }
        });
    });    
}

let avis = document.querySelector('#ajout-avis');

if(avis){
    let formulaireAvis = document.querySelector('#container-form-avis');
    let close = document.querySelector('#close-avis');
    console.log(formulaireAvis)
    console.log(close)
console.log(avis)
    avis.addEventListener('click', e =>{
        e.preventDefault();
        formulaireAvis.style.display='block';
        // Like Bootstrap is used, there is a conflict with class d-flex and display none property, so we add bootstrap class d-none and remove it later
        avis.classList.add("d-none");
    })

    close.addEventListener('click', e =>{
        e.preventDefault();
        formulaireAvis.style.display='none';
        avis.classList.remove("d-none");
    })        
}
