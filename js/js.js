function changeLanguage(lang) {
    // изменение параметра display у элементов на странице
    var enElements = document.querySelectorAll(".us");
    var ruElements = document.querySelectorAll(".ru");
    if (lang === "us") {
      enElements.forEach(function(element) {
        element.style.display = "inline";
      });
      ruElements.forEach(function(element) {
        element.style.display = "none";
      });
    } else {
      enElements.forEach(function(element) {
        element.style.display = "none";
      });
      ruElements.forEach(function(element) {
        element.style.display = "inline";
      });
    }
  }