self.addEventListener('message', function(e) {
    let intervalId;

    switch(e.data.type) {
        case 'start':
            let countdown = e.data.initialCountdown;
            intervalId = setInterval(function() {
                countdown--;
                
                if (countdown < 0) {
                    clearInterval(intervalId);
                    self.postMessage({ timeRemaining: -1 });
                    self.postMessage({ type: 'processData' }); // Indicamos que está listo para procesar datos
                    return;
                }

                self.postMessage({ timeRemaining: countdown });
            }, 1000);
            break;

        case 'sendData':
            self.postMessage({ type: 'processData' }); // Indicamos que está listo para procesar datos
            break;
    }
});

// Función para procesar datos
self.onmessage = function(e) {
    if (e.data.type === 'processData') {
        // Aquí procesar los datos recibidos
        const { savedNumbers, lotteryId } = e.data.data;
        // Procesar savedNumbers y lotteryId aquí
        // Luego, eliminar referencias a estos objetos si ya no son necesarios
        self.postMessage({ type: 'dataProcessed' });
    }
};
