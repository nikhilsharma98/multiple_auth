$(document).ready(function(){
    
    
    $("#restaurants").validate({
        rules: {
            name: {
                required: true,
            },
            email: {
                required: true,

            },
            password: {
                required: true,

            },
            address: {
                required: true,

            },
            image: {
                required: true,
            }
        },

            messages:{
                name:{
                    required: "Name is required",
                },
                email:{
                    required: "Image Is required",
                },
                password:{
                    required: "Password Is required",
                },
                address:{
                    required: "Address is required",
                },
                image:{
                    required: "Image is required",
                },
            }
        
    });
});