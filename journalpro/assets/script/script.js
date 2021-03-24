

// popup

window.onload = function(){

    let popup = document.getElementById('popup'),
        popupButton = document.getElementById('myBtn'),
        popupClose = document.querySelector('.popup__close');

    popupButton.onclick = function () {
        popup.style.display = "block";
    };

    popupClose.onclick = function () {
        popup.style.display = "none";
    }

    window.onclick = function (e) {
        if (e.target == popup) {
            popup.style.display = "none";
        }
    }
}

// список с семестрами

const selectbox = document.querySelector(".select-box");
const selected = document.querySelector(".selected");
const optionsContainer = document.querySelector(".options-container");

const optionsList = document.querySelectorAll(".option");

selectbox.addEventListener ("mouseover", () => {
  optionsContainer.classList.toggle("active");
});

optionsList.forEach(o => {
  o.addEventListener("click", () => {
    selected.innerHTML = o.querySelector("label").innerHTML;
    optionsContainer.classList.remove("active");
  });
});

selectbox.addEventListener ("mouseout", () => {
  optionsContainer.classList.remove("active");
});


