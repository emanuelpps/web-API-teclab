$("#form_categorias").submit(function (e) {
  let name = $("#nombre").val();

  if ($.trim(name) === "") {
    alert("El nombre está vacío\nSantiago Di Colantonio");
    e.preventDefault();
    return false;
  }
});

$("#form_productos").submit(function (e) {
  let productName = $("#nombre").val();
  let productCategory = $("#categoria").val();
  let productPrice = $("#precio").val();
  let productDescription = $("#descripcion").val();

  if (
    $.trim(productName) === "" ||
    $.trim(productCategory) === "" ||
    $.trim(productPrice) === "" ||
    $.trim(productDescription) === ""
  ) {
    alert("Por favor, completá todos los campos.\nSantiago Di Colantonio");
    e.preventDefault();
    return false;
  }

  alert("Formulario válido ✅\nSantiago Di Colantonio");
});
