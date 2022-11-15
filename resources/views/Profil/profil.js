$('#gantipassword').validate({
    ignore:'.ignore',
    errorClass:'invalid',
    validClass:'success',
    rules:{
        password_lama:{
            required:true,
            minlength:6,
            maxlength:100
        },
        password:{
            required:true,
            minlength:6,
            maxlength:100
        },
        password_confirmation:{
            required:true,
            equalTo: '#password_lama'
        },
    },
    message: {
        password_lama: {
            required: "Masukkan password Lama"
        },
        password: {
            required: "Masukkan password Baru"
        },
        password_confirmation: {
            required: "Konfirmasi password"
        },
    },

    submitHandler:function(form) {
        $.LoadingOverlay("show");
        form.submit();
    }

});
