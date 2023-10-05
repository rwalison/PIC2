/***** Sidebar *****/
const sidebar = document.getElementById('sidebar');
const cartList = document.getElementById('cartList');
const cartTotal = document.getElementById('total');
const checkoutList = document.getElementById('checkoutList');
const totalCheckout = document.getElementById('totalCheckout');
const buttonOpen = document.getElementById('openButton');
const buttonClose = document.getElementById('closeButton');

var priceTotal = 0;

function openSidebar(){
    sidebar.classList.add('active');
}

function closeSidebar(){
    sidebar.classList.remove('active');
}

buttonClose.addEventListener('click', function(){
    closeSidebar();
});

buttonOpen.addEventListener('click', function(){
    openSidebar();
});

/******Carrinho *********/
const cartButtons = document.querySelectorAll('.add-cart');

if(localStorage.hasOwnProperty('cart') && localStorage.getItem('cart') != "")
{
    productsOnCart = JSON.parse(localStorage.getItem('cart'));
    productsOnCart.forEach(function(index){
       getInfoProduct(index);
    });
}
else{
    var productsOnCart = new Array();
}

cartButtons.forEach(function(button){
    button.addEventListener('click', function(item)
    {
        event.preventDefault();
        let product = button.getAttribute('data-id');

        if(productsOnCart.includes(product) == false)
        {
            productsOnCart.push(product);
            localStorage.setItem('cart', JSON.stringify(productsOnCart));
            getInfoProduct(product);
        }
        openSidebar();
    });
});

function getInfoProduct(productId)
{
    fetch(`http://127.0.0.1:8000/info-product/${productId}`)
    .then((response) => response.json())
    .then((data) => {
        addToCart(data);
    })
    .catch((error) => {
        console.log("Error:", error);
    });
}

function addToCart(product)
{
    let liProduct = document.createElement('li');
    liProduct.setAttribute('data-id', product.id);
    liProduct.className = 'd-flex align-items-center';
    liProduct.innerHTML = `
        <div>
            <img src="images/produtos/${product.image}">
        </div>
        <div>
            <h5>${product.title}</h5>
            <p><small>R$</small>${product.price}</p>
        </div>
    `;

    let checkoutClone = liProduct.cloneNode(true);
    cartList.appendChild(liProduct);
    checkoutList.appendChild(checkoutClone);

    priceTotal += Number(product.price);
    cartTotal.innerHTML = `Total: <small>R$</small><strong>${priceTotal.toFixed(2)}</strong>`;
    totalCheckout.innerHTML = `Total: <small>R$</small><strong>${priceTotal.toFixed(2)}</strong>`;
}

