document.querySelectorAll(".carrossel-produto").forEach((value) => {
  setInterval(() => {
    value.scrollTo({ left: value.scrollLeft + 300, behavior: "smooth" });
    if (value.scrollLeft + value.offsetWidth + 110 >= value.scrollWidth) {
      value.scrollTo({ left: 0 });
    }
  }, 2000);
});
