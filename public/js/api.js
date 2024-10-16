
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


 


 
$(document).ready(function () {
// Data for the chart
const chartData = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [{
        label: 'Sales',
        data: [120, 150, 180, 220, 300, 250, 400],
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 2,
        fill: true,
        tension: 0.4 // For a smooth curve
    }]
};

// 

// Configuration for the chart
const chartConfig = {
    type: 'line', // Chart type
    data: chartData,
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: true,
                position: 'top'
            },
            tooltip: {
                enabled: true
            }
        },
        scales: {
            x: {
                title: {
                    display: true,
                    text: 'Months'
                }
            },
            y: {
                title: {
                    display: true,
                    text: 'Sales ($)'
                },
                beginAtZero: true
            }
        }
    }
};

// Initialize the chart
const ctx = $('#salesChart')[0].getContext('2d');
new Chart(ctx, chartConfig);
});



 
    const ctx = document.getElementById('pieChart').getContext('2d');
    const pieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Sales', 'Expenses', 'Profit', 'Loss'],
            datasets: [{
                label: 'Monthly Overview',
                data: [300, 150, 100, 50], // Replace with your actual data
                backgroundColor: [
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(255, 206, 86, 0.6)',
                    'rgba(153, 102, 255, 0.6)'
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Monthly Sales Overview'
                }
            }
        }
    });
 