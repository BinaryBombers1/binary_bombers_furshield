document.addEventListener('DOMContentLoaded', function () {
    // Get counts from Laravel variables
    const ownersCount = window.ownersCount || 0;
    const vetsCount = window.vetsCount || 0;
    const sheltersCount = window.sheltersCount || 0;
    const adminsCount = window.adminsCount || 0;

    const counts = [ownersCount, vetsCount, sheltersCount, adminsCount];
    const ctx = document.getElementById('rolesChart').getContext('2d');

    new Chart(ctx, {
        type: 'bar',  // Change from 'pie' to 'bar'
        data: {
            labels: ['Owners', 'Vets', 'Shelters', 'Admins'],
            datasets: [{
                label: 'User Roles',
                data: counts,
                backgroundColor: ['#885525', '#000', '#f1f1f1', '#045454'],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                x: {
                    beginAtZero: true
                },
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});
