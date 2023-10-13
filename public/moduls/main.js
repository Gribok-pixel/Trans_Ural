const body = document.querySelector('body')


// слайдер в index.php(главная):
const slides = document.querySelectorAll('.slide');
const menuBtns = document.querySelectorAll('.nav-item');
const orderBtn = document.querySelector('.border-order');
const orderSuccess = document.querySelector('.order-none');

for (const slide of slides) {
    
    slide.addEventListener('click', () => {
        clearActiveClasses()
        slide.classList.add('active')
    })
    
}

function clearActiveClasses() {
    slides.forEach((slide) => {
        slide.classList.remove('active');
    })
}
// ========================================================================



// Уведомление об успешком оформлении заказа
// orderBtn.addEventListener('click', () => {
//     orderSuccess.classList.add('order-success')
//     setTimeout(orderSuccess.classList.remove('order-success'))
// })


// function order_success() {
//     orderSuccess.classList.add('order-success')
// }
// ========================================================================





// Активный header-menu элемент (li)
const headerMenuLi = document.querySelectorAll('.header-menu-li a')

const hrefName = window.location.href.split('/')
const activeHrefName = hrefName[hrefName.length-1]

for (const menuLi of headerMenuLi) {
    let li = menuLi.href.split('/')
    let activeLI = li[li.length-1]
    if (activeHrefName === activeLI) {
        menuLi.style.color = '#fe6565'
    }
}
// ========================================================================





//Динамическое меню карточки товара
const furnitureMenuItems = document.querySelectorAll('.one-furniture-menu-li');

const furnitureDesc = document.querySelector('.one-furniture-desc');
const furnitureCharacteristics = document.querySelector('.one-furniture-characteristics');
const furnitureInstructions = document.querySelector('.one-furniture-instructions');
const furnitureReviews = document.querySelector('.one-furniture-reviews');
const furnitureQuestions = document.querySelector('.one-furniture-questions');

function clearBorder() {
    furnitureMenuItems.forEach((lis) => {
        lis.style.borderBottom = 'none'
    })
}

for (const item of furnitureMenuItems) {
    item.addEventListener('click', (e) => {
        let num = e.target.attributes.id.value;
        if (num === '1') {
            clearBorder()
            item.style.borderBottom = '2px solid #111'

            furnitureDesc.style.display = 'block'
            furnitureCharacteristics.style.display = 'none'
            furnitureInstructions.style.display = 'none'
            furnitureReviews.style.display = 'none'
            furnitureQuestions.style.display = 'none'
        }
        if (num === '2') {
            clearBorder()
            item.style.borderBottom = '2px solid #111'

            furnitureDesc.style.display = 'none'
            furnitureCharacteristics.style.display = 'block'
            furnitureInstructions.style.display = 'none'
            furnitureReviews.style.display = 'none'
            furnitureQuestions.style.display = 'none'
        }
        if (num === '3') {
            clearBorder()
            item.style.borderBottom = '2px solid #111'

            furnitureDesc.style.display = 'none'
            furnitureCharacteristics.style.display = 'none'
            furnitureInstructions.style.display = 'block'
            furnitureReviews.style.display = 'none'
            furnitureQuestions.style.display = 'none'
        }
        if (num === '4') {
            clearBorder()
            item.style.borderBottom = '2px solid #111'

            furnitureDesc.style.display = 'none'
            furnitureCharacteristics.style.display = 'none'
            furnitureInstructions.style.display = 'none'
            furnitureReviews.style.display = 'block'
            furnitureQuestions.style.display = 'none'
        }
        if (num === '5') {
            clearBorder()
            item.style.borderBottom = '2px solid #111'

            furnitureDesc.style.display = 'none'
            furnitureCharacteristics.style.display = 'none'
            furnitureInstructions.style.display = 'none'
            furnitureReviews.style.display = 'none'
            furnitureQuestions.style.display = 'block'
        }
    })
}
// ========================================================================




// Слайдер для карточкек мебели (furniture.php) SwiperJs
const cardSlider = new Swiper('.swiper1', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    pagination: {
        el: '.swiper-pagination',
        clickable: true
    },
    scrollbar: {
        // dragSize: 20,
        el: '.swiper-scrollbar',
        draggable: true,
        snapOnRelease: true,
    },
    // mousewheel: {
    //     invert: true,
    // },
});

const swiper = new Swiper(".mySwiper", {
    spaceBetween: 10,
    slidesPerView: 3,
    freeMode: true,
    watchSlidesProgress: true,
});
const swiper2 = new Swiper(".mySwiper2", {
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: swiper,
    },
});
// ========================================================================






// Поиск товаров (search-box)
const searchInput = document.querySelector('.input-search')
const searchUl = document.querySelector('.search-drop-down-list')


const allProducts = [ //список всех товаров со ссылкой на них
    {name: 'Доска', href: 'http://wooden-store/boards'},
    {name: 'Мебель', href: 'http://wooden-store/furniture'},
    {name: 'Качели', href: 'http://wooden-store/furniture'},
    {name: 'Стулья', href: 'http://wooden-store/furniture'},
    {name: 'Столы', href: 'http://wooden-store/furniture'},
    {name: 'Беседки', href: 'http://wooden-store/furniture'},

    {name: 'Качель', href: 'http://wooden-store/furniture/1'},
    {name: 'Стулья', href: 'http://wooden-store/furniture/2'},
    {name: 'Скамья', href: 'http://wooden-store/furniture/3'},
    {name: 'Качель', href: 'http://wooden-store/furniture/4'},
]

// const stations = []

// allProducts.forEach(line => {
//     stations.push(line.name)
// })

function getOptions(word, stations) {
    return stations.filter(s => {
        // Определить совпадает ли то что мы ввели в input названиям продуктов внутри массива
        const regex = new RegExp(word, 'gi')
        return s.name.match(regex)
    })
}

function displayOptions() {
    const options = getOptions(this.value, allProducts)
    
    let html = options.map(product => {
        return `<a href="${product.href}">${product.name}</a>`
    }).slice(0, 4).join('')

    searchUl.innerHTML = html

    const removeLi = ``
    body.addEventListener('click', () => {
        searchUl.innerHTML = removeLi
    })
}

searchInput.addEventListener('change', displayOptions)
searchInput.addEventListener('keyup', displayOptions)
// ========================================================================





// Модальное окно для заказа
const modalBuyBtn = document.querySelector('.one-furniture-card-buy')
const modalPopUp = document.querySelector('.modal-furniture-order')
const modalCloseBtn = document.querySelector('.modal-order-close')

if (modalPopUp) {
    modalBuyBtn.addEventListener('click', () => {
        modalPopUp.style.display = 'block'
    })
    modalCloseBtn.addEventListener('click', () => {
        modalPopUp.style.display = 'none'
    })
}
// ========================================================================







