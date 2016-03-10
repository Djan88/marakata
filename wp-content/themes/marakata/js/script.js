jQuery(function() {
    var Obj = {
      circle: new Array(40),
      radius: 200,
      noise: 25,
      speed: 0.3,
      size: 800,
      
      //color a = background color; color b = object color 
      color: {
        a: 'hsla(280, 95%, 5%, 1)',
        b: 'hsla(255, 255%, 255%, .8)'
      },
      //X & Y positions
      X: function(x) {
        return Obj.c.width / 2 + x;
      },

      Y: function(y) {
        return Obj.c.height / 2 - y;
      },
      //behavior
      Circle: function(i) {
        this.r = Obj.radius - i * Obj.radius / Obj.circle.length;
        this.e = i % 2 ? true : false;
        this.max = Math.random() * Obj.noise;
        this.min = -Math.random() * Obj.noise;
        this.val = Math.random() * (this.max - this.min) + this.min;
      },
      //clearing   
      Clear: function() {
        Obj.$.fillStyle = Obj.color.a;
        Obj.$.fillRect(0, 0, Obj.c.width, Obj.c.height);
      },
      //shape changing  
      Change: function(C) {
        for (var i = 0; i < Obj.size; i++) {
          var a = i * Math.PI * 2 / Obj.size;
          var x = Math.cos(a) * (C.r - C.val * Math.cos(i / 4));
          var y = Math.sin(a) * (C.r - C.val * Math.cos(i / 4));
          Obj.$.fillStyle = Obj.color.b;
          Obj.$.fillRect(Obj.X(x), Obj.Y(y), 1, 1);
        }
        Obj.Check(C);
      },
      //noise level checks
      Check: function(C) {
        C.val = C.e ? C.val + Obj.speed : C.val - Obj.speed;
        if (C.val < C.min) {
          C.e = true;
          C.max = Math.random() * Obj.noise;
        }
        if (C.val > C.max) {
          C.e = false;
          C.min = -Math.random() * Obj.noise;
        }
      },
      //update object
      Update: function() {
        Obj.Clear();
        for (var i = 0; i < Obj.circle.length; i++) {
          Obj.Change(Obj.circle[i]);
        }
      },
      //draw object
      Draw: function() {
        Obj.Update();
        window.requestAnimationFrame(Obj.Draw, Obj.c);
      },
      //set circles
      Set: function() {
        for (var i = 0; i < Obj.circle.length; i++) {
          Obj.circle[i] = new Obj.Circle(i);
        }
      },

      //size control
      Size: function() {
        Obj.c.width = window.innerWidth;
        Obj.c.height = window.innerHeight;
      },
      //get canvas
      Run: function() {
        Obj.c = document.querySelector('canvas');
        Obj.$ = Obj.c.getContext('2d');
        window.addEventListener('resize', Obj.size, false);
      },
      //start   
      Init: function() {
        Obj.Run();
        Obj.Size();
        Obj.Set();
        Obj.Draw();
      }

    };
    Obj.Init();
    var curTrY,
        times,
        curY,
        resultY;
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
    jQuery('.menu-proto').on('click', function(event) {
      hideAll();
      jQuery('.content-block_proto').removeClass('hidden').addClass('animated fadeInDown');
    });
    jQuery('.menu-news').on('click', function(event) {
      hideAll();
      jQuery('.content-block_news').removeClass('hidden').addClass('animated fadeInDown');
    });

    var protocol_1 = function(){
      times = Math.round(Math.random() * (9 - 0));
      curTrY = parseFloat(jQuery('.marakata_sim-1').css('backgroundPositionY'));
      curTrY = curTrY-(212.5*times);
      jQuery('.marakata_sim-1').css('backgroundPositionY', curTrY+'px');
    }
    var protocol_2 = function(){
      times = Math.round(Math.random() * (9 - 0));
      curTrY = parseFloat(jQuery('.marakata_sim-2').css('backgroundPositionY'));
      curTrY = curTrY-(212.5*times);
      jQuery('.marakata_sim-2').css('backgroundPositionY', curTrY+'px');
    }
    var protocol_3 = function(){
      times = Math.round(Math.random() * (9 - 0));
      curTrY = parseFloat(jQuery('.marakata_sim-3').css('backgroundPositionY'));
      curTrY = curTrY-(212.5*times);
      jQuery('.marakata_sim-3').css('backgroundPositionY', curTrY+'px');
    }
    var protocol_4 = function(){
      times = Math.round(Math.random() * (9 - 0));
      curTrY = parseFloat(jQuery('.marakata_sim-4').css('backgroundPositionY'));
      curTrY = curTrY-(212.5*times);
      jQuery('.marakata_sim-4').css('backgroundPositionY', curTrY+'px');
    }
    var protocol_5 = function(){
      times = Math.round(Math.random() * (9 - 0));
      curTrY = parseFloat(jQuery('.marakata_sim-5').css('backgroundPositionY'));
      curTrY = curTrY-(212.5*times);
      jQuery('.marakata_sim-5').css('backgroundPositionY', curTrY+'px');
    }
    var result_1 = function(){
      curY = parseFloat(jQuery('.marakata_sim-1').css('backgroundPositionY'));
      curTrY = 9 + (curY/212.5);
      resultY = (212.5*curTrY);
      jQuery('.marakata_sim-6').css('backgroundPositionY', -resultY+'px');
    }
    var result_2 = function(){
      curY = parseFloat(jQuery('.marakata_sim-2').css('backgroundPositionY'));
      curTrY = 9 + (curY/212.5);
      resultY = (212.5*curTrY);
      jQuery('.marakata_sim-7').css('backgroundPositionY', -resultY+'px');
    }
    var result_3 = function(){
      curY = parseFloat(jQuery('.marakata_sim-3').css('backgroundPositionY'));
      curTrY = 9 + (curY/212.5);
      resultY = (212.5*curTrY);
      jQuery('.marakata_sim-8').css('backgroundPositionY', -resultY+'px');
    }
    var result_4 = function(){
      curY = parseFloat(jQuery('.marakata_sim-4').css('backgroundPositionY'));
      curTrY = 9 + (curY/212.5);
      resultY = (212.5*curTrY);
      jQuery('.marakata_sim-9').css('backgroundPositionY', -resultY+'px');
    }
    var result_5 = function(){
      curY = parseFloat(jQuery('.marakata_sim-5').css('backgroundPositionY'));
      curTrY = 9 + (curY/212.5);
      resultY = (212.5*curTrY);
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
    counter = -1,
    start_time,
    end_time,
    past_time = 0,
    max_time = 0,
    global_counter = 1;
    jQuery('.start-man').on('click', function(event) {
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
          console.log('Прошлое: '+ past_time+', Текущее: '+(end_time - start_time));
        }
        counter += 1;
        console.log(max_time);
      }
      // if (global_counter == 11 ) {}
    });
});
