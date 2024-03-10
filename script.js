$(document).ready(function() {
    // Load initial data
    fetchData();

    // Handle form submission
    $('#productForm').submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: 'submit.php',
            type: 'POST',
            data: formData,
            success: function() {
                fetchData();
                $('#productForm')[0].reset(); // Clear form
            }
        });
    });

    // Function to fetch data
    function fetchData() {
        $.ajax({
            url: 'data.json',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                displayData(data);
            }
        });
    }

    // Function to display data
    function displayData(data) {
        var table = '<table class="table"><thead><tr><th>Product Name</th><th>Quantity in Stock</th><th>Price per Item</th><th>Datetime submitted</th><th>Total value number</th></tr></thead><tbody>';
        var totalValue = 0;
        data.sort((a, b) => new Date(a.dateTimeSubmitted) - new Date(b.dateTimeSubmitted));
        data.forEach(function(item) {
            var total = item.quantity * item.price;
            totalValue += total;
            table += '<tr><td>' + item.productName + '</td><td>' + item.quantity + '</td><td>' + item.price + '</td><td>' + item.dateTimeSubmitted + '</td><td>' + total + '</td></tr>';
        });
        table += '</tbody></table>';
        $('#dataDisplay').html(table);
        $('#totalValue').text('Total Value: ' + totalValue);
    }
});
