<?php
function kirimPesan() {
  
var $name = $.getElementById['name'];

var $message = $.getElementById['message'];

var $phone = $.getElementById['phone'];

var token = '6724446867:AAHaew2LwJP8LCdka9piAB8psfeokKZTRmc'; // Ganti dengan token bot yang kamu buat
var grup = '6470863095'; // Ganti dengan chat id dari bot yang kamu buat


var $message = gabungan("Name%3A%0A" + name.value + %0APhone%3A%0A + phone.value + %0AMessage3A%0A + message.value);

.ajax({
  url: `https://api.telegram.org/bot${token}/sendMessage?chat_id=${grup}&text=${gabungan}&parse_mode=html`,
  method: `POST`,
  })

  }
