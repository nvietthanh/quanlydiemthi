var navbar = document.querySelector('.navbar')
var sticky = navbar.offsetTop
window.onscroll = function(){
    if (window.pageYOffset >= sticky){
        navbar.classList.add("navbar-sticky")
    }
    else {
        navbar.classList.remove("navbar-sticky");
    }
}

$('.navbar-extend-item [href="index.php?ac=nhap_diem"]').click(function(){
    $.ajax({
        url : "checklogin.php",
        type : "post",
        dataType : "text",
        data : {},
        success : (data)=>{
            if(data == false){
                $('.modal-login').addClass('form-open')
                $('body').addClass('modal-open')
            }
            else{
                console.log($(this).attr('href'))
                window.location.href = $(this).attr("href")
            }
        }
    });
    return false
})

let scoreList = document.querySelectorAll('.btn-edit-score')
for(let scoreItem of scoreList){
    scoreItem.onclick = function(){
        $('.modal-edit-score').addClass('form-open')
        $('body').addClass('modal-open')
        let parentElement = this.parentElement.parentElement
        let mahs = parentElement.querySelector('td:nth-child(2)').textContent
        let hoten = parentElement.querySelector('td:nth-child(3)').textContent
        let ngaysinh = parentElement.querySelector('td:nth-child(4)').textContent
        let tx1 = parentElement.querySelector('td:nth-child(5)').textContent
        let tx2 = parentElement.querySelector('td:nth-child(6)').textContent
        let tx3 = parentElement.querySelector('td:nth-child(7)').textContent
        let tx4 = parentElement.querySelector('td:nth-child(8)').textContent
        let tx5 = parentElement.querySelector('td:nth-child(9)').textContent
        let hs21 = parentElement.querySelector('td:nth-child(10)').textContent
        let hs22 = parentElement.querySelector('td:nth-child(11)').textContent
        let hk = parentElement.querySelector('td:nth-child(12)').textContent
        $('.form-student-id').text(mahs)
        $('.form-student-name').text(hoten)
        $('.form-student-birthday').text(ngaysinh)
        $('.edit-score-table tbody td:nth-child(1) input').val(tx1)
        $('.edit-score-table tbody td:nth-child(2) input').val(tx2)
        $('.edit-score-table tbody td:nth-child(3) input').val(tx3)
        $('.edit-score-table tbody td:nth-child(4) input').val(tx4)
        $('.edit-score-table tbody td:nth-child(5) input').val(tx5)
        $('.edit-score-table tbody td:nth-child(6) input').val(hs21)
        $('.edit-score-table tbody td:nth-child(7) input').val(hs22)
        $('.edit-score-table tbody td:nth-child(8) input').val(hk)
    }
}
