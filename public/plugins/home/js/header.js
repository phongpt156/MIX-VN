$(document).ready(function() {
	window.User = {
		init: function() {
			$("#register-box").modal({
		    	show: false,
		    	keyboard: 'static',
		    	backdrop: true
		    });
		    $("#success-modal").modal({
		    	show: true,
		    	keyboard: 'static',
		    	backdrop: true
		    })
		    $(".phone-register").on("click", function() {
		    	$(".phone-number-register-box").toggle();
		    	$(".gmail-register").toggle();
		    	$(".register-form-container").toggleClass("register-height");
		    });
		    $("#register-box").on("hidden.bs.modal", function() {
		    	$(".phone-number-register-box").css("display", "none");
		    	$(".gmail-register").css("display", "block");
		    	$(".register-form-container").removeClass("register-height");
		    });
		    $.validator.addMethod(
		    	"vn_phonenumber",
		    	function(value, element) {
		    		return this.optional(element) || /^(01[2689]|09)[0-9]{8}$/.test(value);
		    	}
		    );
		    $(".phone-number-register-form").validate({
		    	rules: {
		    		phonenumber_register: {
		    			required: true,
		    			vn_phonenumber: true,
		    			remote: {
		    				url: "user/check-exist-user-phonenumber",
		    				type: "post",
		    				data: {
		    					phonenumber_register: $(".phonenumber_register").val(),
		    					_token: $('input[name=_token]').val()
		    				} 
		    					
		    			}
		    		},
		    		password_register: {
		    			required: true,
		    			minlength: 8
		    		},
		    		repeatpassword_register: {
		    			required: true,
		    			equalTo: "#password_register"
		    		}
		    	},
		    	messages: {
	    			phonenumber_register: {
	    				required: "Nhập số điện thoại",
	    				vn_phonenumber: "Số điện thoại ko hợp lệ",
	    				remote: "Số điện thoại đã tồn tại"
	    			},
	    			password_register: {
	    				required: "Nhập mật khẩu",
	    				minlength: "Mật khẩu phải từ 8 ký tự trở lên"
	    			},
	    			repeatpassword_register: {
	    				required: "Nhập lại mật khẩu",
	    				equalTo: "Mật khẩu ko khớp"
	    			}
	    		}
		    });
		}
	}
});