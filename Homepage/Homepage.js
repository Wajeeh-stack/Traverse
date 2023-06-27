// Navbar functionality
let navbar = document.querySelector('.header .navbar');

// Toggle navbar active state on menu button click
document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
}

// Remove active state from navbar on window scroll
window.onscroll = () => {
    navbar.classList.remove('active');
}

// Shopping cart functionality
let openShopping = document.querySelector('.shopping');
let notif = document.querySelector('.shopping span');
let clear = document.querySelector('.wrap span');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.destination .box-container');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

// Open shopping cart
openShopping.addEventListener('click', () => {
    body.classList.add('active');
})

// Close shopping cart
closeShopping.addEventListener('click', () => {
    body.classList.remove('active');
})

// Product data
let products = [
    {
        id: 1,
        name: 'Moraine Lake Canada',
        image: 'des-1.jpg',
        price: 120000
    },
    {
        id: 2,
        name: 'Rhossili Bay Wales',
        image: 'des-2.jpg',
        price: 120000
    },
    {
        id: 3,
        name: 'California United States',
        image: 'des-3.jpg',
        price: 220000
    },
    {
        id: 4,
        name: 'Taj Mahal India',
        image: 'des-4.jpg',
        price: 123000
    },
    {
        id: 5,
        name: 'Lincolin Park Chicago',
        image: 'des-5.jpg',
        price: 320000
    },
    {
        id: 6,
        name: 'Pescador Island Philippines',
        image: 'gc.jpg',
        price: 120000
    },
    {
        id: 7,
        name: 'Viva Wyndham Maya Mexico',
        image: 'des-7.jpg',
        price: 120000
    },
    {
        id: 8,
        name: ' Burj Khalifa Dubai United Arab Emirates',
        image: 'des-8.jpg',
        price: 120000
    }
];

let listCards = [];

// Initialize the app by creating product cards
function initApp() {
    products.forEach((value, key) => {
        let newDiv = document.createElement('div');
        let delay = 150 * key; // Incremental delay calculation

        newDiv.innerHTML = `
            <div class="box" data-aos="fade-up" data-aos-delay="${delay}">
                <div class="image">
                    <img src="../References/images/${value.image}">
                </div>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    <a onclick="addToCard(${key})">$${value.price.toLocaleString()}<i class="fas fa-angle-right"></i></a>
                </div>
            </div>`;

        list.appendChild(newDiv);
    });
}

// Initialize the app
initApp();

// Add a product to the shopping cart
function addToCard(key) {
    if (listCards[key] == null) {
        // Copy product from list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
        notif.style.display = "block";
        clear.style.display = "block";
    }
    reloadCard();
}

// Reload the shopping cart
function reloadCard() {
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key) => {
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if (value != null) {
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div class="image"><img src="../References/images/${value.image}"/></div>
                <div class="name">${value.name}</div>
                <div class="price">$${value.price.toLocaleString()}</div>
                <div class="quantity">
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
            listCard.appendChild(newDiv);
        }
    })
    total.innerText = '$' + totalPrice.toLocaleString();
    quantity.innerText = count;
}

// Change the quantity of a product in the shopping cart
function changeQuantity(key, quantity) {
    if (quantity == 0) {
        delete listCards[key];
        notif.style.display = "none";
        clear.style.display = "none";
    } else {
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}

// Process checkout and send order to the server
$(document).ready(function () {
    $("#destination .checkOut button").click(function() {
        let i = 0;
        $(".listCard li").each(function() {
            $(this).children().each(function() {
                if ($(this).attr('class') == "image")
                    return;

                if ($(this).attr('class') == "name")
                    createCookie("name"+i, $(this).html());

                if ($(this).attr('class') == "price") {
                    createCookie("price"+i, $(this).html());
                }

                if ($(this).attr('class') == "quantity")
                    createCookie("quantity"+i, $(this).find('.count').html());
            });

            let xhtp = new XMLHttpRequest();
            xhtp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // alert(this.responseText);
                }
            }
            xhtp.open('GET', 'order.php?index='+i, true);
            xhtp.send();
            i++;
        });
        body.classList.remove('active');
        alert("Reservation confirmed !");

        // Delete the list cards
        listCards = [];

        // Clear the list card container
        listCard.innerHTML = '';

        // Update the total and quantity
        total.innerText = '$0';
        quantity.innerText = '0';
        notif.style.display = "none";
    })
});

clear.addEventListener('click', () => {
    // Delete the list cards
    listCards = [];

    // Clear the list card container
    listCard.innerHTML = '';

    // Update the total and quantity
    total.innerText = '$0';
    quantity.innerText = '0';
    clear.style.display = "none";
    notif.style.display = "none";
})

// Helper function to create a cookie
function createCookie(name, value, days) {
    let expires;
    if (days) {
        let date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    } else {
        expires = "";
    }
    document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
}
