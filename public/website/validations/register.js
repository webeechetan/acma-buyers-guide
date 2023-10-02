"use strict";
const formRegistration = document.querySelector("#formRegistration");
document.addEventListener("DOMContentLoaded", function(e) {
    var t;
    formRegistration && FormValidation.formValidation(formRegistration, {
        fields: {
            company_name: {
                validators: {
                    notEmpty: {
                        message: "Please enter your company name"
                    },
                    stringLength: {
                        min: 3,
                        message: "Company name must be more than 3 characters"
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: "Please enter your email"
                    },
                    emailAddress: {
                        message: "Please enter valid email address"
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: "Please enter your password"
                    },
                    stringLength: {
                        min: 6,
                        message: "Password must be more than 6 characters"
                    }
                }
            },
        },
        plugins: {
            trigger: new FormValidation.plugins.Trigger,
            bootstrap5: new FormValidation.plugins.Bootstrap5({
                eleValidClass: "",
                rowSelector: ".mb-3"
            }),
            submitButton: new FormValidation.plugins.SubmitButton,
            defaultSubmit: new FormValidation.plugins.DefaultSubmit,
            autoFocus: new FormValidation.plugins.AutoFocus
        },
        init: e => {
            e.on("plugins.message.placed", function(e) {
                e.element.parentElement.classList.contains("input-group") && e.element.parentElement.insertAdjacentElement("afterend", e.messageElement)
            })
        }
    }), (t = document.querySelectorAll(".numeral-mask")).length && t.forEach(e => {
        new Cleave(e, {
            numeral: !0
        })
    })
});