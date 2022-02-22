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
  if (themeCheck.checked == true) {
    localStorage.setItem('theme', 'light');
    if (document.location.pathname == "/Projet%2012%20-%20Portfolio%20II%20electric%20boogaloo/") {
      document.getElementById("header").classList.remove("nightmode");
      document.getElementById("greetWindow").style.cssText = "background-color: #BBD4F1; color: #3a3a3a; border: solid 3px #BBD4F1";
      document.getElementById("innerGreetWindow").style.cssText = "border-top: solid 2px #BBD4F1; background-color: #FEFFBC; ";
      removeStars();
    }
    document.getElementById("body").style.backgroundColor = "#feffbc";
    document.getElementById("body").style.color = "#3a3a3a";


    
  } else {
    localStorage.setItem('theme', 'dark');
    if (document.location.pathname == "/Projet%2012%20-%20Portfolio%20II%20electric%20boogaloo/") {
      document.getElementById("header").classList.add("nightmode");
      document.getElementById("greetWindow").style.cssText = "background-color: #9871ea; color: #eaebe1; border: solid 2px white";
      document.getElementById("innerGreetWindow").style.cssText = "border-top: solid 2px #;";
      starryNight();
    }
    document.getElementById("body").style.backgroundColor = "#4d3977";
    document.getElementById("body").style.color = "#eaebe1";

  }

}

function setLanguage() {

    if (langCheck.checked == true) {
      language = "fr";
      localStorage.setItem('lang', 'fr');
    } else {
      language = "en";
      localStorage.setItem('lang', 'en');
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
