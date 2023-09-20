(function(){

  const subheader = document.querySelector('.subheader'),
        header = document.querySelector('.header')

  document.addEventListener('scroll', () => {
    if(window.scrollY > subheader.clientHeight){
      subheader.style.marginBottom = `${header.clientHeight}px`
      header.style.position = 'fixed'
    } else {
      subheader.style.marginBottom = `0px`
      header.style.position = 'relative'
    }
  })

})();
(function(){

  const scrollToButtons = document.querySelectorAll('.scrollTo')
  scrollToButtons.forEach(scrollTo => {
    scrollTo.addEventListener('click', e => {
      e.preventDefault()
      document.querySelector(`.${scrollTo.dataset.scrollTo}`).scrollIntoView({block: "start", behavior: "smooth"})
    })
  })

})();
(function(){

const goToForm = document.querySelectorAll('.goToForm')
goToForm.forEach(el => {
  el.addEventListener('click', e => {
    e.preventDefault();
    document.querySelector('.banner').scrollIntoView({block: "start", behavior: "smooth"})
  })
})

})();