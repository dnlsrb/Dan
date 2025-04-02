function mode() {
    var element = document.body;
    element.classList.toggle("dark");

    var dark = document.getElementById("dark");
    var light = document.getElementById("light");
    dark.classList.toggle("hidden");
    light.classList.toggle("hidden");
  }