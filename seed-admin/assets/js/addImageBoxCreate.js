

		function addReadURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#add_responseImage').css("display", "block");
			$('#add_responseImage').attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		} else {
			$('#add_responseImage').attr('src', '');
		}
		}

		$("#sliderImage").change(function() {
			console.log("dropzone Changed")
            addReadURL(this);
		});

    $("#aboutImage").change(function() {
			console.log("dropzone Changed")
            addReadURL(this);
		});

    $("#Image").change(function() {
			console.log("dropzone Changed")
            addReadURL(this);
		});
    


        function readURL(input) {
            if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function(e) {
                $('#responseImage').attr('src', e.target.result);
              }
              reader.readAsDataURL(input.files[0]);
            } else {
              $('#responseImage').attr('src', '');
            }
          }
          
          $("#aboutImage").change(function() {
            readURL(this);
          });
          