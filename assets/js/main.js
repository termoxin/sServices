
window.onload = function() {
    var login_reg       = document.getElementById('login_register');
    var password_reg    = document.getElementById('password_register');
    var login_auth      = document.getElementById('login_auth');
    var password_auth   = document.getElementById('password_auth');
    var login_register  = document.getElementById('login');
    var users;
    var register;

    var error = document.createElement('div');
    error.classList.add('error_validation');

    login_reg.parentNode.appendChild(error);

    $(document).ready(function() {
        $.ajax({
            url: '/login',
            success: setUsers
        });
    });

    function setUsers(data) {
       users = JSON.parse(data);
    }

    login_reg.onfocus = function() {
        this.onkeyup = function () {
            var v          = this.value.trim();
            var conditions = v !== '' && v.length >= 6;
            register   = conditions ? true : false;
            var style      = this.style;
            var user;

            for(var i = 0; i < users.length; i++) {
                if(v === users[i].name) {
                    error.innerHTML = 'Такой пользователь уже существует';
                } else {
                    if(register) {
                        error.innerHTML = 'Пользователь свободен';
                    } else {
                        error.innerHTML = 'Имя должно быть больше 6 символов';
                    }
                }
            }
        }
    }

    register_user.onclick = function(e) {
       if(register) {
        var name = login_reg.value.trim();
        var password = password_register.value.trim();

            $.ajax({
                type: "POST",
                url: "/login/create", 
                data: `name=${name}&password=${password}`,
                success: function(msg){
                  $('.status').css('display','block');
                }
            });
       }
       e.preventDefault();
    }
};
