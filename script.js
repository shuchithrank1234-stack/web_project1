$(document).ready(function() {
    $("#regForm").on("submit", function(e) {
        let phone = $("#phone").val();
        if (!/^[0-9]{10}$/.test(phone)) {
            alert("Phone number must be exactly 10 digits!");
            e.preventDefault();
        }
    });
});

