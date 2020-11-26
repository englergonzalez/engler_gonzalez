@extends('master')
@section('content')
    Bienvenidos
@stop
@section('inf')

<section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-6 col-lg-7" data-aos="fade-right">
            <img src="{{ url('/img/hero3.jpg') }}" class="img-fluid" alt="">
          </div>
          
          <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">

            <h3 data-aos="fade-up">¿Aún no te decides?</h3>
            <p data-aos="fade-up">
            Visitanos, te ayudamos como tomar la mejor decisión.
            </p>
            <div class="icon-box" data-aos="fade-up">
              <i class="bx bx-receipt"></i>
              <h4>ELECCIÓN DE LA MASCOTA Y LA LLEGADA A CASA</h4>
              <p>Lo primero que usted se tiene que preguntar es si está dispuesto a adoptar un animal y si este le conviene. Para ello deberá estar dispuesto a dedicar parte de su tiempo a la nueva mascota, ser paciente y perseverante, compartir parte de su tiempo libre con el animal y saber actuar con firmeza ante su posible comportamiento.

<br>Para lograr que la convivencia con el perro sea lo mejor posible es fundamental tener en cuenta las características propias de cada raza y proporcionarle los cuidados adecuados durante las primeras semanas.

<br>Los accesorios que debe adquirir antes dela llegada a casa del nuevo animal son una cama, comedero y bebedero, complementos como correa y collar en el caso de los perros y cubeta de plástico para la arena de deposiciones en el caso de los gatos. Deberá disponer además de un neceser que contenga peines o cepillos, tollitas húmedas para limpieza de ojos y orejas y una tenacilla cortaúñas.</p>
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col-xl-6 col-lg-7" data-aos="fade-right">
                <img src="{{ url('/img/hero2.jpg') }}" class="img-fluid" alt="">
            </div>
        <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">

            <h3 data-aos="fade-up">Conoce como cuidar a tu moscota</h3>
            <p data-aos="fade-up">
            Consulta los productos que te ayudarán con el cuidado de tu mascota.
            </p>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-cube-alt"></i>
              <h4>HIGIENE</h4>
              <p>Baño : Los expertos no se ponen de acuerdo en lo relativo a la frecuencia en la que se deben realizar los baños. En general esta no deberá ser inferior a una vez al mes. Algunos autores señalan que se debe hacer cuando lo necesitan, por ejemplo cuando el pelo está sucio. Aunque los gatos suelen ser menos tolerantes que los perros con el baño es posible hacer que el gatito lo acepte y que se acostumbre a ello. Se recomiendan geles especiales para animales de compañía.
                <br> Cepillado : La mejor manera de mantener su higiene sin alterar su piel es el cepillado diario.
                <br>Oídos : Se deben limpiar con una gasa. Hay productos específicos, se echan en el conducto auditivo y se masajea la zona, procediéndose después al limpiado con la gasa.

                <br>    Uñas : En perros que no desgasten bien hay que cortarlas, sobre todo en los espolones. Para los gatos existen en el mercado accesorios para arañar de forma que así los gatos mantienen las uñas en perfecto estado.

                <br>Revisión dental: oprimiendo suavemente la articulación de la boca con los dedos hará que su gato abra la boca y así podrá ver el estado de sus dientes. Los dientes se limpian solos al masticar el pienso seco o morder juguetes especiales. El sarro y el mal aliento han de ser tratados por el veterinario.</p>
            </div>
            
          </div>

      </div>
    </section>

    <section id="steps" class="steps section-bg">
      <div class="container">
      <div class="section-title" data-aos="fade-up">
          <h2>Sobre nosotros</h2>
          <p>3 puntos a destacar.</p>
        </div>
        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in">
            <span>01</span>
            <h4>Más de 9 años</h4>
            <p>De mucha experiencia y estando entre los mejores, liderando el mercado. </p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="100">
            <span>02</span>
            <h4>Profesionales</h4>
            <p>Puedes tener plena tranquilidad y confiar en nosotros, somos profesionales.</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="200">
            <span>03</span>
            <h4>Bioseguridad</h4>
            <p>Ante la pandemia, nos hemos esforzado por brindarte el mejor servicio sin olvidar cuidarte.</p>
          </div>

        </div>

      </div>
</section>

@stop