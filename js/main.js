var api='AIzaSyCQiY-i-xh31D8AWL96vXuFu6413P_-UP0';

function initMap() {
    var latLng = {
        lat: 19.280458,
        lng: -99.652356
    };

    var map = new google.maps.Map(document.getElementById('mapa'), {
        'center': latLng,
        'zoom': 14,
        'mapTypeId': google.maps.MapTypeId.ROADMAP
    });

    var contenido = '<h2>TolWebCam</h2>'+
        '<p>Del 10 al 12 de Diciembre</p>'+
        '<p>Visitanos</p>'

    var informacion = new google.maps.InfoWindow({
        content:contenido
    });

    var marker = new google.maps.Marker({
        position:latLng,
        map: map,
        title: 'ToLWebCam'
    });

    marker.addListener('click', function(){
        informacion.open(map, marker);
    });
}


(function() {
  "use strict";

  var regalo = document.getElementById('regalo');
  document.addEventListener('DOMContentLoaded',function(){
      //Campos datos usuarios
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');
      //Campos pases
        var pase_dia = document.getElementById('pase_dia');
        var pase_completo = document.getElementById('pase_completo');
        var pase_dos_dias = document.getElementById('pase_dos_dias');
      //Botones y divs
        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var botonRegistro = document.getElementById('btnRegistro');
        var lista_productos = document.getElementById('lista-productos');
        var suma = document.getElementById('suma-total');

        if(document.getElementById('calcular')){
        calcular.addEventListener('click', calcularMontos);

        pase_dia.addEventListener('blur', mostrarDias);
        pase_dos_dias.addEventListener('blur', mostrarDias);
        pase_completo.addEventListener('blur', mostrarDias);

        nombre.addEventListener('blur', validarCampos);
        apellido.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarMail);


        function validarCampos(){
          if(this.value ==''){
            errorDiv.style.display='block';
            errorDiv.innerHTML="Este campo es obligatorio";
            this.style.border='1px solid red';
            errorDiv.style.border='1px solid red';
          }else{
            errorDiv.style.display='none';
            this.style.border='1px solid #cccccc';
          }
        }
        function validarMail(){
          if(this.value.indexOf("@")>-1){
            errorDiv.style.display='none';
            this.style.border='1px solid #cccccc';
          }else{
            errorDiv.style.display='block';
            errorDiv.innerHTML="debe tener al menos una @";
            this.style.border='1px solid red';
            errorDiv.style.border='1px solid red';
          }
        }

      //Extras
        var camisas = document.getElementById('camisa-evento');
        var etiquetas = document.getElementById('etiquetas');

        function calcularMontos(event){
          event.preventDefault();
          if(regalo.value === ''){
            alert("Debes elegir un regalo");
            regalo.focus();
          }
          else{
              var boletosDia = parseInt(pase_dia.value, 10)|| 0,
                  boletos2Dias = parseInt(pase_dos_dias.value, 10)|| 0,
                  boletosCompleto = parseInt(pase_completo.value, 10)|| 0,
                  cantCamisas = parseInt(camisas.value, 10)|| 0,
                  cantEtiquetas = parseInt(etiquetas.value, 10)|| 0;

              var totalPagar = (boletosDia * 30) + (boletos2Dias * 45) + (boletosCompleto * 50) + ((cantCamisas*10)*.93) + (cantEtiquetas*2);

              var listadoProductos = [];
              if(boletosDia >= 1){
                listadoProductos.push(boletosDia +' pases por día');
              }
              if(boletos2Dias >= 1){
                listadoProductos.push(boletos2Dias +' pases por 2 días');
              }
              if(boletosCompleto >= 1){
                listadoProductos.push(boletosCompleto +' pases completos');
              }
              if(cantCamisas >= 1){
                listadoProductos.push(cantCamisas +' Camisas');
              }
              if(cantEtiquetas >= 1){
                listadoProductos.push(cantEtiquetas +' Etiquetas');
              }

              lista_productos.style.display='block';
              lista_productos.innerHTML = '';
              for (var i = 0; i < listadoProductos.length; i++){
                lista_productos.innerHTML += listadoProductos[i] + '<br/>';
                }
            suma.innerHTML = "$ " + totalPagar.toFixed(2);

            }
        }
        function mostrarDias(){
          var boletosDia = parseInt(pase_dia.value, 10)|| 0,
              boletos2Dias = parseInt(pase_dos_dias.value, 10)|| 0,
              boletosCompleto = parseInt(pase_completo.value, 10)|| 0;

          var diasElegidos = [];

          if(boletosDia>0){
            diasElegidos.push('viernes');
          }
          if(boletos2Dias>0){
            diasElegidos.push('viernes','sabado');
          }
          if(boletosCompleto>0){
            diasElegidos.push('viernes','sabado','domingo');
          }

          for (var i=0; i<diasElegidos.length; i++){
            document.getElementById(diasElegidos[i]).style.display='block';
          }
        }
      }

  });//DOM Content Loaded
})();


$(function(){

  //lettering
  $('.nombre-sitio').lettering();


  //Menú fijo

  var windowHeight = $(window).height(); //Me da el alto de la ventana
  var barraAltura = $('.barra').innerHeight(); //Nos da la altura completa de la barra
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if(scroll > windowHeight){
      $('.barra').addClass('fija');
      $('body').css({'margin-top':barraAltura+'px'});
    }else{
      $('.barra').removeClass('fija');
      $('body').css({'margin-top':'0px'});
    }
  });

  //Menú Responsive
  $('.menu-movil').on('click', function(){
    $('.navegacion-principal').slideToggle(); // Mezcala de slide-on y de slide-up
  })

  //Programa de conferencias
  $('.programa-evento .info-curso:first').show();
  $('menu-programa a:first').addClass('activo');
  $('.menu-programa a').on('click',function(){
      $('.menu-programa a').removeClass('activo');
      $(this).addClass('activo');
      $('.ocultar').hide();
      var enlace =$(this).attr('href');
      $(enlace).fadeIn(1000);
      return false;
  });

  //Animaciones para números
    $('.resumen-evento li:nth-child(1) p').animateNumber({number: 6},1200);
    $('.resumen-evento li:nth-child(2) p').animateNumber({number: 15},1200);
    $('.resumen-evento li:nth-child(3) p').animateNumber({number: 3},1450);
    $('.resumen-evento li:nth-child(4) p').animateNumber({number: 9},1200);

    /*
    var resumenLista = jQuery('.resumen-evento');
    if(resumenLista.length > 0) {
        $('.resumen-evento').waypoint(function() {
            $('.resumen-evento li:nth-child(1) p').animateNumber({number: 6},1200);
            $('.resumen-evento li:nth-child(2) p').animateNumber({number: 15},1200);
            $('.resumen-evento li:nth-child(3) p').animateNumber({number: 3},1450);
            $('.resumen-evento li:nth-child(4) p').animateNumber({number: 9},1200);
        }, {
           ofset: '60%'
        });
    }*/



  //Animación cuenta regresiva
  $('.cuenta-regresiva').countdown('2018/08/23 07:00:00',function(event){
    $('#dias').html(event.strftime('%D'));
    $('#horas').html(event.strftime('%H'));
    $('#minutos').html(event.strftime('%M'));
    $('#segundos').html(event.strftime('%S'));
  });

//CLOROBOX

    $('.invitado-info').colorbox({inline:true, width:"50%"});


});
