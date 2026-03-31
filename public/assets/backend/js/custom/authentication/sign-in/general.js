"use strict";

const sleep = (ms) => new Promise((res) => setTimeout(res, ms));
const tokenMeta = document.querySelector('meta[name="csrf-token"]');
if (tokenMeta) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': tokenMeta.getAttribute('content')
        }
    });
} else {
    console.error("CSRF token meta tag not found");
}


var KTModalAdd = function () {
    var form, submitBtn, validator;
    return {
        init: function () {
            form = document.querySelector("#kt_sign_in_form");
            submitBtn = document.querySelector("#kt_sign_in_submit");
            if (!form) return;
            // Form Validation Init
            validator = FormValidation.formValidation(form, {
                fields: {
                    login: {
                        validators: {
                            notEmpty: {
                                message: "Login Id is required"
                            },
                            regexp: {
                                regexp: /(^[^\s@]+@[^\s@]+\.[^\s@]+$)|(^[0-9]{10}$)|(^[a-zA-Z0-9._]{3,}$)/,
                                message: "Enter valid email / phone / username"
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: "Password is required"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".form-group",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            });

            // FORM SUBMIT (BEST PRACTICE)
            form.addEventListener("submit", function (e) {
                e.preventDefault();
                validator.validate().then(function (status) {
                    if (status === 'Valid') {
                        let loginn = document.getElementById("login").value;
                        let passwordd = document.getElementById("password").value;
                        // Disable button
                        submitBtn.disabled = true;
                        $.ajax({
                            type: "POST",
                            url: "/auth",
                            data: {
                                login: loginn,
                                password: passwordd,
                                _token: $('meta[name="csrf-token"]').attr('content') // ✅ CSRF FIX
                            },
                            dataType: "json",
                            success: function (response) {
                                console.log(response);
                                if (response.success && response.code == 200) {
                                    validationAlert("Successful", "Login successful", "success", 1500, false);
                                    setTimeout(function () {
                                        window.location.href = response.redirect;
                                    }, 1000);

                                } else if (response.code == 201) {
                                    validationAlert("Error", "Incorrect password", "error");

                                } else if (response.code == 202) {
                                    validationAlert("Error", "User deactivated", "error");

                                } else if (response.code == 203) {
                                    validationAlert("Error", "User deleted or not found", "error");

                                } else if (response.code == 204) {
                                    validationAlert("Error", "Already logged in", "error");

                                } else {
                                    validationAlert("Error", "Something went wrong", "error");

                                }
                                submitBtn.disabled = false;
                            },
                            error: function (xhr) {
                                console.log(xhr);
                                validationAlert("Error", "Server error", "error");
                                submitBtn.disabled = false;
                            }
                        });
                    }
                });
            });
        }
    }
}();


// INIT
KTUtil.onDOMContentLoaded(function () {
    KTModalAdd.init();
});

function verifyOtp() {
    let otp = document.getElementById('otpCode').value;
    let userId = document.getElementById('loggedInUserId').value;
    let verifyOtpUrl = window.verifyOtpUrl || '/admin/verify-otp'; 
    $.ajax({
        url: verifyOtpUrl,
        method: "POST",
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            otp: otp,
            user_id: userId
        },
        success: function(res) {
            if(res.success) {
                Swal.fire({
                    text: "OTP Verified Successfully!",
                    icon: "success",
                    timer: 1000,
                    showConfirmButton: false
                }).then(() => {
                    window.location.href = "/dashboard";
                });
            } else {
                Swal.fire({
                    text: res.message,
                    icon: "error",
                    showConfirmButton: true
                });
            }
        }
    });
}

