@extends('alayout')

@section('title', 'Dashboard')

@section('content')
    <h1>Welcome to the Home Page</h1>
    <p>This is the content of the home page.</p>
    <button onclick="createData()" class="ml-2 text-gray-600 hover:text-gray-900">Added</button>
     
    @include('loader')
    @include('toast')    
@endsection



<script>
    function showLoader() {
        document.getElementById('globalLoader').classList.remove('hidden');
    }
    function hideLoader() {
        document.getElementById('globalLoader').classList.add('hidden');
    }
    async function createData() {
        try {
            showLoader();
            const response = await fetch('http://localhost:8000/api/endpoint', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                },                
                body: JSON.stringify({
                    key: 'value',
                }),
            });

            if (!response.ok) {
                throw new Error('Network response was not ok');
            }

            const result = await response.json();
            if (result.status === 'success') {
                console.log(result.status);
                console.log(result.data);
                showToast(result.message);
            } else {
                console.error('Failed:', result.message || 'Unknown error');
                showToast('Failed to add data!');
            }
        } catch (error) {
            console.error('Error:', error);
            showToast('An error occurred!')
        }
        finally {
            hideLoader();
        }
    }



    function showToast(message) {
    const toast = document.getElementById('globalToast');
    const toastMessage = document.getElementById('toastMessage');
    
    toastMessage.textContent = message;
    toast.classList.remove('hidden');

    setTimeout(() => {
        toast.classList.add('hidden');
    }, 10000);
}
</script>
