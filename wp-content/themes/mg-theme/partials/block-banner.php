<section class="banner" id="banner">
  <div class="container">
    <div class="banner__right">
      <?php the_field('banner_text'); ?>
    </div>
    <div class="banner__left">
      <h5>↓ Заповніть, будь ласка, нашу форму ↓</h5>
      <form id="consultForm" enctype="multipart/form-data" method="POST">
        <div class="step step__1 step__active">
          <div class="field">
            <label for="position" class="field__required">Категорія</label>
            <select name="position" id="position" required>
              <option value="Captain">
                Captain
              </option>
              <option value="Captain/Engineer">
                Captain/Engineer
              </option>
              <option value="Deckhand">
                Deckhand
              </option>
              <option value="Deckhand/Engineer">
                Deckhand/Engineer
              </option>
              <option value="Deckhand/Divemaster/Instructor">
                Deckhand/Divemaster/Instructor
              </option>
              <option value="2nd Engineer">
                2nd Engineer
              </option>
              <option value="3rd Engineer">
                3rd Engineer
              </option>
              <option value="Chief Engineer">
                Chief Engineer
              </option>
              <option value="Sole Engineer">
                Sole Engineer
              </option>
              <option value="Bosun">
                Bosun
              </option>
              <option value="Chief Officer/First Officer">
                Chief Officer/First Officer
              </option>
              <option value="ETO">
                ETO
              </option>
              <option value="Head / Executive Chef">
                Head / Executive Chef
              </option>
              <option value="Mate">
                Mate
              </option>
              <option value="Chief Steward/ess">
                Chief Steward/ess
              </option>
              <option value="Sole Chef">
                Sole Chef
              </option>
              <option value="Sole Steward/ess">
                Sole Steward/ess
              </option>
              <option value="Steward/ess">
                Steward/ess
              </option>
              <option value="Chase/Tender Boat Captain">
                Chase/Tender Boat Captain
              </option>
              <option value="Cook/Stewardess">
                Cook/Stewardess
              </option>
              <option value="Steward/ess - Masseure/euse">
                Steward/ess - Masseure/euse
              </option>
              <option value="Estate Staff">
                Estate Staff
              </option>
              <option value="Steward/ess - Laundry">
                Steward/ess - Laundry
              </option>
              <option value="Steward/ess - Service">
                Steward/ess - Service
              </option>
              <option value="2nd Steward/ess">
                2nd Steward/ess
              </option>
            </select>
          </div>
          <div class="field">
            <button class="step__two" type="button">Далі</button>
          </div>
        </div>
        <div class="step step__2">
          <h3>Контактна інформація</h3>
          <div class="field">
            <label for="name" class="field__required">Ім'я</label>
            <input type="text" name="name" id="name" required>
          </div>
          <div class="field">
            <label for="phone" class="field__required">Телефон</label>
            <input type="tel" name="phone" id="phone" required>
          </div>
          <div class="field">
            <label for="email" class="field__required">Email</label>
            <input type="email" name="email" id="email" required>
          </div>
          <div class="field">
            <button class="step__three" type="button">Далі</button>
          </div>
        </div>
        <div class="step step__3">
          <div class="field">
            <label for="summary" class="field__required">Будь ласка, додайте своє резюме</label>
            <input type="file" multiple name="summary" id="summary" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf">
          </div>
          <div class="field">
            <button type="submit">Надіслати</button>
          </div>
        </div>
        <div class="step step__4">
          <h2>Дякуємо, що подали заявку. Ми зв'яжемося з вами найближчим часом!</h2>
        </div>
        <div class="field__loader"></div>
      </form>
      <h5>Або зв'яжіться з нами за телефоном, поштою або в соцмережах.</h5>
      <ul>
        <li><a href="<?php the_field('telegram', 'options'); ?>" class="banner__btn banner__btn-tg"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 496 512"><path d="M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z"/></svg></a></li>
        <li><a href="<?php the_field('whatsapp', 'options'); ?>" class="banner__btn banner__btn-wt"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg></a></li>
        <li><a href="<?php the_field('instagram', 'options'); ?>" class="banner__btn banner__btn-in"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a></li>
      </ul>
    </div>
  </div>
</section>