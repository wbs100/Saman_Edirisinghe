<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saman Edirisinghe Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 text-gray-800 font-sans p-4">

<div class="max-w-4xl mx-auto my-10 bg-white rounded-3xl shadow-xl overflow-hidden">
    <!-- Header -->
    <div class="bg-indigo-900 p-8 text-white text-center">
        <img src="2.jpeg" alt="Saman Edirisinghe" class="w-32 h-32 rounded-full mx-auto border-4 border-white shadow-lg object-cover">
        <h1 class="text-3xl font-bold mt-4">Saman Edirisinghe</h1>
        <p class="text-indigo-200 mt-2"><i class="fas fa-phone mr-2"></i> +94 71 434 2223</p>
    </div>

    <!-- About & Contact Section -->
    <div class="p-8 grid md:grid-cols-2 gap-8 border-b">
        <div>
            <h2 class="text-xl font-bold mb-3 text-indigo-900">About Me</h2>
            <p class="text-gray-600 text-sm leading-relaxed">
                Dedicated to serving communities and providing relief to those affected by natural disasters. Passionate about sustainable development and emergency response.
            </p>
        </div>
        <div>
            <h2 class="text-xl font-bold mb-3 text-indigo-900">Contact Details</h2>
            <ul class="text-gray-600 text-sm space-y-2">
                <li><i class="fas fa-envelope mr-2"></i> seedceylon@gmail.com</li>
                <li><i class="fas fa-phone mr-2"></i> 070 595 4445</li>
                <li><i class="fas fa-map-marker-alt mr-2"></i> Head Office, Main Road, Kegalle</li>
            </ul>
        </div>
    </div>

    <!-- Relief Program Content -->
    <div class="p-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Supporting Families in Crisis</h2>
        <p class="text-gray-600 mb-6 leading-relaxed">The Ditwah storm has displaced thousands of families... (etc)</p>

        <!-- Stats -->
        <div class="grid grid-cols-3 gap-4 text-center mb-8">
            <div class="bg-indigo-50 p-4 rounded-xl"><h3 class="text-xl font-bold text-indigo-900">16k+</h3><p class="text-xs">Families</p></div>
            <div class="bg-indigo-50 p-4 rounded-xl"><h3 class="text-xl font-bold text-indigo-900">25</h3><p class="text-xs">Districts</p></div>
            <div class="bg-indigo-50 p-4 rounded-xl"><h3 class="text-xl font-bold text-indigo-900">14k+</h3><p class="text-xs">Packages</p></div>
        </div>

        <!-- Download Button -->
        <button onclick="exportToExcel()" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 rounded-xl transition">
            <i class="fas fa-file-excel mr-2"></i> Download Contact Info (Excel)
        </button>
    </div>
</div>

<script>
    function exportToExcel() {
        const contactData = "Name,Phone,Email,Address\nSaman Edirisinghe,+94 71 434 2223,seedceylon@gmail.com,Head Office Main Road Kegalle";
        const blob = new Blob([contactData], { type: 'text/csv' });
        const url = window.URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.setAttribute('href', url);
        a.setAttribute('download', 'contact_details.csv');
        a.click();
    }
</script>

</body>
</html>
