<div id="globalToast" class="fixed top-5 right-5 bg-teal-500 text-white px-4 py-2 rounded-lg hidden z-50 flex items-center">
    <p id="toastMessage" class="mr-2"></p>
    <button onclick="hideToast()" class="text-white font-bold">&times;</button>
</div>


<script>


function hideToast(message) {
    const toast = document.getElementById('globalToast');
    const toastMessage = document.getElementById('toastMessage');
    
    toastMessage.textContent = message;
    toast.classList.add('hidden');
    
}
</script>
