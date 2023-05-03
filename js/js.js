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

  // Получаем кнопку и элемент, на который нужно применить стиль
const applyStyleBtn = document.getElementById('comparing');
const elementToStyle = document.getElementById('table_comp');

// Получаем сохраненный стиль из локального хранилища
const savedStyle = localStorage.getItem('saved-style');

// Если стиль был сохранен, применяем его
if (savedStyle) {
  elementToStyle.style.cssText = savedStyle;
}

// Добавляем обработчик события на кнопку
applyStyleBtn.addEventListener('click', () => {
  // Применяем стиль
  elementToStyle.style.display = 'inline';
  
  // Сохраняем стиль в локальное хранилище
  const styleToSave = elementToStyle.style.cssText;
  localStorage.setItem('saved-style', styleToSave);
});

// Добавляем обработчик события на закрытие вкладки
window.addEventListener('beforeunload', () => {
  // Удаляем сохраненный стиль из локального хранилища
  localStorage.removeItem('saved-style');
});

