<script src="{{ asset('assets/js/plugins/jquery.js') }}"></script>
<!-- ==== js Viewport js start ==== -->
<script src="{{ asset('assets/js/plugins/viewpot.js') }}"></script>
<!-- ==== js Aos Animation start ==== -->
<script src="{{ asset('assets/js/plugins/aos.js') }}"></script>
<!-- ==== js Bootstrap start ==== -->
<script src="{{ asset('assets/js/plugins/bootstrap.js') }}"></script>
<!-- ==== js Magnific start ==== -->
<script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
<!-- ==== js Swiper start ==== -->
<script src="{{ asset('assets/js/plugins/swiper.js') }}"></script>
<!-- ==== js Odometer start ==== -->
<script src="{{ asset('assets/js/plugins/odometer.js') }}"></script>
<!-- ==== js Nice Select start ==== -->
{{-- <script src="{{ asset('assets/js/plugins/jquery.nice-select.min.js') }}"></script> --}}
<script src="{{ asset('assets/fontawesome/js/all.min.js') }}"></script>
<!-- ==== js Phosphor Icon start ==== -->
<script src="{{ asset('https://unpkg.com/@phosphor-icons/web') }}"></script>
<!-- ==== js Matter Js start ==== -->
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/matter-js/0.18.0/matter.min.js') }}"></script>
<!-- ==== js Matter Js Custom start ==== -->
{{-- <script s{rc="{ asset('assets/js/plugins/matter-custom.js"></') }}script> --}}
<!-- ==== js Mian start ==== -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
    const savedNumbers = JSON.parse(localStorage.getItem('savedNumbers')) || [];
    var lottery_id = JSON.parse(localStorage.getItem('lottery_id')) || 0;
    
    if(savedNumbers.length > 0 && lottery_id != 0) {
        $('#countdown-body').show();
        countdown()
    } else {
        localStorage.removeItem('numerosSeleccionados');
        localStorage.removeItem('savedNumbers');
        localStorage.removeItem('lottery_id');
        localStorage.removeItem('timer');
    }
    function countdown() {
        
        let isPaymentPage = @json(\Route::current()->getName() == 'payment');
        if(!isPaymentPage)$('#countdown-redirect').show();
        
        
        var countdown = JSON.parse(localStorage.getItem('timer')) || 180;
        

        var timer = setInterval(function() {
            var lottery_id = JSON.parse(localStorage.getItem('lottery_id')) || 0;
            if (lottery_id == 0) {
                $('#countdown-body').hide();
                clearInterval(timer);
                localStorage.removeItem('timer');
            }
            var minutes = Math.floor(countdown / 60);
            var seconds = countdown % 60;
            seconds = seconds < 10 ? '0' + seconds : seconds;

            $('#countdown').text(`${minutes + ':' + seconds}`);

            countdown--;
            localStorage.setItem('timer', JSON.stringify(countdown))

            if (countdown <= 0) {
                clearInterval(timer);
                $('#countdown').text(`${minutes + ':' + seconds}`);
                var formData = new FormData();
                    formData.append('savedNumbers', JSON.stringify(savedNumbers.map((s) => ({id: s.id, number: s.number}))));
                    formData.append('_token', "{{ csrf_token() }}");
                    formData.append('lottery_id', lottery_id);
                $.ajax({
                    type: "POST",
                    url: "{{ route('numbers.remove') }}",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        localStorage.removeItem('numerosSeleccionados');
                        localStorage.removeItem('savedNumbers');
                        localStorage.removeItem('lottery_id');
                        localStorage.removeItem('timer');
                        window.location.href = "{{ route('home') }}"
                    },
                    error: function(error) {
                        // Manejar errores
                        console.error(error);
                    }
                })
            }
        }, 1000);
    }

    function redirect() {
        var baseUrl = "{{ url('/payment') }}";
        var id = JSON.parse(localStorage.getItem('lottery_id')) || 0;
        if (id != 0) {
            window.location.href = `${baseUrl}/${id}`;
        }
    }
</script>
