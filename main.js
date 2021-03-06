let carts = document.querySelectorAll('.add-cart');
let products = [
    {
        name: 'Printed Tshirt',
        tag: 'tshirt',
        price: 50,
        inCart: 0
    },
    {
        name:'Printed Tshirt',
        tag: 'tshirt',
        price: 50,
        inCart: 0
    },
    {
        name:'Casual Shirt',
        tag: 'cshirt',
        price: 150,
        inCart: 0
    },
    {
        name:'Printed Tshirt',
        tag: 'tshirt',
        price: 50,
        inCart: 0
    },
    {
        name:'Printed Tshirt',
        tag: 'tshirt',
        price: 50,
        inCart: 0
    },
    {
        name:'Printed Dress',
        tag: 'dress',
        price: 50,
        inCart: 0
    },
    {
        name:'Printed Dress',
        tag: 'dress',
        price: 50,
        inCart: 0
    },
    {
        name:'Printed Dress',
        tag: 'dress',
        price: 50,
        inCart: 0
    },
    {
        name:'Printed Dress',
        tag: 'dress',
        price: 50,
        inCart: 0
    },
    {
        name:'Printed Dress',
        tag: 'dress',
        price: 50,
        inCart:0
    }
];

for(let i=0; i<carts.length;i++)
{
    carts[i].addEventListener('click',()=>{cartNumbers(products[i]);
    totalCost(products[i])
    })
}

function onLoadCartNumbers(){
    let productNumbers = localStorage.getItem('cartNumbers');
    if(productNumbers)
    {
        document.querySelector('.cart').textContent=productNumbers;
    }
}
function cartNumbers(product)
{
    let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers);

    if(productNumbers)
    {
        localStorage.setItem("cartNumbers",productNumbers+1);
    }else{
        localStorage.setItem("cartNumbers",1);
    }
    setItems(product);
}
function setItems(product)
{
    let cartItems = localStorage.getItem('productsIncart');
    cartItems = JSON.parse(cartItems);
    if(cartItems != null){
        if(cartItems[product.tag] == undefined)
        {
            cartItems = {
                ...cartItems,
                [product.tag]:product
            }
        }
        cartItems[product.tag].inCart += 1;
    }
    else{
        product.inCart=1;
        cartItems ={[product.tag]:product}
        
    }
    localStorage.setItem("productsIncart",JSON.stringify(cartItems));
}
function totalCost()
{
    let cartCost= localStorage.getItem('totalCost');
    if(cartCost != null)
    {
        cartCost=parseInt(cartCost);
        localStorage.setItem("totalCost",cartCost+product.price);
    }
    else{
        localStorage.setItem("totalCost",product.price);
    }
}
function displayCart(){
    let cartItems = localStorage.getItem("productsIncart");
    cartItems = JSON.parse(cartItems);
    let productContainer = document.querySelector(".products");
    let cartCost= localStorage.getItem('totalCost');
    console.log(cartItems);
    if(cartItems && productContainer)
    {
        productContainer.innerHTML='';
        Object.values(cartItems).map(item => {productContainer.innerHTML += `
        <div class="product">
        <ion-icon name="close-circle"></ion-icon>
        <img src="./images/${item.tag}.jpeg">
        <span>${item.name}</span>
        </div>
        <div class="price">$${item.price}.00</div>
        <div class="quantity">
        <span>${item.inCart}</span>
        </div>
        <div class="total">
        $${item.inCart * item.price}.00
        </div>
        `
        ;
        
        });
        productContainer.innerHTML += `
        <div class="basketTotalContainer">
        <h4 class="basketTotalTitle">
        Basket Total</h4>
        <h4 class="basketTotal">
        $${cartCost}.00</h4>
        </div>`
        ;
    }
}
onLoadCartNumbers();
displayCart();