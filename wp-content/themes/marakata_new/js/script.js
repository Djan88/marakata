jQuery(function() {
  var hideAll = function(){
    jQuery('.content-block').addClass('hidden');
  }
  jQuery('.menu-about').on('click', function(event) {
    hideAll();
    jQuery('.content-block_about').removeClass('hidden').addClass('animated fadeInDown');
  });
  jQuery('.menu-main').on('click', function(event) {
    hideAll();
    jQuery('.content-block_main').removeClass('hidden').addClass('animated fadeInDown');
  });
  jQuery('.menu-game').on('click', function(event) {
    hideAll();
    jQuery('.content-block_game').removeClass('hidden').addClass('animated fadeInDown');
  });
  jQuery('.menu-news').on('click', function(event) {
    hideAll();
    jQuery('.content-block_news').removeClass('hidden').addClass('animated fadeInDown');
  });
  var curTrY,
      times,
      block_w,
      page_h = jQuery("html").width(),
      curY,
      scroll_val,
      scroll_game,
      resultY;
  var cur_window_width = function(){
      block_w = parseFloat(jQuery(".marakata_sim.marakata_sim_prot").css('width'));
      page_h = jQuery("html").width();
      console.log(block_w);
      if (page_h > 1200) {
          scroll_val = 174.3;
      } else if (page_h < 1200 && page_h > 1001) {
          scroll_val = 174.1;
      } else if (page_h < 1000 && page_h > 769) {
          scroll_val = 128.3;
      } else if (page_h < 768 && page_h > 600) {
          scroll_val =  block_w * 1.235382417582418;
          jQuery(".marakata_sim.marakata_sim_prot").css('height', scroll_val+'px');
          jQuery(".marakata_dot").css('height', scroll_val+'px');
      } else {
          scroll_val =  block_w * 1.195377930902479;
          jQuery(".marakata_sim.marakata_sim_prot").css('height', scroll_val+'px');
          jQuery(".marakata_dot").css('height', scroll_val+'px');
      }
      scroll_game = 506.2;
  };
  jQuery('.menu-proto').on('click', function(event) {
      hideAll();
      jQuery('.content-block_proto').removeClass('hidden').addClass('animated fadeInDown');
      cur_window_width();
  })
  cur_window_width();
  jQuery(window).on('resize', function(event) {
    cur_window_width();
  });
  

  var protocol_1 = function(){
    times = Math.round(Math.random() * (9 - 0));
    console.log(times);
    curTrY = parseFloat(jQuery('.marakata_sim-1').css('backgroundPositionY'));
    curTrY = curTrY-(scroll_val*times);
    jQuery('.marakata_sim-1').css('backgroundPositionY', curTrY+'px');
  }
  var protocol_2 = function(){
    times = Math.round(Math.random() * (9 - 0));
      console.log(times);
    curTrY = parseFloat(jQuery('.marakata_sim-2').css('backgroundPositionY'));
    curTrY = curTrY-(scroll_val*times);
    jQuery('.marakata_sim-2').css('backgroundPositionY', curTrY+'px');
  }
  var protocol_3 = function(){
    times = Math.round(Math.random() * (9 - 0));
      console.log(times);
    curTrY = parseFloat(jQuery('.marakata_sim-3').css('backgroundPositionY'));
    curTrY = curTrY-(scroll_val*times);
    jQuery('.marakata_sim-3').css('backgroundPositionY', curTrY+'px');
  }
  var protocol_4 = function(){
    times = Math.round(Math.random() * (9 - 0));
      console.log(times);
    curTrY = parseFloat(jQuery('.marakata_sim-4').css('backgroundPositionY'));
    curTrY = curTrY-(scroll_val*times);
    jQuery('.marakata_sim-4').css('backgroundPositionY', curTrY+'px');
  }
  var protocol_5 = function(){
    times = Math.round(Math.random() * (9 - 0));
      console.log(times);
    curTrY = parseFloat(jQuery('.marakata_sim-5').css('backgroundPositionY'));
    curTrY = curTrY-(scroll_val*times);
    jQuery('.marakata_sim-5').css('backgroundPositionY', curTrY+'px');
  }
  var result_1 = function(){
    curY = parseFloat(jQuery('.marakata_sim-1').css('backgroundPositionY'));
    curTrY = 9 + (curY/scroll_val);
    resultY = (scroll_val*curTrY);
    jQuery('.marakata_sim-6').css('backgroundPositionY', -resultY+'px');
  }
  var result_2 = function(){
    curY = parseFloat(jQuery('.marakata_sim-2').css('backgroundPositionY'));
    curTrY = 9 + (curY/scroll_val);
    resultY = (scroll_val*curTrY);
    jQuery('.marakata_sim-7').css('backgroundPositionY', -resultY+'px');
  }
  var result_3 = function(){
    curY = parseFloat(jQuery('.marakata_sim-3').css('backgroundPositionY'));
    curTrY = 9 + (curY/scroll_val);
    resultY = (scroll_val*curTrY);
    jQuery('.marakata_sim-8').css('backgroundPositionY', -resultY+'px');
  }
  var result_4 = function(){
    curY = parseFloat(jQuery('.marakata_sim-4').css('backgroundPositionY'));
    curTrY = 9 + (curY/scroll_val);
    resultY = (scroll_val*curTrY);
    jQuery('.marakata_sim-9').css('backgroundPositionY', -resultY+'px');
  }
  var result_5 = function(){
    curY = parseFloat(jQuery('.marakata_sim-5').css('backgroundPositionY'));
    curTrY = 9 + (curY/scroll_val);
    resultY = (scroll_val*curTrY);
    jQuery('.marakata_sim-10').css('backgroundPositionY', -resultY+'px');
  }

  jQuery('.start-prot').on('click', function(event) {
    setTimeout(protocol_1, 0);
    setTimeout(protocol_2, 500);
    setTimeout(protocol_3, 1000);
    setTimeout(protocol_4, 1500);
    setTimeout(protocol_5, 2000);
    setTimeout(result_1, 4500);
    setTimeout(result_2, 5000);
    setTimeout(result_3, 5500);
    setTimeout(result_4, 6000);
    setTimeout(result_5, 6500);
  });

  jQuery('.marakata_sim-1').addClass('marakata_sim-active');
  var elems_obj = {
    0: 0,
    1: 0,
    2: 0,
    3: 0,
    4: 0,
    5: 0,
    6: 0,
    7: 0,
    8: 0,
    9: 0,
  },
  elems_obj_game = {
    1: 0,
    2: 0,
    3: 0,
    4: 0,
    5: 0,
    6: 0,
    7: 0,
    8: 0,
    9: 0,
  },
  counter = -1,
  counter_game = 0,
  start_time,
  end_time,
  max_time = 0,
  max_time_game = 1,
  cur_elem = 0,
  global_counter = 0,
  game_counter = 0,
  cur_item;
  jQuery('.marakata_sim_from').on('click', function(event) {
    jQuery('.personal_history').attr('disabled', 'true');
    if (jQuery(this).hasClass('marakata_sim_from')) {
      jQuery(this).addClass('marakata_sim-active');
      if (counter <= 9) {
        if (counter <= -1) {
          end_time = new Date();
        } else {
          start_time = end_time;
          end_time = new Date();
          elems_obj[counter] = end_time - start_time;
          if (elems_obj[max_time] < (end_time - start_time)) {
            max_time = counter;
          }
          console.log(elems_obj);
          console.log('Лучшее: '+ max_time+', Текущее: '+(end_time - start_time));
          console.log(cur_item);
        }
        counter += 1;
      } else {
        curTrY = parseFloat(jQuery(this).css('backgroundPositionY'));
        curTrY = curTrY-(scroll_val*max_time);
        console.log(jQuery(this));
        jQuery(this).css('backgroundPositionY', curTrY+'px');
        jQuery('.marakata_sim').removeClass('marakata_sim-active');
        jQuery(this).removeClass('marakata_sim_from');
        if (global_counter <= 2) {
          cur_elem = global_counter+1
        } else {
          cur_elem = global_counter+2
        }
        console.log(global_counter);
        jQuery('.marakata_sim-wrap').eq(cur_elem).find('.marakata_sim').addClass('marakata_sim-active');
        jQuery('.marakata_sim-6').removeClass('marakata_sim-active');
        counter = -1;
        elems_obj = {
              0: 0,
              1: 0,
              2: 0,
              3: 0,
              4: 0,
              5: 0,
              6: 0,
              7: 0,
              8: 0,
              9: 0,
            };
        global_counter += 1;
        if (global_counter >= 5) {
          setTimeout(result_1, 2500);
          setTimeout(result_2, 3000);
          setTimeout(result_3, 3500);
          setTimeout(result_4, 4000);
          setTimeout(result_5, 4500);
          global_counter = 0;
        }
      }
    }
  });

  jQuery('.marakata_sim_game').on('click', function(event) {
      if (jQuery(this).hasClass('marakata_sim_game')) {
        jQuery(this).addClass('marakata_sim-active');
        if (counter_game <= 9) {
          if (counter_game <= 0) {
            end_time = new Date();
          } else {
            start_time = end_time;
            end_time = new Date();
            elems_obj_game[counter_game] = end_time - start_time;
            if (elems_obj_game[max_time_game] < (end_time - start_time)) {
              max_time_game = counter_game;
            }
            console.log(elems_obj_game);
            console.log('Лучшее: '+ max_time_game+', Текущее: '+(end_time - start_time));
            console.log(cur_item);
          }
          counter_game += 1;
        } else {
          curTrY = parseFloat(jQuery(this).css('backgroundPositionY'));
          jQuery('.game_numbers').append(' <span class="game_number">'+max_time_game+'</span>')
          if (max_time_game <= 1) {
            curTrY = 0;
          } else {
            max_time_game = max_time_game -1;
            curTrY = curTrY-(scroll_game*max_time_game);
          }
          console.log(jQuery(this));
          jQuery(this).css('backgroundPositionY', curTrY+'px');
          game_counter += 1;
          jQuery('.marakata_sim').removeClass('marakata_sim-active');
          jQuery(this).removeClass('marakata_sim_game');
          if (global_counter <= 2) {
            cur_elem = global_counter+1
          } else {
            cur_elem = global_counter+2
          }
          console.log(global_counter);
          jQuery('.marakata_sim-wrap').eq(cur_elem).find('.marakata_sim').addClass('marakata_sim-active');
          jQuery('.marakata_sim-6').removeClass('marakata_sim-active');
          counter_game = 0;
          elems_obj_game = {
            1: 0,
            2: 0,
            3: 0,
            4: 0,
            5: 0,
            6: 0,
            7: 0,
            8: 0,
            9: 0,
          };
        };
      };
      if (game_counter >= 9) {
        jQuery('.btn_reset').addClass('hidden');
      }
  });

  jQuery('.btn_game, .menu-game').on('click', function(event) {
    jQuery('.game_numbers').text('');
    game_counter = 0;
    jQuery('.btn_reset').removeClass('hidden');
    jQuery('.marakata_sim').css('backgroundPositionY', '0px');
    max_time_game = 1;
    jQuery('.marakata_sim_g').addClass('marakata_sim_game');
  });
  jQuery('.btn_reset, .menu-game').on('click', function(event) {
    jQuery('.marakata_sim').css('backgroundPositionY', '0px');
    jQuery('.marakata_sim_m').addClass('marakata_sim_from')
    jQuery('.marakata_sim').removeClass('marakata_sim-active');
    jQuery('.marakata_sim-1').addClass('marakata_sim-active');
    jQuery('.personal_history').val('');
    jQuery('.personal_history').removeAttr('disabled');
    jQuery('.marakata_sim_g').addClass('marakata_sim_game');
    elems_obj = {
    0: 0,
    1: 0,
    2: 0,
    3: 0,
    4: 0,
    5: 0,
    6: 0,
    7: 0,
    8: 0,
    9: 0,
  };
  elems_obj_game = {
    1: 0,
    2: 0,
    3: 0,
    4: 0,
    5: 0,
    6: 0,
    7: 0,
    8: 0,
  };
  counter = -1;
  counter_game = 0;
  max_time = 0;
  global_counter = 0;
  });
  jQuery('.btn_reset_prot').on('click', function(event) {
      cur_window_width();
  })
  jQuery('.carousel_marakata').carousel({
    interval: 0
  })
  jQuery('.option1').on('click', function(event) {
    jQuery('.personal').addClass('hidden');
    jQuery('.actuality').removeClass('hidden');
  });
  jQuery('.option2').on('click', function(event) {
    jQuery('.actuality').addClass('hidden');
    jQuery('.personal').removeClass('hidden');
  });
  jQuery('.menu-logout').on('click', function(event) {
    window.location.href = "/wp-login.php?action=logout&_wpnonce=70d68623f4";
  });
});
