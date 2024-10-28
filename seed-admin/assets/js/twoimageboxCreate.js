
function addReadURL1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#add_responseImage1').css("display", "block");
        $('#add_responseImage1').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    } else {
        $('#add_responseImage1').attr('src', '');
    }
    }



$("#Image1").change(function() {
        console.log("dropzone Changed")
        addReadURL1(this);
    });  

    $("#strategyImage1").change(function() {
        console.log("dropzone Changed")
        addReadURL1(this);
    });  


    function addReadURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#add_responseImage2').css("display", "block");
            $('#add_responseImage2').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        } else {
            $('#add_responseImage2').attr('src', '');
        }
        }
    
    
    
    $("#Image2").change(function() {
            console.log("dropzone Changed")
            addReadURL2(this);
        });

        $("#strategyImage2").change(function() {
            console.log("dropzone Changed")
            addReadURL2(this);
        });

        