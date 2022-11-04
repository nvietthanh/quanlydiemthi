var hiddenPassword = document.querySelectorAll('.hidden-password')
hiddenPassword.forEach((item)=>{
    item.onclick = function(){
        let parentElement = item.parentElement
        this.classList.toggle('active')
        if(this.classList.contains('active')){
            parentElement.querySelector('input').type = 'text'
            this.querySelector('i').classList.toggle('fa-lock')
            this.querySelector('i').classList.toggle('fa-unlock')
        }
        else{
            parentElement.querySelector('input').type = 'password'
            this.querySelector('i').classList.toggle('fa-lock')
            this.querySelector('i').classList.toggle('fa-unlock')
        }
    }
})

function msgSuccess(content, msg){
    return `<div class="loading-success">
                <div class="loading-content">${content}</div>
                <div class="loading-msg-wrap">
                    <i class="fa-solid fa-circle-check"></i>
                    <div class="loading-msg">${msg}</div>
                    <ul class="loading-icon">
                        <li class="loading-column" id="1"></li>
                        <li class="loading-column"></li>
                        <li class="loading-column"></li>
                        <li class="loading-column"></li>
                        <li class="loading-column"></li>
                        <li class="loading-column" id="6"></li>
                    </ul>
                </div>
            </div>`
}

function loginSubmit(){
    let usernameInput = $('.login-form input[name=username]')
    let passwordInput = $('.login-form input[name=password]')
    let formData = new FormData(document.querySelector('.login-form form'));
    $.ajax({
        url : "account.php?ac=login",
        type : "post",
        data : formData,
        contentType: false,
        processData: false,
        dataType: "json",
        success : (result)=>{
            console.log(result)
            if(result.length == 0){
                let success = msgSuccess('Đăng nhập thành viên', 'Đăng nhập thành công')
                $('.login-form').html(success)
                setTimeout(()=>{
                    window.location.reload()
                }, 2000)
            }
            else{
                if(result['err'] == 'account'){
                    let loginDescription = $('.login-form .form-description')
                    loginDescription.html('<i class="fa-solid fa-circle-xmark"></i>' + result['msg'])
                    loginDescription.addClass('has-error')
                }
                else{
                    let hasError = $('form .has-error')
                    if(hasError.length != 0){
                        $('.login-form .form-message').remove()
                        hasError.removeClass('has-error')
                    }
                    let parentElement
                    if(result['err'] == 'username'){
                        parentElement = usernameInput.parent()
                    }
                    else if(result['err'] == 'password'){
                        parentElement = passwordInput.parent()
                    }
                    else 
                    parentElement.addClass('has-error')
                    let msg = document.createElement('div')
                    msg.classList.add('form-message')
                    msg.innerHTML = `<div class="form-message-content">${result['msg']}</div>`
                    parentElement.append(msg)
                }
            }
        }
    });
    return false
}

$('.modal-login').click(()=>{
    let formMessage = $('.login-form .form-message')
    if(formMessage.length != 0){
        $('form .has-error').removeClass('has-error')
        formMessage.remove()
    }
})

function loginOpen(){
    $('.modal-login').addClass('form-open')
    $('body').addClass('modal-open')
}


function logOut(){
    $.ajax({
        url : "account.php?ac=logout",
        type : "post",
        data : {},
        contentType: false,
        processData: false,
        dataType : "text",
        success : function (){
            let logoutForm = $('.logout-form')
            let success = msgSuccess('Đăng xuất tài khoản' ,'Đăng xuất tài khoản thành công')
            logoutForm.html(success)
            setTimeout(() => {
                window.location.href = 'index.php'
            }, 2000);
        }
    })
}

function logout(){
    $('.modal-logout').addClass('form-open')
    $('body').addClass('modal-open')
}

function formClose(){
    let errorDescription = $('.form-open .has-error')
    if(errorDescription){
        errorDescription.removeClass('has-error')
        errorDescription.html(`Hãy đăng nhập thành viên để trải nghiệm đầy đủ các tiện ích trên website`)
    }
    $('.form-open').removeClass('form-open')
    let formInput = $('input')
    for(var item of formInput){
        if(item.type != "reset" && item.type != "submit"){
            if(item.type == "checkbox"){
                item.checked = false
            }
            else{
                item.value = ""
            }
        }
    }
    $('body').removeClass('modal-open')
}