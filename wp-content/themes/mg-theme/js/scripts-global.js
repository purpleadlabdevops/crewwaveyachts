function requestAction(values, callback){
	let formData = new FormData();

	for (let i = 0, l = values.length; i < l; i++) {
		var keys = Object.keys(values[i]);
		for (var j = 0, k = keys.length; j < k; j++) {
			let key = keys[j],
				value = values[i][keys[j]];
			formData.append(key, value);
		}
	}

	let request = new XMLHttpRequest();
	request.open('POST', data.ajax, true);
	request.onload = function() {
		if (this.status >= 200 && this.status < 400) {
			let result = this.response;
			if(callback) callback(result);
		} else {
			alert('Request status: '+this.status);
		}
	}

	request.onerror = function() {
		alert('Request error!');
	};

	request.send(formData);
}
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
      if(data.isFrontPage){
        document.querySelector('.banner').scrollIntoView({block: "start", behavior: "smooth"})
      } else {
        window.location.replace(`${data.frontPage}#banner`)
      }
    })
  })

})();
(function(){

  const email = document.getElementById('subscriber_email'),
        form = document.getElementById('subscribeForm'),
        validateEmail = email => {
          return email.match(
            /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
          )
        }

  form.addEventListener('submit', e => {
    e.preventDefault();
    console.log('subbmit');
    if(validateEmail(email.value)){
      document.querySelector('.subscribe__loader').classList.add('subscribe__loader-active')
      requestAction([{
        action: 'subscribeAction',
        email: email.value,
      }], result => {
        document.querySelector('.subscribe__loader').classList.remove('subscribe__loader-active')
        const data = JSON.parse(result)
        console.dir(data);
        if(data.status == 'success'){
          form.reset()
          document.querySelector('.subscribe__thanks').classList.add('subscribe__thanks-active')
          setTimeout(() => {
            document.querySelector('.subscribe__thanks').classList.remove('subscribe__thanks-active')
          }, 5000);
        } else if(data.status == 'error') {
          alert(data.msg);
        }
      })
    } else {
      email.classList.add('err')
      setTimeout(() => email.classList.remove('err'), 1000);
    }
  })

})();