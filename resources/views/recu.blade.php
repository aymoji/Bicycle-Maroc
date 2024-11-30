
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservation Invoice</title>
    <style>
        @media print {
            @page {
                size: A4;
            }
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .invoice-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .invoice-header h1 {
            color: #ff9b00;
            font-size: 36px;
            margin: 0;
        }

        .invoice-header p {
            font-size: 16px;
            margin: 10px 0 0;
            font-weight: bold;
        }

        .invoice-details {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .invoice-details h2 {
            margin: 0;
            color: #333;
            font-size: 24px;
        }

        .invoice-details ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .invoice-details li {
            margin-bottom: 5px;
            font-size: 16px;
        }

        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .invoice-table th,
        .invoice-table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .invoice-table th {
            background-color: #f9fafb;
            font-size: 16px;
            color: #333;
            font-weight: bold;
        }

        .invoice-table td {
            font-size: 14px;
            color: #555;
        }

        .invoice-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .invoice-footer th,
        .invoice-footer td {
            padding: 10px;
            font-size: 16px;
            color: #333;
        }

        .invoice-footer th {
            font-weight: bold;
        }

        .thank-you {
            text-align: center;
            margin-top: 30px;
            font-size: 20px;
            color: #555;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="invoice-header">
            <h1>Invoice # {{ rand() }}__{{ $reservation->id }}</h1>
            <p>Merci de votre réservation!</p>
        </div>
        <div class="invoice-details">
            <div>
                <h2>Bicycle Maroc</h2>
                <ul>
                    <li>{{ $reservation->user->name }}</li>
                    <li>{{ $reservation->user->email }}</li>
                </ul>
            </div>
        </div>
        <table class="invoice-table">
            <thead>
                <tr>
                    <th>Bike</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Duration</th>
                    <th>Price per Hour</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $reservation->bike->model }}</td>
                    <td>{{ $reservation->start_hour }}</td>
                    <td>{{ $reservation->end_hour }}</td>
                    <td>{{ $reservation->hours }} heures</td>
                    <td>{{ $reservation->price_per_hour }}MAD</td>
                    <td>1{{ $reservation->total_price }} MAD</td>
                </tr>
            </tbody>
        </table>
        <div class="invoice-footer">
            <div>
                <!-- Left blank intentionally -->
            </div>
            <div>
                <table>
                    <tr>
                        <th>Subtotal</th>
                        <td>{{ $reservation->total_price }} MAD</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="thank-you">
            Merci pour votre confiance envers Bicycle Maroc!
        </div>
    </div>
</body>

</html>
