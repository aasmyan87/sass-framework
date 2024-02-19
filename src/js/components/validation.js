window.addEventListener('DOMContentLoaded', function() {
    jQuery(document).ready(function ($) {
        $("#myform").validate({
            errorElement: "span",
            rules: {
                firstname: "required",
                lastname: "required",
                email: {
                    required: true,
                    email: true
                },
            },
            messages: {
                firstname: "Please enter your First Name",
                lastname: "Please enter your Last Name",
                email: "Please enter a valid email address",
            }
        });
    });
});