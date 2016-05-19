function clearBeforeOpen() {
    $("#txtUsername").val('');
    $("#txtPassword").val('');
    $("#errorMess span").text('');
    $('#remember').prop( "checked", false );
}
function ValidateUser() {
    var username = $("#txtUsername").val();
    var password = $("#txtPassword").val();
    var isRemem = "0";
    var baseUrl = $("#baseUrl").attr('value');
    if ($('#remember').is(':checked')) {
        var isRemem = "1";
    }
    var url = "login";
    var check = true;
    if (username == '' || password == '') {
        $("#errorMess span").text('Vui lòng nhập Email và Password');
        check = false;
    } 
    else if (password.length < 6) {
        $("#errorMess span").text('Password phải có ít nhất 6 kí tự');
        check = false;
    }
    if (check == true) {
        $("#errorMess span").html("<span class='col-sm-offset-2 col-sm-8'><img src=" + baseUrl +"/public/img/loading.gif></span>");
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            data: { username: username, password: password, isRem: isRemem },
            cache: false,
            type: "POST",
            success: function (data) {
                if (data == "0") {
                    $("#errorMess span").text('Sai Email hoặc Mật khẩu');
                }
                if (data == "1") {
                    //var url = "/AddInfo/AddInfoCustomer";
                    //window.location.href = url;
                }
                if (data == "2") {
                    //var url = "/AddInfo/AddInfoTutor";
                    //window.location.href = url;
                }
            },
            error: function (reponse) {
                alert("error : " + reponse);
            }
        });
    }
}