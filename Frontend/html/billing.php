<?php
// Verifica si se pasó un parámetro de plan en la URL
$plan = isset($_GET['plan']) ? $_GET['plan'] : '';

switch ($plan) {
    case 'plus':
        $planTitle = 'Plus Plan';
        $planPrice = '$500/month';
        $planBenefits = [
            'For small projects',
            '2 developers',
            'Unlimited revisions',
            '1 year of free hosting',
            '7-day money-back guarantee'
        ];
        break;
    case 'premium':
        $planTitle = 'Premium Plan';
        $planPrice = '$1000/month';
        $planBenefits = [
            'For medium projects',
            '5 developers',
            'Unlimited revisions',
            '2 years of free hosting',
            '30-day money-back guarantee'
        ];
        break;
    case 'ultra':
        $planTitle = 'Ultra Plan';
        $planPrice = '$6000/month';
        $planBenefits = [
            'For large projects',
            '10 developers',
            'Unlimited revisions',
            'Lifetime free hosting',
            '60-day money-back guarantee'
        ];
        break;
    default:
        header("Location: plans.php");
        exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $paymentSuccess = true;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Pago - <?php echo htmlspecialchars($planTitle); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/cometwds/src/output.css">
</head>
<body class="bg-gray-900 min-h-screen flex flex-col items-center justify-center">
    <div class="w-full max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-6">
        <div class="border-b pb-4 mb-4">
            <h1 class="text-2xl font-bold text-gray-800"><?php echo htmlspecialchars($planTitle); ?></h1>
            <p class="text-gray-600">Precio: <?php echo htmlspecialchars($planPrice); ?></p>
        </div>
        <form method="post" action="/cometwds/db/php/registro_pago_be.php" class="space-y-6">
            <div class="space-y-2">
                <label class="block text-sm font-medium text-gray-700">Método de Pago</label>
                <div class="flex items-center space-x-4">
                    <label class="flex items-center">
                        <input type="radio" name="payment_method" value="cash" checked class="form-radio text-blue-600">
                        <span class="ml-2 text-gray-700">Efectivo</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="payment_method" value="card" class="form-radio text-blue-600">
                        <span class="ml-2 text-gray-700">Tarjeta</span>
                    </label>
                </div>
            </div>

            <div class="space-y-4">
                <div>
                    <label for="card-holder" class="block text-sm font-medium text-gray-700">Nombre del titular</label>
                    <input type="text" id="card-holder" name="nombre" class="w-full p-2 border-b border-black rounded-none">
                </div>
                <div id="cardFields" class="mb-4 hidden">                
                <div class="mb-4">
                    <label for="card-number" class="block text-sm font-medium text-gray-700">Número de tarjeta</label>
                    <input type="text" id="card-number" name="numero_tarjeta" class="w-full p-2 border-b border-black rounded-none">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="expiry-date" class="block text-sm font-medium text-gray-700">Fecha de vencimiento</label>
                        <input type="date" id="expiry-date" name="fecha_vencimiento" placeholder="MM/YY" class="w-full p-2 border-b border-black rounded-none">
                    </div>
                    <div>
                        <label for="cvv" class="block text-sm font-medium text-gray-700">CVV</label>
                        <input type="text" id="cvv" name="cvv" class="w-full p-2 border-b border-black rounded-none">
                    </div>
                </div>
            </div>

            </div>

            <div id="efec">
                <label for="amount" class="block text-sm font-medium text-gray-700">Cantidad a pagar</label>
                <input type="number" id="amount" name="amount" class="w-full p-2  border-b border-black rounded-none">
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700">
                Pagar
            </button>
        </form>
        <div class="mt-6">
            <h2 class="text-lg font-bold text-gray-800 mb-2">Beneficios:</h2>
            <ul class="list-disc pl-6 space-y-1 text-gray-600">
                <?php foreach ($planBenefits as $benefit): ?>
                    <li><?php echo htmlspecialchars($benefit); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cardFields = document.getElementById('cardFields');
            const efec = document.getElementById('efec');

            document.querySelectorAll('input[name="payment_method"]').forEach(input => {
                input.addEventListener('change', () => {
                    cardFields.classList.toggle('hidden', input.value !== 'card');
                    efec.classList.toggle('hidden', input.value == 'card');

                });
            });
        });
    </script>
</body>
</html>
