
let themeClass = getcookie("theme")
if (themeClass != "") {
  if (themeClass == 'dark') {
    document.body.classList.toggle("light-mode");
    var theme = document.body.classList.contains("light-mode") ? "light" : "dark";
  } else if (themeClass == 'light') {
    document.body.classList.toggle("dark-mode");
    var theme = document.body.classList.contains("dark-mode") ? "dark" : "light";
  }  
}


const btn = document.querySelector(".btn-toggle");
      const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");
  
      btn.addEventListener("click", function() {
        if (prefersDarkScheme.matches) {
          document.body.classList.toggle("light-mode");
          var theme = document.body.classList.contains("light-mode") ? "light" : "dark";
        } else {
          document.body.classList.toggle("dark-mode");
          var theme = document.body.classList.contains("dark-mode") ? "dark" : "light";
        }
        document.cookie = "theme=" + theme+"; path=/; SameSite=lax";
      });