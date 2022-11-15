const carrinho = document.querySelector("#carrinho-dialog");

carrinho.addEventListener("click", (event) => {
  event.stopPropagation();
});

document.querySelector("#abrir-carrinho").addEventListener("click", (event) => {
  carrinho.classList.add("ativo");
  event.stopPropagation();
});
window.addEventListener("click", (event) => {
  carrinho.classList.remove("ativo");
});

document
  .querySelector("#carrinho-dialog .carrinho-header button")
  .addEventListener("click", (event) => {
    carrinho.classList.remove("ativo");
  });