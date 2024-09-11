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
@php $key = env('APP_NAME'); @endphp

<script>
    const CryptoJS = require('crypto-js');

    const key = '{{ $key }}';
    function encrypt(data, key) {
        const iv = CryptoJS.lib.WordArray.random(16); // Vector de inicialización aleatorio
        const encrypted = CryptoJS.AES.encrypt(data, key, { iv });
        const ciphertext = encrypted.toString();
        return { ciphertext, iv };
    }

    // Función para descifrar datos
    function decrypt(ciphertext, key, iv) {
        const decrypted = CryptoJS.AES.decrypt(ciphertext, key, { iv });
        const originalData = decrypted.toString(CryptoJS.enc.Utf8);
        return originalData;
    }
    function termsAndCondition() {
        $('#termModalFooter').modal('show');
    }
    function closetermsAndCondition() {
        $("#termModalFooter").modal('toggle');
    }
const savedNumbers = JSON.parse(localStorage.getItem('savedNumbers')) || [];
let lottery_id = JSON.parse(localStorage.getItem('lottery_id')) || 0;
const whatsapp = document.querySelector('.whatsapp');
const currentRoute = '{{ \Route::current()->getName() }}';

function adjustWhatsappPosition() {
    
    if (savedNumbers.length > 0 && lottery_id !== 0) {
        console.log(lottery_id, savedNumbers.length);
        if (currentRoute == 'payment') whatsapp.style.bottom = '140px';
        
        if (savedNumbers.length > 0 && lottery_id !== 0 && currentRoute != 'payment') {
            const formData = new FormData();
            formData.append('savedNumbers', JSON.stringify(savedNumbers));
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('lottery_id', lottery_id);

            $.ajax({
                type: "POST",
                url: '{{ route("numbers.remove") }}',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.code != 200) {
                        localStorage.removeItem('numerosSeleccionados');
                        localStorage.removeItem('savedNumbers');
                        localStorage.removeItem('lottery_id');
                        localStorage.removeItem('timer');
                    }
                },
                error: function(error) {
                    localStorage.removeItem('numerosSeleccionados');
                    localStorage.removeItem('savedNumbers');
                    localStorage.removeItem('lottery_id');
                    localStorage.removeItem('timer');
                }
            });
            
            // localStorage.removeItem('numerosSeleccionados');
            // localStorage.removeItem('savedNumbers');
            // localStorage.removeItem('lottery_id');
            // localStorage.removeItem('timer');
        }
    }
}

// Llama a la función al cargar la página y cuando se muestre u oculte el contador
adjustWhatsappPosition();
function sendBeforeUnloadData() {
    if (savedNumbers.length > 0 && lottery_id !== 0) {
        const formData = new FormData();
        formData.append('savedNumbers', JSON.stringify(savedNumbers));
        formData.append('_token', '{{ csrf_token() }}');
        formData.append('lottery_id', lottery_id);

        navigator.sendBeacon('{{ route("numbers.remove") }}', formData);
    }
}

// Agregar el evento antes de que el usuario pueda interactuar con la página
document.addEventListener('DOMContentLoaded', () => {
   window.addEventListener('beforeunload', sendBeforeUnloadData);
});

const worker = new Worker("{{ asset('assets/js/worker.js') }}");

// Enviar el valor inicial del contador al worker
var countdown = (localStorage.getItem('timer') != "undefined" ? JSON.parse(localStorage.getItem('timer')) : 180) || 180;


let sendDataExecuted = false;

worker.postMessage({ type: 'start', initialCountdown: countdown });
if (savedNumbers.length > 0 && lottery_id !== 0) {
    if (currentRoute == 'payment') {
        
        $('#countdown-body').show();
    }
    worker.onmessage = async (event) => {
        
        localStorage.setItem('timer', JSON.stringify(event.data.timeRemaining))
        if (event.data.timeRemaining >= 0) {
            const timeRemaining = event.data.timeRemaining;
            const formattedTime = formatTime(timeRemaining);
            document.getElementById('countdown').textContent = formattedTime;
        } else {
            const compressedData = compressData(savedNumbers, lottery_id);
            if (!sendDataExecuted) {
                try {
                    sendData();
                    worker.postMessage({ type: 'sendData', data: compressedData });
                    sendDataExecuted = true;
                } catch (error) {
                    console.error('Error al enviar datos:', error);
                }
            }
            console.log("Contador finalizado");
        }
    };
} else {
    localStorage.removeItem('numerosSeleccionados');
    localStorage.removeItem('savedNumbers');
    localStorage.removeItem('lottery_id');
    localStorage.removeItem('timer');

    $('#countdown-body').hide();
}
function formatTime(seconds) {
    const minutes = Math.floor(seconds / 60);
    seconds = seconds % 60;
    return `${minutes}:${seconds.toString().padStart(2, '0')}`;
}
const sendData = async () => {
    var formData = new FormData();
    formData.append('savedNumbers', JSON.stringify(savedNumbers.map((s) => ({id: s.id, number: s.number}))));
    formData.append('_token', "{{ csrf_token() }}");
    formData.append('lottery_id', lottery_id);

    await $.ajax({
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
            console.error(error);
        }
    })
}

function compressData(data, lotteryId) {
    return { savedNumbers: JSON.stringify(data.map(s => ({ id: s.id, number: s.number }))), lotteryId };
}

// const savedNumbers = JSON.parse(localStorage.getItem('savedNumbers')) || [];
//     var lottery_id = JSON.parse(localStorage.getItem('lottery_id')) || 0;
    
//     if(savedNumbers.length > 0 && lottery_id != 0) {
//         $('#countdown-body').show();
//         countdown()
//     } else {
//         localStorage.removeItem('numerosSeleccionados');
//         localStorage.removeItem('savedNumbers');
//         localStorage.removeItem('lottery_id');
//         localStorage.removeItem('timer');
//     }
//     function countdown() {
        
//         let isPaymentPage = @json(\Route::current()->getName() == 'payment');
//         if(!isPaymentPage)$('#countdown-redirect').show();
        
        
//         var countdown = JSON.parse(localStorage.getItem('timer')) || 180;
        

//         var timer = setInterval(function() {
//             var lottery_id = JSON.parse(localStorage.getItem('lottery_id')) || 0;
//             if (lottery_id == 0) {
//                 $('#countdown-body').hide();
//                 clearInterval(timer);
//                 localStorage.removeItem('timer');
//             }
//             var minutes = Math.floor(countdown / 60);
//             var seconds = countdown % 60;
//             seconds = seconds < 10 ? '0' + seconds : seconds;

//             $('#countdown').text(`${minutes + ':' + seconds}`);

//             countdown--;
//             localStorage.setItem('timer', JSON.stringify(countdown))

//             if (countdown <= 0) {
//                 clearInterval(timer);
//                 $('#countdown').text(`${minutes + ':' + seconds}`);
//                 var formData = new FormData();
//                     formData.append('savedNumbers', JSON.stringify(savedNumbers.map((s) => ({id: s.id, number: s.number}))));
//                     formData.append('_token', "{{ csrf_token() }}");
//                     formData.append('lottery_id', lottery_id);
//                 $.ajax({
//                     type: "POST",
//                     url: "{{ route('numbers.remove') }}",
//                     data: formData,
//                     contentType: false,
//                     processData: false,
//                     success: function(response) {
//                         localStorage.removeItem('numerosSeleccionados');
//                         localStorage.removeItem('savedNumbers');
//                         localStorage.removeItem('lottery_id');
//                         localStorage.removeItem('timer');
//                         window.location.href = "{{ route('home') }}"
//                     },
//                     error: function(error) {
//                         // Manejar errores
//                         console.error(error);
//                     }
//                 })
//             }
//         }, 1000);
//     }

//     function redirect() {
//         var baseUrl = "{{ url('/payment') }}";
//         var id = JSON.parse(localStorage.getItem('lottery_id')) || 0;
//         if (id != 0) {
//             window.location.href = `${baseUrl}/${id}`;
//         }
//     }
</script>
