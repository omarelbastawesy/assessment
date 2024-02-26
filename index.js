let start = document.getElementsByClassName("choose-assesment-type")[0];
let next1 = document.getElementsByClassName("section-fixed---asses age")[0];

document
  .getElementsByClassName("button-with-arrow cat w-inline-block click")[0]
  .addEventListener("click", () => {
    start.style.display = "none";
    next1.style.display = "flex";
  });

let next2 = document.getElementsByClassName("section-fixed---asses q2")[0];

document
  .getElementsByClassName("button-with-arrow-2 w-inline-block")[0]
  .addEventListener("click", () => {
    next1.style.display = "none";
    next2.style.display = "flex";
  });

let next3 = document.getElementsByClassName("section-fixed---asses q3-1")[0];
let labels = document.querySelectorAll(
  ".radio-button-field.w-radio input[name='Ethnicity']"
);

document
  .getElementsByClassName("dummy-button-q1 align-right w-button")[0]
  .addEventListener("click", () => {
    labels.forEach((el) => {
      if (el.checked) {
        next2.style.display = "none";
        next3.style.display = "flex";
      }
    });
  });

let next4 = document.getElementsByClassName("section-fixed---asses q3-2")[0];
let labels1 = document.querySelectorAll(
  ".radio-button-field.w-radio input[name='gender']"
);

document
  .getElementsByClassName("dummy-button-q2 align-right w-button")[0]
  .addEventListener("click", () => {
    labels1.forEach((el) => {
      if (el.checked) {
        next3.style.display = "none";
        next4.style.display = "flex";
      }
    });
  });

let next5 = document.getElementsByClassName("section-fixed---asses q-dob")[0];
let labels2 = document.querySelectorAll(
  ".radio-button-field.w-radio input[name='pregnant']"
);

document
  .getElementsByClassName("dummy-button-q3 align-right w-button")[0]
  .addEventListener("click", () => {
    labels2.forEach((el) => {
      if (el.checked) {
        next4.style.display = "none";
        next5.style.display = "flex";
      }
    });
  });

let next6 = document.getElementsByClassName("section-fixed---asses q4")[0];
let labels3 = document.querySelectorAll(".form-2 input");

document
  .getElementsByClassName("dummy-button-q-dob align-right w-button")[0]
  .addEventListener("click", () => {
    next5.style.display = "none";
    next6.style.display = "flex";
  });

let next7 = document.getElementsByClassName("section-fixed---asses q6")[0];
let kg = document.querySelector(
  ".field-label-text-field.kg .text-field.height_n_weight.w-input"
);
let cm = document.querySelector(
  ".field-label-text-field.cm .text-field.height_n_weight.w-input"
);

document
  .getElementsByClassName("dummy-button-q4 align-right w-button")[0]
  .addEventListener("click", () => {
    next6.style.display = "none";
    next7.style.display = "flex";
  });

let next8 = document.getElementsByClassName("section-fixed---asses q7")[0];
let labels4 = document.querySelectorAll(
  ".radio-buttons-wrapper-3 input[name='diabetes']"
);

document
  .getElementsByClassName("dummy-button-q5 align-right w-button")[0]
  .addEventListener("click", () => {
    labels4.forEach((el) => {
      if (el.checked) {
        next7.style.display = "none";
        next8.style.display = "flex";
      }
    });
  });

let next9 = document.getElementsByClassName("section-fixed---asses q8")[0];
let labels5 = document.querySelectorAll(
  ".section-fixed---asses.q7 .checkboxes---wrapper input[type='checkbox']"
);

document
  .getElementsByClassName("dummy-button-q6 align-right w-button")[0]
  .addEventListener("click", () => {
    labels5.forEach((el) => {
      if (el.checked) {
        next8.style.display = "none";
        next9.style.display = "flex";
      }
    });
  });

let next10 = document.getElementsByClassName("section-fixed---asses q9")[0];
let labels6 = document.querySelector(
  ".section-fixed---asses.q8 input[name='medical_condition']"
);

document
  .getElementsByClassName("dummy-button-q7 align-right w-button")[0]
  .addEventListener("click", () => {
    next9.style.display = "none";
    next10.style.display = "flex";
  });

let next11 = document.getElementsByClassName("section-fixed---asses q11")[0];
let labels7 = document.querySelectorAll(
  ".section-fixed---asses.q9 .checkboxes---wrapper input[type='checkbox']"
);

let checkedArray2 = [];
document
  .getElementsByClassName("dummy-button-q8 align-right w-button")[0]
  .addEventListener("click", () => {
    labels7.forEach((el) => {
      if (el.checked) {
        next10.style.display = "none";
        next11.style.display = "flex";
      }
    });
  });

let next12 = document.getElementsByClassName("section-fixed---asses q12")[0];
let labels8 = document.querySelectorAll(
  ".section-fixed---asses.q11 .checkboxes---wrapper input[type='checkbox']"
);

let next14 = document.getElementsByClassName("section-fixed---asses q15")[0];
let labels10 = document.querySelectorAll(
  ".section-fixed---asses.q14 input[type='radio']"
);

let checkedArray3 = [];
document
  .getElementsByClassName("dummy-button-q10 align-right w-button")[0]
  .addEventListener("click", () => {
    labels8.forEach((el) => {
      if (el.checked) {
        checkedArray3.push(el.value);
      }
    });
    if (
      !checkedArray3.includes("I have never taken medication to lose weight")
    ) {
      next11.style.display = "none";
      next12.style.display = "flex";
    } else {
      document
        .getElementsByClassName("dummy-button-q14 align-right w-button")[0]
        .addEventListener("click", () => {
          next9.style.display = "none";
          next10.style.display = "flex";
        });

      next11.style.display = "none";
      next14.style.display = "flex";
    }
  });

let next13 = document.getElementsByClassName("section-fixed---asses q13-2")[0];
let labels9 = document.querySelectorAll(
  ".radio-button-field.w-radio input[name='presently_medication']"
);

document
  .getElementsByClassName("dummy-button-q11 align-right w-button")[0]
  .addEventListener("click", () => {
    labels9.forEach((el) => {
      if (el.checked) {
        next12.style.display = "none";
        next13.style.display = "flex";
      }
    });
  });

let next15 = document.getElementsByClassName("section-fixed---asses q16")[0];
let labels11 = document.getElementById("prescription_medication");

document
  .getElementsByClassName("dummy-button-q15 align-right w-button")[0]
  .addEventListener("click", () => {
    next14.style.display = "none";
    next15.style.display = "flex";
  });

let next16 = document.getElementsByClassName("section-fixed---asses q14")[0];
let labels12 = document.getElementById("medication_respond");

document
  .getElementsByClassName("dummy-button-q13 align-right w-button")[0]
  .addEventListener("click", () => {
    next13.style.display = "none";
    next16.style.display = "flex";
  });

let next17 = document.getElementsByClassName("section-fixed---asses q15")[0];
let labels13 = document.querySelectorAll(
  ".section-fixed---asses.q14 input[name='counter_medications']"
);

document
  .getElementsByClassName("dummy-button-q14 align-right w-button")[0]
  .addEventListener("click", () => {
    labels13.forEach((el) => {
      if (el.checked) {
        next16.style.display = "none";
        next17.style.display = "flex";
      }
    });
  });

let next18 = document.getElementsByClassName("section-fixed---asses q18")[0];
let labels14 = document.querySelectorAll(
  ".section-fixed---asses.q16 input[name='past_28']"
);

document
  .getElementsByClassName("dummy-button-q16 align-right w-button")[0]
  .addEventListener("click", () => {
    labels14.forEach((el) => {
      if (el.checked) {
        next15.style.display = "none";
        next18.style.display = "flex";
      }
    });
  });

let clientData = document.getElementsByClassName(
  "section-fixed---asses q-gp-data-input"
)[0];

document
  .getElementsByClassName("dummy-button-q18 align-right w-button")[0]
  .addEventListener("click", () => {
    next18.style.display = "none";
    clientData.style.display = "flex";
  });

let next19 = document.getElementsByClassName(
  "section-fixed---asses _19-success"
)[0];
let nameClient = document.querySelector(
  ".section-fixed---asses.q-gp-data-input input[name='name']"
);
let email = document.querySelector(
  ".section-fixed---asses.q-gp-data-input input[name='email']"
);

document
  .getElementsByClassName("dummy-button-q-gp align-right w-button")[0]
  .addEventListener("click", () => {
    console.log(nameClient.value.length);
    console.log(email.value);

    function validateEmail(email) {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailRegex.test(email);
    }

    console.log(validateEmail(email.value));

    if (nameClient.value.length >= 4 && validateEmail(email.value)) {
      clientData.style.display = "none";
      next19.style.display = "flex";
      console.log(validateEmail(email));
    } else {
      console.log("non validation");
      console.log(validateEmail(email));
    }
  });
