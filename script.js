let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () => {
    // rotates menu button  
    menu.classList.toggle('fa-times');
    // displays
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    // rotates menu button  
    menu.classList.remove('fa-times');
    // displays
    navbar.classList.remove('active');
}


// PACKAGES LOAD MORE 

let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;
loadMoreBtn.onclick = () => {
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for (var i = currentItem; i < currentItem + 3; i++) {
        boxes[i].style.display = 'inline-block';
    };
    currentItem += 3;
    if (currentItem >= boxes.length) {
        loadMoreBtn.style.display = 'none';
    }
}
