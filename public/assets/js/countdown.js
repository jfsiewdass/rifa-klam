
var minutes = 10;

var countdown = (localStorage.getItem('timer') != "undefined" ? JSON.parse(localStorage.getItem('timer')) : minutes * 60) || minutes * 60;

let sendDataExecuted = false;

worker.postMessage({ type: 'start', initialCountdown: countdown });
if (savedNumbers.length > 0 && lottery_id !== 0) {
    $('#countdown-body').show();
    worker.onmessage = async (event) => {
        console.log(event.data.timeRemaining);
        
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