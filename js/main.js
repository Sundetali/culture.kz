$(document).ready(function() {
	$(".welcome .down").click(function() {
			console.log(1);
				$("html, body").animate({ scrollTop: $(this).closest('.welcome').next().offset().top }, 1000);
			});
	var valid = 
				{
					email: {
						name: 'email',
						pattern: /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i,
						error: 'Не правильные данные',
						correct: 'Вы успешно ввели данные',
						validation: false,
						blur: false,
					},
					namesurname: {
						name: 'namesurname',
						pattern: /^[а-яёА-ЯЁ]+(-[а-яёА-ЯЁ]+)? [а-яёА-ЯЁ]+( [а-яёА-ЯЁ]+)?$/,
						pattern2: /^[a-zA-Z]+(-[a-zA-Z]+)? [a-zA-Z]+( [a-zA-Z]+)?$/,
						error: 'Не правильные данные',
						correct: 'Вы успешно ввели данные',
						validation: false,
						blur: false,
					},
					phoneNumber: {
						name: 'phoneNumber',
						error: 'Заполните свой номер',
						correct: 'Вы успешно ввели данные',
						validation: false,
						blur: false,
					},
					password: {
						name: 'password',
						pattern: /(?=^.{6,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[a-zA-Z]).*$/,
						error: 'пароль должен быть из латинских букв, символов и цифр',
						correct: 'Вы успешно ввели данные',
						validation: false,
						blur: false,
					},
					passwordRepeat: {
						name: 'passwordRepeat',
						correct: 'Вы успешно ввели данные',
						error: 'Не совпадает с начальным паролем',
						validation: false,
						blur: false,
					},
					address: {
						name: 'address',
						correct: 'Вы успешно ввели данные',
					},
					registerNumber: {
						name: 'registerNumber',
						pattern: /[A-Za-z0-9]/,
						error: 'Не правильные данные',
						correct: 'Вы успешно ввели данные',
					},
					name: {
						name: 'name',
						correct: 'Вы успешно ввели данные',	
					},
					opinion: {
						name: 'opinion',
						correct: 'Вы успешно ввели данные',	
					},
					empty: 'Поле не должно быть пустым',
					epmtyPassword: 'Пароль должен быть больше 5 символов',
					css: {
						correctBorder: '1px solid #569b44',
						correctColor: 'green',
						errorBorder: '1px solid #ff0000',
						errorColor: '#de483d'
					},

				};
			/*function for check input for empty*/
			$.fn.isEmpty = function(notEmpty,checkValidation) {
				if(notEmpty) {
					$(this).checkValid(checkValidation);
				} 
				else {
					$(this).css({'border' : valid.css.errorBorder});
					$(this).next().text($(this).hasClass('password') ? valid.epmtyPassword : valid.empty);
					$(this).next().css({'color': valid.css.errorColor});
					$($(this).next().next()).removeClass('validTrue');
				}
			}
			/*function for check validation input*/
			$.fn.checkValid = function (checkValidation) {
			    // var classList = $(this).attr('class').split(/\s+/);
			    var errorText = '',correctText = '',pattern1;
				for(var prop in valid) {
			    	if($(this).attr('class').includes(valid[prop].name)) {
			    		errorText = valid[prop].error;
			    		correctText = valid[prop].correct;
			    		if(checkValidation){
							$(this).css({'border' : valid.css.correctBorder});
							$(this).next().text(correctText);
							$(this).next().css({'color': valid.css.correctColor}); 
							valid[prop].validation = true;
							$($(this).next().next()).addClass('validTrue');
						} 
						else {
							$(this).css({'border' : valid.css.errorBorder});
							$(this).next().text(errorText);
							$(this).next().css({'color': valid.css.errorColor});
							valid[prop].validation = false;
							$($(this).next().next()).removeClass('validTrue');
						}
			    	}
			    }
			};
			/*validateion for ФИО*/
			$('input[type=text].namesurname').blur(function() {	
			    var classList = $(this).attr('class').split(/\s+/);
				var empty = $(this).val() != '';
				var checkValid = valid['namesurname'].pattern.test($(this).val()) | valid['namesurname'].pattern2.test($(this).val());
				$(this).isEmpty(empty, checkValid);

			});
			/*validation for email*/
			$('input[type=email').blur(function() {
				var empty = $(this).val() != '';
				var checkValid = valid['email'].pattern.test($(this).val());
				$(this).isEmpty(empty, checkValid);
				
			});
			/*validation for password*/
			$('input[type=password].password').blur(function() {
				var empty = $(this).val().length > 5;
				var checkValid = valid['password'].pattern.test($(this).val());
				$(this).isEmpty(empty, checkValid);
				
			});
			$('input[type=password].passwordRepeat').blur(function() {
				var empty = $(this).val() != '';
				var checkValid = $(this).val() == $('.password-main').val();
				$(this).isEmpty(empty, checkValid);
			});

			/*mask for phone-number*/
			if($('input[type=text]').hasClass('phoneNumber')) {
				$('input[type=text].phoneNumber').mask("+7-(999)-999-99-99");
			}
			$('input[type=text].phoneNumber').blur(function() {	
				var empty = $(this).val() != '';
				$(this).isEmpty(empty, true);
				console.log($(this).val() + " " + $(this).val().length);
			});

			$('input[type=text].name').blur(function() {
				var empty = $(this).val() != '';
				$(this).isEmpty(empty, true);
			});

			/*check buttons for validation true false*/
			$.fn.checkLengthValid = function() {
				var valids = $(this).closest('form').find('.valid');
				var validsTrue = $(this).closest('form').find('.validTrue');
				console.log(valids.length + " " + validsTrue.length);
				return valids.length == validsTrue.length;
			}
			$('.btn-valid').click(function() {
				console.log(1);
				if($(this).checkLengthValid()) {
					return true;
				}
				return false;
			});

});