<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuciTrack — Period Records</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>


</head>

    </head>
<body class="bg-[#FBFBFA] text-[#1F2937] antialiased min-h-screen">


    <nav class="bg-white border-b border-stone-100 sticky top-0 z-50">
        <div class="max-w-5xl mx-auto px-6 h-16 flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <div class="w-3 h-3 rounded-full bg-rose-400"></div>
                <span class="font-bold text-base tracking-tight text-stone-800">SuciTrack</span>
            </div>
            <div class="flex items-center space-x-6 text-sm font-medium text-stone-500">
                <a href="#" class="text-stone-800 border-b-2 border-stone-800 px-1 py-5">History</a>
           
            <a href="{{ route('dashboard') }}" class="hover:text-stone-800 transition px-1 py-5">Dashboard</a>
                <a href="#" class="hover:text-stone-800 transition px-1 py-5">Qada' List</a>
            </div>
        </div>
    </nav>





<body class="bg-[#FBFBFA] text-[#1F2937] antialiased min-h-screen">

    <!-- The exact interface design from image_a2dd65.png -->
    <main class="max-w-5xl mx-auto px-6 py-10">
        
        <div class="flex items-center justify-between border-b border-stone-100 pb-6 mb-8">
            <div>
                <h1 class="text-2xl font-bold text-stone-900 tracking-tight">Period Records</h1>
                <p class="text-sm text-stone-400 mt-1">Track and manage your history logs and purity cycles.</p>
            </div>
            
            <!-- Clicking this takes you to the logging form -->
            <a href="{{ route('menstrual_records.create') }}" class="inline-flex items-center justify-center px-5 py-2.5 rounded-xl text-sm font-medium text-white bg-stone-900 hover:bg-stone-800 transition duration-150 shadow-sm">
                + Add New Cycle
            </a>
        </div>

        <!-- Success notification if a record is added -->
        @if(session('success'))
            <div class="mb-6 p-4 bg-emerald-50 border border-emerald-100 text-emerald-700 text-sm rounded-xl font-medium">
                ✨ {{ session('success') }}
            </div>
        @endif

        <!-- The actual data display below the beautiful header -->
        <div class="bg-white border border-stone-100 rounded-xl shadow-sm overflow-hidden">
            @if($menstrual_records->isEmpty())
                <div class="p-12 text-center">
                    <p class="text-sm text-stone-400">No menstrual records logged yet. Begin by tracking your first cycle entry.</p>
                </div>
            @else
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-stone-50 border-b border-stone-100 text-xs font-semibold text-stone-400 uppercase tracking-wider">
                                <th class="px-6 py-4">No.</th>
                                <th class="px-6 py-4">Start Date & Time</th>
                                <th class="px-6 py-4">Status Map</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-stone-100 text-sm text-stone-700">
                            @foreach($menstrual_records as $index => $record)
                                <tr class="hover:bg-stone-50/50 transition">
                                    <td class="px-6 py-4 font-medium text-stone-400">{{ $index + 1 }}</td>
                                    <td class="px-6 py-4 font-semibold text-stone-800">
                                        {{ \Carbon\Carbon::parse($record->start_datetime)->format('d M Y — h:i A') }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-rose-50 text-rose-600 border border-rose-100">
                                            Haid Triggered
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </main>

</body>
</html>