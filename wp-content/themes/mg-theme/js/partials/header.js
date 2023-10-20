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

  document.querySelector('.header__burger').addEventListener('click', e => {
    e.preventDefault()
    console.log(2);
    e.target.classList.toggle('active')
    document.querySelector('.menu-header-container').classList.toggle('active')
  })

})();