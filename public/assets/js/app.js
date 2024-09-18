// navbar
// $(document).ready(function () {
//     $('.nav_list .nav_item').on('click', function(){
//         $('.nav_item svg').removeClass('hidden');

//         $(this).addClass('hidden');
//     })
// })

//about bar
const list = document.querySelectorAll('.about_list');
function activeLink() {
    list.forEach((item) =>
        item.classList.remove('active'));
    this.classList.add('active');
}

list.forEach((item) =>
    item.addEventListener('click', activeLink));

// change content

function openTab(event, tabId) {
    // Hide all tab contents
    var contents = document.querySelectorAll('.tab-content');
    contents.forEach(function (content) {
        content.style.display = 'none';
    });

    // Remove 'active' class from all tab buttons
    var buttons = document.querySelectorAll('.tab_btn');
    buttons.forEach(function (button) {
        button.classList.remove('active');
    });

    // Show the selected tab content and add 'active' class to the clicked button
    document.getElementById(tabId).style.display = 'block';
    event.currentTarget.classList.add('active');
}

// Optionally, open the first tab by default
document.querySelector('.tab_btn').click();




