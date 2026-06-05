<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuciTrack — Log New Cycle</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-[#FBFBFA] text-[#1F2937] antialiased min-h-screen py-10">

    <main class="max-w-xl mx-auto px-6">
        <!-- Back Button -->
        <a href="{{ route('dashboard') }}" class="text-sm text-stone-400 hover:text-stone-800 transition block mb-6">
            &larr; Back to Dashboard
        </a>

        <div class="bg-white border border-stone-100 rounded-xl p-8 shadow-sm">
            <h2 class="text-xl font-bold text-stone-800 tracking-tight">Log Period Boundary</h2>
            <p class="text-sm text-stone-400 mt-1 mb-6">Select the timestamp to register your cycle state transitions.</p>

            <form action="{{ route('menstrual_records.store') }}" method="POST" class="space-y-6">
                @csrf
                
                <div>
                    <label for="start_datetime" class="block text-xs font-semibold text-stone-400 uppercase tracking-wider mb-2">
                        Start Date & Time
                    </label>
                    <input type="datetime-local" name="start_datetime" id="start_datetime" required
                           class="w-full px-4 py-3 rounded-xl border border-stone-200 text-stone-700 focus:outline-none focus:border-stone-800 transition">
                </div>

                <button type="submit" class="w-full py-4 rounded-xl text-sm font-medium text-white bg-stone-900 hover:bg-stone-800 transition duration-150 shadow-sm">
                    Save Record Entry
                </button>
            </form>
        </div>
    </main>

</body>
</html>