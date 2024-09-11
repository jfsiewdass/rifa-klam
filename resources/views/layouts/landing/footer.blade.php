<footer  class="footer-section3 n5-bg position-relative cus-z1 overflow-hidden">
    
    {{-- <img src="assets/images/global/v3star.png" alt="star" class="v3-star"> --}}
    {{-- <div class="call-sun">
        <img src="assets/images/global/call-sunv3.png" alt="call-sun">
    </div> --}}

    <!--Text Animation -->
    {{-- <div class="banner-textanimation2">
        <div class="textcircle2">
            <div class="text2">
                <p>
                    <span>Explore</span> <span>More</span> <span>Explore</span> <span>More</span>
                </p>
            </div>
        </div>
        <a href="#0" class="icon-explore">
            <span class="icon">
                <i class="ph-bold ph-arrow-up-right"></i>
            </span>
        </a>
    </div> --}}
    <!--Text Animation -->

  
    <div class="footer-v3-newsletter p1-bg pt-lg-15 cus-z1 pt-10 pb-lg-15 pb-10">
        
        <div class="container">
            <div class="row g-xl-10 g-lg-10 g-4 align-items-center justify-content-lg-between justify-content-center">
                <div class="col-xl-4 col-lg-4">
                    <div class="section__title text-lg-start text-center">
                        <img src="{{  asset('assets/images/ChanceEnLinea.png') }}" alt="" style="width: 150px">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                    {{-- <form action="#" class="news-form d-flex align-items-center">
                        <input type="text" placeholder="Enter Your Email Address...">
                        <button type="submit" class="kewta-btn kewta-alt d-inline-flex align-items-center">
                            <span class="kew-arrow n4-bg">
                                <span class="kt-one">
                                    <i class="ti ti-arrow-right n0-clr"></i>                                
                                </span>
                                <span class="kt-two">
                                    <i class="ti ti-arrow-right n0-clr"></i>                               
                                </span>
                            </span>
                        </button>
                    </form> --}}
                </div>
                <div class="col-xl-4 col-lg-4">
                    <ul class="pri-link d-flex align-items-center justify-content-lg-end justify-content-center gap-xxl-6 gap-sm-6 gap-3">
                        <li>
                            <a href="#" class="n4-clr hover-act4" onclick="termsAndCondition()">
                                Términos y condiciones
                            </a>
                        </li>
                        {{-- <li>
                            <a href="#0" class="n4-clr hover-act4">
                                <img src="{{  asset('assets/images/ChanceEnLinea.png') }}" alt="" style="width: 150px">
                            </a>
                        </li> --}}
                        {{-- <li>
                            <a href="https://wa.me/+584143007221" class="n4-clr hover-act4 d-flex align-items-center" target="_blank"><i class="ph ph-whatsapp-logo fs-five"></i> Contactanos</a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="privacy-policy-footer">
        <div class="container">
            <div class="d-flex flex-wrap pb-xxl-8 pb-xl-6 pb-4 pt-xxl-8 pt-xl-6 pt-4 n4-bt gap-3 align-items-center justify-content-center">
                <p class="footer-copyright flex-wrap justify-content-center n4-clr">
                    <span class="copy nw4-clr">
                        Copyright &copy; 2024 <a href="#" class="nw4-clr">RIFAS KLAM</a>
                    </span>
                    <span class="midbor">

                    </span>
                    <span class="designed nw4-clr">
                        Designed By  Jsiewdass</a>
                    </span>
                </p>
            </div>
        </div>
    </div>
</footer>
<div class="modal fade" id="termModalFooter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Términos y Condiciones</h5>
                    {{-- <button type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                </div>
                <div class="modal-body">
                    <p>
                        1.- Los números disponibles para la compra en cada una de nuestros sorteos se especificarán en la página de detalles correspondientes a cada sorteo.
                    </p>

                    <p>
                        2.- Solo podrán participar en nuestros sorteos personas naturales mayores de 18 años con nacionalidad venezolana o extranjeros que residan legalmente en Venezuela.
                    </p>

                    <p>
                        3.- Los premios deberán ser retirados en persona en la ubicación designada para cada Sorteo. Solo se realizará entregas personales en la dirección indicada por el ganado del primer premio o premio mayor.
                    </p>

                    <p>
                        4.- La compra mínima requerida para participar en nuestros sorteos en de dos tickets. Los ticket serán asignado de manera aleatoria y los recibirás a través del correo electrónico proporcionado.
                    </p>

                    <p>
                        5.- Para reclamar tu premio tienes un lapso de 72 horas.
                    </p>

                    <p>
                        6.- Los ganadores aceptan aparecer en el contenido audio visual de el sorteo mostrando su presencia en las redes y entrega de los premios. Esto es OBLIGATORIO.
                    </p>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closetermsAndCondition()">Cerrar</a>
                    {{-- <button type="button" class="btn btn-success" id="cancelNumbers" data-dismiss="modal" onclick="closeTermModal()">Continuar</button> --}}
                </div>
            </div>
        </div>
    </div>
<a href="https://wa.me/584120936698" class="whatsapp" target="_blank" style="text-decoration: none;"> 
    <img src="{{ asset('assets/images/whatsapp.png') }}" style="width: 60px">
</a>