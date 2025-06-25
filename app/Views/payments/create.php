<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Payment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 50px;
            max-width: 600px;
        }
        .card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }
        .card-header {
            background-color: #2c3e50;
            color: #ecf0f1;
            text-align: center;
            font-weight: bold;
            padding: 20px;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 8px;
        }
        .btn {
            border-radius: 30px;
            padding: 10px 20px;
        }
        .btn-primary {
            background-color: #3498db;
            border-color: #2980b9;
        }
        .btn-primary:hover {
            background-color: #2980b9;
            border-color: #2471a3;
        }
        .btn-secondary {
            background-color: #95a5a6;
            border-color: #7f8c8d;
        }
        .btn-secondary:hover {
            background-color: #7f8c8d;
            border-color: #707b7c;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2><i class="fas fa-credit-card"></i> Add New Payment</h2>
            </div>
            <div class="card-body">
                <form action="<?= base_url('payments/store') ?>" method="post">
                    <div class="form-group">
                        <label for="booking_id"><i class="fas fa-bookmark"></i> Booking</label>
                        <select class="form-control" id="booking_id" name="booking_id" required>
                            <option value="">Select Booking</option>
                            <?php foreach ($bookings as $booking): ?>
                                <option value="<?= esc($booking['id']); ?>"><?= esc($booking['booking_id']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="amount_paid"><i class="fas fa-peso-sign"></i> (₱) Amount Paid</label>
                        <input type="number" class="form-control" id="amount_paid" name="amount_paid" step="0.01" placeholder="Enter amount" required>
                    </div>
                    <div class="form-group">
                        <label for="payment_date"><i class="fas fa-calendar-check"></i> Payment Date</label>
                        <input type="date" class="form-control" id="payment_date" name="payment_date" required>
                    </div>
                    <div class="form-group">
                        <label for="payment_method"><i class="fas fa-credit-card"></i> Payment Method</label>
                        <input type="text" class="form-control" id="payment_method" name="payment_method" placeholder="Enter payment method" required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save Payment</button>
                        <a href="<?= base_url('payments'); ?>" class="btn btn-secondary"><i class="fas fa-times-circle"></i> Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
