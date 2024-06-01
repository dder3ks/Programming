<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carwash</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('a.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            transition: background-color 0.3s ease;
        }
        body.dark-mode {
            background-color: #1a1a1a;
            filter: none;
        }
        .sidebar {
            background-color: #333;
            color: #fff;
            height: 200vh;
            padding: 20px;
        }
        .sidebar a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }
        .content {
            padding: 20px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-dark {
            background-color: #343a40;
            border-color: #343a40;
        }
        .btn-dark:hover {
            background-color: #23282e;
            border-color: #23282e;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.1);
            border: none;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            padding: 20px;
            margin-bottom: 20px;
        }
        .card h5 {
            color: skyblue;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .card p {
            color : white;
            opacity: 5.8;
        }
        .promotion {
            background-color: rgba(255, 255, 255, 0.1);
            border: none;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .promotion img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 10px;
        }
        .promotion h5 {
            color: skyblue;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .promotion p {
            color: white;
            opacity: 5.8;
        }
        .point-of-sale {
            background-color: rgba(255, 255, 255, 0.1);
            border: none;
            color: white;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            padding: 20px;
            margin-bottom: 20px;
        }
        .point-of-sale label {
            color: white;
            opacity: 0.8;
            margin-bottom: 5px;
        }
        .point-of-sale input[type="number"] {
            background-color: white;
            border: none;
            border-radius: 5px;
            padding: 5px;
            color: black;
            width: 100%;
        }
        .point-of-sale button {
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar">
                <a href="#" class="btn btn-dark mb-3" id="dark-mode-btn">Modo Oscuro</a>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#promotions">Promociones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#point-of-sale">Punto de Venta</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-10 content">
                <header class="d-flex align-items-center justify-content-center py-5">
                    <div class="text-center">
                        <img src="image.png" alt="Carwash Logo" width="150">
                        <h1 class="display-4 text-white">Carwash</h1>
                        <p class="lead text-white">Teléfono: 81-2291-9598</p>
                        <p class="lead text-white">Sucursal: EIAO - Monterrey 1 <br> Pregunte por Derek Salinas</p>
                    </div>
                </header>
                <section id="services" class="py-5">
                    <h2 class="text-center text-white mb-5">Nuestros Servicios</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <h5 class="card-title">Lavado Básico</h5>
                                <p class="card-text">
                                    En este servicio solamente se lavara el exterior con pulida
                                </p>
                                <button type="button" class="btn btn-primary add-to-cart" data-service="Lavado Básico" data-price="100">Seleccionar</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <h5 class="card-title">Lavado Extremo</h5>
                                <p class="card-text">
                                    En este servicio el lavado sera interior y expeterior, tanto asientos, volante, tapetes, pantalla etc.
                                </p>
                                <button type="button" class="btn btn-primary add-to-cart" data-service="Lavado Ecológico" data-price="200">Seleccionar</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <h5 class="card-title">Lavado a Vapor y Deluxe</h5>
                                <p class="card-text">
                                    En este servicio se lavaran los asientos a vapor e incluso sera profundo el lavado de todo el auto.
                                </p>
                                <button type="button" class="btn btn-primary add-to-cart" data-service="Lavado a Vapor" data-price="300">Seleccionar</button>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="promotions" class="py-5">
                    <h2 class="text-center text-white mb-5">Promociones Activas</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="promotion">
                                <div>
                                    <h5 class="card-title">Promoción del Momento</h5>
                                    <p class="card-text">
                                        Gracias a la confianza, tendremos esta promocion por 1 semana entera, aprovechala!!!
                                    </p>
                                </div>
                                <button type="button" class="btn btn-primary add-to-cart" data-service="Promoción 1" data-price="70">Seleccionar</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="promotion">
                                <div>
                                    <h5 class="card-title">Promoción de Primavera</h5>
                                    <p class="card-text">
                                        Aprovecha que por primavera y las hojas caen te ayudamos con la limpieza, ven!!!
                                    </p>
                                </div>
                                <button type="button" class="btn btn-primary add-to-cart" data-service="Promoción 2" data-price="139">Seleccionar</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                    <div class="promotion">
                                <div>
                                    <h5 class="card-title">Promoción Semana Santa</h5>
                                    <p class="card-text">
                                        Promocion por vacaciones de semana santa ten tu carro reluciente, no te lo pierdas!!!
                                    </p>
                                </div>
                                <button type="button" class="btn btn-primary add-to-cart" data-service="Promoción 3" data-price="110">Seleccionar</button>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="point-of-sale" class="py-5">
                    <h2 class="text-center text-white mb-5">Punto de Venta</h2>
                    <form action="" method="post">
                        <div class="point-of-sale">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Descripción</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Subtotal</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="cart-items">
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="4">Total</td>
                                        <td id="total">0</td>
                                    </tr>
                                </tfoot>
                            </table>
                            <button class="btn btn-dark btn-block">Confirmar Compra</button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#dark-mode-btn").click(function() {
                $("body").toggleClass("dark-mode");
            });
            $(".add-to-cart").click(function() {
                const service = $(this).data("service");
                const price = $(this).data("price");
                const cartItem = `
                    <tr>
                        <td>${service}</td>
                        <td>$${price}</td>
                        <td>
                            <input type="number" class="form-control" value="1" min="1" data-price="${price}" data-service="${service}">
                        </td>
                        <td>$<span class="subtotal">${price}</span></td>
                        <td>
                            <button type="button" class="btn btn-danger remove-item">Eliminar</button>
                        </td>
                    </tr>
                `;
                $("#cart-items").append(cartItem);
                calculateTotal();
                $("input[data-service='" + service + "']").change(function() {
                    const quantity = $(this).val();
                    const subtotal = quantity * price;
                    $(this).closest("tr").find(".subtotal").text(subtotal.toFixed(2));
                    calculateTotal();
                });
                $(".remove-item").click(function() {
                    $(this).closest("tr").remove();
                    calculateTotal();
                });
            });
            function calculateTotal() {
                let total = 0;
                $(".subtotal").each(function() {
                    total += parseFloat($(this).text());
                });
                $("#total").text(total.toFixed(2));
            }
            $(".btn-dark").click(function() {
                const subtotal = parseFloat($("#total").text());
                const iva = subtotal * 0.16; 
                const total = subtotal + iva;
                alert(`El total a pagar es: $${total.toFixed(2)}`);
            });
        });
    </script>
</body>
</html>