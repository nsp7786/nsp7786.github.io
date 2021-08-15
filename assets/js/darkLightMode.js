
let themeClass = getCookie("theme");
if (themeClass != "") {
  if (themeClass == 'dark') {
    document.body.classList.toggle("dark-mode");
  } else if (themeClass == 'light') {
    document.body.classList.toggle("light-mode");
  }  
}

function getCookie(cname) {
     var name = cname + "=";
     var ca = document.cookie.split(';');
     for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if(c.indexOf(name) == 0)
           return c.substring(name.length,c.length);
     }
     return "";
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