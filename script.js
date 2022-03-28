  let language = "";
  let langCheck = document.getElementById("langCheck");
  let themeCheck = document.getElementById("lightSwitch");

console.log(navigator.language)

window.onload = function() {

      if (  localStorage.getItem('lang') == "fr" || (localStorage.getItem('lang') == null && navigator.language == "fr-FR")) {
        langCheck.checked = true;
      } else {
        langCheck.checked = false;
      }

      if (localStorage.getItem('theme') == "light" || localStorage.getItem('theme') == null) {
        themeCheck.checked = true
      } else {
        themeCheck.checked = false;
      }
    
  setLanguage()
  setTheme()
}

function setTheme() {
  const windows = document.querySelectorAll('.projectsWindow');
  const windowsClose = document.querySelectorAll('.windowClose');
  
  if (themeCheck.checked == true) {
    localStorage.setItem('theme', 'light');
    if (document.location.pathname == '/') {
      document.getElementById("header").classList.remove("nightmode");
      document.getElementById("greetWindow").style.cssText = "background-color: #FEFFBC; color: #3a3a3a; border: solid 3px #a7a893";
      document.getElementById("innerGreetWindow").style.cssText = "border-top: solid 2px #a7a893; background-color: #FEFFBC; ";
      removeStars();
    }
    document.getElementById("body").style.backgroundColor = "#feffbc";
    document.getElementById("body").style.color = "#3a3a3a";
    for (let i = 0; i < windows.length; i++) {
    windows[i].classList.remove('projectsWindowNight');
    }
    for (let i = 0; i < windowsClose.length; i++) {
    windowsClose[i].classList.remove('windowCloseNight');
    }


  } else {
    localStorage.setItem('theme', 'dark');
    if (document.location.pathname == "/") {
      document.getElementById("header").classList.add("nightmode");
      document.getElementById("greetWindow").style.cssText = "background-color: #9871ea; color: #eaebe1; border: solid 2px white";
      document.getElementById("innerGreetWindow").style.cssText = "border-top: solid 2px white;";
      starryNight();
    }
    document.getElementById("body").style.backgroundColor = "#4d3977";
    document.getElementById("body").style.color = "#eaebe1";

    for (let i = 0; i < windows.length; i++) { 
      windows[i].classList.add('projectsWindowNight');
    }
    for (let i = 0; i < windowsClose.length; i++) {
    windowsClose[i].classList.add('windowCloseNight');
    }

  }

}

function setLanguage() {
    const project_en = document.querySelectorAll('.project_en')
    const project_fr = document.querySelectorAll('.project_fr')

    if (langCheck.checked == true) {
      language = "fr";
      localStorage.setItem('lang', 'fr');
      for (let i = 0; i < project_en.length; i++) {
        project_en[i].style.display = "none";
      }
      for (let i = 0; i < project_fr.length; i++) {
        project_fr[i].style.display = null;
      }
    } else {
      language = "en";
      localStorage.setItem('lang', 'en');
      for (let i = 0; i < project_fr.length; i++) {
        project_fr[i].style.display = "none";
      }
      for (let i = 0; i < project_en.length; i++) {
        project_en[i].style.display = null;
      }
    }

    let request = new XMLHttpRequest();
  
    request.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          data = JSON.parse(request.response)
          populate(data)
          console.log(data)
      }
    };
    request.open('GET', "lang/"+ language +".json");
    request.send();
}

function populate(json) {
  console.log()

    let start = 0;
    for ( let i = start; i < Object.keys(json).length; i++) {
      let element = document.getElementById(Object.keys(json)[i]);
      console.log(Object.keys(json)[i])
      if (element != null ) {
        document.getElementById(Object.keys(json)[i]).innerHTML = Object.values(json)[i];
      }
    }
}

function starryNight() {

  let gascouagne = Math.ceil(Math.random()*12 + 8)

  for(let i = 0; i < gascouagne; i++) {
      let positionY = Math.floor(Math.random()*100);
      let positionX = Math.floor(Math.random()*95);
      let size = Math.ceil(Math.random()*10 + 15);
      let rotation = Math.floor(Math.random()*72);
      let star = document.createElement("div");
      star.className = "stars";
      star.id = "schtarf"+i.toString();
      star.setAttribute("style","left: "+positionX+"vw; top: "+positionY+"vh; width: "+size+"px; height: "+size+"px; transform: rotate("+rotation+"deg);");
      document.getElementById("header").appendChild(star);
      }
}



function removeStars() {
  let stars = document.getElementsByClassName("stars");
  while(stars.length > 0){
      stars[0].parentNode.removeChild(stars[0]);
  }
}


console.log("coucou", window.location.pathname);
