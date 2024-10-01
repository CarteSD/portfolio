document.getElementById('copyEmail').addEventListener('click', function() {
    const email = 'edesessard@iutbayonne.univ-pau.fr';

    navigator.clipboard.writeText(email).then(() => {

        const notification = document.getElementById('copyNotification');
        const progressBar = document.getElementById('progressBar');

        notification.style.display = 'block';
        notification.style.opacity = '1';
        progressBar.style.width = '100%';

        let width = 100;
        const duration = 3500;
        const interval = 20;
        const step = width / (duration / interval);

        const progressInterval = setInterval(() => {
            width -= step;
            progressBar.style.width = width + '%';

            if (width <= 0) {

                clearInterval(progressInterval);
                notification.style.opacity = '0';

                setTimeout(() => {
                    notification.style.display = 'none';
                }, 2500);

            }

        }, interval);

    }).catch(err => {
        console.error('Erreur lors de la copie : ', err);
    });
});