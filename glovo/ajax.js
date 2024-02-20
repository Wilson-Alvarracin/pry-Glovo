// Function to fetch and display restaurant information
function fetchRestaurantInfo() {
    // Get the div with id 'platos'
    var platosDiv = document.getElementById('platos');
    var inputID = document.getElementById('id_restaurante').value;

    // Make an AJAX request to your PHP script
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'mostrar_platos.php?restaurant_id=' + inputID, true);

    // Set up the callback function to handle the response
    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 300) {
            // Parse the JSON response
            var response = JSON.parse(xhr.responseText);

            // Display the restaurant name
            platosDiv.innerHTML = "<h1>" + response.restaurant_name + " Platos</h1>";

            // Display the products
            if (response.products.length > 0) {
                platosDiv.innerHTML += "<ul>";
                response.products.forEach(function (product) {
                    platosDiv.innerHTML += "<li>" + product.plato_descripcion + " - Price: " + product.plato_precio + "</li>";
                });
                platosDiv.innerHTML += "</ul>";
            } else {
                platosDiv.innerHTML += "<p>No products available for this restaurant.</p>";
            }
        } else {
            console.error('Request failed with status ' + xhr.status);
        }
    };

    // Send the request
    xhr.send();
}

// Call the function initially
fetchRestaurantInfo();

// Set up setInterval to fetch and display information every 1 second
setInterval(fetchRestaurantInfo, 1000);