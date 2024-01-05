// toggle icon navbar
let menuIcon = document.querySelector("#menu-icon");
let navbar = document.querySelector(".navbar");

menuIcon.onclick = () => {
  menuIcon.classList.toggle("bx-x");
  navbar.classList.toggle("active");
};

// // scroll sections
let sections = document.querySelectorAll("section");
let navLinks = document.querySelectorAll("header nav a");

window.onscroll = () => {
  sections.forEach((sec) => {
    let top = window.scrollY;
    let offset = sec.offsetTop - 100;
    let height = sec.offsetHeight;
    let id = sec.getAttribute("id");

    if (top >= offset && top < offset + height) {
      //active Navbar Links
      navLinks.forEach((links) => {
        links.classList.remove("active");
        document
          .querySelector("header nav a[href*= " + id + "]")
          .classList.add("active");
      });
      //active Sections for animation on scroll
      sec.classList.add("show-animate");
    }
    //if want to use animate repeats on scroll use this
    else {
      sec.classList.remove("show-animate");
    }
  });

  // sticky header navbar
  let header = document.querySelector("header");

  header.classList.toggle("sticky", window.scrollY > 100);

  // remove toggle icon and navbar when click navbar links (scroll)
  menuIcon.classList.remove("bx-x");
  navbar.classList.remove("active");

  // animation footer on scroll
  let footer = document.querySelector("footer");

  footer.classList.toggle(
    "show-animate",
    this.innerHeight + this.scrollY >= document.scrollingElement.scrollHeight
  );
};

//connect spreadsheet
// window.addEventListener("load", function () {
//   const form = document.getElementById("my-form");
//   form.addEventListener("submit", function (e) {
//     e.preventDefault();
//     const data = new FormData(form);
//     const action = e.target.action;
//     fetch(action, {
//       method: "POST",
//       body: data,
//     }).then(() => {
//       alert("Successfully submitted the form!");
//     });
//   });
// });

//connect ke email
const form = document.querySelector("form");
const fullName = document.getElementById("name");
const emailAddress = document.getElementById("email");
const phoneNumber = document.getElementById("phone");
const subjectEmail = document.getElementById("subject");
const yourMessage = document.getElementById("message");

function sendEmail() {
  const bodyMessage = `Full Name: ${fullName.value}<br> Email Address: ${emailAddress.value}<br>
  Phone Number: ${phoneNumber.value}<br> Message: ${yourMessage.value}<br>`;

  Email.send({
    SecureToken: "485fd453-3bde-45ac-91df-e873bd439b01",
    To: "shendyteuku2@gmail.com",
    From: "shendyteuku2@gmail.com",
    Subject: subjectEmail.value,
    Body: bodyMessage,
  }).then((message) => {
    if (message == "OK") {
      Swal.fire({
        title: "Success!",
        text: "Message sent successfully!",
        icon: "success",
      });
    }
  });
}

form.addEventListener("submit", (e) => {
  e.preventDefault();

  sendEmail();
});
