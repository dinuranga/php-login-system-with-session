let passwordElement = document.querySelector("#pass");

document.querySelector("#eye").addEventListener("click", () => {
  if (passwordElement.type === "text") {
    passwordElement.type = "password";
    document.getElementById("eye").style.color = "black";
  } else {
    passwordElement.type = "text";
    document.getElementById("eye").style.color = "red";
  }
});
