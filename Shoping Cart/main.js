let carts=document.querySelectorAll('.add-cart');//.add-cart comes from html code

let products=[
    {
        name:'Grey Tshirt',
        tag:'greytshirt',
        price:15,
        inCart:0

    },
    {
        name:'Grey Hoddie',
        tag:'greyhoddie',
        price:20,
        inCart:0

    },
    {
        name:'Black Tshirt',
        tag:'blacktshirt',
        price:15,
        inCart:0

    },
    {
        name:'Black hoddie',
        tag:'blackhoddie',
        price:15,
        inCart:0

    }
];

for(let i=0;i<carts.length;i++){
   carts[i].addEventListener('click',() =>{
       cartNumbers(products[i]);
   })
   
}
function onLoadCartNumbers(){

    let productNumbers=localStorage.getItem('cartNumbers');

    if(productNumbers){
        document.querySelector('.cart span').textContent=productNumbers;//.cart span comes from html page
    }

}
function cartNumbers(product){
    
    let productNumbers=localStorage.getItem('cartNumbers');

    productNumbers=parseInt(productNumbers);

    if(productNumbers){
        localStorage.setItem('cartNumbers',productNumbers+1);
        document.querySelector('.cart span').textContent=productNumbers+1;//.cart span comes from html page

    }else{
        localStorage.setItem('cartNumbers',1);
        document.querySelector('.cart span').textContent=1;//.cart span comes from html page
    }
     setItems(product);
    

}
function setItems(product){
     let cartItems=localStorage.getItem('productsInCart');
     cartItems=JSON.parse(cartItems);
    
     if(cartItems !=null){

         if(cartItems[product.tag]==undefined){
            cartItems={
                ...cartItems,
                [product.tag]:product
            }
         }
         cartItems[product.tag].inCart+=1;
     }else{
         product.inCart=1;
         cartItems={
             [product.tag]:product
         }
     }

    
    localStorage.setItem("productsInCart",JSON.stringify(cartItems));
}

onLoadCartNumbers();