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
  function showDifference(check) {
    // изменение параметра display у элементов на странице
    var redElements = document.querySelectorAll(".red");
    if (check.checked) {
      redElements.forEach(function(element) {
        element.style.backgroundColor = "red";
      });
    } else {
      redElements.forEach(function(element) {
        element.style.backgroundColor = "white";
    });
  }
}