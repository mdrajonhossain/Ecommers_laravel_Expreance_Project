
// showLoader();

// $(document).ready(function() {
//     hideLoader();
// })


$(document).ready(function () {
    $('#example').DataTable({
        responsive: true
    });
});





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
                "name": 'rajon',
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