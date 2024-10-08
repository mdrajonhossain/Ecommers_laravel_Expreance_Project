@extends('alayout')

@section('title', 'Dashboard')

@section('content')
    <h1>Welcome to the Home Page</h1>
    <p>This is the content of the home page.</p>
    <button onclick="createData()" class="ml-2 text-gray-600 hover:text-gray-900">Added</button>
@endsection




<script>
    async function createData() {
        try {
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
            } else {
                console.error('Failed:', result.message || 'Unknown error');
            }
        } catch (error) {
            console.error('Error:', error);
        }
    }
</script>
