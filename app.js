let checkbox = document.querySelector("input[name=checkbox]");
let sbmt = document.querySelector("input[name=submit]");
let noAccept = (document.getElementById("result").innerHTML =
  "Proszę zaakceptować regulamin.");
document.getElementById("result").style.color = "red";

let phoneNumber = document.querySelector("phoneNumber");

let psswrd = document.getElementById("pass").value;
let cnfmPassword = document.getElementById("cnfmPassword").value;
let passMessage = document.getElementById("passMessage");

if (document.querySelector('input[name="sex"]')) {
  document.querySelectorAll('input[name="sex"]').forEach((elem) => {
    elem.addEventListener("change", function (event) {
      let item = event.target.value;
    });
  });
}

function init() {
  document.getElementById("result").style.color = "red";
}
checkbox.addEventListener("click", function () {
  if (!this.checked) {
    let noAccept = (document.getElementById("result").innerHTML =
      "Proszę zaakceptować regulamin.");
  } else {
    let Accept = (document.getElementById("result").innerHTML = "");
  }
});

function update() {
  let firstName = document.getElementById("firstName");

  console.log(firstName);
}

update();

function confirmDelete() {
  return confirm("Czy na pewno chcesz usunąć tego użytkownika?");
}
