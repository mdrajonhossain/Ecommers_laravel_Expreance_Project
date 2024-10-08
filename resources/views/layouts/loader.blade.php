<div id="globalLoader" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex justify-center items-center hidden z-50">
        <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-blue-500"></div>
</div>



<script>
    function showLoader() {
        document.getElementById('globalLoader').classList.remove('hidden');
    }
    function hideLoader() {
        document.getElementById('globalLoader').classList.add('hidden');
    }


    
    function showToast(message) {
    const toast = document.getElementById('globalToast');
    const toastMessage = document.getElementById('toastMessage');
    
    toastMessage.textContent = message;
    toast.classList.remove('hidden');

    setTimeout(() => {
        toast.classList.add('hidden');
    }, 2000);
}
</script>