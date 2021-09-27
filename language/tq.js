let arrLang = {
      'vi': {
      },

      'en': {

          //
          //Thông quan hàng hóa
          //
          'home':'HOME',
          'gthieu':'INTRODUCE',
          'dvu':'SERVICE',
          'tintuc':'NEWS',
          'lienhe':'CONTACT',
          'hdan':'INSTRUCT',
          'thutuc':'WHAT IS THE CUSTOMS PROCEDURE?',
          // 'p':'',
          'xemt':'See more',
          'dvtquan':'CARGO CLEARANCE SERVICE',
          // 'p':'',
          'dvtdien':'COMPREHENSIVE SERVICES',
          'kbhquan':'CUSTOMS DECLARATION',
          // 'p':'',
          'vtbien':'SEA TRANSPORT',
          // 'p':'',
          'vtbo':'ROAD TRANSPORTATION',
          // 'p':'',
          'vtkhong':'AIR TRANSPORT',
          // 'p':'',
          'cpqt':'EXPRESS DELIVERY TO INTERNATIONAL',
          // 'p':'',
          'cauhoi':'FREQUENTLY ASKED QUESTIONS',
          // 'p':'',
          // 'p':'',
          'dvctoi':'OUR SERVICES',
          'baiviet':'POSTS',
          // 'p':'',
          'lienket':'LINK',
          'ttlienhe':'CONTACT INFO',
          // 'p':'',
          // 'p':'',
      }
  }
  function translateLang(lang)
    {
        $('.lang').each(function(index, item) {
          $(this).text(arrLang[lang][$(this).attr('key')]);
        });
    }

    $(function() {
        //first check for stored language in localStorage i.e. fetch data from localStorage
        let stored_lang = localStorage.getItem("stored_lang");
        //if any then translate page accordingly
        if(stored_lang != null && stored_lang != undefined)
        {
            lang = stored_lang;
            translateLang(lang);
        }


      $('.translate').click(function() {
        var lang = $(this).attr('id');
         //on click store language to localStorage
        localStorage.setItem("stored_lang",lang);
        translateLang(lang);
      });

    });