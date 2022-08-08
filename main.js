// let submit = document.querySelector(".btn");
// let input = document.querySelectorAll("input");
// let h2 = document.querySelector(" form h2");
// let form = document.querySelector("form");
// form.onsubmit = (e) => {
//   for (let i = 0; i < input.length - 1; i++) {
//     if (input[i].value === "") {
//       let span = document.createElement("span");
//       let text = document.createTextNode("Empty Input!");
//       span.appendChild(text);
//       h2.after(span);
//       span.className = "error";
//       span.style.cssText =
//         "  background-color: #0075ff;padding: 10px 0px;width: 100%;margin: 5px;color: #fcfffc;border-radius: 3px;font-size: 15px;";
//       e.returnValue = false;
//       submit.addEventListener("click", () => {
//         span.remove();
//       });
//       break;
//     }
//   }
//   if (input[3].value != input[4].value) {
//     let span = document.createElement("span");
//     let text = document.createTextNode("Password Not Matched!");
//     span.appendChild(text);
//     h2.after(span);
//     span.className = "error";
//     span.style.cssText =
//       "  background-color: #0075ff;padding: 10px 0px;width: 100%;margin: 5px;color: #fcfffc;border-radius: 3px;font-size: 15px;";
//     e.returnValue = false;
//     submit.addEventListener("click", () => {
//       span.remove();
//     });
//   }
// };
// submit.onclick = () => {
//   console.log(input[3].name);
//   console.log(input[4].value);
// };
let error = document.querySelector("span");
let form = document.querySelector("form");
let submit = document.querySelector(".btn");
let password = document.querySelectorAll(".pass");
let input = document.querySelectorAll("input");
let icons = document.querySelectorAll("i");
console.log(icons);
// submit.onclick = (e) => {
//   if (
//     error.innerHTML === "Empty input!" ||
//     error.innerHTML === "Username Invalid!" ||
//     error.innerHTML === "Email Inalid!" ||
//     error.innerHTML === "Password Not Matched!" ||
//     error.innerHTML === "Password OR Email Taken!"
//   ) {
//     e.returnValue = false;
//   } else {
//     e.returnValue = true;
//   }
// };

// for (let i = 0; i < icons.length; i++) {
//   icons[i].onmouseenter = () => {
//     icons[i].style.color = "#0075ff";
//     password[i].type = "text";
//   };
//   icons[i].onmouseleave = () => {
//     icons[i].style.color = "#333";
//     password[i].type = "password";
//   };
// }
