<!-- ACE 1.4.6 -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.6/ace.js"></script> -->
<script src="{BASE_URL}themes/assets/ace.js"></script>

<!-- PWA -->
<script>
    var BASE_URL = '<?= base_url() ?>';
    document.addEventListener('DOMContentLoaded', init, false);

    function init() {
        if ('serviceWorker' in navigator && navigator.onLine) {
            navigator.serviceWorker.register( BASE_URL + 'service-worker.js')
            .then((reg) => {
                console.log('Registrasi service worker Berhasil', reg);
            }, (err) => {
                console.error('Registrasi service worker Gagal', err);
            });
        }
    }
</script>