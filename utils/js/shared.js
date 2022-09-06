var btn = document.getElementById("webshareapi");

btn.addEventListener("click", function () {
  navigator.share({
    url: document.URL,
    title: document.title,
    text: "lorem ipsum..."
  });
});

// for SVG icons
feather.replace();



