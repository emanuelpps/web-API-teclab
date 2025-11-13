$("#form_categorias").submit(function () {
  let name = $("#category_name").val();

  if ($.trim(name) === "") {
    alert("el nombre esta vacio \nEmanuel Pages");
  }
});

$("#form_productos").submit(function () {
  let productName = $("#product_name").val();
  let productCategory = $("#product_category").val();
  let productPrice = $("product_price").val();
  let productDescription = $("product_description").val();

  if (
    productName === "" ||
    productCategory === "" ||
    productPrice === "" ||
    productDescription === ""
  ) {
    alert("Por favor, completá todos los campos. \nEmanuel Pages");
    return;
  }

  alert("Formulario válido ✅ \nEmanuel Pages");
});
