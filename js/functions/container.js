
var indexSlider = 0
var mainSilder = document.querySelector('.main-slider')
var sliderContainer = document.querySelector('.slider-container')
var sliderImage = document.querySelectorAll('.slider-image')
var sliderAmount = document.querySelectorAll('.slider-amount i')
var sliderLength = sliderImage.length
var tempLength = 0

window.addEventListener("load",()=>{
    if(window.innerWidth < 992){
        tempLength = 2
    }
    indexSlider += tempLength
    sliderAmount[indexSlider].classList.add('slider-select')
})

window.onresize = ()=>{
    if(tempLength != 0 && indexSlider < 2){
        indexSlider += 2 - indexSlider
    }
    sliderContainer.style.transform = `translateX(${(indexSlider - tempLength) * (-sliderImage[0].offsetWidth)}px)`
    document.querySelector('.slider-select').classList.remove('slider-select')
    sliderAmount[indexSlider].classList.add('slider-select')

    if(window.innerWidth < 992){
        tempLength = 2
    }
    else{
        tempLength = 0
    }
}

var autoSlider = setInterval(()=>{
    document.querySelector('.slider-select').classList.remove('slider-select')
    if(indexSlider < sliderLength - 1){
        indexSlider++
        sliderContainer.style.transform = `translateX(${(indexSlider - tempLength) * (-sliderImage[0].offsetWidth)}px)`
    }
    else if(indexSlider == sliderLength - 1){
        indexSlider = tempLength
        sliderContainer.style.transform = `translateX(0)`
    }
    sliderAmount[indexSlider].classList.add('slider-select')
}, 5000)


function sliderPrev(){
    document.querySelector('.slider-select').classList.remove('slider-select')
    if(indexSlider == tempLength){
        indexSlider = sliderLength - 1
        sliderContainer.style.transform = `translateX(${(indexSlider - tempLength) * (-sliderImage[0].offsetWidth)}px)`
    }
    else{
        indexSlider--
        sliderContainer.style.transform = `translateX(${(indexSlider - tempLength) * (-sliderImage[0].offsetWidth)}px)`
    }
    sliderAmount[indexSlider].classList.add('slider-select')
}

function sliderNext(){
    document.querySelector('.slider-select').classList.remove('slider-select')
    if(indexSlider == sliderLength - 1){
        indexSlider = tempLength
        sliderContainer.style.transform = `translateX(0)`
    }
    else{
        indexSlider++
        sliderContainer.style.transform = `translateX(${(indexSlider - tempLength) * (-sliderImage[0].offsetWidth)}px)`
    }
    sliderAmount[indexSlider].classList.add('slider-select')
}


var indexModify = 0
var isPause = false
setInterval(()=>{
    var panalModifyList = document.querySelector('.panal-modify-list')
    var panalModify = document.querySelector('.panal-modify')
    var rectSlider = panalModifyList.getBoundingClientRect()
    var rectBlock = panalModify.getBoundingClientRect()
    if(!isPause){
        if(rectSlider.bottom  < rectBlock.top){
            indexModify = rectBlock.top - rectBlock.bottom + 24
            panalModifyList.style.transform = `translateY(${-indexModify}px)`
        }
        indexModify += 0.3
        panalModifyList.style.transform = `translateY(${-indexModify}px)`
    }
}, 10)
document.querySelector('.panal-modify-container').onmouseover = ()=>{
    if(!isPause){
        isPause = true
    }
}
document.querySelector('.panal-modify-container').onmouseout = ()=>{
    if(isPause){
        isPause = false
    }
}