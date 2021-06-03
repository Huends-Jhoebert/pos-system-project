const addProduct = document.querySelector(".add-to-cart");
const form = document.querySelector(".modal-form");
const tableBody = document.querySelector(".table-body");
const categoryChoices = document.querySelector(".form-category");
const checkOutSubtotal = document.querySelector(".subtotal");
const quantity = document.querySelector(".quantity");
var totalPrice = 0;

const productsData = [
   {
      product_name: "FEELIN FRESH ROLL ON COOLING",
      product_code: "FF-01-APD",
      product_price: 170,
   },
   {
      product_name: "FEELIN FRESH ROLL ON GLOTA",
      product_code: "FF-02-APR",
      product_price: 180,
   },
   {
      product_name: "24K Gold LIPSTICK",
      product_code: "GT-02-CL",
      product_price: 500,
   },
   {
      product_name: "SKIN SO SOFT",
      product_code: "LO-01-WT",
      product_price: 150,
   },
   {
      product_name: "Naturals Whitening",
      product_code: "NAT-120g-GRPACL",
      product_price: 99,
   },
   {
      product_name: "CHENILLE T-BAR",
      product_code: "WTH-01-WG",
      product_price: 500,
   },
];

var output = "";
addProduct.addEventListener("click", (event) => {
   event.preventDefault();
   // try {
   //    const fetchJson = await fetch("products.json");
   //    const response = await fetchJson.json();
   productsData.forEach((data) => {
      if (categoryChoices.value == data.product_name) {
         totalPrice += parseInt(data.product_price);
         output += `<tr>
            	  <td>${data.product_name}</td>
                  <td>${data.product_code}</td>
                  <td>1</td>
                  <td>${data.product_price}</td>
            	  <td><button class="btn btn-danger delete"><i class="fas fa-trash"></i></button></td>
               </tr>`;
      }
   });
   // } catch (err) {
   //    console.log(err);
   // }
   checkOutSubtotal.textContent = `Subtotal: ₱${totalPrice}`;
   tableBody.innerHTML = output;
});

tableBody.addEventListener("click", (event) => {
   if (event.target.classList.contains("delete")) {
      var productDelete = event.target.parentElement;
      productDelete.parentElement.remove();
   }
});
