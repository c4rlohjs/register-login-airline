function showPassword() {
    var x = document.getElementById("password__login");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }