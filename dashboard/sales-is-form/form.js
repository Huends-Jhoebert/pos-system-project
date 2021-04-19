const addProduct = document.querySelector(".add-to-cart");
const form = document.querySelector(".modal-form");
const tableBody = document.querySelector(".table-body");
const categoryChoices = document.querySelector(".form-category");

var output = "";
addProduct.addEventListener("click", async (event) => {
   event.preventDefault();
   try {
      const fetchJson = await fetch("products.json");
      const response = await fetchJson.json();
      response.forEach((data) => {
         if (categoryChoices.value == data.product_name) {
            output += `<tr>
		  <td>${data.product_name}</td>
          <td>${data.product_code}</td>
          <td>${data.product_price}</td>
          <td>${data.product_price}</td>
		  <td><button class="btn btn-danger"><i class="fas fa-trash"></i></button></td>
       </tr>`;
         }
      });

      //   if (categoryChoices.value == "FEELIN FRESH ROLL ON GLOTA") {
      //      output += `<tr>
      //       <td>${response[1].product_code}</td>
      //       <td>${response[1].product_price}</td>
      //       <td>${response[1].product_price}</td>
      // 	  <td><button class="btn btn-danger"><i class="fas fa-trash"></i></button></td>
      //    </tr>`;
      //   }
   } catch (err) {
      console.log(err);
   }

   tableBody.innerHTML = output;
});
